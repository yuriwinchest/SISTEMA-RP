<?php
@session_start();
if(@$_SESSION['id_empresa'] != ""){
	$id_empresa = @$_SESSION['id_empresa'];
}

//trazer as configurações
$query5 = $pdo->query("SELECT * from config where empresa = '$id_empresa'");
$res5 = $query5->fetchAll(PDO::FETCH_ASSOC);
$linhas5 = @count($res5);
if ($linhas5 > 0) {	
	$dados_pagamento_sas = $res5[0]['dados_pagamento'];		
	$multa_atraso = $res5[0]['multa_atraso'];
	$juros_atraso = $res5[0]['juros_atraso'];	
	$chave_api_asaas = $res5[0]['chave_api_asaas'];	
	$api_pagamento = $res5[0]['api_pagamento'];	
	$taxa_cartao_api = $res5[0]['taxa_cartao_api'];	
}else{
	$dados_pagamento_sas = "";
	$chave_api_asaas = "";
}

$access_token   = $chave_api_asaas;
$host_dir       = $url_sistema.'/painel/asaas/'; //seu dominio e a pasta onde o codigo foi colocado, exemplo: seusite.com.br/checkout
?>