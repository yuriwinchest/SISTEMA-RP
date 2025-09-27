<?php
@session_start();
$id_empresa = @$_SESSION['empresa'];
require_once("../../../conexao.php");
require_once("../../buscar_config.php");

$tabela = 'temp_texto';

$data_atual = date('Y-m-d');

$filtro = @$_POST['p1'];
$dataInicial = @$_POST['p2'];
$dataFinal = @$_POST['p3'];

$data_hoje = date('Y-m-d');
$data_atual = date('Y-m-d');
$mes_atual = Date('m');
$ano_atual = Date('Y');
$data_inicio_mes = $ano_atual . "-" . $mes_atual . "-01";
$data_inicio_ano = $ano_atual . "-01-01";

$data_ontem = date('Y-m-d', @strtotime("-1 days", @strtotime($data_atual)));
$data_amanha = date('Y-m-d', @strtotime("+1 days", @strtotime($data_atual)));


if ($mes_atual == '04' || $mes_atual == '06' || $mes_atual == '07' || $mes_atual == '09') {
	$data_final_mes = $ano_atual . '-' . $mes_atual . '-30';
} else if ($mes_atual == '02') {
	$bissexto = date('L', @mktime(0, 0, 0, 1, 1, $ano_atual));
	if ($bissexto == 1) {
		$data_final_mes = $ano_atual . '-' . $mes_atual . '-29';
	} else {
		$data_final_mes = $ano_atual . '-' . $mes_atual . '-28';
	}
} else {
	$data_final_mes = $ano_atual . '-' . $mes_atual . '-31';
}


if ($dataInicial == "") {
	$dataInicial = $data_inicio_mes;
}

if ($dataFinal == "") {
	$dataFinal = $data_final_mes;
}

if($filtro == ""){
	$query = $pdo->query("SELECT * from $tabela where empresa = '$id_empresa' and data >= '$dataInicial' and data <= '$dataFinal' order by id desc");
}

if($filtro == "todos"){
	$query = $pdo->query("SELECT * from $tabela where empresa = '$id_empresa' order by id desc");
}

if($filtro == "assinados"){
	$query = $pdo->query("SELECT * from $tabela where empresa = '$id_empresa' and assinatura != '' order by id desc");
}

if($filtro == "aguardando"){
	$query = $pdo->query("SELECT * from $tabela where empresa = '$id_empresa' and (assinatura = '' or assinatura is null) order by id desc");
}


if($filtro == "vencidos"){
	$query = $pdo->query("
  SELECT $tabela.* 
  FROM $tabela 
  INNER JOIN receber ON $tabela.conta = receber.id 
  WHERE $tabela.empresa = '$id_empresa' 
    AND receber.data_assinatura < CURDATE()
    AND ($tabela.assinatura IS NULL OR $tabela.assinatura = '')
  ORDER BY $tabela.id DESC
");
}

$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = @count($res);
if ($linhas > 0) {
	echo <<<HTML
<small>
	<table class="table table-hover table-bordered text-nowrap border-bottom dt-responsive" id="tabela">
	<thead> 
	<tr> 
	
	<th class="">Cliente</th>
	<th class="">Modelo</th>
	<th class="">Assinado</th>
	<th class="">Acessado</th>	
	<th class="">Vencimento</th>	
	<th>Ações</th>
	</tr> 
	</thead> 
	<tbody>	
HTML;


	for ($i = 0; $i < $linhas; $i++) {
		$id = $res[$i]['id'];
		$empresa = $res[$i]['empresa'];
		$ip = $res[$i]['ip'];
		$data = $res[$i]['data'];
		$texto = $res[$i]['texto'];
		$cabecalho = $res[$i]['cabecalho'];
		$hora = $res[$i]['hora'];
		$modelo = $res[$i]['modelo'];
		$cliente = $res[$i]['cliente'];
		$assinatura = $res[$i]['assinatura'];
		$conta = $res[$i]['conta'];

		$assinado = 'Não';
		if($assinatura != ""){
			$assinado = 'Sim';
		}

        $query2 = $pdo->query("SELECT * FROM clientes WHERE id = '$cliente'");
        $res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
        $telefone = @$res2[0]['telefone'];
        $nome_cliente = @$res2[0]['nome'];

        $query2 = $pdo->query("SELECT * FROM receber WHERE id = '$conta'");
        $res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
        $data_assinatura = @$res2[0]['data_assinatura'];
		

		$dataF = implode('/', array_reverse(@explode('-', $data)));
		$data_assinaturaF = implode('/', array_reverse(@explode('-', $data_assinatura)));
		
		

		$query2 = $pdo->query("SELECT * FROM contratos where id = '$modelo'");
		$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
		if (@count($res2) > 0) {
			$nome_modelo = $res2[0]['modelo'];
		} else {
			$nome_modelo = '';
		}


		$textoF = rawurlencode($texto);

        $chave_secreta = "sua_chave_secreta";
        $hash_sec = md5($id . $chave_secreta);
        $token_sec = base64_encode($id . "|" . $hash_sec); 

        $link_assinatura = $url_sistema.'contrato/'.$token_sec;

        if($assinado == "Sim"){
        	$classe_assinado = 'text-success';
        }else{
        	$classe_assinado = 'text-danger';
        }

        $classe_vencida = '';
        if(strtotime($data_assinatura) < strtotime($data_atual) and $assinatura == ""){
        	$classe_vencida = 'text-danger';
        }


		echo <<<HTML
<tr>

<td>{$nome_cliente}</td>
<td class="esc" > {$nome_modelo}</td>
<td class="esc {$classe_assinado}" > {$assinado}</td>
<td class=""> {$dataF} {$hora}</td>
<td class="{$classe_vencida}"> {$data_assinaturaF}</td>
<td class="esc" ><a class="btn btn-info btn-sm" href="#" onclick="gerarContrato('{$textoF}', '{$cliente}', '{$cabecalho}', '{$modelo}',)"><i class="fa fa-file-pdf "></i></a>


<a class="btn btn-danger-light btn-sm" href="#" onclick="excluir('{$id}')" title="Excluir Contrato"><i class="fa fa-trash-can"></i></a>


<a class="btn btn-success-light btn-sm" href="#" onclick="solicitarAssinatura('{$link_assinatura}', '{$nome_modelo}', '{$telefone}')" title="Solicitar Assinatura"><i class="bi bi-whatsapp "></i></a>


</tr>
HTML;
	}


	echo <<<HTML
</tbody>
<small><div align="center" id="mensagem-excluir"></div></small>
</table>
</small>
HTML;
} else {
	echo '<small>Nenhum Registro Encontrado!</small>';
}

?>



<script type="text/javascript">
	$(document).ready(function() {
		$('#tabela').DataTable({
			"language": {
				//"url" : '//cdn.datatables.net/plug-ins/1.13.2/i18n/pt-BR.json'
			},
			"ordering": false,
			"stateSave": true
		});
	});
</script>

<script type="text/javascript">
	function gerarContrato(texto, cliente, cabecalho, modelo){
	$('#cabecalho_form').val(cabecalho);
	$('#cliente_form').val(cliente);
	$('#modelo_form').val(modelo);
	
	$('#texto_contrato').val(decodeURIComponent(texto));

	$('#botao_form').click();
}



function solicitarAssinatura(link, modelo, telefone){
            $.ajax({
                url: 'rel/disparo_assinatura.php',
                method: 'POST',
                data: {
                    link, modelo, telefone
                },
                dataType: "html",

                success: function(result) {
                    alertsucesso(result)
                }
            });
        }

</script>