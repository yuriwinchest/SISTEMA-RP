<?php
@session_start();
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
//error_reporting(E_ALL);

require("../../conexao.php");



$id_conta = filter_var($_GET['id_conta'], @FILTER_SANITIZE_STRING);

$query = $pdo->prepare("SELECT * FROM receber where id = :id_conta");
$query->bindValue(":id_conta", "$id_conta");
$query->execute();
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0){
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
    $api_pagamento_conta = $res[0]['api_pagamento_conta'];
    $pgtos_aceitaveis = $res[0]['pgtos_aceitaveis'];
    $taxa_cartao_api_receber = $res[0]['taxa_cartao_api_receber'];


}


if($pago == 'Sim'){
    echo '<div style="text-align: center; margin-top: 100px"> <img src="../img/conta_paga.png" class="imgsistema_mobile"></div>';
    exit();
}






$query5 = $pdo->query("SELECT * from config where empresa = '$id_empresa'");
$res5 = $query5->fetchAll(PDO::FETCH_ASSOC);
$api_pagamento = $res5[0]['api_pagamento'];
$taxa_cartao_api = $res5[0]['taxa_cartao_api'];

$query5 = $pdo->query("SELECT * from clientes where id = '$cliente'");
$res5 = $query5->fetchAll(PDO::FETCH_ASSOC);
$api_pagamento_cliente = $res5[0]['api_pagamento_cliente'];
$formas_pgto = $res5[0]['formas_pgto'];

if($pgtos_aceitaveis != ""){
    $formas_pgto = $pgtos_aceitaveis;
}


if($api_pagamento_cliente != ""){
    $api_pagamento = $api_pagamento_cliente;
}

if($api_pagamento_conta != ""){
    $api_pagamento = $api_pagamento_conta;
}

if($api_pagamento == "Asaas"){
    echo '<script>window.location="'.$url_sistema.'asaas/'.$id_conta.'"</script>';  
}





require("tokens.php");
include("./config.php");

// transforma a string em array
$formas_array = array_map('trim', explode(',', $formas_pgto));

if($formas_pgto != ""){
    // verifica se cada forma de pagamento está ativa
    $ATIVAR_PIX = in_array('Pix', $formas_array) ? "1" : "0";
    $ATIVAR_BOLETO = in_array('Boleto', $formas_array) ? "1" : "0";
    $ATIVAR_CARTAO_CREDITO = in_array('Cartão de Crédito', $formas_array) ? "1" : "0";
    $ATIVAR_CARTAO_DEBIDO = in_array('Cartão de Débito', $formas_array) ? "1" : "0";

}

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

if($access_token == ""){
    echo 'Preencha no painel de configurações os tokens correspondentes ao mercado pago!';
    exit();
}



$total_com_taxa = $valor;  
$valor_da_taxa = 0; 
if(@$taxa_cartao_api > 0){
    if(@$taxa_cartao_api_receber > 0){
        $taxa_cartao_api = $taxa_cartao_api_receber;
        }

        // acrescenta a taxa no total e no valor_total
    $total_com_taxa = $valor + ($valor * ($taxa_cartao_api / 100));  
    $valor_da_taxa = $valor * ($taxa_cartao_api / 100);    

    
}

$total_com_taxaF = number_format($total_com_taxa, 2, ',', '.');
$valor_da_taxaF = number_format($valor_da_taxa, 2, ',', '.');
$valorF = number_format($valor, 2, ',', '.');

if($ref_pix != ""){
     require('consultar_pagamento.php');
     if($status_api == 'approved'){
         echo 'Essa conta Já foi Paga';  
         exit();  
        }
}

$query = $pdo->query("SELECT * FROM empresas where id = '$cliente'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$nome_cliente =  $res[0]['nome'];
$cpf_cliente =  '450.417.700-50';
$email_cliente =  $res[0]['email'];
if($email_cliente == ""){
    $email_cliente = 'cliente@hotmail.com';
}

$token_valor = ($valor!="")? sha1($valor) : "";
$doc = $cpf_cliente;
$doc =  str_replace(array(",", ".", "-", "/", " "), "", $doc);
$ref = $_REQUEST["ref"];
$email = $email_cliente;
$gerarDireto = $_REQUEST["gerarDireto"];
$descricao = $descricao;
$nome = $nome_cliente;
$sobrenome = $_REQUEST["sobrenome"];

?>
<html lang="pt-br">
<head>
    <title>Pagamento</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Description" content="Sistema <?php echo $nome_sistema ?>">
    <meta name="Author" content="Hugo Vasconcelos">
    <meta name="Keywords" content="sistemas hugo vasconcelos, sistemas hugo, sistemas portal hugo cursos, portal hugocursos, sistemas com php8" />

    <script src="https://sdk.mercadopago.com/js/v2"></script>
    <link href="./assets/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/signin.css" rel="stylesheet">
    <script src="./assets/jquery-3.6.4.min.js"></script>
</head>
<body  class="text-center">


<form action="../rel/recibo_conta_class.php" method="post" style="display:none">
    <input type="hidden" name="id" value="<?=$id_conta;?>">
     <input type="hidden" name="enviar" value="Sim">
    <button id="btn_form" type="submit"></button>
</form>



<div style="max-width: 500px; max-height: 800px; margin: 0 auto;  text-align: center; margin-bottom: 20px; word-break: break-all;" >


<div id="info_pagamento" style="text-align: center;"> 
        <p class="h3 font-weight-normal" style=" font-size: 18px; border-radius: 4px;"><span>(<?php echo $descricao ?>)</span> <span style="color:green; ">R$ <?=$valorF;?></span> </p> 
        
        <?php if($ATIVAR_CARTAO_DEBIDO == 1 || $ATIVAR_CARTAO_CREDITO == 1){ ?>
        <p class="h3 font-weight-normal" style=" font-size: 14px; border-radius: 4px;"><span>(Taxa no cartão )</span> <span style="color:green; ">R$ <?=$valor_da_taxaF;?></span> </p>   
         <?php } ?>

        </div>    

<div  id="paymentBrick_container">
        </div>
        <div id="statusScreenBrick_container">
        </div>
        <div class="form-signin" id="form-pago" style="display:none;text-align: center;">
            <h1 class="h3 mb-3 font-weight-normal">Obrigado!</h1>
            <img class="mb-4"  src="<?=$url_sistema;?>painel/pagamentos/assets/check_ok.png" alt="" width="120" height="120">
            <br>
            <h5><?=$MSG_APOS_PAGAMENTO;?></h5>
            <br>
            Código do pagamento: <?php echo $_GET["id"]; ?>
        </div>

    </div>
    <style>
        body{font-family:arial}
    </style>
 <script>
  var payment_check;
  const mp = new MercadoPago('<?=$TOKEN_MERCADO_PAGO_PUBLICO;?>', { locale: 'pt-BR' });
  const bricksBuilder = mp.bricks();

  // valores vindos do PHP
  const AMOUNT_BASE = <?= json_encode((float)$valor) ?>;              // Pix/Boleto (sem taxa)
  const AMOUNT_CARD = <?= json_encode((float)$total_com_taxa) ?>;     // Cartão (com taxa)

  // estado
  let currentAmount = AMOUNT_BASE;
  let isUpdating = false;
  let updateTimer = null;

  function amountsEqual(a, b) {
    return Math.abs(Number(a) - Number(b)) < 0.005;
  }

  function setAmountDebounced(nextAmount) {
    if (amountsEqual(currentAmount, nextAmount)) return; // nada a fazer
    if (isUpdating) return; // evita reentrância

    clearTimeout(updateTimer);
    updateTimer = setTimeout(() => {
      if (!window.paymentBrickController || typeof window.paymentBrickController.update !== 'function') return;
      isUpdating = true;
      window.paymentBrickController.update({ amount: Number(nextAmount) })
        .then(() => {
          currentAmount = Number(nextAmount);
        })
        .catch(() => {/* silencia */})
        .finally(() => { isUpdating = false; });
    }, 120); // pequeno debounce pra não travar a UI
  }

  function detectIsCardFromChangePayload(payload) {
    const method =
      (payload?.selectedPaymentMethod?.payment_type_id) ||
      (payload?.selectedPaymentMethod?.type) ||
      (payload?.paymentMethod?.type) ||
      (payload?.payment_type_id) || '';
    const m = String(method).toLowerCase();
    return (m.includes('credit') || m.includes('debit') || m.includes('card'));
  }

  function detectIsCardFromTarget(target) {
    const node = target?.closest ? target.closest('[role="tab"], button, [data-testid]') : target;
    const txt = (node?.textContent || node?.value || '').toLowerCase();
    if (!txt) return null;
    if (txt.includes('cartão') || txt.includes('credito') || txt.includes('crédito') ||
        txt.includes('debito') || txt.includes('débito') || txt.includes('card')) return true;
    if (txt.includes('pix') || txt.includes('boleto') || txt.includes('ticket') || txt.includes('transfer')) return false;
    return null;
  }

  const renderPaymentBrick = async (bricksBuilder) => {
    const settings = {
      initialization: {
        amount: AMOUNT_BASE, // inicia sem taxa
        payer: {
          firstName: "<?=$nome;?>",
          lastName: "<?=$sobrenome;?>",
          email: "<?=$email;?>",
          identification: { type: '<?=(strlen($doc)>11? "CNPJ" : "CPF");?>', number: '<?=$doc;?>' },
          address: { zipCode: '', federalUnit: '', city: '', neighborhood: '', streetName: '', streetNumber: '', complement: '' }
        },
      },
      customization: {
        visual: { style: { theme: "dark" } },
        paymentMethods: {
          <?php if($ATIVAR_CARTAO_CREDITO=="1"){?>creditCard: "all",<?php } ?>
          <?php if($ATIVAR_CARTAO_DEBIDO=="1"){?>debitCard: "all",<?php } ?>
          <?php if($ATIVAR_BOLETO=="1"){?>ticket: "all",<?php } ?>
          <?php if($ATIVAR_PIX=="1"){?>bankTransfer: "all",<?php } ?>
          maxInstallments: 12
        },
      },
      callbacks: {
        onReady: () => {
          // garante estado inicial coerente (Pix/Boleto)
          currentAmount = AMOUNT_BASE;
        },

        // quando o Brick sinaliza mudança de método
        onChange: (change) => {
          try {
            const isCard = detectIsCardFromChangePayload(change);
            if (isCard === true)  setAmountDebounced(AMOUNT_CARD);
            if (isCard === false) setAmountDebounced(AMOUNT_BASE);
          } catch(e) { /* silencia */ }
        },

        onSubmit: ({ selectedPaymentMethod, formData }) => {
          // meta do seu backend
          formData.external_reference = '<?=$ref;?>';
          formData.description = '<?=$descricao;?>';
          formData.id_conta = '<?=$id_conta;?>'; // o process_payment remove antes de enviar ao MP

          // força o valor correntemente exibido (garante consistência)
          formData.transaction_amount = Number(currentAmount);

          return new Promise((resolve, reject) => {
            fetch("<?=$url_sistema;?>painel/pagamentos/process_payment.php", {
              method: "POST",
              headers: { "Content-Type": "application/json" },
              body: JSON.stringify(formData),
            })
            .then(r => r.json())
            .then(response => {
              if (response.status == true) {
                window.location.href = "<?=$url_sistema;?>painel/pagamentos/index.php?id=" + response.id + "&id_conta=" + formData.id_conta;
              } else {
                alert(response.message);
              }
              resolve();
            })
            .catch(() => reject());
          });
        },

        onError: (error) => { console.error(error); },
      },
    };

    window.paymentBrickController = await bricksBuilder.create("payment", "paymentBrick_container", settings);

    // Fallback leve: se o onChange não vier, tentamos deduzir pelo clique
    const container = document.getElementById('paymentBrick_container');
    if (container) {
      container.addEventListener('click', (e) => {
        const guess = detectIsCardFromTarget(e.target);
        if (guess === true)  setAmountDebounced(AMOUNT_CARD);
        if (guess === false) setAmountDebounced(AMOUNT_BASE);
      }, true); // use capture para pegar antes do Brick
    }
  };

  const renderStatusScreenBrick = async (bricksBuilder) => {
    const settings = {
      initialization: { paymentId: '<?=$_GET["id"];?>' },
      customization: {
        visual: { hideStatusDetails: false, hideTransactionDate: false, style: { theme: 'dark' } },
        backUrls: {}
      },
      callbacks: {
        onReady: () => { check("<?=$_GET["id"];?>", "<?=$_GET["id_conta"];?>"); },
        onError: (error) => {},
      },
    };
    window.statusScreenBrickController = await bricksBuilder.create('statusScreen', 'statusScreenBrick_container', settings);
  };

  <?php if($_GET["id"]!=""){ ?>
    renderStatusScreenBrick(bricksBuilder);
  <?php } else { ?>
    <?php if($valor==""){?> alert("O valor do pagamento está vazio."); <?php } ?>
    renderPaymentBrick(bricksBuilder);
  <?php } ?>

  var redi = "<?=$URL_REDIRECIONAR;?>";
  function check(id, id_conta) {
    var settings = {
      "url": "<?=$url_sistema;?>painel/pagamentos/process_payment.php?acc=check&id=" + id + "&id_conta=" + id_conta,
      "method": "GET",
      "timeout": 0
    };
    $.ajax(settings).done(function(response) {
      try {
        if (response.status == "pago") {
          $("#statusScreenBrick_container").slideUp("fast");
          $("#form-pago").slideDown("fast");
          if (redi.trim() == "Sim") setTimeout(() => { $("#btn_form").click(); }, 6000);
        } else {
          setTimeout(() => { check(id) }, 3000);
        }
      } catch (error) {
        alert("Erro ao localizar o pagamento, contacte com o suporte");
      }
    });
  }
</script>

