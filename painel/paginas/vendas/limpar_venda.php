<?php 
$tabela = 'itens_venda';
require_once("../../../conexao.php");

@session_start();
$id_usuario = $_SESSION['id'];

$query = $pdo->query("SELECT * from $tabela where funcionario = '$id_usuario' and id_venda = '0' order by id asc");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = @count($res);
if($linhas > 0){
	for($i=0; $i<$linhas; $i++){
	$id_produto = $res[$i]['produto'];
	$quantidade = $res[$i]['quantidade'];
	$id = $res[$i]['id'];
	$tipo = $res[0]['tipo'];

if($tipo == 'Produto'){

$query2 = $pdo->query("SELECT * from produtos where id = '$id_produto'");
$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);

        $estoque = $res2[0]['estoque'];
		$tem_estoque = $res2[0]['tem_estoque'];
		$vendas = $res2[0]['vendas'];
    }else{       
        $estoque = 0;
		$tem_estoque = 0;
		$vendas = 0;
    }

$pdo->query("DELETE FROM $tabela WHERE id = '$id' ");

if($tem_estoque == 'Sim'){
	$novo_estoque = $estoque + $quantidade;
	$vendas = $vendas - $quantidade;
	//adicionar os produtos na tabela produtos
	//$pdo->query("UPDATE produtos SET estoque = '$novo_estoque', vendas = '$vendas' WHERE id = '$id_produto'"); 
}

}

}

?>