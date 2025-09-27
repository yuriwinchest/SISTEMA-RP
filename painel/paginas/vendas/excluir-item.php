<?php 
$tabela = 'itens_venda';
require_once("../../../conexao.php");

$id = $_POST['id'];

$query = $pdo->query("SELECT * from $tabela where id = '$id'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$id_produto = $res[0]['produto'];
$quantidade = $res[0]['quantidade'];
$tipo = $res[0]['tipo'];

if($tipo == 'Produto'){
$query = $pdo->query("SELECT * from produtos where id = '$id_produto'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
        $estoque = $res[0]['estoque'];
		$tem_estoque = $res[0]['tem_estoque'];
		$vendas = $res[0]['vendas'];
    }else{
        $query = $pdo->query("SELECT * from servicos where id = '$id_produto'");
        $res = $query->fetchAll(PDO::FETCH_ASSOC);
        $estoque = 0;
		$tem_estoque = 0;
		$vendas = 0;
    }

$pdo->query("DELETE FROM $tabela WHERE id = '$id' ");
echo 'Excluído com Sucesso';

if($tem_estoque == 'Sim'){
	$novo_estoque = $estoque + $quantidade;
	$vendas = $vendas - $quantidade;
	//adicionar os produtos na tabela produtos
	//$pdo->query("UPDATE produtos SET estoque = '$novo_estoque', vendas = '$vendas' WHERE id = '$id_produto'"); 
}
?>