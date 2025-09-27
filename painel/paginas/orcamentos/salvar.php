<?php 
@session_start();
$id_empresa = @$_SESSION['empresa'];
require_once("../../../conexao.php");
require_once("../../buscar_config.php");
$tabela = 'orcamentos';

$id_usuario = @$_SESSION['id'];

$data_atual = date('Y-m-d');
$id = $_POST['id'];

$cliente = @$_POST['cliente'];
$data_entrega = @$_POST['data_entrega'];
$dias_validade = @$_POST['dias_validade'];
$valor = @$_POST['valor'];
$desconto = @$_POST['desconto'];
$tipo_desconto = $_POST['tipo_desconto'];
$obs = $_POST['obs'];
$frete = $_POST['frete'];
$frete = @str_replace(',', '.', $frete);
$equipamento = @$_POST['equipamento'];
$marca = @$_POST['marca'];
$modelo = @$_POST['modelo'];
$defeito = @$_POST['defeito'];
$condicoes = @$_POST['condicoes'];
$acessorios = @$_POST['acessorios'];
$laudo = $_POST['laudo'];
$senha_ap = @$_POST['senha_ap'];
$mao_obra = @$_POST['mao_obra'];
$vall = @$_POST['vall'];
$vall = @str_replace(',', '.', $vall);

$enviar_pdf = @$_POST['enviar_pdf'];


	$query2 = $pdo->query("SELECT * FROM modelos where id = '$modelo'");
	$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
	$total_reg2 = @count($res2);
	if($total_reg2 > 0){
		$equipamento = $res2[0]['equipamento'];
		$marca = $res2[0]['marca'];
	}


$data_entregaF = implode('/', array_reverse(explode('-', $data_entrega)));


if($cliente == ""){
	echo 'Escolha um Cliente';
	exit();
}


if($id == ""){
	$id_orc = 0;
}else{
	$id_orc = $id;
}


$total_produtos = 0;
if($id == ""){
	$query = $pdo->query("SELECT * from produtos_orc where funcionario = '$id_usuario' and orcamento = '$id_orc'");
}else{
	$query = $pdo->query("SELECT * from produtos_orc where orcamento = '$id_orc'");
}

//Total de produtosS
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$produtos = @count($res);
	if($produtos > 0){
		for($i=0; $i<$produtos; $i++){
		$total = $res[$i]['total'];
		$total_produtos += $total;
	}
}
 
//Total de serviçps
$total_servicos = 0;
if($id == ""){
	$query = $pdo->query("SELECT * from servicos_orc where funcionario = '$id_usuario' and orcamento = '$id_orc'");
}else{
	$query = $pdo->query("SELECT * from servicos_orc where orcamento = '$id_orc'");
}


$res = $query->fetchAll(PDO::FETCH_ASSOC);
$servicos = @count($res);
	if($servicos > 0){
		for($i=0; $i<$servicos; $i++){
		$total = $res[$i]['total'];
		$total_servicos += $total;
	}
}


$total_final = $total_produtos + $total_servicos;
if($id == "" and $mao_obra > 0){
	$total_final += $mao_obra;
}


if($valor == ""){
	$valor = 0;
}


if($vall == ""){
	$vall = 0;
}

if($desconto == ""){
	$desconto = 0;
}

if($frete == ""){
	$frete = 0;
}

if($tipo_desconto == "%"){
	$total_com_desconto = $total_final + $vall - ($total_final * $desconto / 100) + $frete;
}else{
	$total_com_desconto = $total_final + $vall - $desconto + $frete;
}


if($total_com_desconto == 0){
	echo 'Voçe precisa adicionar um valor ao orçamento';
	exit();
}


if($id == ""){
	$query = $pdo->prepare("INSERT INTO $tabela SET cliente = '$cliente', data = curDate(), data_entrega = '$data_entrega', dias_validade = '$dias_validade', valor = '$total_final', desconto = '$desconto', tipo_desconto = '$tipo_desconto', subtotal = '$total_com_desconto', obs = :obs, status = 'Pendente', total_produtos = '$total_produtos', total_servicos = '$total_servicos', funcionario = '$id_usuario', frete = :frete, equipamento = '$equipamento', marca = '$marca', modelo = '$modelo', defeito = '$defeito', vall = '$vall',  condicoes = :condicoes, acessorios = :acessorios, laudo = :laudo, senha_ap = :senha_ap, mao_obra = :mao_obra, empresa = '$id_empresa'");

}else{
	$query = $pdo->prepare("UPDATE $tabela SET cliente = '$cliente', data_entrega = '$data_entrega', dias_validade = '$dias_validade', valor = '$total_final', desconto = '$desconto', tipo_desconto = '$tipo_desconto', subtotal = '$total_com_desconto', obs = :obs, total_produtos = '$total_produtos', total_servicos = '$total_servicos', funcionario = '$id_usuario', frete = :frete, equipamento = '$equipamento', marca = '$marca', modelo = '$modelo', defeito = '$defeito', vall = '$vall', condicoes = :condicoes, acessorios = :acessorios, laudo = :laudo, senha_ap = :senha_ap, mao_obra = :mao_obra where id = '$id'");
}

$query->bindValue(":obs", "$obs");
$query->bindValue(":frete", "$frete");
$query->bindValue(":acessorios", "$acessorios");
$query->bindValue(":condicoes", "$condicoes");
$query->bindValue(":laudo", "$laudo");
$query->bindValue(":senha_ap", "$senha_ap");
$query->bindValue(":mao_obra", "$mao_obra");
$query->execute();



if($id == ""){
$id_orcamento = $pdo->lastInsertId();
	$pdo->query("UPDATE produtos_orc SET orcamento = '$id_orcamento' WHERE orcamento = 0 and funcionario = '$id_usuario'");
	$pdo->query("UPDATE servicos_orc SET orcamento = '$id_orcamento' WHERE orcamento = 0 and funcionario = '$id_usuario'");
}else{
	$id_orcamento = $id;
}

echo 'Salvo com Sucesso-'.$id_orcamento; 



	$query2 = $pdo->query("SELECT * FROM modelos where id = '$modelo'");
	$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
	$total_reg2 = @count($res2);
	if($total_reg2 > 0){
		@$nome_modelo = @$res2[0]['nome'];
	}

	$query2 = $pdo->query("SELECT * FROM equipamentos where id = '$equipamento'");
	$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
	$total_reg2 = @count($res2);
	if($total_reg2 > 0){
		@$nome_equipamento = @$res2[0]['nome'];
	}

	$query2 = $pdo->query("SELECT * FROM usuarios where id = '$id_usuario'");
	$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
	$total_reg2 = @count($res2);
	if($total_reg2 > 0){
		@$nome_senha = @$res2[0]['senha'];
	}



$mensagem = '';
//api whats
if($api_whatsapp != 'Não'){
	$query = $pdo->query("SELECT * from clientes where id = '$cliente' ");
	$res = $query->fetchAll(PDO::FETCH_ASSOC);
	$telefone = $res[0]['telefone'];
	$nome_cliente = $res[0]['nome'];

	$telefone_envio = '55'.preg_replace('/[ ()-]+/' , '' , $telefone);
	if($id == ""){
		$mensagem .= '*Novo Orçamento* %0A%0A';

	}else if($enviar_pdf == 'Sim'){
		$mensagem .= '*Orçamento Atualizado* %0A%0A';
	}

		$mensagem .= 'Empresa: *'.$nome_sistema.'* %0A';
		$mensagem .= 'Nome: *'.$nome_cliente.'* %0A';

		if($equipamento != ''){
		$mensagem .= 'Equipamento: *'.@$nome_equipamento.'* %0A';
		$mensagem .= 'Modelo: *'.@$nome_modelo.'* %0A%0A';
		}

		$mensagem .= 'Previsão do Orçamento: *'.$data_entregaF.'* %0A%0A';


		$mensagem .= '*Acompanhe o status do ser serviço* %0A%0A';
		$mensagem .= '_Use seu telefone e sua senha para acesso o painel!_ %0A%0A';		
		$mensagem .= 'Acessar Painel: *'.$url_sistema.'acesso.php* %0A%0A';

		$mensagem .= '_Segue abaixo o PDF com o Detalhamento_ %0A';

		

	require('../../apis/texto.php');
}	

?>