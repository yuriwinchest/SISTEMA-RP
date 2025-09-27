<?php 
@session_start();
$id_empresa = @$_SESSION['empresa'];

if($id_empresa == ""){
	echo 'Sessão expirada! Atualize a página!';
	exit();
}

$tabela = 'config';
require_once("../conexao.php");

if($modo_teste == 'Sim'){
	echo 'Em modo de teste esse recurso fica desabilitado!';
	exit();
}

$nome = $_POST['nome_sistema'];
$email = $_POST['email_sistema'];
$telefone = $_POST['telefone_sistema'];
$endereco = $_POST['endereco_sistema'];
$instagram = $_POST['instagram_sistema'];
$multa_atraso = $_POST['multa_atraso'];
$juros_atraso = $_POST['juros_atraso'];
$marca_dagua = $_POST['marca_dagua'];
$assinatura_recibo = $_POST['assinatura_recibo'];
$impressao_automatica = $_POST['impressao_automatica'];
$cnpj_sistema = $_POST['cnpj_sistema'];
$entrar_automatico = $_POST['entrar_automatico'];
$mostrar_preloader = $_POST['mostrar_preloader'];
$ocultar_mobile = @$_POST['ocultar_mobile'];
$api_whatsapp = @$_POST['api_whatsapp'];
$token_whatsapp = @$_POST['token_whatsapp'];
$instancia_whatsapp = @$_POST['instancia_whatsapp'];
$alterar_acessos = @$_POST['alterar_acessos'];
$dados_pagamento = $_POST['dados_pagamento'];
$abertura_caixa = $_POST['abertura_caixa'];
$cidade_sistema = $_POST['cidade_sistema'];
$api_pagamento = $_POST['api_pagamento'];
$chave_api_asaas = $_POST['chave_api_asaas'];
$taxa_cartao_api = $_POST['taxa_cartao_api'];

$taxa_cartao_api = str_replace(',', '.', $taxa_cartao_api);
$taxa_cartao_api = str_replace('%', '', $taxa_cartao_api);

$assinatura_cliente = $_POST['assinatura_cliente'];

$access_token = $_POST['access_token'];
$public_key = $_POST['public_key'];

$dias_comissao = $_POST['dias_comissao'];

$cobrar_automaticamente = $_POST['cobrar_automaticamente'];
$cobrar_duas_vezes = $_POST['cobrar_duas_vezes'];

$url_site = $_POST['url_site'];

$multa_atraso = str_replace(',', '.', $multa_atraso);
$multa_atraso = str_replace('%', '', $multa_atraso);

$juros_atraso = str_replace(',', '.', $juros_atraso);
$juros_atraso = str_replace('%', '', $juros_atraso);





//validar troca da foto
$query = $pdo->query("SELECT * FROM config where empresa = '$id_empresa'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if ($total_reg > 0) {
    $logo = $res[0]['logo'];
    $icone = $res[0]['icone'];
    $logo_rel = $res[0]['logo_rel'];
    $logo_painel = $res[0]['logo_painel'];
    $imagem_assinatura = $res[0]['imagem_assinatura'];
} else {
    $logo = 'sem-foto.png';
    $icone = 'sem-foto.png';
    $logo_rel = 'sem-foto.png';
    $logo_painel = 'sem-foto.png';
    $imagem_assinatura = 'sem-foto.png';
}



//foto logo
$nome_img = date('d-m-Y H:i:s') . '-' . @$_FILES['foto-logo']['name'];
$nome_img = preg_replace('/[ :]+/', '-', $nome_img);
$caminho = '../img/' . $nome_img;
$imagem_temp = @$_FILES['foto-logo']['tmp_name']; 

if(@$_FILES['foto-logo']['name'] != ""){
	$ext = pathinfo($_FILES['foto-logo']['name'], PATHINFO_EXTENSION);   
	if($ext == 'png' || $ext == 'PNG'){ 	
		$logo = $nome_img;		
		move_uploaded_file($imagem_temp, $caminho);
	}else{
		echo 'Extensão de Imagem para a Logo não permitida, use somente PNG!';
		
	}
}


//foto logo rel
$nome_img = date('d-m-Y H:i:s') . 'rel-' . @$_FILES['foto-logo-rel']['name'];
$nome_img = preg_replace('/[ :]+/', '-', $nome_img);
$caminho = '../img/' . $nome_img;
$imagem_temp = @$_FILES['foto-logo-rel']['tmp_name']; 

if(@$_FILES['foto-logo-rel']['name'] != ""){
	$ext = pathinfo(@$_FILES['foto-logo-rel']['name'], PATHINFO_EXTENSION);   
	if($ext == 'jpg' || $ext == 'JPG' || $ext == 'png' || $ext == 'png'){ 	
		$logo_rel = $nome_img;		
		move_uploaded_file($imagem_temp, $caminho);
	}else{
		echo 'Extensão de Imagem não permitida para o relatório, apenas imagem JPG para o relatório!';
		
	}
}


//foto icone
$nome_img = date('d-m-Y H:i:s') . 'icone-' . @$_FILES['foto-icone']['name'];
$nome_img = preg_replace('/[ :]+/', '-', $nome_img);
$caminho = '../img/' . $nome_img;
$imagem_temp = @$_FILES['foto-icone']['tmp_name']; 

if(@$_FILES['foto-icone']['name'] != ""){
	$ext = pathinfo(@$_FILES['foto-icone']['name'], PATHINFO_EXTENSION);   
	if($ext == 'png' || $ext == 'png'){ 	
		$icone = $nome_img;			
		move_uploaded_file($imagem_temp, $caminho);
	}else{
		echo 'Extensão de Imagem não permitida para o ícone, somente PNG para ele!';
		
	}
}


//foto painel
$nome_img = date('d-m-Y H:i:s') . 'painel-' . @$_FILES['foto-painel']['name'];
$nome_img = preg_replace('/[ :]+/', '-', $nome_img);
$caminho = '../img/' . $nome_img;
$imagem_temp = @$_FILES['foto-painel']['tmp_name']; 

if(@$_FILES['foto-painel']['name'] != ""){
	$ext = pathinfo(@$_FILES['foto-painel']['name'], PATHINFO_EXTENSION);   
	if($ext == 'png' || $ext == 'PNG'){ 	
		$logo_painel = $nome_img;		
		move_uploaded_file($imagem_temp, $caminho);
	}else{
		echo 'Extensão de Imagem não permitida para a foto do painel, somente PNG!';
		
	}
}




//foto painel
$nome_img = date('d-m-Y H:i:s') . 'ass-' . @$_FILES['assinatura_rel']['name'];
$nome_img = preg_replace('/[ :]+/', '-', $nome_img);
$caminho = '../img/' . $nome_img;
$imagem_temp = @$_FILES['assinatura_rel']['tmp_name']; 

if(@$_FILES['assinatura_rel']['name'] != ""){
	$ext = pathinfo(@$_FILES['assinatura_rel']['name'], PATHINFO_EXTENSION);   
	if($ext == 'jpg' || $ext == 'JPG' || $ext == 'png' || $ext == 'PNG'){ 	
		$imagem_assinatura = $nome_img;		
		move_uploaded_file($imagem_temp, $caminho);
	}else{
		echo 'Extensão de Imagem não permitida para a foto da assinatura, somente jpg!';
		
	}
}


if($alterar_api_whatsapp == 'Não'){
	$sql_api_whatsapp = " ";
}else{
	$sql_api_whatsapp = " api_whatsapp = '$api_whatsapp', token_whatsapp = '$token_whatsapp', instancia_whatsapp = '$instancia_whatsapp',";
}

$query = $pdo->prepare("UPDATE $tabela SET nome = :nome, email = :email, telefone = :telefone, endereco = :endereco, instagram = :instagram, multa_atraso = :multa_atraso, juros_atraso = :juros_atraso, marca_dagua = :marca_dagua, marca_dagua = :marca_dagua, assinatura_recibo = :assinatura_recibo, impressao_automatica = :impressao_automatica, cnpj = :cnpj_sistema, entrar_automatico = :entrar_automatico, mostrar_preloader = :mostrar_preloader, ocultar_mobile = :ocultar_mobile, $sql_api_whatsapp alterar_acessos = :alterar_acessos, dados_pagamento = :dados_pagamento, abertura_caixa = :abertura_caixa, logo = '$logo', logo_rel = '$logo_rel', icone = '$icone', logo_painel = '$logo_painel', imagem_assinatura = '$imagem_assinatura', access_token = :access_token, public_key = :public_key, cidade_sistema = :cidade_sistema, api_pagamento = :api_pagamento, chave_api_asaas = :chave_api_asaas, dias_comissao = :dias_comissao, assinatura_cliente = :assinatura_cliente, cobrar_automaticamente = :cobrar_automaticamente, cobrar_duas_vezes = :cobrar_duas_vezes, url_site = :url_site, taxa_cartao_api = :taxa_cartao_api where empresa = '$id_empresa'");

$query->bindValue(":nome", "$nome");
$query->bindValue(":email", "$email");
$query->bindValue(":telefone", "$telefone");
$query->bindValue(":endereco", "$endereco");
$query->bindValue(":instagram", "$instagram");
$query->bindValue(":multa_atraso", "$multa_atraso");
$query->bindValue(":juros_atraso", "$juros_atraso");
$query->bindValue(":marca_dagua", "$marca_dagua");
$query->bindValue(":assinatura_recibo", "$assinatura_recibo");
$query->bindValue(":impressao_automatica", "$impressao_automatica");
$query->bindValue(":cnpj_sistema", "$cnpj_sistema");
$query->bindValue(":entrar_automatico", "$entrar_automatico");
$query->bindValue(":mostrar_preloader", "$mostrar_preloader");
$query->bindValue(":ocultar_mobile", "$ocultar_mobile");
$query->bindValue(":alterar_acessos", "$alterar_acessos");
$query->bindValue(":dados_pagamento", "$dados_pagamento");
$query->bindValue(":abertura_caixa", "$abertura_caixa");
$query->bindValue(":access_token", "$access_token");
$query->bindValue(":public_key", "$public_key");
$query->bindValue(":cidade_sistema", "$cidade_sistema");
$query->bindValue(":api_pagamento", "$api_pagamento");
$query->bindValue(":chave_api_asaas", "$chave_api_asaas");
$query->bindValue(":dias_comissao", "$dias_comissao");
$query->bindValue(":assinatura_cliente", "$assinatura_cliente");
$query->bindValue(":cobrar_automaticamente", "$cobrar_automaticamente");
$query->bindValue(":cobrar_duas_vezes", "$cobrar_duas_vezes");
$query->bindValue(":url_site", "$url_site");
$query->bindValue(":taxa_cartao_api", "$taxa_cartao_api");
$query->execute();

echo 'Editado com Sucesso';
 ?>