<?php 
require_once("../conexao.php");

$query = $pdo->query("SELECT * from pagar where vencimento = curDate() and pago != 'Sim' and hora_alerta <= curTime() and (alerta is null or alerta != 'Sim') ");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$contas_pagar_vencidas = @count($res);
for ($i = 0; $i < $contas_pagar_vencidas; $i++) {
	$valor = $res[$i]['valor'];
	$descricao = $res[$i]['descricao'];
	$id = $res[$i]['id'];
	$id_empresa = $res[$i]['empresa'];

	$query2 = $pdo->query("SELECT * from config where empresa = '$id_empresa'");
$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
$linhas2 = @count($res2);
if ($linhas2 > 0) {
	$nome_sistema = $res2[0]['nome'];	
	$telefone_sistema = $res2[0]['telefone'];	
	$multa_atraso = $res2[0]['multa_atraso'];
	$juros_atraso = $res2[0]['juros_atraso'];	
	
	$token_whatsapp = $res2[0]['token_whatsapp'];

	if($alterar_api_whatsapp == 'Sim'){
		$instancia_whatsapp = $res2[0]['instancia_whatsapp'];
		$api_whatsapp = $res2[0]['api_whatsapp'];
	}
	
	$dados_pagamento = $res2[0]['dados_pagamento'];
}

	$valorF = @number_format($valor, 2, ',', '.');

	//enviar whatsapp
		if ($api_whatsapp != 'Não' and $telefone_sistema != '') {
			$telefone_envio = '55' . preg_replace('/[ ()-]+/', '', $telefone_sistema);
			$mensagem = '💰 *' . $nome_sistema . '*%0A';
			$mensagem .= '_Conta Vencendo Hoje_ %0A';
			$mensagem .= '*Descrição:* ' . $descricao . ' %0A';
			$mensagem .= '*Valor:* ' . $valorF . ' %0A';
			
			require('texto.php');

			if(@$status_mensagem == "Mensagem enviada com sucesso." and $api_whatsapp == 'menuia'){
				$pdo->query("UPDATE pagar SET alerta = 'Sim' where id = '$id'");
			}

			if($api_whatsapp != 'menuia'){
				$pdo->query("UPDATE pagar SET alerta = 'Sim' where id = '$id'");
			}
			
		}

}

echo $contas_pagar_vencidas;

 ?>