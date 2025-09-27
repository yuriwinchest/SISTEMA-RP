<?php 
@session_start();
$id_empresa = @$_SESSION['id_empresa'];
//trazer as configurações
$query5 = $pdo->query("SELECT * from config where empresa = '$id_empresa'");
$res5 = $query5->fetchAll(PDO::FETCH_ASSOC);
$linhas5 = @count($res5);
if ($linhas5 > 0) {	
	$dados_pagamento_sas = $res5[0]['dados_pagamento'];	
	$access_token_mp_sas = $res5[0]['access_token'];	
	$public_key_mp_sas = $res5[0]['public_key'];
	$multa_atraso = $res5[0]['multa_atraso'];
	$juros_atraso = $res5[0]['juros_atraso'];	
	$taxa_cartao_api = $res5[0]['taxa_cartao_api'];
}else{
	$dados_pagamento_sas = "";
	$access_token_mp_sas = "";
	$public_key_mp_sas = "";
}

$access_token = $access_token_mp_sas;
$public_key     = $public_key_mp_sas;
 ?>