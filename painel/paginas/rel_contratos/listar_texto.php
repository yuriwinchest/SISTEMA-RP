<?php 
@session_start();
$id_empresa = @$_SESSION['empresa'];
$tabela = 'contratos';
require_once("../../../conexao.php");
require_once("../../buscar_config.php");
require_once("../../rel/data_formatada.php");

$contrato = @$_POST['contrato'];
$cliente = @$_POST['cliente'];
$profissional = @$_POST['profissional'];
$servico = @$_POST['servico'];
$clientes_sel = @$_POST['clientes_sel'];
$prof_sel = @$_POST['prof_sel'];

$demais_contratantes = '';
$demais_contratados = '';

$id_cliente = '';


$query = $pdo->query("SELECT * from clientes where id = '$cliente'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
if(@count($res) > 0){
$id_cliente = @$res[0]['id'];
$nome_cliente = @$res[0]['nome'];
$telefone_cliente = @$res[0]['telefone'];
$email_cliente = @$res[0]['email'];	
$endereco_cliente = @$res[0]['endereco'];
$tipo_pessoa_cliente = @$res[0]['tipo_pessoa'];
$cpf_cliente = @$res[0]['cpf'];

$numero_cliente = @$res[0]['numero'];
$bairro_cliente = @$res[0]['bairro'];
$cidade_cliente = @$res[0]['cidade'];
$estado_cliente = @$res[0]['estado'];
$cep_cliente = @$res[0]['cep'];
$profissao_cliente = @$res[0]['profissao'];
$nacionalidade_cliente = @$res[0]['nacionalidade'];
$estado_civil_cliente = @$res[0]['estado_civil'];


$rg_cliente = @$res[0]['rg'];
$complemento_cliente = @$res[0]['complemento'];
$genitor_cliente = @$res[0]['genitor'];
$genitora_cliente = @$res[0]['genitora'];

$data_cad_cliente = @$res[0]['data_cad'];
$data_nasc_cliente = @$res[0]['data_nasc'];
$assinatura_cliente_rel = @$res[0]['assinatura'];


$data_cadF_cliente = implode('/', array_reverse(@explode('-', $data_cad_cliente)));
$data_nascF_cliente = implode('/', array_reverse(@explode('-', $data_nasc_cliente)));
	
}



$query = $pdo->query("SELECT * from contratos where id = '$contrato'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
if(@count($res) > 0){
	$modelo_contrato = @$res[0]['modelo'];
	$texto_contrato = @$res[0]['texto'];
}


$query = $pdo->query("SELECT * from usuarios where id = '$profissional'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
if(@count($res) > 0){
	$nome_usuario = @$res[0]['nome'];
	$telefone_usuario = @$res[0]['telefone'];
	$email_usuario = @$res[0]['email'];	
	$endereco_usuario = @$res[0]['endereco_profissional'];
	$nacionalidade_usuario = @$res[0]['nacionalidade'];
	$estado_civil_usuario = @$res[0]['estado_civil'];
	$seccional_oab = @$res[0]['seccional_oab'];
	$numero_oab = @$res[0]['numero_oab'];
}




$texto_dados = '';

if(@$tipo_pessoa_cliente == 'Física'){
		$texto_dados = "{$nome_cliente}, {$nacionalidade_cliente}, {$estado_civil_cliente}, {$profissao_cliente}, nascido(a) em {$data_nascF_cliente}, inscrito(a) no CPF sob o n.º {$cpf_cliente}, sob identidade n.º {$rg_cliente}, filho de {$genitor_cliente} e {$genitora_cliente}, residente e domiciliado(a) à {$endereco_cliente}, {$numero_cliente}, bairro {$bairro_cliente}, município de {$cidade_cliente} –{$estado_cliente} – CEP: {$cep_cliente}, email: {$email_cliente}, telefone: {$telefone_cliente}";
	}
	if(@$tipo_pessoa_cliente == 'Jurídica'){
		$texto_dados = "{$nome_cliente}, pessoa jurídica de direito privado, inscrita no CNPJ sob o n° {$cpf_cliente}, situada à/ao {$endereco_cliente}, {$numero_cliente}, bairro {$bairro_cliente}, município de {$cidade_cliente} –{$estado_cliente} – CEP: {$cep_cliente}, email: {$email_cliente}, telefone: {$telefone_cliente}";
	}

$texto_dados_final = $texto_dados;



$texto_profissional = '';
if(@$nome_usuario != ""){
$texto_profissional = "{$nome_usuario}, {$nacionalidade_usuario}, {$estado_civil_usuario}, com endereço profissional à {$endereco_usuario}";
}

if($clientes_sel != ""){
	$sep = explode("-", $clientes_sel);
	$total_clientes = @count($sep) - 1;

	for ($i=0; $i < $total_clientes; $i++) { 
		$id_cli = $sep[$i];
		$query = $pdo->query("SELECT * from clientes where id = '$id_cli'");
		$res = $query->fetchAll(PDO::FETCH_ASSOC);
		if(@count($res) > 0){

		$nome_cliente2 = @$res[0]['nome'];
		$telefone_cliente2 = @$res[0]['telefone'];
		$email_cliente2 = @$res[0]['email'];	
		$endereco_cliente2 = @$res[0]['endereco'];
		$tipo_pessoa_cliente2 = @$res[0]['tipo_pessoa'];
		$cpf_cliente2 = @$res[0]['cpf'];

		$numero_cliente2 = @$res[0]['numero'];
		$bairro_cliente2 = @$res[0]['bairro'];
		$cidade_cliente2 = @$res[0]['cidade'];
		$estado_cliente2 = @$res[0]['estado'];
		$cep_cliente2 = @$res[0]['cep'];
		$profissao_cliente2 = @$res[0]['profissao'];
		$nacionalidade_cliente2 = @$res[0]['nacionalidade'];
		$estado_civil_cliente2 = @$res[0]['estado_civil'];


		$rg_cliente2 = @$res[0]['rg'];
		$complemento_cliente2 = @$res[0]['complemento'];
		$genitor_cliente2 = @$res[0]['genitor'];
		$genitora_cliente2 = @$res[0]['genitora'];

		$data_cad_cliente2 = @$res[0]['data_cad'];
		$data_nasc_cliente2 = @$res[0]['data_nasc'];


		$data_cadF_cliente2 = implode('/', array_reverse(@explode('-', $data_cad_cliente)));
		$data_nascF_cliente2 = implode('/', array_reverse(@explode('-', $data_nasc_cliente)));


		if(@$tipo_pessoa_cliente == 'Física'){
		$texto_dados2 = ", {$nome_cliente2}, {$nacionalidade_cliente2}, {$estado_civil_cliente2}, {$profissao_cliente2}, nascido(a) em {$data_nascF_cliente2}, inscrito(a) no CPF sob o n.º {$cpf_cliente2}, sob identidade n.º {$rg_cliente2}, filho de {$genitor_cliente2} e {$genitora_cliente2}, residente e domiciliado(a) à {$endereco_cliente2}, {$numero_cliente2}, bairro {$bairro_cliente2}, município de {$cidade_cliente2} –{$estado_cliente2} – CEP: {$cep_cliente2}, email: {$email_cliente2}, telefone: {$telefone_cliente2}";
	}else{
		$texto_dados2 = ", {$nome_cliente2}, pessoa jurídica de direito privado, inscrita no CNPJ sob o n° {$cpf_cliente2}, situada à/ao {$endereco_cliente2}, {$numero_cliente2}, bairro {$bairro_cliente2}, município de {$cidade_cliente2} –{$estado_cliente2} – CEP: {$cep_cliente2}, email: {$email_cliente2}, telefone: {$telefone_cliente2}";
	}

			$texto_dados_final .= $texto_dados2;

			$demais_contratantes .= "<br><br>______________________________________________________________________<br>
{$nome_cliente2}<br>
 (Contratante)";
	}



	
}

}




if($prof_sel != ""){
	$sep = explode("-", $prof_sel);
	$total_clientes = @count($sep) - 1;

	for ($i=0; $i < $total_clientes; $i++) { 
		$id_cli = $sep[$i];
		$query = $pdo->query("SELECT * from usuarios where id = '$id_cli'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
if(@count($res) > 0){
	$nome_usuario2 = @$res[0]['nome'];
	$telefone_usuario2 = @$res[0]['telefone'];
	$email_usuario2 = @$res[0]['email'];	
	$endereco_usuario2 = @$res[0]['endereco_profissional'];
	$nacionalidade_usuario2 = @$res[0]['nacionalidade'];
	$estado_civil_usuario2 = @$res[0]['estado_civil'];
	$seccional_oab2 = @$res[0]['seccional_oab'];
	$numero_oab2 = @$res[0]['numero_oab'];


		$texto_profissional .= ", {$nome_usuario2}, {$nacionalidade_usuario2}, {$estado_civil_usuario2}, com endereço profissional à {$endereco_usuario2}";


			$demais_contratados .= "<br><br>______________________________________________________________________<br>
{$nome_usuario2}<br>
OAB/{$seccional_oab2} {$numero_oab2}<br>
 (Contratado)";
	}



	
}

}


//dados cliente

if(@$nome_cliente != ""){
	$texto_contrato = @str_replace('{{TEXTO DADOS}}', @$texto_dados_final, @$texto_contrato);
}

if(@$nome_cliente != ""){
	$texto_contrato = @str_replace('{{NOME COMPLETO}}', @$nome_cliente, @$texto_contrato);
}

if(@$nome_cliente != ""){
	$texto_contrato = @str_replace('{{NOME}}', @$nome_cliente, @$texto_contrato);
}

if(@$nacionalidade_cliente != ""){
	$texto_contrato = @str_replace('{{NACIONALIDADE}}', @$nacionalidade_cliente, @$texto_contrato);
}

if(@$profissao_cliente != ""){
	$texto_contrato = @str_replace('{{PROFISSÃO}}', @$profissao_cliente, @$texto_contrato);
}

if(@$estado_civil_cliente != ""){
	$texto_contrato = @str_replace('{{ESTADO CIVIL}}', @$estado_civil_cliente, @$texto_contrato);
}

if(@$estado_civil_cliente != ""){
	$texto_contrato = @str_replace('{{ESTADO CÍVIL}}', @$estado_civil_cliente, @$texto_contrato);
}

if(@$data_nasc_cliente != ""){
	$texto_contrato = @str_replace('{{DATA DE NASCIMENTO}}', @$data_nascF_cliente, @$texto_contrato);
}

if(@$cpf_cliente != ""){
	$texto_contrato = @str_replace('{{NÚMERO DO CPF}}', @$cpf_cliente, @$texto_contrato);
}

if(@$cpf_cliente != ""){
	$texto_contrato = @str_replace('{{CPF}}', @$cpf_cliente, @$texto_contrato);
}


if(@$rg_cliente != ""){
	$texto_contrato = @str_replace('{{NÚMERO RG}}', @$rg_cliente, @$texto_contrato);
}

if(@$rg_cliente != ""){
	$texto_contrato = @str_replace('{{RG}}', @$rg_cliente, @$texto_contrato);
}

if(@$genitor_cliente != ""){
	$texto_contrato = @str_replace('{{GENITOR}}', @$genitor_cliente, @$texto_contrato);
}

if(@$genitora_cliente != ""){
	$texto_contrato = @str_replace('{{GENITORA}}', @$genitora_cliente, @$texto_contrato);
}

if(@$endereco_cliente != ""){
	$texto_contrato = @str_replace('{{LOGRADOURO}}', @$endereco_cliente, @$texto_contrato);
}

if(@$numero_cliente != ""){
	$texto_contrato = @str_replace('{{NÚMERO LOGRADOURO}}', @$numero_cliente, @$texto_contrato);
}

if(@$bairro_cliente != ""){
	$texto_contrato = @str_replace('{{BAIRRO}}', @$bairro_cliente, @$texto_contrato);
}


if(@$cidade_cliente != ""){
	$texto_contrato = @str_replace('{{MUNICÍPIO}}', @$cidade_cliente, @$texto_contrato);
}

if(@$cidade_cliente != ""){
	$texto_contrato = @str_replace('{{CIDADE}}', @$cidade_cliente, @$texto_contrato);
}


if(@$estado_cliente != ""){
	$texto_contrato = @str_replace('{{ESTADO}}', @$estado_cliente, @$texto_contrato);
}

if(@$estado_cliente != ""){
	$texto_contrato = @str_replace('{{UF}}', @$estado_cliente, @$texto_contrato);
}

if(@$cep_cliente != ""){
	$texto_contrato = @str_replace('{{CEP}}', @$cep_cliente, @$texto_contrato);
}

if(@$email_cliente != ""){
	$texto_contrato = @str_replace('{{EMAIL}}', @$email_cliente, @$texto_contrato);
}

if(@$telefone_cliente != ""){
	$texto_contrato = @str_replace('{{TELEFONE}}', @$telefone_cliente, @$texto_contrato);
}


$img_assinatura = '';


$img_assinatura = '<img src="'.$url_sistema.'painel/images/assinaturas/'.$id_cliente.'.png" alt="Imagem da Assinatura">';
$texto_contrato = @str_replace('{{ASSINATURA}}', @$img_assinatura, @$texto_contrato);

$texto_contrato = @str_replace('{{ENDERECO_COMPLETO}}', "$endereco_cliente, $numero_cliente , $bairro_cliente, $cidade_cliente-$estado_cliente", $texto_contrato);

	

//dados do profissional / advogado

if(@$nome_usuario != ""){
	$texto_contrato = @str_replace('{{PROFISSIONAL}}', @$texto_profissional, @$texto_contrato);
}

if(@$nome_usuario != ""){
	$texto_contrato = @str_replace('{{NOME2}}', @$nome_usuario, @$texto_contrato);
}

if(@$nacionalidade_usuario != ""){
	$texto_contrato = @str_replace('{{NACIONALIDADE2}}', @$nacionalidade_usuario, @$texto_contrato);
}

if(@$estado_civil_usuario != ""){
	$texto_contrato = @str_replace('{{ESTADO CIVIL2}}', @$estado_civil_usuario, @$texto_contrato);
}

if(@$seccional_oab != ""){
	$texto_contrato = @str_replace('{{SECCIONAL OAB}}', @$seccional_oab, @$texto_contrato);
}

if(@$numero_oab != ""){
	$texto_contrato = @str_replace('{{NÚMERO OAB}}', @$numero_oab, @$texto_contrato);
}

if(@$endereco_usuario != ""){
	$texto_contrato = @str_replace('{{ENDERECO2}}', @$endereco_usuario, @$texto_contrato);
}





if(@$cidade_sistema != ""){
	$texto_contrato = @str_replace('{{LOCAL}}', @$cidade_sistema, @$texto_contrato);
}


if(@$data_hoje != ""){
	$texto_contrato = @str_replace('{{DATA}}', @$data_hoje, @$texto_contrato);
}


if(@$nome_sistema != ""){
	$texto_contrato = @str_replace('{{NOME SISTEMA}}', @$nome_sistema, @$texto_contrato);
}

if(@$nome_sistema != ""){
	$texto_contrato = @str_replace('{{NOME EMPRESA}}', @$nome_sistema, @$texto_contrato);
}

if(@$nome_sistema != ""){
	$texto_contrato = @str_replace('{{NOME DO SISTEMA}}', @$nome_sistema, @$texto_contrato);
}

if(@$nome_sistema != ""){
	$texto_contrato = @str_replace('{{NOME DA EMPRESA}}', @$nome_sistema, @$texto_contrato);
}

if(@$cnpj_sistema != ""){
	$texto_contrato = @str_replace('{{CNPJ SISTEMA}}', @$cnpj_sistema, @$texto_contrato);
}

if(@$cnpj_sistema != ""){
	$texto_contrato = @str_replace('{{CNPJ EMPRESA}}', @$cnpj_sistema, @$texto_contrato);
}


if(@$endereco_sistema != ""){
	$texto_contrato = @str_replace('{{ENDERECO ESCRITORIO}}', @$endereco_sistema, @$texto_contrato);
}

if(@$endereco_sistema != ""){
	$texto_contrato = @str_replace('{{ENDERECO SISTEMA}}', @$endereco_sistema, @$texto_contrato);
}

if(@$endereco_sistema != ""){
	$texto_contrato = @str_replace('{{ENDERECO EMPRESA}}', @$endereco_sistema, @$texto_contrato);
}

if(@$endereco_sistema != ""){
	$texto_contrato = @str_replace('{{ENDEREÇO ESCRITORIO}}', @$endereco_sistema, @$texto_contrato);
}

if(@$endereco_sistema != ""){
	$texto_contrato = @str_replace('{{ENDEREÇO SISTEMA}}', @$endereco_sistema, @$texto_contrato);
}

if(@$endereco_sistema != ""){
	$texto_contrato = @str_replace('{{ENDEREÇO EMPRESA}}', @$endereco_sistema, @$texto_contrato);
}
$texto_contrato = @str_replace('{{DEMAIS CONTRATANTES}}', @$demais_contratantes, @$texto_contrato);
$texto_contrato = @str_replace('{{DEMAIS CONTRATADOS}}', @$demais_contratados, @$texto_contrato);



echo @$texto_contrato;

?>