<?php 
@session_start();
$id_empresa = @$_SESSION['empresa'];
$tabela = 'config';
require_once("../../../conexao.php");

$mao_obra_os     = isset($_POST['mao_obra_os']) ? $_POST['mao_obra_os'] : null;
$senha_aparelho_os = isset($_POST['senha_aparelho_os']) ? $_POST['senha_aparelho_os'] : null;
$defeito_os      = isset($_POST['defeito_os']) ? $_POST['defeito_os'] : null;
$avarias_os      = isset($_POST['avarias_os']) ? $_POST['avarias_os'] : null;
$acessorios_os   = isset($_POST['acessorios_os']) ? $_POST['acessorios_os'] : null;
$laudo_os        = isset($_POST['laudo_os']) ? $_POST['laudo_os'] : null;

$sql = "UPDATE config SET 
    mao_obra_os = :mao_obra_os,
    senha_aparelho_os = :senha_aparelho_os,
    defeito_os = :defeito_os,
    avarias_os = :avarias_os,
    acessorios_os = :acessorios_os,
    laudo_os = :laudo_os
WHERE empresa = :id";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    ':mao_obra_os' => $mao_obra_os,
    ':senha_aparelho_os' => $senha_aparelho_os,
    ':defeito_os' => $defeito_os,
    ':avarias_os' => $avarias_os,
    ':acessorios_os' => $acessorios_os,
    ':laudo_os' => $laudo_os,
    ':id' => $id_empresa
]);


echo 'Editado com Sucesso';


?>