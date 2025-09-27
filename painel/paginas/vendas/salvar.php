<?php 
@session_start();
$id_empresa = @$_SESSION['empresa'];
$id_usuario = $_SESSION['id'];
require_once("../../../conexao.php");
require_once("../../buscar_config.php");
$tabela = 'receber';


$data_atual = date('Y-m-d');




$troco = $_POST['troco'];
$desconto = $_POST['desconto'];
$cliente = $_POST['cliente'];
$saida = $_POST['saida'];
$data = $_POST['data2'];
$garantia_venda = @$_POST['garantia_venda'];

$tipo_desconto = $_POST['tipo_desconto'];
$subtotal_venda = $_POST['subtotal_venda'];
$valor_restante = $_POST['valor_restante'];
$valor_pago = $_POST['valor_pago'];

$data_restante = $_POST['data_restante'];
$forma_pgto2 = $_POST['forma_pgto2'];
$parcelas = $_POST['parcelas'];

if($valor_restante > 0 and $forma_pgto2 == "" and $data_restante == $data_atual){
	echo 'Você precisa selecionar uma forma de pagamento para o valor restante!';
	exit();
}

$dataF = implode('/', array_reverse(explode('-', $data)));

if($desconto == ""){
	$desconto = 0;
}

$total_v = 0;
//buscar o total da venda
$query = $pdo->query("SELECT * from itens_venda where funcionario = '$id_usuario' and id_venda = '0' and empresa = '$id_empresa' order by id asc");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = @count($res);
if($linhas > 0){
	for($i=0; $i<$linhas; $i++){	
		$total_das_vendas = $res[$i]['total'];
		$total_v += $total_das_vendas;
	}
}

if($tipo_desconto == '%'){
	if($desconto > 0 and $total_v > 0){
		$total_final = -($total_v * $desconto / 100);
	}else{
		$total_final = 0;
	}
	
}else{
	$total_final = -$desconto;
}

$total_das_compras = 0;
$query = $pdo->query("SELECT * from itens_venda where funcionario = '$id_usuario' and id_venda = '0' and empresa = '$id_empresa' order by id asc");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = @count($res);
if($linhas > 0){
	for($i=0; $i<$linhas; $i++){
	$id = $res[$i]['id'];
	$produto = $res[$i]['produto'];
	$valor = $res[$i]['valor'];
	$quantidade = $res[$i]['quantidade'];
	$total = $res[$i]['total'];
	$tipo = $res[$i]['tipo'];


	$total_final += $total;
	$total_finalF = number_format($total_final, 2, ',', '.');
	$valorF = number_format($valor, 2, ',', '.');
	$totalF = number_format($total, 2, ',', '.');
	
	if($troco > 0){
		$total_troco = $troco - $total_final;
		$total_trocoF = number_format($total_troco, 2, ',', '.');
	}


	if($tipo == 'Produto'){
	//abater os produtos do estoque
	$query2 = $pdo->query("SELECT * from produtos where id = '$produto'");
	$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
	
		$estoque = $res2[0]['estoque'];
		$tem_estoque = $res2[0]['tem_estoque'];
		$vendas = $res2[0]['vendas'];
		$valor_compra = $res2[0]['valor_compra'] * $quantidade;
	}else{		
		$estoque = 0;
		$tem_estoque = 0;
		$vendas = 0;
		$valor_compra = 0;
	}
	

	$total_das_compras += $valor_compra;
	
	if($vendas == 0){
		$vendas = 1;
	}


	if($tem_estoque == 'Sim'){
		$novo_estoque = $estoque - $quantidade;
		$vendas = $vendas * $quantidade;
		//adicionar os produtos na tabela produtos
		$pdo->query("UPDATE produtos SET estoque = '$novo_estoque', vendas = '$vendas' WHERE id = '$produto'");
	}

}

}

if($total_final <= 0){
	echo 'O valor da Venda tem que ser maior que zero';
	exit();
}

if($troco < $total_final and $troco != ""){
	echo 'O total a pagar não pode ser menor que o total da venda!';
	exit();
}

if(strtotime($data) > strtotime($data_atual)){
	$pago = 'Não';
	$data_pgto = '';
	$usuario_pgto = '';
}else{
	$pago = 'Sim';
	$data_pgto = $data;
	$usuario_pgto = $id_usuario;
}


//verificar caixa aberto
$query1 = $pdo->query("SELECT * from caixas where operador = '$id_usuario' and data_fechamento is null order by id desc limit 1");
$res1 = $query1->fetchAll(PDO::FETCH_ASSOC);
if (@count($res1) > 0) {
	$id_caixa = @$res1[0]['id'];
} else {
	$id_caixa = 0;
}

if($valor_restante > 0){
	if($parcelas > 1){
		echo 'Você não pode parcelar em uma venda com duas formas de pagamentos!';
		exit();
	}
	$pdo->query("INSERT INTO receber SET descricao = 'Nova Venda', valor = '$valor_pago', vencimento = '$data', data_lanc = curDate(), data_pgto = '$data_pgto', usuario_lanc = '$id_usuario', arquivo = 'sem-foto.png', pago = '$pago', usuario_pgto = '$usuario_pgto', cliente = '$cliente', referencia = 'Venda', hora = curTime(), forma_pgto = '$saida', desconto = '$desconto', troco = '$troco', garantia_venda = '$garantia_venda', tipo_desconto = '$tipo_desconto', total_venda = '$subtotal_venda', valor_restante = '$valor_restante', forma_pgto_restante = '$forma_pgto2', data_restante = '$data_restante', empresa = '$id_empresa', hora_alerta = '$hora_random', subtotal = '$subtotal_venda', caixa = '$id_caixa', valor_custo = '$total_das_compras'");
		$id_venda = $pdo->lastInsertId();

		if(strtotime($data_restante) > strtotime($data_atual)){
		$pago2 = 'Não';
		$data_pgto2 = '';
		$usuario_pgto2 = '';
	}else{
		$pago2 = 'Sim';
		$data_pgto2 = $data_restante;
		$usuario_pgto2 = $id_usuario;
	}

	$pdo->query("INSERT INTO receber SET descricao = 'Nova Venda (Restante)', valor = '$valor_restante', vencimento = '$data_restante', data_lanc = curDate(), data_pgto = '$data_pgto2', usuario_lanc = '$id_usuario', arquivo = 'sem-foto.png', pago = '$pago2', usuario_pgto = '$usuario_pgto2', cliente = '$cliente', referencia = 'Venda', hora = curTime(), forma_pgto = '$forma_pgto2', desconto = '$desconto', troco = '$troco', garantia_venda = '$garantia_venda', tipo_desconto = '$tipo_desconto', total_venda = '$subtotal_venda', valor_restante = '$valor_pago', forma_pgto_restante = '$forma_pgto2', data_restante = '$data', id_ref = '$id_venda', empresa = '$id_empresa', hora_alerta = '$hora_random', subtotal = '$subtotal_venda', caixa = '$id_caixa'");


}else{


	if($parcelas > 1){
    if(!$cliente > 0){
        echo 'Selecione um Cliente para venda Parcelada!';
        exit();
    }

    // Trabalhar em centavos para evitar erro de ponto flutuante
    $total_cent        = (int) round($total_final * 100);
    $total_custo_cent  = (int) round($total_das_compras * 100);

    $base_cent         = intdiv($total_cent, $parcelas);            // valor base por parcela (centavos)
    $resto_cent        = $total_cent - ($base_cent * $parcelas);    // sobra de centavos (0, 1 ou -1 em cenários específicos)

    $base_custo_cent   = intdiv($total_custo_cent, $parcelas);
    $resto_custo_cent  = $total_custo_cent - ($base_custo_cent * $parcelas);

    $data_parcela = new DateTime($data);

    for ($i = 1; $i <= $parcelas; $i++) {
        // Para as (parcelas - 1) primeiras usamos o base; na última somamos o resto
        $valor_parcela_cent       = ($i < $parcelas) ? $base_cent       : ($base_cent       + $resto_cent);
        $valor_parcela_custo_cent = ($i < $parcelas) ? $base_custo_cent : ($base_custo_cent + $resto_custo_cent);

        $valor_parcela       = $valor_parcela_cent / 100;
        $valor_parcela_custo = $valor_parcela_custo_cent / 100;

        $vencimento = $data_parcela->format('Y-m-d');

        $pdo->query("INSERT INTO receber SET 
            descricao = 'Venda - Parcela $i/$parcelas',
            valor = '$valor_parcela',
            vencimento = '$vencimento',
            data_lanc = curDate(),
            usuario_lanc = '$id_usuario',
            arquivo = 'sem-foto.png',
            pago = 'Não',
            cliente = '$cliente',
            referencia = 'Venda',
            hora = curTime(),
            forma_pgto = '$saida',
            desconto = '$desconto',
            troco = '$troco',
            garantia_venda = '$garantia_venda',
            tipo_desconto = '$tipo_desconto',
            total_venda = '$subtotal_venda',
            empresa = '$id_empresa',
            hora_alerta = '$hora_random',
            subtotal = '$valor_parcela',
            caixa = '$id_caixa',
            valor_custo = '$valor_parcela_custo',
            parcela = '$i'
        ");

        $data_parcela->modify('+1 month');
    }
}else{
		$pdo->query("INSERT INTO receber SET descricao = 'Nova Venda', valor = '$total_final', vencimento = '$data', data_lanc = curDate(), data_pgto = '$data_pgto', usuario_lanc = '$id_usuario', arquivo = 'sem-foto.png', pago = '$pago', usuario_pgto = '$usuario_pgto', cliente = '$cliente', referencia = 'Venda', hora = curTime(), forma_pgto = '$saida', desconto = '$desconto', troco = '$troco', garantia_venda = '$garantia_venda', tipo_desconto = '$tipo_desconto', total_venda = '$subtotal_venda', empresa = '$id_empresa', hora_alerta = '$hora_random', subtotal = '$subtotal_venda', caixa = '$id_caixa', valor_custo = '$total_das_compras'");
	}
	

	$id_venda = $pdo->lastInsertId();
}



$pdo->query("UPDATE itens_venda SET id_venda = '$id_venda' WHERE id_venda = 0 and funcionario = '$id_usuario'");

echo 'Salvo com Sucesso-'.$id_venda;

//enviar para o whatsapp
if(strtotime($data) > strtotime($data_atual) and $api_whatsapp != 'Não'){
$query = $pdo->query("SELECT * from clientes where id = '$cliente'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$telefone = $res[0]['telefone'];
$nome = $res[0]['nome'];

$telefone_envio = '55'.preg_replace('/[ ()-]+/' , '' , $telefone);

	$mensagem = '_Nova Compra '.$nome_sistema.'_ %0A';
		$mensagem .= 'Nome: *'.$nome.'* %0A';
		$mensagem .= 'Valor Compra: *'.$total_finalF.'* %0A';
		$mensagem .= 'Data de Pagamento: *'.$dataF.'*';
		
	require('../../apis/texto.php');
}

 ?>