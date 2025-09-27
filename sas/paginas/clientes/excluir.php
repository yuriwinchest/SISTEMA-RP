<?php 
$tabela = 'empresas';
require_once("../../../conexao.php");

$id = $_POST['id'];



$query = $pdo->query("SELECT * FROM receber_sas where cliente = '$id' and pago = 'Não'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
if (@count($res) > 0) {
  echo 'Você não pode excluir este cliente, existem Valores a receber associadas a ele, primeiro exclua a conta e depois exclua o cliente!';
  exit();
}


$pdo->query("DELETE FROM $tabela WHERE id = '$id' ");
$pdo->query("DELETE FROM usuarios WHERE empresa = '$id' ");
$pdo->query("DELETE FROM receber_sas WHERE cliente = '$id' and pago != 'Sim' ");
$pdo->query("DELETE FROM config WHERE empresa = '$id' ");
$pdo->query("DELETE FROM clientes_recursos WHERE empresa = '$id' ");
echo 'Excluído com Sucesso';
?>