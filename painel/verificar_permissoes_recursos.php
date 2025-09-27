<?php 
@session_start();
$id_empresa = @$_SESSION['empresa'];

$marketing_whats = 'ocultar';
$cobrancas_rec = 'ocultar';
$gestao_contratos = 'ocultar';
$os_rec = 'ocultar';
$orcamentos_rec = 'ocultar';
$site = 'ocultar';

$query = $pdo->query("SELECT * FROM clientes_recursos where empresa = '$id_empresa'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0){
	for($i=0; $i < $total_reg; $i++){
		foreach ($res[$i] as $key => $value){}
		$recurso = $res[$i]['recurso'];

		$query2 = $pdo->query("SELECT * FROM recursos where id = '$recurso'");
		$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
		$nome = $res2[0]['nome'];
		$chave = $res2[0]['chave'];
		$id = $res2[0]['id'];

		if($chave == 'marketing_whats'){
			$marketing_whats = '';
		}

		if($chave == 'cobrancas_rec'){
			$cobrancas_rec = '';
		}

		if($chave == 'gestao_contratos'){
			$gestao_contratos = '';
		}

		if($chave == 'os_rec'){
			$os_rec = '';
		}

		if($chave == 'orcamentos_rec'){
			$orcamentos_rec = '';
		}

		if($chave == 'site'){
			$site = '';
		}



	}

}



?>