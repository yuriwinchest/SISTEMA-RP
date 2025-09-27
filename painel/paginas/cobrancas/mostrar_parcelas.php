<?php 
@session_start();
$editar_contas = '';
$editar_conta_paga = '';
$id_empresa = @$_SESSION['empresa'];
$mostrar_registros = @$_SESSION['registros'];
$id_usuario = @$_SESSION['id'];
$tabela = 'cobrancas';
require_once("../../../conexao.php");
require_once("../../buscar_config.php");
if(@$_SESSION['nivel'] != 'Administrador'){
	require_once("../../verificar_permissoes.php");
}

$pagina = 'receber';
$id = $_POST['id_emp'];
$mostrar = @$_POST['mostrar'];

if($mostrar == 'cobranca'){
	$sql_mostrar = 'Cobrança';
	$sql_consulta = 'cobrancas';
}

$tipo_juros = '';
$data_atual = date('Y-m-d');

$query = $pdo->query("SELECT * FROM $sql_consulta where id = '$id'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$multa = $res[0]['multa'];
$juros = $res[0]['juros'];
$cliente = $res[0]['cliente'];
if($sql_consulta == 'emprestimos'){
	$tipo_juros = $res[0]['tipo_juros'];
}

$query = $pdo->query("SELECT * FROM clientes where id = '$cliente'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$telefone = $res[0]['telefone'];

echo <<<HTML
<small>
HTML;
$query = $pdo->query("SELECT * FROM $pagina where referencia = '$sql_mostrar' and id_ref = '$id'  order by id asc");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0){
echo <<<HTML
	<table class="table table-bordered text-nowrap border-bottom dt-responsive" id="">
		<thead> 
			<tr> 				
				<th>Parcela</th>
				<th>Valor</th>				
				<th>Vencimento</th>				
				<th>Data PGTO</th>				
				<th>Baixar</th>
			</tr> 
		</thead> 
		<tbody> 
HTML;
for($i=0; $i < $total_reg; $i++){
	foreach ($res[$i] as $key => $value){}
$id_par = $res[$i]['id'];
$valor = $res[$i]['valor'];
$parcela = $res[$i]['parcela'];
$data_venc = $res[$i]['vencimento'];
$data_pgto = $res[$i]['data_pgto'];
$pago = $res[$i]['pago'];
$ref_pix = $res[$i]['ref_pix'];
$dias_frequencia = $res[$i]['frequencia'];
$referencia = $res[$i]['referencia'];
$id_ref = $res[$i]['id_ref'];
$nova_parcela = $parcela + 1;
$descricao = $res[$i]['descricao'];
$recorrencia = $res[$i]['recorrencia'];
$cliente = $res[$i]['cliente'];

//dados do cliente
$query2 = $pdo->query("SELECT * from clientes where id = '$cliente'");
$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
$nome_cliente = $res2[0]['nome'];
$tel_cliente = $res2[0]['telefone'];
$tel_cliente = '55'.preg_replace('/[ ()-]+/' , '' , $tel_cliente);
$telefone_envio = $tel_cliente;


$data_vencF = implode('/', array_reverse(@explode('-', $data_venc)));
$data_pgtoF = implode('/', array_reverse(@explode('-', $data_pgto)));
$valorF = number_format($valor, 2, ',', '.');


$valor_final = $valor;
if($data_pgtoF == '00/00/0000' || $data_pgtoF == ''){
	$data_pgtoF = 'Pendente';
	$classe_pago = 'text-danger';
	$ocultar_baixar = '';
	$ocultar_pendentes = 'ocultar';
}else{
	$classe_pago = 'text-success';
	$ocultar_baixar = 'ocultar';
	$ocultar_pendentes = '';
}

$valor_multa = 0;
$valor_juros = 0;
$dias_vencido = 0;
$classe_venc = '';
if(@strtotime($data_venc) < @strtotime($data_atual) and $pago != 'Sim'){
$classe_venc = 'text-danger';
$valor_multa = $multa;

//calcular quanto dias está atrasado

$data_inicio = new DateTime($data_venc);
$data_fim = new DateTime($data_atual);
$dateInterval = $data_inicio->diff($data_fim);
$dias_vencido = $dateInterval->days;

$valor_juros = $dias_vencido * ($juros * $valor / 100);

$valor_final = $valor_juros + $valor_multa + $valor;

}

$valor_finalF = @number_format($valor_final, 2, ',', '.');

if($parcela == 0){
	$parcela = 'Quitado';
}

$read_only = '';
if($editar_contas != ""){
	$read_only = 'readonly';
}


//verificar se já existe uma conta exatamente igual essa no banco de dados para não criar uma nova


if($recorrencia == 'Sim' and $tipo_juros == 'Somente Júros' and @strtotime($data_venc) < @strtotime($data_atual) and $pago != 'Sim' ){


	if($dias_frequencia == 30 || $dias_frequencia == 31){			
			$novo_vencimento = date('Y-m-d', @strtotime("+1 month",@strtotime($data_venc)));
		}else if($dias_frequencia == 90){			
			$novo_vencimento = date('Y-m-d', @strtotime("+3 month",@strtotime($data_venc)));
		}else if($dias_frequencia == 180){ 
			$novo_vencimento = date('Y-m-d', @strtotime("6 month",@strtotime($data_venc)));
		}else if($dias_frequencia == 360 || $dias_frequencia == 365){ 			
			$novo_vencimento = date('Y-m-d', @strtotime("+12 month",@strtotime($data_venc)));

		}else{			
			$novo_vencimento = date('Y-m-d', @strtotime("+$dias_frequencia days",@strtotime($data_venc)));
		}




		//verificação de feriados
	//require("../../verificar_feriados.php");

	//verificar se a parcela já está criada
	$query2 = $pdo->query("SELECT * from receber where (referencia = 'Cobrança') and id_ref = '$id_ref' and vencimento = '$novo_vencimento'");
	$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
	$ja_criada = @count($res2);

	
	if($ja_criada == 0){
	//criar outra conta a receber na mesma data de vencimento com a frequência associada
	$pdo->query("INSERT INTO receber SET cliente = '$cliente', referencia = 'Cobrança', id_ref = '$id_ref', valor = '$valor', parcela = '$nova_parcela', usuario_lanc = '$id_usuario', data = curDate(), vencimento = '$novo_vencimento', pago = 'Não', descricao = '$descricao', frequencia = '$dias_frequencia', recorrencia = 'Sim', hora_alerta = '$hora_random', empresa = '$id_empresa' ");
	$ult_id_conta = $pdo->lastInsertId();	

$pdo->query("UPDATE receber SET recorrencia = '' where id = '$id_par'");

}

}

echo <<<HTML
			<tr>					
				<td class="">{$parcela}</td>
				<td class="{$classe_pago}">R$ <input $read_only type="text" name="valor" id="valor_{$id_par}" value="{$valorF}" style="width:55px; background: transparent; border:none; outline: none; border-bottom:1px solid #000;" oninput="mascaraMoeda(this)" onblur="editar_contas('{$id_par}')"></td>				
				<td class="{$classe_venc}"><input $read_only type="date" name="data_venc" id="data_venc_{$id_par}" value="{$data_venc}" style="width:125px; background: transparent; border:none; outline: none; border-bottom:1px solid #000; height:21px" onchange="editar_contas('{$id_par}')"></td>
				<td class="">{$data_pgtoF}</td>
				
				<td>	

				
				
					<a class="{$ocultar_baixar} btn btn-success btn-sm" href="#" onclick="baixarParcela('{$id_par}', '{$valor}', '{$valor_multa}', '{$valor_juros}')" title="Dar Baixa"><i class="fa fa-check-square "></i></a>
				

						<span class="{$ocultar_pendentes} btn btn-dark-light btn-sm">
				<form   method="POST" action="rel/recibo_conta_class.php" target="_blank" style="display:inline-block">
					<input type="hidden" name="id" value="{$id_par}">
					<button class="{$ocultar_pendentes}" title="PDF do Recibo Conta" style="background:transparent; border:none; margin:0; padding:0"><i class="fa fa-file-pdf-o"></i></button>
					</form>
			</span>


			<span class="{$ocultar_pendentes} btn btn-secondary-light btn-sm">
					<form   method="POST" action="rel/imp_recibo.php" target="_blank" style="display:inline-block">
					<input type="hidden" name="id" value="{$id_par}">
					<button class="{$ocultar_pendentes}" title="Imprimir Recibo 80mmm" style="background:transparent; border:none; margin:0; padding:0"><i class="fa fa-print"></i></button>
					</form>
	</span>



		<a class="{$ocultar_baixar}  btn-success-light btn-sm" href="#" onclick="cobrar('{$id_par}')" title="Gerar Cobrança"><i class="bi bi-whatsapp"></i></a>



				</td>  
			</tr> 
HTML;
}
echo <<<HTML
		</tbody> 
	</table>
</small>
HTML;
}else{
	echo 'Nenhum registro cadastrado!';
}

?>


<script type="text/javascript">

	function baixarParcela(id_par, valor, multa, juros){	 
	$('#id_baixar').val(id_par);	
	$('#valor_baixar').val(valor);
	$('#multa_baixar').val(multa);
	$('#juros_baixar').val(juros);

	calcular();
    $('#modalBaixar').modal('show');
}

function cobrar(){

	
}


function editar_contas(id){
	var valor = $('#valor_'+id).val();
	var data = $('#data_venc_'+id).val();
	
	var id_cob = $('#id_cobranca').val();

	 $.ajax({
	        url: 'paginas/cobrancas/editar_valores.php',
	        method: 'POST',
	        data: {id, valor, data},
	        dataType: "html",

	        success:function(result){      	
	           

                if(id_cob != ""){
                	 mostrarParcelas(id_cob);
                }

                alertsucesso(result)
	           
	        }
	    });
}

</script>



<script type="text/javascript">
	function calcular(){			
	var valor = $('#valor_baixar').val();
	var multa = $('#multa_baixar').val();
	var juros = $('#juros_baixar').val();
	var forma_pgto = $('#forma_pgto').val();	

	 $.ajax({
	        url: 'paginas/cobrancas/calcular.php',
	        method: 'POST',
	        data: {valor, multa, juros, forma_pgto},
	        dataType: "html",

	        success:function(result){
	             $('#valor_final').val(result);
	        }
	    });

	

	}







	function cobrar(id) {
		$.ajax({
			url: 'paginas/receber/cobrar.php',
			method: 'POST',
			data: {
				id
			},
			dataType: "html",

			success: function (result) {
				alertCobrar(result);
				
			}
		});
	}
</script>
