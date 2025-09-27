<?php
@session_start();
$id_empresa = @$_SESSION['empresa'];
require_once("../../../conexao.php");

$nome_vendedor = $_POST['nome_vendedor'];

$query = $pdo->prepare("SELECT * FROM fornecedores WHERE nome_vendedor LIKE :nome_vendedor AND empresa = :empresa LIMIT 1");
$query->bindValue(":nome_vendedor", "%$nome_vendedor%");
$query->bindValue(":empresa", $id_empresa);
$query->execute();

$res = $query->fetchAll(PDO::FETCH_ASSOC);

if (count($res) > 0) {
    echo json_encode(array(
        'status' => 'success',
        'fornecedor' => $res[0]
    ));
} else {
    echo json_encode(array(
        'status' => 'error',
        'message' => 'Fornecedor não encontrado'
    ));
}
?>
