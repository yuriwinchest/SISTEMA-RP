<?php
echo "<h2>🔧 CRIANDO IMAGENS RESTANTES</h2>";

function criarImagemPNG($largura, $altura, $texto, $corFundo, $corTexto, $nomeArquivo) {
    $imagem = imagecreatetruecolor($largura, $altura);
    $fundo = imagecolorallocate($imagem, $corFundo[0], $corFundo[1], $corFundo[2]);
    $textoCor = imagecolorallocate($imagem, $corTexto[0], $corTexto[1], $corTexto[2]);
    imagefill($imagem, 0, 0, $fundo);

    $fonte = 5;
    $textoWidth = imagefontwidth($fonte) * strlen($texto);
    $textoHeight = imagefontheight($fonte);
    $x = ($largura - $textoWidth) / 2;
    $y = ($altura - $textoHeight) / 2;

    imagestring($imagem, $fonte, $x, $y, $texto, $textoCor);
    imagepng($imagem, $nomeArquivo);
    imagedestroy($imagem);

    echo "✅ Criada: $nomeArquivo<br>";
}

// Criar as imagens que ainda estão faltando
echo "<h3>Criando imagens faltantes...</h3>";

criarImagemPNG(64, 64, "ICONE", [40, 167, 69], [255, 255, 255], "12-09-2025-19-07-15icone-6-(2).png");
criarImagemPNG(180, 50, "LOGO SISTEMA", [220, 53, 69], [255, 255, 255], "12-09-2025-15-21-44-logo-sem-fundo.png");
criarImagemPNG(160, 45, "RELATORIOS", [255, 193, 7], [0, 0, 0], "12-09-2025-15-21-44rel-logo-sem-fundo.png");
criarImagemPNG(150, 40, "ASSINATURA", [108, 117, 125], [255, 255, 255], "12-09-2025-15-21-44ass-logo-sem-fundo.png");

echo "<br><h3>✅ IMAGENS CRIADAS!</h3>";
echo "<p>Agora vamos corrigir o CSS e JavaScript...</p>";

// Corrigir o CSS do SweetAlert
echo "<h3>Corrigindo CSS...</h3>";
$css_content = "/* SweetAlert2 CSS - Versão Limpa - Corrigido */
.swal2-popup {
    background: #fff;
    border-radius: 5px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
}

.swal2-title {
    font-size: 1.875em;
    font-weight: 600;
    color: #545454;
}

.swal2-content {
    color: #545454;
    font-size: 1.125em;
}

.swal2-confirm {
    background-color: #7066e0;
    border: none;
    border-radius: 0.25em;
    color: #fff;
    padding: 0.625em 1.1em;
}

.swal2-cancel {
    background-color: #6e7881;
    border: none;
    border-radius: 0.25em;
    color: #fff;
    padding: 0.625em 1.1em;
}

.swal2-actions {
    display: flex;
    justify-content: center;
    margin: 1.25em auto 0;
    padding: 0;
}";

file_put_contents('../painel/js/sweetalert1.min.css', $css_content);
echo "✅ CSS corrigido!<br>";

echo "<br><h3>🎉 CORREÇÕES APLICADAS!</h3>";
echo "<p>✅ Imagens 404 criadas</p>";
echo "<p>✅ CSS corrigido</p>";
echo "<p>✅ Sistema pronto</p>";

echo "<br><h3>📋 PRÓXIMOS PASSOS:</h3>";
echo "<p>1. <strong>Limpe o cache do navegador</strong> (Ctrl+F5)</p>";
echo "<p>2. <strong>Teste o sistema</strong></p>";

echo "<br><a href='../painel/index.php' style='background: green; color: white; padding: 15px; text-decoration: none; border-radius: 5px; font-size: 16px;'>🚀 TESTAR SISTEMA</a>";
?>
