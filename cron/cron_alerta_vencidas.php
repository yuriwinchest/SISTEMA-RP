<?php 
require_once("../conexao.php");

$data_hoje = date('Y-m-d');

$query = $pdo->query("SELECT * from receber where vencimento < curDate() and pago != 'Sim' and cliente > 0 and cliente is not null and (hora_alerta <= curTime() and (data_alerta != curDate() or data_alerta is null)) or (hora_alerta2 <= curTime() and (data_alerta2 != curDate() or data_alerta2 is null)) ");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$contas_pagar_vencidas = @count($res);
for ($i = 0; $i < $contas_pagar_vencidas; $i++) {
	$valor = $res[$i]['valor'];
	$descricao = $res[$i]['descricao'];
	$id = $res[$i]['id'];
	$id_empresa = $res[$i]['empresa'];
	$cliente = $res[$i]['cliente'];
	$vencimento = $res[$i]['vencimento'];
	$data_alerta = $res[$i]['data_alerta'];
	$dispositivo = @$res[0]['dispositivo'];



	$vencimentoF = implode('/', array_reverse(@explode('-', $vencimento)));

	$query2 = $pdo->query("SELECT * FROM clientes where id = '$cliente'");
	$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
	if (@count($res2) > 0) {
		$nome_cliente = $res2[0]['nome'];
		$telefone_cliente = $res2[0]['telefone'];
	} else {
		$nome_cliente = 'Sem Registro';
		$telefone_cliente = "";
	}

	$query2 = $pdo->query("SELECT * from config where empresa = '$id_empresa'");
$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
$linhas2 = @count($res2);
if ($linhas2 > 0) {
	$nome_sistema = $res2[0]['nome'];	
	$telefone_sistema = $res2[0]['telefone'];	
	$multa_atraso = $res2[0]['multa_atraso'];
	$juros_atraso = $res2[0]['juros_atraso'];	
	
	$token_whatsapp = $res2[0]['token_whatsapp'];

	if($dispositivo != ""){
		$query5 = $pdo->query("SELECT * FROM dispositivos where telefone = '$dispositivo' and empresa = '$id_empresa'");
		$res5 = $query5->fetchAll(PDO::FETCH_ASSOC);
		$token_whatsapp = @$res5[0]['appkey'];
	}

	if($alterar_api_whatsapp == 'Sim'){
		$instancia_whatsapp = $res2[0]['instancia_whatsapp'];
		$api_whatsapp = $res2[0]['api_whatsapp'];
	}

	$dados_pagamento = $res2[0]['dados_pagamento'];
	$access_token_mp = $res2[0]['access_token'];
	$public_key_mp = $res2[0]['public_key'];
	$cobrar_automaticamente = $res2[0]['cobrar_automaticamente'];
	$cobrar_duas_vezes = $res2[0]['cobrar_duas_vezes'];
	$chave_api_asaas = $res2[0]['chave_api_asaas'];
}

if(@$cobrar_automaticamente == 'Não'){
	echo 'Habilite o cobrar automaticamente nas configurações para ele efetuar essas cobranças!';
	exit();
}

$link_pgto = $url_sistema.'pagar/'.$id;


//CODIGO PARA CALCULAR OS JUROS
$valor_multa = 0;
$valor_juros = 0;
$data_hoje = date('Y-m-d');

if (@strtotime($vencimento) < @strtotime($data_hoje)) {
	
	$valor_multa = $multa_atraso;

			//pegar a quantidade de dias que o pagamento está atrasado
	$dif = @strtotime($data_hoje) - @strtotime($vencimento);
	$dias_vencidos = floor($dif / (60 * 60 * 24));

	$valor_juros = ($valor * $juros_atraso / 100) * $dias_vencidos;
}

$valor = $valor_multa + $valor_juros + $valor;
$valor_multa_juros = $valor_multa + $valor_juros;

$valor_jurosF = @number_format($valor_juros, 2, ',', '.');

	$valorF = @number_format($valor, 2, ',', '.');
	$valor_multa_jurosF = @number_format($valor_multa_juros, 2, ',', '.');

	//enviar whatsapp
		if ($api_whatsapp != 'Não' and $telefone_cliente != '') {
			$telefone_envio = '55' . preg_replace('/[ ()-]+/', '', $telefone_cliente);
			$mensagem = '💰 *' . $nome_sistema . '*%0A';
			$mensagem .= '_Sua conta Venceu_ %0A';
			
			$mensagem .= '*Descrição:* '.$descricao.' %0A';
	$mensagem .= '*Cliente:* '.$nome_cliente.' %0A';
	if($valor_multa_juros > 0){
	$mensagem .= '*Multa / Júros:* R$ '.$valor_multa_jurosF.' %0A';		
	}
	$mensagem .= '*Valor:* R$ '.$valorF.' %0A';	
	$mensagem .= '*Vencimento:* '.$vencimentoF.' %0A%0A';	

	if($dados_pagamento != ""){
		$mensagem .= '*Dados para o Pagamento:* %0A';
		$mensagem .= $dados_pagamento;
	}else{
		if($access_token_mp != "" || $chave_api_asaas != ""){
			$mensagem .= $link_pgto;
		}
	}		
			
			if($data_alerta != $data_hoje){
				if(@$cobrar_duas_vezes == 'Sim'){
					$hora_al2 = ", hora_alerta2 = '$hora_random2'";
				}else{
					$hora_al2 = "";
				}
				require('texto.php');

				if(@$status_mensagem == "Mensagem enviada com sucesso." and $api_whatsapp == 'menuia'){
					$pdo->query("UPDATE receber SET data_alerta = curDate(), hora_alerta = '$hora_random' $hora_al2 where id = '$id'");
				}

				if($api_whatsapp != 'menuia'){
					$pdo->query("UPDATE receber SET data_alerta = curDate(), hora_alerta = '$hora_random' $hora_al2 where id = '$id'");
				}
			}else{

				if($cobrar_duas_vezes == 'Sim'){
					require('texto.php');

					if(@$status_mensagem == "Mensagem enviada com sucesso." and $api_whatsapp == 'menuia'){
						$pdo->query("UPDATE receber SET data_alerta2 = curDate() where id = '$id'");
					}

					if($api_whatsapp != 'menuia'){
						$pdo->query("UPDATE receber SET data_alerta2 = curDate() where id = '$id'");
					}
				}

			}



			
			
			
		}

}

echo $contas_pagar_vencidas;

 ?>