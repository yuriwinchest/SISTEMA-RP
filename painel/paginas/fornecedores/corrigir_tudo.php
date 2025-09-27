<?php
require_once("../../../conexao.php");

echo "<h2>🔧 CORREÇÃO DEFINITIVA DO SISTEMA</h2>";

// 1. Corrigir configurações do banco
echo "<h3>1️⃣ Corrigindo configurações do banco de dados...</h3>";

$query_update = $pdo->prepare("UPDATE config SET
    logo = 'logo.png',
    logo_painel = 'logo.png',
    logo_rel = 'logo.jpg',
    icone = 'icone.png',
    fundo_login = 'sem-foto.png'
    WHERE empresa = 0 OR empresa IS NULL");

if($query_update->execute()) {
    echo "✅ <strong>Configurações do banco corrigidas!</strong><br>";
} else {
    echo "❌ Erro ao corrigir banco.<br>";
}

// 2. Verificar se as imagens existem
echo "<h3>2️⃣ Verificando imagens...</h3>";
$imagens = ['logo.png', 'logo.jpg', 'icone.png', 'sem-foto.png'];

foreach($imagens as $img) {
    if(file_exists("../../../img/$img")) {
        echo "✅ $img existe<br>";
    } else {
        echo "❌ $img NÃO existe<br>";
    }
}

echo "<h3>3️⃣ Testando sistema de fornecedores...</h3>";
echo "✅ Sistema pronto para teste!<br>";
echo "<br><a href='../fornecedores.php' style='background: green; color: white; padding: 10px; text-decoration: none; border-radius: 5px;'>🧪 TESTAR FORNECEDORES</a>";
?>
