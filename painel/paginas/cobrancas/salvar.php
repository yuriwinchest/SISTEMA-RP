<?php 
@session_start();
$id_empresa = @$_SESSION['empresa'];
$mostrar_registros = @$_SESSION['registros'];
$id_usuario = @$_SESSION['id'];
$tabela = 'cobrancas';
require_once("../../../conexao.php");
require_once("../../buscar_config.php");

$data_atual = date('Y-m-d');

$descricao = $_POST['descricao'];
$cliente = $_POST['cliente'];
$valor = $_POST['valor'];
$valor = str_replace('.', '', $valor);
$valor = str_replace(',', '.', $valor);
$parcelas = $_POST['parcelas'];
$obs = $_POST['obs'];
$data_venc = $_POST['data_venc'];
$id = $_POST['id'];
$dias_frequencia = $_POST['frequencia'];
$data = $_POST['data'];
$enviar_whatsapp = $_POST['enviar_whatsapp'];
$dispositivo = $_POST['dispositivo'];
$api_pagamento_conta = @$_POST['api_pagamento_conta'];
$pgtos_aceitaveis = @$_POST['pgtos_aceitaveis'];

$taxa_cartao_api_receber = $_POST['taxa_cartao_api_receber'];

$taxa_cartao_api_receber = str_replace(',', '.', $taxa_cartao_api_receber);
$taxa_cartao_api_receber = str_replace('%', '', $taxa_cartao_api_receber);

$juros = $_POST['juros'];
$multa = $_POST['multa'];
$multa = str_replace('.', '', $multa);
$multa = str_replace(',', '.', $multa);
$juros = str_replace('.', '', $juros);
$juros = str_replace(',', '.', $juros);

$query = $pdo->query("SELECT * from frequencias where dias = '$dias_frequencia'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$frequencia = $res[0]['frequencia'];

if($parcelas == "" || $parcelas == "0"){
	$parcelas = 1;
}

$valor_parcela = $valor / $parcelas;


$query = $pdo->prepare("INSERT INTO $tabela SET cliente = '$cliente', valor = :valor, parcelas = :parcelas, data = curDate(), usuario = '$id_usuario', obs = :obs, data_venc = :data_venc, frequencia = '$frequencia', valor_parcela = '$valor', juros = :juros, multa = :multa, descricao = :descricao, empresa = '$id_empresa', api_pagamento_conta = '$api_pagamento_conta', pgtos_aceitaveis = '$pgtos_aceitaveis' ");

$query->bindValue(":valor", "$valor");
$query->bindValue(":parcelas", "$parcelas");
$query->bindValue(":obs", "$obs");
$query->bindValue(":data_venc", "$data_venc");
$query->bindValue(":juros", "$juros");
$query->bindValue(":multa", "$multa");
$query->bindValue(":descricao", "$descricao");
$query->execute();
$ult_id = $pdo->lastInsertId();


//dados do cliente
$query = $pdo->query("SELECT * from clientes where id = '$cliente'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$nome_cliente = $res[0]['nome'];
$tel_cliente = $res[0]['telefone'];
$telefone_envio = '55'.preg_replace('/[ ()-]+/' , '' , $tel_cliente);



$valor_total_juros = 0;
$valor_parcelas_soma = 0;
//lançar as contas a receber (parcelas do pagamento)
for($i=1; $i <= $parcelas; $i++){
$descricao_receber = $descricao.' ('.$i.')';


	$dias_parcela = $i - 1;
	$dias_parcela_2 = ($i - 1) * $dias_frequencia;

	if($i == 1){
		$novo_vencimento = $data_venc;
		if($dias_frequencia == 1){
			$novo_vencimento = date('Y-m-d', strtotime("+1 days",strtotime($data_venc)));
		}
	}else{


		if($dias_frequencia == 30 || $dias_frequencia == 31){
			
			$novo_vencimento = date('Y-m-d', strtotime("+$dias_parcela month",strtotime($data_venc)));

		}else if($dias_frequencia == 90){ 
			$dias_parcela = $dias_parcela * 3;
			$novo_vencimento = date('Y-m-d', strtotime("+$dias_parcela month",strtotime($data_venc)));

		}else if($dias_frequencia == 180){ 

			$dias_parcela = $dias_parcela * 6;
			$novo_vencimento = date('Y-m-d', strtotime("+$dias_parcela month",strtotime($data_venc)));

		}else if($dias_frequencia == 360 || $dias_frequencia == 365){ 

			$dias_parcela = $dias_parcela * 12;
			$novo_vencimento = date('Y-m-d', strtotime("+$dias_parcela month",strtotime($data_venc)));

		}else if($dias_frequencia == 15){ 
			
			$novo_vencimento = date('Y-m-d', strtotime("+15 days",strtotime($novo_vencimento)));

		}else if($dias_frequencia == 7){ 
			
			$novo_vencimento = date('Y-m-d', strtotime("+7 days",strtotime($novo_vencimento)));

		}else{
			
			$novo_vencimento = date('Y-m-d', strtotime("+1 days",strtotime($novo_vencimento)));
		}

	}


	//verificação de feriados
	//require("../../verificar_feriados.php");


if($parcelas > 1){
	$recorrencia = 'Não';
	$texto_cobranca = 'Frequência Parcelas ';
}else{
	$recorrencia = 'Sim';
	$texto_cobranca = 'Recorrência ';
}

$pdo->query("INSERT INTO receber SET cliente = '$cliente', referencia = 'Cobrança', id_ref = '$ult_id', valor = '$valor', parcela = '$i', usuario_lanc = '$id_usuario', data_lanc = '$data', vencimento = '$novo_vencimento', pago = 'Não', descricao = '$descricao_receber', frequencia = '$dias_frequencia', recorrencia = '$recorrencia', hora_alerta = '$hora_random', empresa = '$id_empresa', arquivo = 'sem-foto.png', dispositivo = '$dispositivo', api_pagamento_conta = '$api_pagamento_conta', pgtos_aceitaveis = '$pgtos_aceitaveis', taxa_cartao_api_receber = '$taxa_cartao_api_receber' ");
$ult_id_conta = $pdo->lastInsertId();




}

echo 'Salvo com Sucesso';


if($api_whatsapp != 'Não' and $tel_cliente != '' and $enviar_whatsapp != 'Não'){
//enviar mensagem para o cliente

$data_vencF = date('d', strtotime($data_venc));
$dataF = implode('/', array_reverse(explode('-', $data_atual)));
$valorF = number_format($valor, 2, ',', '.');
$valor_total_jurosF = number_format($valor_total_juros, 2, ',', '.');

$mensagem =  '💰_'.$nome_sistema.'_ %0A';
$mensagem =  '_*Nova Cobrança*_ %0A';
$mensagem .= 'Descrição: *'.$descricao.'* %0A';
$mensagem .= '😀Cliente: *'.$nome_cliente.'* %0A';
$mensagem .= '💲Valor: *'.$valorF.'* %0A';
$mensagem .= 'Data Cobrança: *'.$dataF.'* %0A';
$mensagem .= 'Dia Pgto Cobranças: *Dia '.$data_vencF.'* %0A';
$mensagem .= $texto_cobranca.': *'.$frequencia.'* %0A%0A';

if($parcelas > 1){
$mensagem .= '*Parcelas* %0A';

$query = $pdo->query("SELECT * FROM receber where referencia = 'Cobrança' and id_ref = '$ult_id'  order by id asc");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0){
	for($i=0; $i < $total_reg; $i++){
		$valor = $res[$i]['valor'];
		$parcela = $res[$i]['parcela'];
		$data_venc = $res[$i]['data_venc'];

		$data_vencF = implode('/', array_reverse(explode('-', $data_venc)));
		$valorF = number_format($valor, 2, ',', '.');

		$mensagem .= '💲('.$parcela.') R$: *'.$valorF.'* Venc: '.$data_vencF.'%0A';
	}
}

}


require('../../apis/texto.php');

}

 ?>