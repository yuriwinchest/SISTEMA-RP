<?php
require_once("../../../conexao.php");

$rg = $_POST['rg'];

$query = $pdo->prepare("SELECT * FROM clientes WHERE rg = :rg AND empresa = :empresa");
$query->bindValue(":rg", $rg);
$query->bindValue(":empresa", $id_empresa);
$query->execute();

$res = $query->fetchAll(PDO::FETCH_ASSOC);

if (count($res) > 0) {
    echo json_encode(array(
        'status' => 'success',
        'cliente' => $res[0]
    ));
} else {
    echo json_encode(array(
        'status' => 'error',
        'message' => 'RG não encontrado'
    ));
}
?>