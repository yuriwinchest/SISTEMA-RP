<?php
@session_start();
$id_empresa = @$_SESSION['empresa'];
require_once("../../../conexao.php");

// Teste simples para verificar se as colunas existem
$query = $pdo->query("SHOW COLUMNS FROM fornecedores");
$columns = $query->fetchAll(PDO::FETCH_ASSOC);

echo "<h3>Colunas da tabela fornecedores:</h3>";
foreach($columns as $column) {
    echo $column['Field'] . " - " . $column['Type'] . "<br>";
}

// Teste de inserção simples
if(isset($_POST['teste'])) {
    try {
        $query = $pdo->prepare("INSERT INTO fornecedores SET nome = 'TESTE', email = 'teste@teste.com', telefone = '11999999999', nome_vendedor = 'Vendedor Teste', telefone_vendedor = '11888888888', empresa = '$id_empresa', data = curDate()");
        $query->execute();
        echo "<br><strong style='color: green;'>TESTE DE INSERÇÃO: SUCESSO!</strong>";
    } catch(Exception $e) {
        echo "<br><strong style='color: red;'>ERRO: " . $e->getMessage() . "</strong>";
    }
}
?>

<form method="post">
    <button type="submit" name="teste" value="1">Testar Inserção</button>
</form>
