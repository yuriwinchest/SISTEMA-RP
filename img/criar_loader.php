<?php
// Criar um loader.gif simples
$imagem = imagecreate(32, 32);
$fundo = imagecolorallocate($imagem, 255, 255, 255);
$azul = imagecolorallocate($imagem, 52, 144, 220);

// Desenhar um círculo simples
imagefilledellipse($imagem, 16, 16, 30, 30, $azul);

// Salvar como GIF
imagegif($imagem, 'loader-novo.gif');
imagedestroy($imagem);

echo "✅ Loader criado: loader-novo.gif";
?>
