<?php 
@session_start();
$id_empresa = @$_SESSION['empresa'];
$tabela = 'itens_venda';
require_once("../../../conexao.php");

$id_usuario = $_SESSION['id'];

$quantidade = $_POST['quantidade'];
$id_produto = $_POST['id_produto'];
$tipo = @$_POST['tipo'];


if($tipo == 'Serviço'){
	$query = $pdo->query("SELECT * from servicos where id = '$id_produto'");
	$res = $query->fetchAll(PDO::FETCH_ASSOC);
	$estoque = 0;
	$valor = $res[0]['valor'];
	$tem_estoque = 0;
	$vendas = 0;
}else{
	$query = $pdo->query("SELECT * from produtos where id = '$id_produto'");
	$res = $query->fetchAll(PDO::FETCH_ASSOC);
	$estoque = $res[0]['estoque'];
	$valor = $res[0]['valor_venda'];
	$tem_estoque = $res[0]['tem_estoque'];
	$vendas = $res[0]['vendas'];
}







if($valor <= 0){
	echo 'O valor do produto / serviço tem que ser maior que zero';
	exit();
}

if($quantidade > $estoque and $tem_estoque == 'Sim'){
	echo 'A quantidade de produtos não pode ser maior que a quantidade em estoque, por enquanto você tem '.$estoque.' itens deste produto no estoque!';
	exit();
}

$total = $quantidade * $valor;

$pdo->query("INSERT INTO itens_venda SET produto = '$id_produto', valor = '$valor', quantidade = '$quantidade', total = '$total', id_venda = '0', funcionario = '$id_usuario', empresa = '$id_empresa', tipo = '$tipo'");

echo 'Inserido com Sucesso';

if($tem_estoque == 'Sim'){
	$novo_estoque = $estoque - $quantidade;
	$vendas = $vendas + $quantidade;
	//adicionar os produtos na tabela produtos
	//$pdo->query("UPDATE produtos SET estoque = '$novo_estoque', vendas = '$vendas' WHERE id = '$id_produto'"); 
}


?>