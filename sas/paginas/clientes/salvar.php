<?php 
$tabela = 'empresas';
require_once("../../../conexao.php");

@session_start();
$id_usuario = @$_SESSION['id'];


$nome = @$_POST['nome'];
$email = @$_POST['email'];
$telefone = @$_POST['telefone'];
$endereco = @$_POST['endereco'];
$data_nasc = @$_POST['data_nasc'];
$cpf = @$_POST['cpf'];
$tipo_pessoa = @$_POST['tipo_pessoa'];
$numero = @$_POST['numero'];
$bairro = @$_POST['bairro'];
$cidade = @$_POST['cidade'];
$estado = @$_POST['estado'];
$cep = @$_POST['cep'];
$id = @$_POST['id'];
$complemento = @$_POST['complemento'];
$dias_teste = @$_POST['dias_teste'];
$mensalidade = @$_POST['mensalidade'];
$plano = @$_POST['plano'];
$assinatura = @$_POST['assinatura'];
$url_site = @$_POST['url_site'];
$frequencia = @$_POST['frequencia'];
$dispositivos = @$_POST['dispositivos'];
$vencimento = @$_POST['vencimento'];
$data_pgto = @$_POST['data_pgto'];
$forma_pgto = @$_POST['forma_pgto'];

if($frequencia == ""){
	$frequencia = 30;
}

if($vencimento == ""){
	$vencimento = date('Y-m-d');
}

if($data_pgto == ""){
	$sql_pgto = " ";
	$pago = 'Não';
}else{
	$sql_pgto = ", data_pgto = '$data_pgto', forma_pgto = '$forma_pgto' ";
	$pago = 'Sim';

}

$url_site = strtolower( preg_replace("[^a-zA-Z0-9-]", "-", 
        strtr(@utf8_decode(trim($url_site)), @utf8_decode("áàãâéêíóôõúüñçÁÀÃÂÉÊÍÓÔÕÚÜÑÇ"),
        "aaaaeeiooouuncAAAAEEIOOOUUNC-")) );
$url = preg_replace('/[ -]+/' , '-' , $url_site);
$url = str_replace('+', '-', $url);
$url = str_replace('/', '-', $url);
$url = str_replace('"', '-', $url);
$url = str_replace('%', '', $url);


$data_nasc = date("Y-m-d", @strtotime(@str_replace("/", "-", @$_POST["data_nasc"])));

$mensalidade = str_replace('.', '', $mensalidade);
$mensalidade = str_replace(',', '.', $mensalidade);

$data_atual = date('Y-m-d');
$data_teste = date('Y-m-d', @strtotime("+$dias_teste days", @strtotime($data_atual)));

//buscar o valor de dias testes
if($id > 0){
	$query = $pdo->query("SELECT * from $tabela where id = '$id'");
	$res = $query->fetchAll(PDO::FETCH_ASSOC);
	$dias_teste_antigo = @$res[0]['dias_teste'];
	$valor_mensalidade_antigo = @$res[0]['mensalidade'];

	if($dias_teste_antigo != $dias_teste){
		$sql_data_teste = ", data_teste = '$data_teste'";
	}else{
		$sql_data_teste = " ";
	}

	if($dias_teste == 0){
		$sql_data_teste = " ,data_teste = null";
	}


	if($valor_mensalidade_antigo != $mensalidade and $mensalidade > 0){

		$query = $pdo->query("SELECT * from receber_sas where cliente = '$id' and pago != 'Sim' and referencia = 'Mensalidade' order by id desc");
		$res = $query->fetchAll(PDO::FETCH_ASSOC);		
		if(@count($res) > 0){
			$pdo->query("UPDATE receber_sas SET valor = '$mensalidade', vencimento = '$vencimento' where cliente = '$id' and pago != 'Sim' and referencia = 'Mensalidade' order by id desc limit 1");
		}else{
			$pdo->query("INSERT INTO receber_sas SET descricao = 'Mensalidade SAAS', cliente = '$id', valor = '$mensalidade',  data_lanc = curDate(), frequencia = '$frequencia', arquivo = 'sem-foto.png', subtotal = '$mensalidade', usuario_lanc = '$id_usuario', pago = '$pago', referencia = 'Mensalidade', hora = curTime(), vencimento = '$vencimento' $sql_pgto ");
		}
		
	}
}

if($dias_teste == ""){
	$dias_teste = 0;
}

if($mensalidade == ""){
	$mensalidade = 0;
}

if($tipo_pessoa == 'Física' and $cpf != ""){
	require_once("../../validar_cpf.php");
}


//validacao email
if($email != ""){
	$query = $pdo->query("SELECT * from $tabela where email = '$email'");
	$res = $query->fetchAll(PDO::FETCH_ASSOC);
	$id_reg = @$res[0]['id'];
	if(@count($res) > 0 and $id != $id_reg){
		if($assinatura == 'Sim'){
			echo 'Email já Cadastrado! Você já se cadastrou, entre em contato com o Administrador!';
		}else{
			echo 'Email já Cadastrado!';
		}
		
		exit();
	}
}



//validacao telefone
if($telefone != ""){
	$query = $pdo->query("SELECT * from $tabela where telefone = '$telefone'");
	$res = $query->fetchAll(PDO::FETCH_ASSOC);
	$id_reg = @$res[0]['id'];
	if(@count($res) > 0 and $id != $id_reg){
		if($assinatura == 'Sim'){
			echo 'Telefone já Cadastrado! Você já se cadastrou, entre em contato com o Administrador!';
		}else{
			echo 'Telefone já Cadastrado!';
		}
		
		exit();
	}
}


if($id != ""){
//validacao plano
	if($plano > 0){
		$query = $pdo->query("SELECT * from $tabela where id = '$id'");
		$res = $query->fetchAll(PDO::FETCH_ASSOC);
		$plano_antigo = @$res[0]['plano'];
		if($plano_antigo != $plano){
			
			//limpar os recursos e criar novos
			$pdo->query("DELETE FROM clientes_recursos WHERE empresa = '$id' ");

			//percorrer os recursos do plano e inserir cada recurso
			$query2 = $pdo->query("SELECT * FROM planos_recursos where plano = '$plano'");
			$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
			$total_reg2 = @count($res2);		

				for($i2=0; $i2 < $total_reg2; $i2++){	
					$id_recurso = @$res2[$i2]['recurso'];
					$pdo->query("INSERT INTO clientes_recursos SET recurso = '$id_recurso', empresa = '$id'");	
				}
			
		}
	}
}


if($data_nasc == ""){
	$nasc = '';	
}else{
	$nasc = " ,data_nasc = '$data_nasc'";
	
}


if($id == ""){
	if($dias_teste == 0 || $dias_teste == ""){
		$data_teste = null;
	}

	$query = $pdo->prepare("INSERT INTO $tabela SET nome = :nome, email = :email, telefone = :telefone, data_cad = curDate(), endereco = :endereco, cpf = :cpf, tipo_pessoa = :tipo_pessoa $nasc, usuario = '$id_usuario', numero = :numero, bairro = :bairro, cidade = :cidade, estado = :estado, cep = :cep, complemento = :complemento, dias_teste = :dias_teste, mensalidade = :mensalidade, data_teste = :data_teste, ativo = 'Sim', plano = :plano, url_site = :url_site, frequencia = '$frequencia', dispositivos = '$dispositivos'");
	$query->bindValue(':data_teste', $data_teste);

}else{
	$query = $pdo->prepare("UPDATE $tabela SET nome = :nome, email = :email, telefone = :telefone, endereco = :endereco, cpf = :cpf, tipo_pessoa = :tipo_pessoa $nasc , numero = :numero, bairro = :bairro, cidade = :cidade, estado = :estado, cep = :cep, complemento = :complemento, dias_teste = :dias_teste, mensalidade = :mensalidade $sql_data_teste, plano = :plano, url_site = :url_site, frequencia = '$frequencia', dispositivos = '$dispositivos' where id = '$id'");
}
$query->bindValue(":nome", "$nome");
$query->bindValue(":email", "$email");
$query->bindValue(":telefone", "$telefone");
$query->bindValue(":endereco", "$endereco");
$query->bindValue(":cpf", "$cpf");
$query->bindValue(":tipo_pessoa", "$tipo_pessoa");
$query->bindValue(":numero", "$numero");
$query->bindValue(":bairro", "$bairro");
$query->bindValue(":cidade", "$cidade");
$query->bindValue(":estado", "$estado");
$query->bindValue(":cep", "$cep");
$query->bindValue(":complemento", "$complemento");
$query->bindValue(":dias_teste", "$dias_teste");
$query->bindValue(":mensalidade", "$mensalidade");
$query->bindValue(":plano", "$plano");
$query->bindValue(":url_site", "$url");
$query->execute();
$ultimo_id = $pdo->lastInsertId();



if($id == ""){
	if($plano > 0){
		//percorrer os recursos do plano e inserir cada recurso
			$query2 = $pdo->query("SELECT * FROM planos_recursos where plano = '$plano'");
			$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
			$total_reg2 = @count($res2);		

				for($i2=0; $i2 < $total_reg2; $i2++){	
					$id_recurso = @$res2[$i2]['recurso'];
					$pdo->query("INSERT INTO clientes_recursos SET recurso = '$id_recurso', empresa = '$ultimo_id'");	
				}
	}
}


if($mensalidade > 0 and $id == ""){
	$pdo->query("INSERT INTO receber_sas SET descricao = 'Mensalidade SAAS', cliente = '$ultimo_id', valor = '$mensalidade',  data_lanc = curDate(), frequencia = '$frequencia', arquivo = 'sem-foto.png', subtotal = '$mensalidade', usuario_lanc = '$id_usuario', pago = '$pago', referencia = 'Mensalidade', hora = curTime(), vencimento = '$vencimento' $sql_pgto ");
}
$ultimo_id_conta = $pdo->lastInsertId();
$senha = '123';
$senha_crip = password_hash($senha, PASSWORD_DEFAULT);

//inserir o usuário da empresa

if ($id == "") {
	$query = $pdo->prepare("INSERT INTO usuarios SET nome = :nome, email = :email, senha = '', senha_crip = '$senha_crip', nivel = 'Administrador', ativo = 'Sim', telefone = :telefone, data = curDate(), endereco = :endereco, numero = :numero, bairro = :bairro, cidade = :cidade, estado = :estado, cep = :cep, acessar_painel = 'Sim', complemento = :complemento, foto = 'sem-foto.jpg', empresa = '$ultimo_id', id_ref = '$ultimo_id' $nasc");


	//api whats
	if ($api_whatsapp != 'Não' and $telefone != '') {
		$telefone_envio = '55' . preg_replace('/[ ()-]+/', '', $telefone);

		$mensagem_whatsapp = '*' . $nome_sistema . '*%0A%0A';
		$mensagem_whatsapp .= '_Olá ' . $nome . ' Você foi Cadastrado no Sistema!!_ %0A';
		$mensagem_whatsapp .= '*Email:* ' . $email . ' %0A';
		$mensagem_whatsapp .= '*Senha:* ' . $senha . ' %0A';
		$mensagem_whatsapp .= '*Url Acesso:* ' . $url_sistema . 'login %0A%0A';
		$mensagem_whatsapp .= '_Após acessar seu painel, adicione uma foto e trocar a senha para uma de sua preferência!_';
		
		$mensagem_whatsapp .= '%0A%0A *Url Site:* ' . $url_sistema.'site/'.$url. ' %0A%0A';

		$mensagem = $mensagem_whatsapp;


		require('../../apis/texto.php');



	}


} else {
	$query = $pdo->prepare("UPDATE usuarios SET nome = :nome, email = :email, telefone = :telefone, endereco = :endereco, numero = :numero, bairro = :bairro, cidade = :cidade, estado = :estado, cep = :cep,  complemento = :complemento $nasc  where empresa = '$id' and nivel = 'Administrador' and id_ref = '$id'");
}
$query->bindValue(":nome", "$nome");
$query->bindValue(":email", "$email");
$query->bindValue(":telefone", "$telefone");
$query->bindValue(":endereco", "$endereco");
$query->bindValue(":numero", "$numero");
$query->bindValue(":bairro", "$bairro");
$query->bindValue(":cidade", "$cidade");
$query->bindValue(":estado", "$estado");
$query->bindValue(":cep", "$cep");
$query->bindValue(":complemento", "$complemento");
$query->execute();





if($assinatura == 'Sim'){
	echo 'Salvo com Sucesso*'.$ultimo_id_conta;
}else{
	echo 'Salvo com Sucesso';
}



//validar troca da foto
$query = $pdo->query("SELECT * FROM config where empresa = '$id'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if ($total_reg > 0) {
	$logo = $res[0]['logo'];
	$icone = $res[0]['icone'];
	$logo_rel = $res[0]['logo_rel'];
	$logo_painel = $res[0]['logo_painel'];
} else {
	$logo = 'sem-foto.png';
	$icone = 'sem-foto.png';
	$logo_rel = 'sem-foto.png';
	$logo_painel = 'sem-foto.png';
}



//foto logo
$nome_img = date('d-m-Y H:i:s') . '-' . @$_FILES['foto-logo']['name'];
$nome_img = preg_replace('/[ :]+/', '-', $nome_img);
$caminho = '../../../img/' . $nome_img;
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
$caminho = '../../../img/' . $nome_img;
$imagem_temp = @$_FILES['foto-logo-rel']['tmp_name']; 

if(@$_FILES['foto-logo-rel']['name'] != ""){
	$ext = pathinfo(@$_FILES['foto-logo-rel']['name'], PATHINFO_EXTENSION);   
	if($ext == 'jpg' || $ext == 'JPG'){ 	
		$logo_rel = $nome_img;		
		move_uploaded_file($imagem_temp, $caminho);
	}else{
		echo 'Extensão de Imagem não permitida para o relatório, apenas imagem JPG para o relatório!';
		
	}
}


//foto icone
$nome_img = date('d-m-Y H:i:s') . 'icone-' . @$_FILES['foto-icone']['name'];
$nome_img = preg_replace('/[ :]+/', '-', $nome_img);
$caminho = '../../../img/' . $nome_img;
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
$caminho = '../../../img/' . $nome_img;
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

//salvar as configurações


if ($id == "") {
	$pdo->query("INSERT INTO config SET nome = '$nome', email = '$email', telefone = '$telefone', logo = '$logo', logo_rel = '$logo_rel', icone = '$icone', ativo = 'Sim', multa_atraso = '0', juros_atraso = '0', marca_dagua = 'Sim', assinatura_recibo = 'Não', impressao_automatica = 'Não', api_whatsapp = 'Não', alterar_acessos = 'Não', abertura_caixa = 'Sim', empresa = '$ultimo_id', logo_painel = '$logo_painel', instancia_whatsapp = '$instancia_whatsapp', url_site = '$url', dispositivos = '$dispositivos'");
}else{
	$pdo->query("UPDATE config SET nome = '$nome', email = '$email', telefone = '$telefone', logo = '$logo', logo_rel = '$logo_rel', icone = '$icone', logo_painel = '$logo_painel', url_site = '$url', dispositivos = '$dispositivos' where empresa = '$id'");
}

echo $url;


$link_pgto = $url_sistema.'pagamento/'.$id;
//criar uma nova conta se a conta já for lançada como paga
if ($id == "" and $pago == 'Sim') {

$hora = date('H');
	########## SAUDAÇÃO #############
if ($hora < 12 && $hora >= 6)
	$saudacao = "Bom Dia";

if ($hora >= 12 && $hora < 18)
	$saudacao = "Boa Tarde";

if ($hora >= 18 && $hora <= 23)
	$saudacao = "Boa Noite";
if ($hora < 6 && $hora >= 0)
	$saudacao = "Boa madrugada";


	$data_venc = $vencimento;
	//CRIAR A PRÓXIMA CONTA A PAGAR
	$dias_frequencia = $frequencia;

	if ($dias_frequencia == 30 || $dias_frequencia == 31) {
		$nova_data_vencimento = date('Y/m/d', strtotime("+1 month", strtotime($data_venc)));

	} else if ($dias_frequencia == 90) {
		$nova_data_vencimento = date('Y/m/d', strtotime("+3 month", strtotime($data_venc)));

	} else if ($dias_frequencia == 180) {
		$nova_data_vencimento = date('Y/m/d', strtotime("+6 month", strtotime($data_venc)));

	} else if ($dias_frequencia == 360 || $dias_frequencia == 365) {
		$nova_data_vencimento = date('Y/m/d', strtotime("+1 year", strtotime($data_venc)));

	} else {
		$nova_data_vencimento = date('Y/m/d', strtotime("+$dias_frequencia days", strtotime($data_venc)));
	}


	if (@$dias_frequencia > 0 ) {
		$pdo->query("INSERT INTO receber_sas SET descricao = 'Mensalidade SAAS', cliente = '$ultimo_id', valor = '$mensalidade',  data_lanc = curDate(), frequencia = '$frequencia', arquivo = 'sem-foto.png', subtotal = '$mensalidade', usuario_lanc = '$id_usuario', pago = 'Não', referencia = 'Mensalidade', hora = curTime(), vencimento = '$nova_data_vencimento'  ");
		$id_ult_registro = $pdo->lastInsertId();


		if ($api_whatsapp != 'Não' and $telefone != '') {

			$valorF = @number_format($mensalidade, 2, ',', '.');

			$nova_data_vencimentoF = implode('/', array_reverse(@explode('-', $nova_data_vencimento)));

			$telefone_envio = '55' . preg_replace('/[ ()-]+/', '', $telefone);


			############## AGENDAR MENSAGEM PARA RENOVAÇÃO ###########################
			$mensagem_whatsapp = '🔔_Lembrete Automático de Vencimento!_ %0A%0A';
			$mensagem_whatsapp .= $saudacao . ' tudo bem? 😀%0A%0A';
			$mensagem_whatsapp .= '_Queremos lembrar que você tem uma Conta Vencendo Hoje_ %0A%0A';
			$mensagem_whatsapp .= 'Empresa: *' . $nome_sistema . '* %0A';
			$mensagem_whatsapp .= 'Nome: *' . $nome . '* %0A';
			$mensagem_whatsapp .= 'Valor: *R$ ' . $valorF . '* %0A';
			$mensagem_whatsapp .= 'Data de Vencimento: *' . $nova_data_vencimentoF . '* %0A%0A';
			$mensagem_whatsapp .= '_Entre em contato conosco para acertar o pagamento!_ %0A%0A';

			if($dados_pagamento != ""){
				$mensagem_whatsapp .= '*Dados para o Pagamento:* %0A';
				$mensagem_whatsapp .= $dados_pagamento;
			}else{
				if($access_token_mp != "" || $chave_api_asaas != ""){
					$mensagem_whatsapp .= $link_pgto;
				}
			}		
			

			$mensagem_whatsapp .= '%0A';
			$mensagem_whatsapp .= '🤖 _Esta é uma mensagem automática!_';

			$data_agd = $nova_data_vencimento . ' 09:00:00';
			require('../../apis/agendar.php');

			$pdo->query("UPDATE receber_sas SET hash = '$hash' where id = '$id_ult_registro'");

		}
	}
}


?>
