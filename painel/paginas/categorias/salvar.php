<?php 
@session_start();
$id_empresa = @$_SESSION['empresa'];
require_once("../../../conexao.php");
require_once("../../buscar_config.php");
$tabela = 'categorias';


$nome = $_POST['nome'];
$icone = @$_POST['icone'];
$id = @$_POST['id'];

//validacao nome

$query = $pdo->query("SELECT * from $tabela where nome = '$nome' and empresa = '$id_empresa'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$id_reg = @$res[0]['id'];
if(@count($res) > 0 and $id != $id_reg){
	echo 'Categoria já Cadastrada!';
	exit();
}



//validar troca da foto
$query = $pdo->query("SELECT * FROM $tabela where id = '$id'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0){
	$foto = $res[0]['foto'];
}else{
	$foto = 'sem-foto.jpg';
}



//SCRIPT PARA SUBIR FOTO NO SERVIDOR
$nome_img = date('d-m-Y H:i:s') .'-'.@$_FILES['foto_categoria']['name'];
$nome_img = preg_replace('/[ :]+/' , '-' , $nome_img);

$caminho = '../../images/categorias/' .$nome_img;

$imagem_temp = @$_FILES['foto_categoria']['tmp_name']; 

if(@$_FILES['foto_categoria']['name'] != ""){
	$ext = pathinfo($nome_img, PATHINFO_EXTENSION);   
	if($ext == 'png' or $ext == 'jpg' or $ext == 'jpeg' or $ext == 'gif' or $ext == 'webp'){ 
	
			//EXCLUO A FOTO ANTERIOR
			if($foto != "sem-foto.jpg"){
				@unlink('../../images/categorias/'.$foto);
			}

			$foto = $nome_img;
		
		move_uploaded_file($imagem_temp, $caminho);
	}else{
		echo 'Extensão de Imagem não permitida!';
		exit();
	}
}


if($id == ""){
$query = $pdo->prepare("INSERT INTO $tabela SET nome = :nome, foto = '$foto', ativo = 'Sim', empresa = '$id_empresa', icone = :icone ");
	
}else{
$query = $pdo->prepare("UPDATE $tabela SET nome = :nome, foto = '$foto', icone = :icone where id = '$id'");
}
$query->bindValue(":nome", "$nome");
$query->bindValue(":icone", "$icone");
$query->execute();

echo 'Salvo com Sucesso';

 ?>