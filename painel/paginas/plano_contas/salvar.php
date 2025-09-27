<?php
@session_start();
$id_empresa = @$_SESSION['empresa'];

$tabela = 'plano_contas';
require_once("../../../conexao.php");
require_once("../../buscar_config.php");

$nome = $_POST['nome'];
$id = $_POST['id'];

//validacao nome
$query = $pdo->query("SELECT * from $tabela where nome = '$nome' and empresa = '$id_empresa'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$id_reg = @$res[0]['id'];
if (@count($res) > 0 and $id != $id_reg) {
	echo 'Nome já Cadastrado!';
	exit();
}


if ($id == "") {
	$query = $pdo->prepare("INSERT INTO $tabela SET nome = :nome, empresa = '$id_empresa' ");
} else {
	$query = $pdo->prepare("UPDATE $tabela SET nome = :nome where id = '$id'");
}
$query->bindValue(":nome", "$nome");

$query->execute();

echo 'Salvo com Sucesso';
