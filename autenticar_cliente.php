<?php 
@session_start();
require_once("conexao.php");

$data_atual = date('Y-m-d');

$telefone = @$_POST['telefone'];
$senha = @$_POST['senha'];

$query = $pdo->prepare("SELECT * from clientes where telefone = :telefone order by id desc limit 1");
$query->bindValue(":telefone", "$telefone");
$query->execute();
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = @count($res);

if($linhas > 0){

	if(!password_verify($senha, $res[0]['senha_crip'])){
		echo '<script>window.alert("Dados Incorretos!!")</script>'; 
		echo '<script>window.location="acesso"</script>';  
		exit();
	}

	if($res[0]['ativo'] != 'Sim'){
		$_SESSION['msg'] = 'Seu Acesso foi desativado!'; 
		echo '<script>window.location="acesso"</script>';  
	}

	$_SESSION['nome'] = $res[0]['nome'];
	$_SESSION['id_cliente'] = $res[0]['id'];
	$_SESSION['empresa'] = $res[0]['empresa'];

	$empresa = $res[0]['empresa'];

	$id = $res[0]['id'];	
	
	if($empresa > 0){		
	echo '<script>window.location="painel_cliente"</script>';		
	}

}else{
	$_SESSION['msg'] = 'Telefone Não Cadastrado!'; 
	echo '<script>window.location="acesso"</script>';  
}


 ?>

