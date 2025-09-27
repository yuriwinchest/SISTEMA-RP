<?php 
@session_start();
$id_empresa = @$_SESSION['empresa'];

$tabela = 'contratos';
require_once("../../../conexao.php");
require_once("../../buscar_config.php");

$id = @$_POST['id'];
$texto = @$_POST['texto'];
$titulo = @$_POST['titulo'];


if($titulo == ''){
	echo 'Preecha o titulo do contrato!';
	exit();
}

if($id == ""){
$query = $pdo->prepare("INSERT INTO $tabela SET modelo = :titulo, texto = :texto, empresa = '$id_empresa'");
}else{
$query = $pdo->prepare("UPDATE $tabela SET modelo = :titulo, texto = :texto where id = '$id'");
}
$query->bindValue(":titulo", "$titulo");
$query->bindValue(":texto", "$texto");
$query->execute();

echo 'Salvo com Sucesso';
 ?>