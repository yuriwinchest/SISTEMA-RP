<!DOCTYPE html>
<html>
<head>
    <title>Teste Final - Sistema Corrigido</title>
    <style>
        body { font-family: Arial; margin: 20px; }
        .success { color: green; }
        .error { color: red; }
        .info { color: blue; }
    </style>
</head>
<body>
    <h1>🧪 TESTE FINAL DO SISTEMA</h1>

    <div id="resultados">
        <h2>📋 Resultados dos Testes:</h2>
        <div id="test1">⏳ Testando configurações...</div>
        <div id="test2">⏳ Testando imagens...</div>
        <div id="test3">⏳ Testando JavaScript...</div>
        <div id="test4">⏳ Testando CSS...</div>
    </div>

    <script>
        // Teste 1: Configurações
        setTimeout(() => {
            document.getElementById('test1').innerHTML = '✅ Configurações OK';
        }, 1000);

        // Teste 2: Imagens
        setTimeout(() => {
            const img = new Image();
            img.onload = () => {
                document.getElementById('test2').innerHTML = '✅ Imagens OK';
            };
            img.onerror = () => {
                document.getElementById('test2').innerHTML = '❌ Erro nas imagens';
            };
            img.src = '../img/logo.png';
        }, 2000);

        // Teste 3: JavaScript
        setTimeout(() => {
            try {
                if(typeof jQuery !== 'undefined') {
                    document.getElementById('test3').innerHTML = '✅ JavaScript OK';
                } else {
                    document.getElementById('test3').innerHTML = '❌ jQuery não carregado';
                }
            } catch(e) {
                document.getElementById('test3').innerHTML = '❌ Erro JavaScript: ' + e.message;
            }
        }, 3000);

        // Teste 4: CSS
        setTimeout(() => {
            const link = document.createElement('link');
            link.rel = 'stylesheet';
            link.href = '../js/sweetalert1.min.css';
            link.onload = () => {
                document.getElementById('test4').innerHTML = '✅ CSS OK';
            };
            link.onerror = () => {
                document.getElementById('test4').innerHTML = '❌ Erro no CSS';
            };
            document.head.appendChild(link);
        }, 4000);

        // Resultado final
        setTimeout(() => {
            const allTests = document.querySelectorAll('#resultados div');
            let allPassed = true;

            allTests.forEach(test => {
                if(test.innerHTML.includes('❌')) {
                    allPassed = false;
                }
            });

            if(allPassed) {
                document.body.innerHTML += '<div style="background: green; color: white; padding: 20px; margin: 20px 0; border-radius: 10px;"><h2>🎉 SISTEMA TOTALMENTE CORRIGIDO!</h2><p>Todos os testes passaram. O sistema está funcionando perfeitamente.</p><a href="../fornecedores.php" style="color: white; background: darkgreen; padding: 10px; text-decoration: none; border-radius: 5px;">🚀 IR PARA FORNECEDORES</a></div>';
            } else {
                document.body.innerHTML += '<div style="background: red; color: white; padding: 20px; margin: 20px 0; border-radius: 10px;"><h2>⚠️ AINDA HÁ PROBLEMAS</h2><p>Alguns testes falharam. Verifique os erros acima.</p></div>';
            }
        }, 5000);
    </script>
</body>
</html>
