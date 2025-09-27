<?php 
@session_start();
$id_empresa = @$_SESSION['empresa'];
require_once("../../../conexao.php");
require_once("../../buscar_config.php");
$tabela = 'modelos';


$nome = $_POST['nome'];
$id = $_POST['id'];
$marca = @$_POST['marca'];
$equipamento = $_POST['equipamento'];

//validacao
$query = $pdo->query("SELECT * from $tabela where nome = '$nome'  and empresa = '$id_empresa'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$id_reg = @$res[0]['id'];
if(@count($res) > 0 and $id != $id_reg){
	echo 'Modelos já Cadastrada!';
	exit();
}

if($id == ""){
	$query = $pdo->prepare("INSERT INTO $tabela SET nome = :nome, ativo = 'Sim', marca = '$marca', equipamento = '$equipamento', empresa = '$id_empresa'");
	
}else{
	$query = $pdo->prepare("UPDATE $tabela SET nome = :nome, marca = '$marca', equipamento = '$equipamento' where id = '$id'");
}

// recuperar
$query->bindValue(":nome", "$nome");
$query->execute();

echo 'Salvo com Sucesso';

 ?>