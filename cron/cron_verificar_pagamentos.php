<?php 
@session_start();
require_once("../conexao.php");

$query = $pdo->query("SELECT * from receber where pago != 'Sim' and pago is not null and ref_pix is not null ");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_contas = @count($res);
for ($i = 0; $i < $total_contas; $i++) {
	$valor = $res[$i]['valor'];
	$descricao = $res[$i]['descricao'];
	$id = $res[$i]['id'];
	$id_empresa = $res[$i]['empresa'];
	$cliente = $res[$i]['cliente'];
	$vencimento = $res[$i]['vencimento'];
	$ref_pix = $res[$i]['ref_pix'];

	$valorF = @number_format($valor, 2, ',', '.');

	$_SESSION['id_empresa'] = $id_empresa;

	//vamos verificar se o sistema está com mercado pago ou assaas

	$query20 = $pdo->query("SELECT * from config where empresa = '$id_empresa' ");
	$res20 = $query20->fetchAll(PDO::FETCH_ASSOC);
	$api_pagamento = $res20[0]['api_pagamento'];
	
	$public_key = $res20[0]['public_key'];

	$token_whatsapp = $res20[0]['token_whatsapp'];

	if($alterar_api_whatsapp == 'Sim'){
		$instancia_whatsapp = $res20[0]['instancia_whatsapp'];
		$api_whatsapp = $res20[0]['api_whatsapp'];
	}


	if($api_pagamento == 'Mercado Pago'){
		$access_token = $res20[0]['access_token'];


				$curl = curl_init();
		    curl_setopt_array($curl, array(
		        CURLOPT_URL => 'https://api.mercadopago.com/v1/payments/'.$ref_pix,
		        CURLOPT_RETURNTRANSFER => true,
		        CURLOPT_CUSTOMREQUEST => 'GET',
		    CURLOPT_HTTPHEADER => array(
		        'accept: application/json',
		        'content-type: application/json',
		        'Authorization: Bearer '.$access_token
		    ),
		    ));
		    $response = curl_exec($curl);
		    $resultado = json_decode($response);
		curl_close($curl);
		echo @$resultado->status;
		$status_api = @$resultado->status;
		$total_pago = @$resultado->transaction_amount;
		$metodo_pagamento = @$resultado->payment_method_id; // Ex: "pix", "visa", "master"
		$tipo_pagamento = @$resultado->payment_type_id; // Ex: "credit_card", "debit_card", "ticket (boleto)", "bank_transfer (pix)"

		if($tipo_pagamento == 'credit_card'){
		    $tipo_pagamento = 'Cartão de Crédito';
		}

		if($tipo_pagamento == 'debit_card'){
		    $tipo_pagamento = 'Cartão de Débito';
		}

		if($tipo_pagamento == 'ticket'){
		    $tipo_pagamento = 'Boleto';
		}

		if($tipo_pagamento == 'bank_transfer'){
		    $tipo_pagamento = 'Pix';
		}

		if($status_api == 'approved'){   
		    require('aprovar_conta.php');
		}

		echo $status_api;
	}

	if($api_pagamento == 'Asaas'){
		$access_token = $res20[0]['chave_api_asaas'];


		// Verifica o pagamento se ainda não estiver marcado como pago
    $payment_id = $ref_pix;

    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.asaas.com/v3/payments/' . $payment_id, // Consulta completa da cobrança
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'accept: application/json',
            'content-type: application/json',
            'User-Agent: MeuSistema/1.0',
            'access_token: ' . $access_token
        ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);

    $resultado = json_decode($response);

    // Apenas para visualizar o retorno completo em teste:
    // echo "<pre>"; print_r($resultado); echo "</pre>"; exit();

    // Variáveis corretas agora:
    $status_api = $resultado->status ?? 'PENDING'; // Status
    $valor_liquido = $resultado->netValue ?? 0; // Valor líquido recebido
    $total_pago = $resultado->value ?? 0; // Valor da cobrança
    $tipo_pagamento = $resultado->billingType ?? 'PIX'; // Forma de pagamento

   
    if($tipo_pagamento == 'CREDIT_CARD'){
        $tipo_pagamento = 'Cartão de Crédito';
    }
   
    if($tipo_pagamento == 'BOLETO'){
        $tipo_pagamento = 'Boleto';
    }

    if($tipo_pagamento == 'PIX '){
        $tipo_pagamento = 'Pix';
    }

    // Se confirmado ou recebido, atualiza como pago no banco
    if (in_array($status_api, ['RECEIVED', 'CONFIRMED'])) {
        require('aprovar_conta.php');       
    }


		echo $status_api;
	}
	

		
}
echo '<br>';
echo $total_contas;




//verificar se há alguma conta ou contrato que tenha prazo para assinatura
$query = $pdo->query("SELECT * from temp_texto where conta > 0 and (assinatura is null or assinatura = '') ");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_ass = @count($res);
for ($i = 0; $i < $total_ass; $i++) {
	$id_contrato = $res[$i]['id'];
	$id_conta = $res[$i]['conta'];

	//buscar a conta
	$query2 = $pdo->query("SELECT * from receber where id = '$id_conta' and data_assinatura < curDate() ");
	$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
	$total_ass2 = @count($res2);
	if($total_ass2 > 0){
		$pdo->query("DELETE FROM receber where id = '$id_conta' ");
		$pdo->query("DELETE FROM temp_texto where id = '$id_contrato' ");
	}

}

echo '<br><br> Assinaturas Pendentes:'.$total_ass;

 ?>