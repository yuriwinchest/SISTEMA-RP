<?php
@session_start();
$id_usuario = @$_SESSION['id'];
$tabela = 'agendas';
require_once("../../../conexao.php");


$id = $_POST['id'];
$cad_title = $_POST['cad_title'];
$cad_obs = $_POST['cad_obs'];
$cad_start = $_POST['cad_start'];
$cad_end = $_POST['cad_end'];
$cad_color = $_POST['cad_color'];
$cad_user_id = $_POST['cad_user_id'];




if ($id == "") {
	$query = $pdo->prepare("INSERT INTO $tabela SET title = :cad_title, obs = :cad_obs, start = :cad_start, end = :cad_end, color = :cad_color, user_id = :cad_user_id ");
} else {
	$query = $pdo->prepare("UPDATE $tabela SET title = :cad_title, obs = :cad_obs, start = :cad_start, end = :cad_end, color = :cad_color, user_id = :cad_user_id where id = '$id'");
}
$query->bindValue(":cad_title", "$cad_title");
$query->bindValue(":cad_obs", "$cad_obs");
$query->bindValue(":cad_start", "$cad_start");
$query->bindValue(":cad_end", "$cad_end");
$query->bindValue(":cad_color", "$cad_color");
$query->bindValue(":cad_user_id", "$cad_user_id");

$query->execute();

echo 'Salvo com Sucesso';


