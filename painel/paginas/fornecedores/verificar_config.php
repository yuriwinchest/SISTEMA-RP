<?php
require_once("../../../conexao.php");

// Verificar configurações do sistema
$query = $pdo->query("SELECT * from config where empresa = 0 or empresa is null");
$res = $query->fetchAll(PDO::FETCH_ASSOC);

if(count($res) > 0) {
    $config = $res[0];
    echo "<h3>Configurações do Sistema:</h3>";
    echo "<strong>Logo Sistema:</strong> " . $config['logo'] . "<br>";
    echo "<strong>Logo Painel:</strong> " . $config['logo_painel'] . "<br>";
    echo "<strong>Logo Relatórios:</strong> " . $config['logo_rel'] . "<br>";
    echo "<strong>Ícone Sistema:</strong> " . $config['icone'] . "<br>";
    echo "<strong>Fundo Login:</strong> " . $config['fundo_login'] . "<br>";
} else {
    echo "Nenhuma configuração encontrada!";
}
?>
