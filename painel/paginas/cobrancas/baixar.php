<?php 
@session_start();
$id_empresa = @$_SESSION['empresa'];
$id_usuario = @$_SESSION['id'];
$tabela = 'receber';
require_once("../../../conexao.php");
require_once("../../buscar_config.php");
$data_atual = date('Y-m-d');


$id = $_POST['id'];
$data_baixa = $_POST['data_baixa'];
$forma_pgto = $_POST['forma_pgto'];
$valor_final = $_POST['valor_final'];
$residuo = @$_POST['residuo'];

$valor_baixar = $_POST['valor_baixar'];

$valor_final = str_replace('.', '', $valor_final);
$valor_final = str_replace(',', '.', $valor_final);




$query2 = $pdo->query("SELECT * from receber where id = '$id'");
$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
$hash = @$res2[0]['hash'];
$cliente = @$res2[0]['cliente'];
$referencia = @$res2[0]['referencia'];
$id_ref = @$res2[0]['id_ref'];
$valor = @$res2[0]['valor'];
$parcela = @$res2[0]['parcela'];
$nova_parcela = $parcela + 1;
$recorrencia = @$res2[0]['recorrencia'];
$data_venc = @$res2[0]['vencimento'];
$dias_frequencia = @$res2[0]['frequencia'];
$descricao = @$res2[0]['descricao'];
$parcela_sem_juros = @$res2[0]['parcela_sem_juros'];
$api_pagamento_conta = @$res2[0]['api_pagamento_conta'];
$dispositivo = @$res2[0]['dispositivo'];
$pgtos_aceitaveis = @$res2[0]['pgtos_aceitaveis'];
$taxa_cartao_api_receber = @$res2[0]['taxa_cartao_api_receber'];
$arquivo = @$res2[0]['arquivo'];

$parcela_seguinte = $parcela + 1;

$valor_residuo = 0;
if($residuo == "Sim"){
	$valor_residuo = $valor_baixar - $valor_final;
	

	
		$query2 = $pdo->query("SELECT * from cobrancas where id = '$id_ref'");
		$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
		$valor_parcela = @$res2[0]['valor_parcela'];
	
	
	$valor = $valor_parcela + $valor_residuo;

}


//dados do cliente
$query = $pdo->query("SELECT * from clientes where id = '$cliente'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$nome_cliente = $res[0]['nome'];
$tel_cliente = $res[0]['telefone'];
$tel_cliente = '55'.preg_replace('/[ ()-]+/' , '' , $tel_cliente);
$telefone_envio = $tel_cliente;


$pdo->query("UPDATE $tabela SET data_pgto = '$data_baixa', pago = 'Sim', forma_pgto = '$forma_pgto', valor = '$valor_final', subtotal = '$valor_final', usuario_pgto = '$id_usuario', hora = curTime() WHERE id = '$id' ");

if($recorrencia == 'Sim'){


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

	//criar outra conta a receber na mesma data de vencimento com a frequência associada
	$pdo->query("INSERT INTO receber SET cliente = '$cliente', referencia = '$referencia', id_ref = '$id_ref', valor = '$valor', parcela = '$nova_parcela', usuario_lanc = '$id_usuario', data_lanc = curDate(), vencimento = '$novo_vencimento', pago = 'Não', descricao = '$descricao', frequencia = '$dias_frequencia', recorrencia = 'Sim', parcela_sem_juros = '$parcela_sem_juros', hora_alerta = '$hora_random', empresa = '$id_empresa', api_pagamento_conta = '$api_pagamento_conta', dispositivo = '$dispositivo', pgtos_aceitaveis = '$pgtos_aceitaveis', taxa_cartao_api_receber = '$taxa_cartao_api_receber', arquivo = '$arquivo' ");
	$ult_id_conta = $pdo->lastInsertId();


}else{
	//quando nao tiver recorrencia verificar se há uma nova parcela desse emprestimo / recorrencia para poder somar o valor que ficou do residuo nela
	$query2 = $pdo->query("SELECT * from receber where referencia = '$referencia' and id_ref = '$id_ref' and pago != 'Sim' and parcela = '$parcela_seguinte' ");
	$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
	if(@count($res2) > 0 and $residuo == "Sim"){
		$id_conta = @$res2[0]['id'];
		$pdo->query("UPDATE receber SET valor = '$valor' WHERE id = '$id_conta' ");
	}

}

echo 'Salvo com Sucesso*'.$id;
?>