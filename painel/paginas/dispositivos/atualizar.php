<?php
@session_start();
$id_empresa = @$_SESSION['empresa'];
header('Content-Type: application/json');

error_reporting(E_ALL);
ini_set('display_errors', 1);

$tabela = 'dispositivos';
require_once("../../../conexao.php");
$id_empresa = @$_SESSION['empresa'];
require_once("../../buscar_config.php");
$appkey = $_POST['appkey'];

$stmt = $pdo->prepare("UPDATE $tabela SET status = :status, status_api = :status_api WHERE appkey = :appkey and empresa = '$id_empresa'");

if($stmt->execute([':status' => 'Ativo', ':status_api' => 'conectado', ':appkey' => $appkey ]))
{
    $stmt = $pdo->prepare("UPDATE config SET token_whatsapp = :token where empresa = '$id_empresa'");
    $stmt->execute([':token' => $appkey]);
    
    
    $response = json_encode(['status' => 200]);
}
else
{
     $response = json_encode(['status' => 500]);
}

echo $response;

?>

