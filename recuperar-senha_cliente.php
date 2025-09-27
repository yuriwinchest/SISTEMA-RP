<?php 
require_once("conexao.php");

$telefone = $_POST['telefone'];

$query = $pdo->prepare("SELECT * from clientes where telefone = :telefone");
$query->bindValue(":telefone", "$telefone");
$query->execute();
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0){    
	$telefone = $res[0]['telefone'];

        $token = hash('sha256',time());

        $q = $pdo->prepare("UPDATE clientes SET token=? WHERE telefone=?");
        $q->execute([$token,$telefone]);
        
        $reset_link = $url_sistema.'resetar-senha_cliente.php'.'?telefone='.$telefone.'&token='.$token;
    

    //echo $reset_link;
    //exit();

       //disparar para o telefone do cliente a recuperação
    if($api_whatsapp != 'Não' and $telefone != ''){

    $telefone_envio = '55'.preg_replace('/[ ()-]+/' , '' , $telefone);
    $mensagem = '*'.$nome_sistema.'*%0A';
    $mensagem .= '🤩 _Link para Recuperação de Senha_ %0A%0A';
    $mensagem .= $reset_link;         
    
    require('painel/apis/texto.php');   
    }

    echo 'Recuperado com Sucesso';
}else{
    echo 'Esse Telefone não está Cadastrado!';
}

?>