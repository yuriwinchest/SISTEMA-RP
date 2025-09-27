<?php 
@session_start();
$id_empresa = @$_SESSION['empresa'];
$tabela = 'frequencias';
require_once("../../../conexao.php");
require_once("../../buscar_config.php");

$dias = $_POST['dias'];
$frequencia = $_POST['frequencia'];
$id = $_POST['id'];

if($dias == ""){
	$dias = 0;
}

//validacao
$query = $pdo->query("SELECT * from $tabela where frequencia = '$frequencia' and empresa = '$id_empresa'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$id_reg = @$res[0]['id'];
if(@count($res) > 0 and $id != $id_reg){
	echo 'frequencia já Cadastrado!';
	exit();
}


if($id == ""){
$query = $pdo->prepare("INSERT INTO $tabela SET frequencia = :frequencia, dias = :dias, empresa = '$id_empresa'");
	
}else{
$query = $pdo->prepare("UPDATE $tabela SET frequencia = :frequencia, dias = :dias where id = '$id'");
}
$query->bindValue(":frequencia", "$frequencia");
$query->bindValue(":dias", "$dias");
$query->execute();

echo 'Salvo com Sucesso';
 ?>