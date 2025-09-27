<?php
$tabela = 'cobrancas';
require_once("../../../conexao.php");

$id = $_POST['id'];

$pdo->query("DELETE FROM $tabela WHERE id = '$id' ");
$pdo->query("DELETE FROM receber WHERE referencia = 'Cobrança' and id_ref = '$id' ");

echo 'Excluído com Sucesso';
?>