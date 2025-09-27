<?php 
@session_start();
$id_empresa = @$_SESSION['empresa'];
$tabela = 'produtos';
require_once("../../../conexao.php");

$codigo = $_POST['codigo'];

$query = $pdo->query("SELECT * from $tabela where codigo = '$codigo' and empresa = '$id_empresa'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
if(@count($res) > 0){
	$id = $res[0]['id'];
	$nome = $res[0]['nome'];	
	$valor_venda = $res[0]['valor_venda'];	
	$estoque = $res[0]['estoque'];			
	$foto = $res[0]['foto'];
	$categoria = $res[0]['categoria'];
	

	echo $id.','.''.','.$nome.','.'';
}else{
	echo 'Código do Produto não encontrado!';
}



?>