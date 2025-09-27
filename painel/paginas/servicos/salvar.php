<?php 
@session_start();
$id_empresa = @$_SESSION['empresa'];
require_once("../../../conexao.php");
require_once("../../buscar_config.php");
$tabela = 'servicos';


$nome = $_POST['nome'];
$valor = $_POST['valor'];
$dias = $_POST['dias'];
$comissao = $_POST['comissao'];
$id = $_POST['id'];
$mostrar_site = $_POST['mostrar_site'];
$descricao = $_POST['descricao'];

$valor = str_replace(',', '.', $valor);

//validacao servico
$query = $pdo->query("SELECT * from $tabela where nome = '$nome'  and empresa = '$id_empresa'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$id_reg = @$res[0]['id'];
if(@count($res) > 0 and $id != $id_reg){
	echo 'Serviço já Cadastrado!';
	exit();
}


//validacao nome
$query = $pdo->query("SELECT * from $tabela where nome = '$nome'  and empresa = '$id_empresa'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$id_reg = @$res[0]['id'];
if(@count($res) > 0 and $id != $id_reg){
	echo 'Serviço já Existe!';
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
$nome_img = date('d-m-Y H:i:s') .'-'.@$_FILES['foto']['name'];
$nome_img = preg_replace('/[ :]+/' , '-' , $nome_img);

$caminho = '../../images/servicos/' .$nome_img;

$imagem_temp = @$_FILES['foto']['tmp_name']; 

if(@$_FILES['foto']['name'] != ""){
	$ext = pathinfo($nome_img, PATHINFO_EXTENSION);   
	if($ext == 'png' or $ext == 'jpg' or $ext == 'jpeg' or $ext == 'gif' or $ext == 'webp' or $ext == 'PNG' or $ext == 'JPG' or $ext == 'JPEG' or $ext == 'GIF' or $ext == 'WEBP'){ 
	
			//EXCLUO A FOTO ANTERIOR
			if($foto != "sem-foto.jpg"){
				@unlink('../../images/servicos/'.$foto);
			}

			$foto = $nome_img;
		
			//pegar o tamanho da imagem
		list($largura, $altura) = getimagesize($imagem_temp);
		if ($largura > 1400) {
			echo 'Diminua a imagem para um tamanho de no máximo 1400px de largura!';
			exit();
		} else {
			move_uploaded_file($imagem_temp, $caminho);
		}

	}else{
		echo 'Extensão de Imagem não permitida!';
		exit();
	}
}


if($id == ""){
$query = $pdo->prepare("INSERT INTO $tabela SET nome = :nome, valor = :valor, dias = :dias, comissao = :comissao, ativo = 'Sim', empresa = '$id_empresa', foto = '$foto', mostrar_site = :mostrar_site, descricao = :descricao ");
	
}else{
$query = $pdo->prepare("UPDATE $tabela SET nome = :nome, valor = :valor, dias = :dias, comissao = :comissao, foto = '$foto', mostrar_site = :mostrar_site, descricao = :descricao where id = '$id'");
}
$query->bindValue(":nome", "$nome");
$query->bindValue(":valor", "$valor");
$query->bindValue(":dias", "$dias");
$query->bindValue(":comissao", "$comissao");
$query->bindValue(":mostrar_site", "$mostrar_site");
$query->bindValue(":descricao", "$descricao");
$query->execute();

echo 'Salvo com Sucesso';


 ?>
