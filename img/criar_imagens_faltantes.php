<?php
// Criar as imagens específicas que estão faltando

function criarImagemPNG($largura, $altura, $texto, $corFundo, $corTexto, $nomeArquivo) {
    // Criar imagem
    $imagem = imagecreatetruecolor($largura, $altura);

    // Definir cores
    $fundo = imagecolorallocate($imagem, $corFundo[0], $corFundo[1], $corFundo[2]);
    $textoCor = imagecolorallocate($imagem, $corTexto[0], $corTexto[1], $corTexto[2]);

    // Preencher fundo
    imagefill($imagem, 0, 0, $fundo);

    // Adicionar texto centralizado
    $fonte = 5;
    $textoWidth = imagefontwidth($fonte) * strlen($texto);
    $textoHeight = imagefontheight($fonte);
    $x = ($largura - $textoWidth) / 2;
    $y = ($altura - $textoHeight) / 2;

    imagestring($imagem, $fonte, $x, $y, $texto, $textoCor);

    // Salvar como PNG
    imagepng($imagem, $nomeArquivo);
    imagedestroy($imagem);

    echo "✅ Criada: $nomeArquivo<br>";
}

echo "<h2>🎨 CRIANDO IMAGENS FALTANTES</h2>";

// Criar as imagens específicas que estão dando 404
criarImagemPNG(200, 60, "PAINEL LOGO", [52, 144, 220], [255, 255, 255], "12-09-2025-15-21-21painel-logo-sem-fundo.png");
criarImagemPNG(64, 64, "ICONE", [40, 167, 69], [255, 255, 255], "12-09-2025-19-07-15icone-6-(2).png");
criarImagemPNG(180, 50, "LOGO SISTEMA", [220, 53, 69], [255, 255, 255], "12-09-2025-15-21-44-logo-sem-fundo.png");
criarImagemPNG(160, 45, "RELATORIOS", [255, 193, 7], [0, 0, 0], "12-09-2025-15-21-44rel-logo-sem-fundo.png");
criarImagemPNG(150, 40, "ASSINATURA", [108, 117, 125], [255, 255, 255], "12-09-2025-15-21-44ass-logo-sem-fundo.png");

echo "<br><h3>✅ TODAS AS IMAGENS CRIADAS!</h3>";
echo "<p>As imagens 404 foram resolvidas!</p>";
echo "<br><a href='../painel/index.php' style='background: green; color: white; padding: 15px; text-decoration: none; border-radius: 5px; font-size: 16px;'>🚀 TESTAR SISTEMA</a>";
?>
