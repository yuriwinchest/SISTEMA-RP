<?php
require_once("../../../conexao.php");

echo "<h2>🔧 CORRIGINDO CONFIGURAÇÕES DO SISTEMA</h2>";

// Verificar configurações atuais
$query = $pdo->query("SELECT * from config where empresa = 0 or empresa is null");
$res = $query->fetchAll(PDO::FETCH_ASSOC);

if(count($res) > 0) {
    $config = $res[0];

    echo "<h3>📋 Configurações Atuais:</h3>";
    echo "Logo Sistema: " . $config['logo'] . "<br>";
    echo "Logo Painel: " . $config['logo_painel'] . "<br>";
    echo "Logo Relatórios: " . $config['logo_rel'] . "<br>";
    echo "Ícone Sistema: " . $config['icone'] . "<br>";

    // Verificar quais arquivos existem
    echo "<h3>🔍 Verificando arquivos existentes:</h3>";
    $imagens_existentes = [
        'logo.png',
        'logo.jpg',
        'icone.png',
        'sem-foto.png',
        '03-02-2025-20-31-32-logo-png.png',
        '22-04-2025-23-00-22-logo_png.png',
        '04-03-2025-23-54-9.547 icone.png'
    ];

    echo "Arquivos encontrados na pasta img:<br>";
    foreach($imagens_existentes as $img) {
        if(file_exists("../../../img/$img")) {
            echo "✅ $img<br>";
        } else {
            echo "❌ $img<br>";
        }
    }

    // Corrigir configurações se necessário
    if(isset($_POST['corrigir'])) {
        echo "<h3>🔧 Aplicando correções...</h3>";

        // Atualizar para imagens que existem
        $query_update = $pdo->prepare("UPDATE config SET
            logo = 'logo.png',
            logo_painel = 'logo.png',
            logo_rel = 'logo.jpg',
            icone = 'icone.png',
            fundo_login = 'sem-foto.png'
            WHERE empresa = 0 OR empresa IS NULL");

        if($query_update->execute()) {
            echo "✅ <strong>Configurações corrigidas com sucesso!</strong><br>";
            echo "Agora as imagens devem carregar corretamente.<br>";
        } else {
            echo "❌ Erro ao corrigir configurações.<br>";
        }
    }

    echo '<br><form method="post">';
    echo '<button type="submit" name="corrigir" style="background: green; color: white; padding: 10px; border: none; cursor: pointer;">🔧 CORRIGIR CONFIGURAÇÕES</button>';
    echo '</form>';

} else {
    echo "❌ Nenhuma configuração encontrada!";
}
?>
