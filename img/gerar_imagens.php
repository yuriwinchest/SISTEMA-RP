<?php
// Script para gerar imagens padrão do sistema

// Função para criar imagem com texto
function criarImagem($largura, $altura, $texto, $corFundo, $corTexto, $nomeArquivo) {
    // Criar imagem
    $imagem = imagecreate($largura, $altura);

    // Definir cores
    $fundo = imagecolorallocate($imagem, $corFundo[0], $corFundo[1], $corFundo[2]);
    $textoCor = imagecolorallocate($imagem, $corTexto[0], $corTexto[1], $corTexto[2]);

    // Preencher fundo
    imagefill($imagem, 0, 0, $fundo);

    // Adicionar texto centralizado
    $fonte = 5; // Fonte padrão do GD
    $textoWidth = imagefontwidth($fonte) * strlen($texto);
    $textoHeight = imagefontheight($fonte);
    $x = ($largura - $textoWidth) / 2;
    $y = ($altura - $textoHeight) / 2;

    imagestring($imagem, $fonte, $x, $y, $texto, $textoCor);

    // Salvar imagem
    imagepng($imagem, $nomeArquivo);
    imagedestroy($imagem);

    echo "✅ Criada: $nomeArquivo<br>";
}

echo "<h2>🎨 GERANDO IMAGENS PADRÃO DO SISTEMA</h2>";

// Criar logo principal
criarImagem(200, 60, "LOGO SISTEMA", [52, 144, 220], [255, 255, 255], "logo-padrao.png");

// Criar ícone do sistema
criarImagem(64, 64, "ICONE", [52, 144, 220], [255, 255, 255], "icone-padrao.png");

// Criar logo para painel
criarImagem(180, 50, "PAINEL", [40, 167, 69], [255, 255, 255], "painel-logo-padrao.png");

// Criar logo para relatórios
criarImagem(160, 45, "RELATORIOS", [220, 53, 69], [255, 255, 255], "rel-logo-padrao.png");

// Criar logo para assinatura
criarImagem(150, 40, "ASSINATURA", [255, 193, 7], [0, 0, 0], "ass-logo-padrao.png");

// Criar ícone genérico
criarImagem(48, 48, "ICONE", [108, 117, 125], [255, 255, 255], "icone-6-padrao.png");

echo "<br><h3>✅ Todas as imagens foram criadas!</h3>";
echo "<p>Agora acesse: <a href='atualizar_config.php'>atualizar_config.php</a> para configurar o sistema</p>";
?>
