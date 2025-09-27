<?php 
@session_start();
$id_empresa = @$_SESSION['empresa'];
$id_usuario = @$_SESSION['id_cliente'];
require_once("../../../conexao.php");
require_once("../../../painel/buscar_config.php");

$tabela = 'temp_texto';
$data_atual = date('Y-m-d');
$data_hoje = date('Y-m-d');



$total_pago = 0;
$total_pendentes = 0;
$total_vencidas = 0;
$total_pendentesF = 0;
$total_vencidasF = 0;
$query = $pdo->query("SELECT * from $tabela where cliente = '$id_usuario' order by id desc");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = @count($res);
if ($linhas > 0) {
	echo <<<HTML
<small><small>
	<table class="table table-striped table-hover table-bordered text-nowrap border-bottom dt-responsive" id="tabela4">
	<thead> 
	<tr> 
	<th class="">Modelo</th>
	<th class="">Data</th>	
	<th class="esc">Hora</th>		
	<th>Contrato</th>				
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

        $query2 = $pdo->query("SELECT * FROM clientes WHERE id = '$cliente'");
        $res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
        $telefone = @$res2[0]['telefone'];
		

		$dataF = implode('/', array_reverse(@explode('-', $data)));
		
		

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

		echo <<<HTML
<tr class="">
<td class="esc" > {$nome_modelo}</td>
<td class=""> {$dataF}</td>
<td class="esc" >{$hora}</td>


<td class="esc" ><a class="btn btn-info btn-sm" href="#" onclick="gerarContrato('{$textoF}', '{$cliente}', '{$cabecalho}', '{$modelo}',)"><i class="fa fa-file-pdf "></i></a>




</td>
</tr>
HTML;
	}
} else {
	echo '<small>Não possui nenhuma conta!</small>';
}


echo <<<HTML
</tbody>
</table>
</small></small>

HTML;
?>


<script type="text/javascript">
	$(document).ready(function() {
		$('#tabela4').DataTable({
			"language": {
				//"url" : '//cdn.datatables.net/plug-ins/1.13.2/i18n/pt-BR.json'
			},
			"ordering": false,
			"stateSave": true
		});
	});


function gerarContrato(texto, cliente, cabecalho, modelo){
	$('#cabecalho_form').val(cabecalho);
	$('#cliente_form').val(cliente);
	$('#modelo_form').val(modelo);
	
	$('#texto_contrato').val(decodeURIComponent(texto));

	$('#botao_form').click();
}




</script>


