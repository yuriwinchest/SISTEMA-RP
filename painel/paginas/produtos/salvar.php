<?php 
@session_start();
$id_empresa = @$_SESSION['empresa'];
require_once("../../../conexao.php");
require_once("../../buscar_config.php");
$tabela = 'produtos';


$id = $_POST['id'];
$codigo = $_POST['codigo'];
$nome = $_POST['nome'];

$valor_compra = $_POST['valor_compra'];
$valor_compra = str_replace('.', '', $valor_compra);
$valor_compra = str_replace(',', '.', $valor_compra);

$valor_venda = $_POST['valor_venda'];
$valor_venda = str_replace('.', '', $valor_venda);
$valor_venda = str_replace(',', '.', $valor_venda);


$estoque = $_POST['estoque'];
$nivel_estoque = $_POST['nivel_estoque'];
$categoria = $_POST['categoria'];
$sub_categoria = $_POST['sub_categoria'];
$descricao = $_POST['descricao'];
$valor_lucro = $_POST['valor_lucro'];


$lucro_reais = $_POST['lucro_reais'];
$lucro_reais = str_replace('.', '', $lucro_reais);
$lucro_reais = str_replace(',', '.', $lucro_reais);

$valor_promocional = $_POST['valor_promocional'];
$valor_promocional = str_replace('.', '', $valor_promocional);
$valor_promocional = str_replace(',', '.', $valor_promocional);

$mostrar_site = @$_POST['mostrar_site'];
$descricao = @$_POST['descricao'];

$tem_estoque = $_POST['tem_estoque'];
 
//validar codigo
if($codigo != ""){
	$query = $pdo->query("SELECT * from $tabela where codigo = '$codigo' and empresa = '$id_empresa'");
	$res = $query->fetchAll(PDO::FETCH_ASSOC);
	if(@count($res) > 0 and $id != $res[0]['id']){
		echo 'Código já Cadastrado, escolha outro!!';
		exit();
	}
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

$caminho = '../../images/produtos/' .$nome_img;

$imagem_temp = @$_FILES['foto']['tmp_name']; 

if(@$_FILES['foto']['name'] != ""){
	$ext = pathinfo($nome_img, PATHINFO_EXTENSION);   
	if($ext == 'png' or $ext == 'jpg' or $ext == 'jpeg' or $ext == 'gif' or $ext == 'webp' or $ext == 'PNG' or $ext == 'JPG' or $ext == 'JPEG' or $ext == 'GIF' or $ext == 'WEBP'){ 
	
			//EXCLUO A FOTO ANTERIOR
			if($foto != "sem-foto.jpg"){
				@unlink('../../images/produtos/'.$foto);
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
$query = $pdo->prepare("INSERT INTO $tabela SET codigo = :codigo, nome = :nome, categoria = :categoria, sub_categoria = :sub_categoria, valor_compra = :valor_compra, valor_venda = :valor_venda, estoque = :estoque, nivel_estoque = :nivel_estoque, foto = '$foto', ativo = 'Sim', descricao = :descricao, valor_lucro = :valor_lucro, lucro_reais = :lucro_reais, valor_promocional = :valor_promocional, tem_estoque = '$tem_estoque', empresa = '$id_empresa', mostrar_site = '$mostrar_site'");
	
}else{
$query = $pdo->prepare("UPDATE $tabela SET codigo = :codigo, nome = :nome, categoria = :categoria, sub_categoria = :sub_categoria, valor_compra = :valor_compra, valor_venda = :valor_venda, estoque = :estoque, nivel_estoque = :nivel_estoque, foto = '$foto', descricao = :descricao, valor_lucro = :valor_lucro, lucro_reais = :lucro_reais, valor_promocional = :valor_promocional, tem_estoque = '$tem_estoque', mostrar_site = '$mostrar_site' where id = '$id'");
}
$query->bindValue(":codigo", "$codigo");
$query->bindValue(":nome", "$nome");
$query->bindValue(":categoria", "$categoria");
$query->bindValue(":sub_categoria", "$sub_categoria");
$query->bindValue(":valor_compra", "$valor_compra");
$query->bindValue(":valor_venda", "$valor_venda");
$query->bindValue(":estoque", "$estoque");
$query->bindValue(":nivel_estoque", "$nivel_estoque");
$query->bindValue(":descricao", "$descricao");
$query->bindValue(":valor_lucro", "$valor_lucro");
$query->bindValue(":lucro_reais", "$lucro_reais");
$query->bindValue(":valor_promocional", "$valor_promocional");

$query->execute();

echo 'Salvo com Sucesso';

 ?>