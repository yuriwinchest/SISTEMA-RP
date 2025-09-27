<?php
@session_start();
require("../../conexao.php");

$id_conta = filter_var($_GET['id'], FILTER_SANITIZE_STRING);

//ref pix testes aprovado pay_wdx0czye9gp2u4tj

// Buscar dados da cobrança localmente
$query = $pdo->prepare("SELECT * FROM receber where id = :id_conta");
$query->bindValue(":id_conta", "$id_conta");
$query->execute();
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);

if ($total_reg > 0) {
    $cliente = $res[0]['cliente'];
    $descricao = $res[0]['descricao'];
    $valor = $res[0]['valor'];
    $ref_pix = $res[0]['ref_pix'];
    $data = $res[0]['data_lanc'];
    $hora = $res[0]['hora'];
    $dataF = implode('/', array_reverse(explode('-', $data)));
    $horaF = date("H:i", strtotime($hora));
    $id_empresa = $res[0]['empresa'];
    $_SESSION['id_empresa'] = $id_empresa;
    $vencimento = $res[0]['vencimento'];
    $pago = $res[0]['pago'];
}

require("config/configApi.php");

// Verifica o pagamento se ainda não estiver marcado como pago
if ($api_pagamento == 'Asaas' and $pago != 'Sim') {
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

    //echo "Status: $status_api <br>";
    //echo "Valor Pago (líquido): R$ " . number_format($valor_liquido, 2, ',', '.') . "<br>";
    //echo "Valor Original: R$ " . number_format($total_pago, 2, ',', '.') . "<br>";
    //echo "Forma de Pagamento: $tipo_pagamento <br>";


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
        require('../../cron/aprovar_conta.php');       
    }


}

// Se já pago, redireciona direto
if ($pago == 'Sim') {
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=" . $url_sistema . "painel/asaas/obrigado.php?id=" . $id_conta . "'>";
    exit;
}
?>
