<?php 


$valor_pagoF = @number_format($total_pago, 2, ',', '.');

//buscar a forma de pagamento
$queryP = $pdo->query("SELECT * from formas_pgto where nome like '%$tipo_pagamento%' and empresa = '$id_empresa'");
$resP = $queryP->fetchAll(PDO::FETCH_ASSOC);
$id_forma_pgto = @$resP[0]['id'];


 //recuperar dados da conta
     $queryP = $pdo->query("SELECT * from receber where ref_pix = '$ref_pix' and empresa = '$id_empresa'");
     $resP = $queryP->fetchAll(PDO::FETCH_ASSOC);
     $descricao = $resP[0]['descricao'];
    $cliente = $resP[0]['cliente'];
    $valor_antigo = $resP[0]['valor'];
    $data_lanc = $resP[0]['data_lanc'];
    $data_venc = $resP[0]['vencimento'];
    $data_pgto = $resP[0]['data_pgto'];
    $usuario_lanc = $resP[0]['usuario_lanc'];
    $usuario_pgto = $resP[0]['usuario_pgto'];
    $frequencia = $resP[0]['frequencia'];
    $saida_antiga = $resP[0]['forma_pgto'];
    $arquivo = $resP[0]['arquivo'];
    $pago = $resP[0]['pago'];
    $referencia = $resP[0]['referencia'];
    $hash = $resP[0]['hash'];
    $vencimento = $resP[0]['vencimento'];
    $quant_recorrencia = @$resP[0]['quant_recorrencia'];
    $id_empresa = @$resP[0]['empresa'];
    $api_pagamento_conta = @$resP[0]['api_pagamento_conta'];
    $dispositivo = @$resP[0]['dispositivo'];
    $pgtos_aceitaveis = @$resP[0]['pgtos_aceitaveis'];
    $taxa_cartao_api_receber = @$resP[0]['taxa_cartao_api_receber'];

    $query205 = $pdo->query("SELECT * from config where empresa = '$id_empresa'");
    $res205 = $query205->fetchAll(PDO::FETCH_ASSOC);
    $endereco_checkout = $res205[0]['endereco_checkout'];
    if($alterar_api_whatsapp == 'Sim'){
        $instancia_whatsapp = $res205[0]['instancia_whatsapp'];
        $api_whatsapp = $res205[0]['api_whatsapp'];
    }    
    $token_whatsapp = $res205[0]['token_whatsapp'];

    
     $pdo->query("UPDATE receber SET pago = 'Sim', data_pgto = curDate(), valor = '$total_pago', subtotal = '$total_pago', forma_pgto = '$id_forma_pgto' where ref_pix = '$ref_pix'");

     
    

     //buscar cliente para enviar notificação de pagamento aprovado
     $queryP = $pdo->query("SELECT * FROM clientes where id = '$cliente'");
        $resP = $queryP->fetchAll(PDO::FETCH_ASSOC);
        if(@count($resP) > 0){
            $nome_cliente = $resP[0]['nome'];
            $telefone_cliente = $resP[0]['telefone'];
        }else{
            $nome_cliente = 'Sem Registro';
            $telefone_cliente = "";
        }

        //enviando notificação do pagamento aprovado
        if($api_whatsapp != 'Não' and $telefone_cliente != ''){         

            $telefone_envio = '55'.preg_replace('/[ ()-]+/' , '' , $telefone_cliente);

            $mensagem = '*'.$nome_sistema.'*%0A';           
            $mensagem .= '*Pagamento Aprovado* %0A';
            $mensagem .= '*Descrição:* '.$descricao.' %0A';
            $mensagem .= '*Cliente:* '.$nome_cliente.' %0A';            
            $mensagem .= '*Valor:* '.$valor_pagoF.' %0A';

            require('texto.php');           

        }


        //verificar se a conta possui recorrencia para criar a proxima
        if (@$frequencia > 0) {

        $data_venc = $vencimento;
    //CRIAR A PRÓXIMA CONTA A PAGAR
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


    
        $pdo->query("INSERT INTO receber set descricao = '$descricao', cliente = '$cliente', valor = '$valor_antigo', data_lanc = curDate(), vencimento = '$nova_data_vencimento', frequencia = '$frequencia', forma_pgto = '$saida_antiga', arquivo = '$arquivo', pago = 'Não', referencia = '$referencia', usuario_lanc = '$usuario_lanc', hora = curTime(), empresa = '$id_empresa', hora_alerta = '$hora_random', api_pagamento_conta = '$api_pagamento_conta', dispositivo = '$dispositivo', pgtos_aceitaveis = '$pgtos_aceitaveis', taxa_cartao_api_receber = '$taxa_cartao_api_receber'");
                
    }


 ?>