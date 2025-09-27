<?php 
@session_start();
require_once("conexao.php");

$data_atual = date('Y-m-d');

$id_usu = @$_POST['id'];
$pagina = @$_POST['pagina'];
if($id_usu != ""){

	$query = $pdo->prepare("SELECT * from usuarios where id = :id");
	$query->bindValue(":id", "$id_usu");
	$query->execute();
	$res = $query->fetchAll(PDO::FETCH_ASSOC);
	$linhas = @count($res);
	if($linhas > 0){

	$_SESSION['nome'] = $res[0]['nome'];
	$_SESSION['id'] = $res[0]['id'];
	$_SESSION['nivel'] = $res[0]['nivel'];
	$_SESSION['empresa'] = $res[0]['empresa'];

	$empresa = $res[0]['empresa'];

	if($empresa > 0){

		//verificar se tem período de teste
		$query = $pdo->prepare("SELECT * from empresas where id = :id_empresa");
		$query->bindValue(":id_empresa", "$empresa");
		$query->execute();
		$res = $query->fetchAll(PDO::FETCH_ASSOC);
		$data_teste = @$res[0]['data_teste'];
		if($data_teste != ""){
			if(strtotime($data_atual) > strtotime($data_teste)){
				$_SESSION['msg'] = 'Seu prazo de testes expirou, contate o administrador!'; 
				echo "<script>localStorage.setItem('id_usu', '')</script>";
				echo '<script>window.location="login"</script>'; 

				$pdo->query("UPDATE empresas SET ativo = 'Não' WHERE id = '$empresa' ");
				$pdo->query("UPDATE usuarios SET ativo = 'Não' WHERE empresa = '$empresa' ");
				exit(); 
			}
		}


		if($pagina == ""){
		echo '<script>window.location="painel"</script>';  
		}else{
			echo '<script>window.location="painel/'.$pagina.'"</script>';  
		}

	}else{
		if($pagina == ""){
		echo '<script>window.location="sas"</script>';  
		}else{
			echo '<script>window.location="sas/'.$pagina.'"</script>';  
		}
	}

	
	
	}else{
		echo "<script>localStorage.setItem('id_usu', '')</script>";
		echo '<script>window.location="login"</script>';
	}
}

$usuario = @$_POST['usuario'];
$senha = @$_POST['senha'];
$salvar = @$_POST['salvar'];


$query = $pdo->prepare("SELECT * from usuarios where email = :email order by id desc limit 1");
$query->bindValue(":email", "$usuario");
$query->execute();
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = @count($res);

if($linhas > 0){

	if(!password_verify($senha, $res[0]['senha_crip'])){
		echo '<script>window.alert("Dados Incorretos!!")</script>'; 
		echo '<script>window.location="login"</script>';  
		exit();
	}

	if($res[0]['ativo'] != 'Sim'){
		$_SESSION['msg'] = 'Seu Acesso foi desativado!'; 
		echo '<script>window.location="login"</script>';  
	}

	$_SESSION['nome'] = $res[0]['nome'];
	$_SESSION['id'] = $res[0]['id'];
	$_SESSION['nivel'] = $res[0]['nivel'];
	$_SESSION['registros'] = $res[0]['mostrar_registros'];
	$_SESSION['empresa'] = $res[0]['empresa'];

	$empresa = $res[0]['empresa'];

	$id = $res[0]['id'];

	if($salvar == 'Sim'){
		echo "<script>localStorage.setItem('email_usu', '$usuario')</script>";
		echo "<script>localStorage.setItem('senha_usu', '$senha')</script>";
		echo "<script>localStorage.setItem('id_usu', '$id')</script>";
	}else{
		echo "<script>localStorage.setItem('email_usu', '')</script>";
		echo "<script>localStorage.setItem('senha_usu', '')</script>";
		echo "<script>localStorage.setItem('id_usu', '')</script>";
	}

	
	if($empresa > 0){

		//verificar se tem período de teste
		$query = $pdo->prepare("SELECT * from empresas where id = :id_empresa");
		$query->bindValue(":id_empresa", "$empresa");
		$query->execute();
		$res = $query->fetchAll(PDO::FETCH_ASSOC);
		$data_teste = @$res[0]['data_teste'];
		if($data_teste != ""){
			if(strtotime($data_atual) > strtotime($data_teste)){
				$_SESSION['msg'] = 'Seu prazo de testes expirou, contate o administrador!'; 
				echo '<script>window.location="login"</script>';  
				$pdo->query("UPDATE empresas SET ativo = 'Não' WHERE id = '$empresa' ");
				$pdo->query("UPDATE usuarios SET ativo = 'Não' WHERE empresa = '$empresa' ");
				exit();
			}
		}

		echo '<script>window.location="painel"</script>';
	}else{
		echo '<script>window.location="sas"</script>';
	}

}else{
	$_SESSION['msg'] = 'Dados Incorretos!'; 
	echo '<script>window.location="login"</script>';  
}


 ?>

