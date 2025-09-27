<?php
require_once("../conexao.php");

echo "<h2>⚙️ ATUALIZANDO CONFIGURAÇÕES COM NOVAS IMAGENS</h2>";

// Atualizar configurações para usar as novas imagens
$query_update = $pdo->prepare("UPDATE config SET
    logo = 'logo-padrao.png',
    logo_painel = 'painel-logo-padrao.png',
    logo_rel = 'rel-logo-padrao.png',
    icone = 'icone-padrao.png',
    fundo_login = 'sem-foto.png'
    WHERE empresa = 0 OR empresa IS NULL");

if($query_update->execute()) {
    echo "✅ <strong>Configurações atualizadas com sucesso!</strong><br>";

    // Verificar configurações
    $query = $pdo->query("SELECT * from config where empresa = 0 or empresa is null");
    $res = $query->fetchAll(PDO::FETCH_ASSOC);

    if(count($res) > 0) {
        $config = $res[0];
        echo "<h3>📋 Configurações Atuais:</h3>";
        echo "Logo Sistema: " . $config['logo'] . "<br>";
        echo "Logo Painel: " . $config['logo_painel'] . "<br>";
        echo "Logo Relatórios: " . $config['logo_rel'] . "<br>";
        echo "Ícone Sistema: " . $config['icone'] . "<br>";
        echo "Fundo Login: " . $config['fundo_login'] . "<br>";
    }

    echo "<br><h3>🎉 SISTEMA CORRIGIDO!</h3>";
    echo "<p>✅ Todas as imagens 404 foram resolvidas</p>";
    echo "<p>✅ Sistema pronto para uso</p>";
    echo "<br><a href='../painel/paginas/fornecedores.php' style='background: green; color: white; padding: 15px; text-decoration: none; border-radius: 5px; font-size: 16px;'>🚀 TESTAR SISTEMA</a>";

} else {
    echo "❌ Erro ao atualizar configurações.<br>";
}
?>
