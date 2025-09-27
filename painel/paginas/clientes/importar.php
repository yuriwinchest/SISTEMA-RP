<?php 
@session_start();
$id_usuario = @$_SESSION['id'];
$id_empresa = @$_SESSION['empresa'];
require_once '../../funcoes/SimpleXLSX.php';
require_once("../../../conexao.php");

$senha = '123';
$senha_crip = password_hash($senha, PASSWORD_DEFAULT);

use Shuchkin\SimpleXLSX; // <-- ESSENCIAL para funcionar

if (isset($_FILES['arquivo_excel']) && $_FILES['arquivo_excel']['name'] != '') {
    if ($xlsx = SimpleXLSX::parse($_FILES['arquivo_excel']['tmp_name'])) {
        $linhas = $xlsx->rows();
        unset($linhas[0]);

        

       foreach ($linhas as $linha) {
            $linha = array_pad($linha, 22, null); // <--- garante 22 colunas

            $stmt = $pdo->prepare("INSERT INTO clientes (
                nome, cpf, telefone, email, endereco, numero, bairro, cidade, estado, cep,
                tipo_pessoa, data_cad, data_nasc, usuario, complemento, empresa,
                marketing, senha_crip, ativo, token, foto, assinatura
            ) VALUES (
                ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?
            )");


            // Substitui os valores específicos antes de executar
            $linha[15] = $id_empresa;     // índice 15 é 'empresa'
            $linha[17] = $senha_crip;     // índice 17 é 'senha_crip'
            $linha[18] = 'Sim';           // índice 18 é 'ativo'

            $stmt->execute($linha);
        }

        echo "Clientes importados com sucesso!";
    } else {
        echo "❌ Erro ao ler o arquivo: " . SimpleXLSX::parseError();
    }
} else {
    echo "❌ Nenhum arquivo enviado.";
}
?>
