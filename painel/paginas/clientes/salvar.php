<?php
@session_start();
$id_usuario = @$_SESSION['id'];
$id_empresa = @$_SESSION['empresa'];

$tabela = 'clientes';
require_once("../../../conexao.php");
require_once("../../buscar_config.php");


$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$data_nasc = $_POST['data_nasc'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$orgao_emissor = $_POST['orgao_emissor'];
$tipo_pessoa = $_POST['tipo_pessoa'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];
$id = $_POST['id'];
$complemento = $_POST['complemento'];
$enviar_whatsapp = $_POST['enviar_whatsapp'];
$api_pagamento_cliente = $_POST['api_pagamento_cliente'];
$formas_pgto = $_POST['formas_pgto'];

$senha = '123';
$senha_crip = password_hash($senha, PASSWORD_DEFAULT);

$data_nasc = date("Y-m-d", @strtotime(@str_replace("/", "-", $_POST["data_nasc"])));

if($tipo_pessoa == 'Física' and $cpf != ""){
	require_once("../../validar_cpf.php");
}


//validacao email
if($email != ""){
	$query = $pdo->query("SELECT * from $tabela where email = '$email' and empresa = '$id_empresa'");
	$res = $query->fetchAll(PDO::FETCH_ASSOC);
	$id_reg = @$res[0]['id'];
	if(@count($res) > 0 and $id != $id_reg){
		echo 'Email já Cadastrado!';
		exit();
	}
}



//validacao telefone
if($telefone != ""){
	$query = $pdo->query("SELECT * from $tabela where telefone = '$telefone' and empresa = '$id_empresa'");
	$res = $query->fetchAll(PDO::FETCH_ASSOC);
	$id_reg = @$res[0]['id'];
	if(@count($res) > 0 and $id != $id_reg){
		echo 'Telefone já Cadastrado!';
		exit();
	}
}


if($data_nasc == ""){
	$nasc = '';
}else{
	$nasc = " ,data_nasc = '$data_nasc'";

}



//limitar quantidade de clientes por plano
$query = $pdo->query("SELECT * from empresas where id = '$id_empresa' ");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$plano = @$res[0]['plano'];

$query = $pdo->query("SELECT * from planos where id = '$plano' ");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$clientes_plano = @$res[0]['clientes'];

$query = $pdo->query("SELECT * from clientes where empresa = '$id_empresa' ");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$clientes_cadastrados = @count($res);

if($clientes_plano > 0){
	if($clientes_cadastrados >= $clientes_plano){
		echo 'Você já possui '.$clientes_cadastrados.' Clientes cadastrados, seu plano permite o máximo de '.$clientes_plano.' clientes!';
		exit();
	}
}


if($id == ""){
$query = $pdo->prepare("INSERT INTO $tabela SET nome = :nome, email = :email, telefone = :telefone, data_cad = curDate(), endereco = :endereco, cpf = :cpf, rg = :rg, orgao_emissor = :orgao_emissor, tipo_pessoa = :tipo_pessoa $nasc, usuario = '$id_usuario', numero = :numero, bairro = :bairro, cidade = :cidade, estado = :estado, cep = :cep, complemento = :complemento, empresa = '$id_empresa', senha_crip = '$senha_crip', ativo = 'Sim', foto = 'sem-foto.jpg', api_pagamento_cliente = :api_pagamento_cliente, formas_pgto = :formas_pgto");


//api whats
	if ($api_whatsapp != 'Não' and $telefone != '' and $enviar_whatsapp != 'Não') {
		$telefone_envio = '55' . preg_replace('/[ ()-]+/', '', $telefone);

		$mensagem_whatsapp = '*' . $nome_sistema . '*%0A%0A';
		$mensagem_whatsapp .= '_Olá ' . $nome . ' Você foi Cadastrado no Sistema!!_ %0A';
		$mensagem_whatsapp .= '*Telefone:* ' . $telefone . ' %0A';
		$mensagem_whatsapp .= '*Senha:* ' . $senha . ' %0A';
		$mensagem_whatsapp .= '*Url Acesso:* ' . $url_sistema . 'acesso %0A%0A';
		$mensagem_whatsapp .= '_Use seu telefone e a senha 123 para o primeiro acesso_%0A';
		$mensagem_whatsapp .= '_Após acessar seu painel, troque a senha para uma de sua preferência!_';
		$mensagem = $mensagem_whatsapp;
		require('../../apis/texto.php');



	}

}else{
$query = $pdo->prepare("UPDATE $tabela SET nome = :nome, email = :email, telefone = :telefone, endereco = :endereco, cpf = :cpf, rg = :rg, orgao_emissor = :orgao_emissor, tipo_pessoa = :tipo_pessoa $nasc , numero = :numero, bairro = :bairro, cidade = :cidade, estado = :estado, cep = :cep, complemento = :complemento, api_pagamento_cliente = :api_pagamento_cliente, formas_pgto = :formas_pgto where id = '$id'");
}
$query->bindValue(":nome", "$nome");
$query->bindValue(":email", "$email");
$query->bindValue(":telefone", "$telefone");
$query->bindValue(":endereco", "$endereco");
$query->bindValue(":cpf", "$cpf");
$query->bindValue(":rg", "$rg");
$query->bindValue(":orgao_emissor", "$orgao_emissor");
$query->bindValue(":tipo_pessoa", "$tipo_pessoa");
$query->bindValue(":numero", "$numero");
$query->bindValue(":bairro", "$bairro");
$query->bindValue(":cidade", "$cidade");
$query->bindValue(":estado", "$estado");
$query->bindValue(":cep", "$cep");
$query->bindValue(":complemento", "$complemento");
$query->bindValue(":api_pagamento_cliente", "$api_pagamento_cliente");
$query->bindValue(":formas_pgto", "$formas_pgto");
$query->execute();

echo 'Salvo com Sucesso';


 ?>
