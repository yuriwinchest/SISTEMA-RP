<?php 
@session_start();
$id_empresa = @$_SESSION['empresa'];
$tabela = 'config';
require_once("../../../conexao.php");

$mao_obra_orc     = isset($_POST['mao_obra_orc']) ? $_POST['mao_obra_orc'] : null;
$senha_aparelho_orc = isset($_POST['senha_aparelho_orc']) ? $_POST['senha_aparelho_orc'] : null;
$defeito_orc      = isset($_POST['defeito_orc']) ? $_POST['defeito_orc'] : null;
$avarias_orc      = isset($_POST['avarias_orc']) ? $_POST['avarias_orc'] : null;
$acessorios_orc   = isset($_POST['acessorios_orc']) ? $_POST['acessorios_orc'] : null;
$laudo_orc        = isset($_POST['laudo_orc']) ? $_POST['laudo_orc'] : null;

$sql = "UPDATE config SET 
    mao_obra_orc = :mao_obra_orc,
    senha_aparelho_orc = :senha_aparelho_orc,
    defeito_orc = :defeito_orc,
    avarias_orc = :avarias_orc,
    acessorios_orc = :acessorios_orc,
    laudo_orc = :laudo_orc
WHERE empresa = :id";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    ':mao_obra_orc' => $mao_obra_orc,
    ':senha_aparelho_orc' => $senha_aparelho_orc,
    ':defeito_orc' => $defeito_orc,
    ':avarias_orc' => $avarias_orc,
    ':acessorios_orc' => $acessorios_orc,
    ':laudo_orc' => $laudo_orc,
    ':id' => $id_empresa
]);


echo 'Editado com Sucesso';


?>