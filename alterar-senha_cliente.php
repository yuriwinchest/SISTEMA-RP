<?php 
require_once("conexao.php");

$senha = $_POST['senha'];
$re_senha = $_POST['re_senha'];
$token = $_POST['token'];
$telefone = $_POST['telefone'];

$_SESSION['temp_reset_email'] = $_REQUEST['telefone'];
$_SESSION['temp_reset_token'] = $_REQUEST['token'];

if($senha != $re_senha){
     echo 'As senhas são diferentes!!';
     exit();
}

        $senha = password_hash($senha, PASSWORD_DEFAULT);

          $query = $pdo->prepare("UPDATE clientes SET senha_crip = :senha, token = :token WHERE telefone = '$telefone'");

               $query->bindValue(":senha", "$senha");
               $query->bindValue(":token", "$token");
               $query->execute();

        echo 'Senha alterada com Sucesso';


?>