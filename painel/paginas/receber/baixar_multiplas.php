<?php
@session_start();
$id_empresa = @$_SESSION['empresa'];
$tabela = 'receber';
require_once("../../../conexao.php");
require_once("../../buscar_config.php");

$id_usuario = $_SESSION['id'];

$hora = date('H');

########## SAUDAÇÃO #############
if ($hora < 12 && $hora >= 6)
	$saudacao = "Bom Dia";

if ($hora >= 12 && $hora < 18)
	$saudacao = "Boa Tarde";

if ($hora >= 18 && $hora <= 23)
	$saudacao = "Boa Noite";
if ($hora < 6 && $hora >= 0)
	$saudacao = "Boa madrugada";



$id = $_POST['novo_id'];

$query = $pdo->query("SELECT * FROM $tabela where id = '$id'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);

$descricao = $res[0]['descricao'];
$cliente = $res[0]['cliente'];
$valor = $res[0]['valor'];
$data_lanc = $res[0]['data_lanc'];
$data_venc = $res[0]['vencimento'];
$data_pgto = $res[0]['data_pgto'];
$usuario_lanc = $res[0]['usuario_lanc'];
$usuario_pgto = $res[0]['usuario_pgto'];
$frequencia = $res[0]['frequencia'];
$forma_pgto = $res[0]['forma_pgto'];
$arquivo = $res[0]['arquivo'];
$pago = $res[0]['pago'];
$referencia = $res[0]['referencia'];
$hash = $res[0]['hash'];
$vencimento = $res[0]['vencimento'];
$quant_recorrencia = @$res[0]['quant_recorrencia'];
$obs = @$res[0]['obs'];



$query2 = $pdo->query("SELECT * FROM clientes where id = '$cliente'");
$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
if (@count($res2) > 0) {
	$nome_cliente = $res2[0]['nome'];
	$telefone_cliente = $res2[0]['telefone'];
} else {
	$nome_cliente = 'Sem Registro';
	$telefone_cliente = "";
}


$data_venc = $vencimento;

################# CRIAR A PRÓXIMA CONTA A RECEBER CASO TENHA SIDO PAGA #################
$dias_frequencia = $frequencia;

if ($dias_frequencia == 30 || $dias_frequencia == 31) {
	$nova_data_vencimento = date('Y/m/d', strtotime("+1 month", strtotime($data_venc)));

} else if ($dias_frequencia == 90) {
	$nova_data_vencimento = date('Y/m/d', strtotime("+3 month", strtotime($data_venc)));

} else if ($dias_frequencia == 180) {
	$nova_data_vencimento = date('Y/m/d', strtotime("+6 month", strtotime($data_venc)));

} else if ($dias_frequencia == 360 || $dias_frequencia == 365) {
	$nova_data_vencimento = date('Y/m/d', strtotime("+1 year", strtotime($data_venc)));

} else {
	$nova_data_vencimento = date('Y/m/d', strtotime("+$dias_frequencia days", strtotime($data_venc)));
}

################# CRIAR A PRÓXIMA CONTA A RECEBER CASO TENHA SIDO PAGA #################
if (@$dias_frequencia > 0 and ($quant_recorrencia == '' || $quant_recorrencia == '0')) {



	$pdo->query("INSERT INTO $tabela set descricao = '$descricao', cliente = '$cliente', valor = '$valor', data_lanc = curDate(), vencimento = '$nova_data_vencimento', frequencia = '$frequencia', forma_pgto = '$forma_pgto', arquivo = 'sem-foto.png', pago = 'Não', referencia = 'Conta', usuario_lanc = '$id_usuario', hora = curTime(), obs = '$obs', quant_recorrencia = '$quant_recorrencia', empresa = '$id_empresa', hora_alerta = '$hora_random'");
	$id_ult_registro = $pdo->lastInsertId();





}



$pdo->query("UPDATE $tabela SET data_pgto = curDate(), usuario_pgto = '$id_usuario', pago = 'Sim', hora = curTime() where id = '$id' and pago != 'Sim'");

echo 'Baixado com Sucesso';