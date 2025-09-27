<?php 
@session_start();
$id_empresa = @$_SESSION['empresa'];
require_once("../../../conexao.php");
require_once("../../buscar_config.php");
$tabela = 'os';


$id_usuario = @$_SESSION['id'];

$data_atual = date('Y-m-d');

$data_entrega = $_POST['data_entrega'];
$cliente = @$_POST['cliente'];
//$dias_validade = $_POST['dias_validade'];
$desconto = $_POST['desconto'];
$tipo_desconto = $_POST['tipo_desconto'];
$obs = $_POST['obs'];
$frete = $_POST['frete'];
$frete = @str_replace(',', '.', $frete);
$id = $_POST['id'];
$tecnico = @$_POST['tecnico'];
$equipamento = @$_POST['equipamento'];
$marca = @$_POST['marca'];
$modelo = @$_POST['modelo'];
$acessorios = $_POST['acessorios'];
$condicoes = $_POST['condicoes'];
$laudo = $_POST['laudo'];
$defeito = @$_POST['defeito'];
$dias_garantia = @$_POST['dias_garantia'];
$senha_ap = @$_POST['senha_ap'];
$pago = @$_POST['pago'];
$forma_pgto = @$_POST['forma_pgto'];
$mao_obra = $_POST['mao_obra'];
$mao_obra = @str_replace(',', '.', $mao_obra);
$val_entrada = @$_POST['val_entrada'];
$val_entrada = str_replace(',', '.', $val_entrada);
$vall = @$_POST['vall'];
$vall = @str_replace(',', '.', $vall);
$enviar_pdf = @$_POST['enviar_pdf'];

$subtotal = $_POST['subtotal'];
$subtotal = @str_replace(',', '.', $subtotal);

//verificar se já possui alguma entrada
	$query2 = $pdo->query("SELECT * FROM os where id = '$id'");
	$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
	$valor_entrada_os = @$res2[0]['val_entrada'];
	$pago_os = @$res2[0]['pago'];
	if($valor_entrada_os == ""){
		$valor_entrada_os = 0;
	}


$data_entregaF = implode('/', array_reverse(explode('-', $data_entrega)));


$query2 = $pdo->query("SELECT * FROM modelos where id = '$modelo'");
	$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
	$total_reg2 = @count($res2);
	if($total_reg2 > 0){
		$equipamento = $res2[0]['equipamento'];
		$marca = $res2[0]['marca'];
	}


if($id == ""){
	$id_orc = 0;
}else{
	$id_orc = $id;
}


$query = $pdo->query("SELECT * from os where id = '$id'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$status = @$res[0]['status'];

if($status == 'Aberta' and $tecnico > 0){
	$status = 'Iniciada';
}

$total_produtos = 0;
$total_das_compras = 0;
$query = $pdo->query("SELECT * from produtos_orc where funcionario = '$id_usuario' and os = '$id_orc'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$produtos = @count($res);
	if($produtos > 0){
		for($i=0; $i<$produtos; $i++){
		$total = $res[$i]['total'];
		$produto = $res[$i]['produto'];
		$quantidade = $res[$i]['quantidade'];
		$total_produtos += $total;

		//abater os produtos do estoque
		$query2 = $pdo->query("SELECT * from produtos where id = '$produto'");
		$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);		
		$valor_compra = $res2[0]['valor_compra'] * $quantidade;
		$total_das_compras += $valor_compra;
		}
}


$total_servicos = 0;
$query = $pdo->query("SELECT * from servicos_orc where funcionario = '$id_usuario' and os = '$id_orc'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$servicos = @count($res);
	if($servicos > 0){
		for($i=0; $i<$servicos; $i++){
		$total = $res[$i]['total'];
		$total_servicos += $total;
	}
}

if($mao_obra == ""){
	$mao_obra = 0;
}

if($val_entrada == ""){
	$val_entrada = 0;
}

if($vall == ""){
	$vall = 0;
}

$total_final = $total_produtos + $total_servicos + $mao_obra + $vall;


if($desconto == ""){
	$desconto = 0;

}

if($frete == ""){
	$frete = 0;
}



if($tipo_desconto == "%"){
	$total_com_desconto = $total_final - ($total_final * $desconto / 100) + $frete - $val_entrada;
}else{
	$total_com_desconto = $total_final - $desconto + $frete - $val_entrada;
}



if($id == ""){
	$query = $pdo->prepare("INSERT INTO $tabela SET data = curDate(), cliente = '$cliente', data_entrega = '$data_entrega', valor = '$total_final', desconto = '$desconto', tipo_desconto = '$tipo_desconto', subtotal = '$total_com_desconto', funcionario = '$id_usuario', status = 'Aberta', total_produtos = '$total_produtos', total_servicos = '$total_servicos', obs = :obs, frete = :frete, mao_obra = '$mao_obra', tecnico = '$tecnico', equipamento = '$equipamento', marca = '$marca', modelo = '$modelo', acessorios = :acessorios, condicoes = :condicoes, laudo = :laudo, val_entrada = '$val_entrada', vall = '$vall',defeito = '$defeito', dias_garantia = '$dias_garantia', senha_ap = :senha_ap, pago = '$pago', forma_pgto = '$forma_pgto', empresa = '$id_empresa'");

}else{
	$query = $pdo->prepare("UPDATE $tabela SET cliente = '$cliente', data_entrega = '$data_entrega', valor = '$total_final', desconto = '$desconto', tipo_desconto = '$tipo_desconto', subtotal = '$total_com_desconto', funcionario = '$id_usuario',  total_produtos = '$total_produtos', total_servicos = '$total_servicos', obs = :obs, frete = :frete, mao_obra = '$mao_obra', tecnico = '$tecnico', equipamento = '$equipamento', marca = '$marca', modelo = '$modelo', acessorios = :acessorios, condicoes = :condicoes, laudo = :laudo, status = '$status', val_entrada = '$val_entrada',vall = '$vall',defeito = '$defeito', dias_garantia = '$dias_garantia', senha_ap = :senha_ap, pago = '$pago', forma_pgto = '$forma_pgto' where id = '$id'");
}

// converter paramentros para variável
$query->bindValue(":obs", "$obs");
$query->bindValue(":frete", "$frete");
$query->bindValue(":acessorios", "$acessorios");
$query->bindValue(":condicoes", "$condicoes");
$query->bindValue(":laudo", "$laudo");
$query->bindValue(":senha_ap", "$senha_ap");
$query->execute();

if($id == ""){
$id_orcamento = $pdo->lastInsertId();
	$pdo->query("UPDATE produtos_orc SET os = '$id_orcamento' WHERE os = 0 and funcionario = '$id_usuario'");
	$pdo->query("UPDATE servicos_orc SET os = '$id_orcamento', cliente = '$cliente', data = curDate(), subtotal = '$total_com_desconto' WHERE os = 0 and funcionario = '$id_usuario'");
}else{
	$id_orcamento = $id;
	$pdo->query("UPDATE servicos_orc SET cliente = '$cliente', subtotal = '$total_com_desconto' WHERE os = '$id'");
}



echo 'Salvo com Sucesso-'.$id_orcamento; 

$query2 = $pdo->query("SELECT * FROM modelos where id = '$modelo'");
	$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
	$total_reg2 = @count($res2);
	if($total_reg2 > 0){
		$nome_modelo = $res2[0]['nome'];
	}

	$query2 = $pdo->query("SELECT * FROM equipamentos where id = '$equipamento'");
	$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
	$total_reg2 = @count($res2);
	if($total_reg2 > 0){
		$nome_equipamento = $res2[0]['nome'];
	}

	$query2 = $pdo->query("SELECT * FROM usuarios where id = '$id_usuario'");
	$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
	$total_reg2 = @count($res2);
	if($total_reg2 > 0){
		$nome_senha = $res2[0]['senha'];
	}




	//LANÇAR O VALOR DA ENTRADA
	if($val_entrada > 0 and $valor_entrada_os == 0){
		$pdo->query("INSERT INTO receber SET descricao = 'Valor Entrada OS', valor = '$val_entrada', vencimento = curDate(), data_lanc = curDate(), data_pgto = curDate(),  usuario_lanc = '$id_usuario', usuario_pgto = '$id_usuario', arquivo = 'sem-foto.png', pago = 'Sim', cliente = '$cliente', referencia = 'Serviço', hora = curTime(),  id_ref = '$id_orcamento', forma_pgto = '$forma_pgto', empresa = '$id_empresa', hora_alerta = '$hora_random'");
	}

	//verificar se não foi lançada a conta da OS e vai lançar o valor pago
	if($pago == "Sim" and $pago_os != 'Sim'){
	$pdo->query("INSERT INTO receber SET descricao = 'Nova OS', valor = '$subtotal', vencimento = curDate(), data_lanc = curDate(), data_pgto = curDate(),  usuario_lanc = '$id_usuario', usuario_pgto = '$id_usuario', arquivo = 'sem-foto.png', pago = 'Sim', cliente = '$cliente', referencia = 'Serviço', hora = curTime(),  id_ref = '$id_orcamento', forma_pgto = '$forma_pgto', empresa = '$id_empresa', hora_alerta = '$hora_random', valor_custo = '$total_das_compras'");
	}


//api whats
if($api_whatsapp != 'Não'){
	$query = $pdo->query("SELECT * from clientes where id = '$cliente' ");
	$res = $query->fetchAll(PDO::FETCH_ASSOC);
	$telefone = $res[0]['telefone'];
	$nome_cliente = $res[0]['nome'];

	$telefone_envio = '55'.preg_replace('/[ ()-]+/' , '' , $telefone);



	if($id == ""){
		$mensagem = '*Nova Ordem de Serviço* %0A%0A';

		$mensagem .= 'Empresa: *'.$nome_sistema.'* %0A';
		$mensagem .= 'Nome: *'.$nome_cliente.'* %0A';
		$mensagem .= 'Previsão de Entrega: *'.$data_entregaF.'* %0A%0A';

		if($equipamento != ''){
		$mensagem .= 'Equipamento: *'.@$nome_equipamento.'* %0A';
		$mensagem .= 'Modelo: *'.@$nome_modelo.'* %0A';
		}

		$mensagem .= '*Acompanhe o status do ser serviço* %0A%0A';
		$mensagem .= '_Use seu telefone e sua senha para acesso o painel, após acessar, troque a senha para uma de sua preferência!_ %0A';
		$mensagem .= 'Senha: *'.$nome_senha.'* %0A';
		$mensagem .= 'Acessar Painel: *'.$url_sistema.'* %0A%0A';

		if($pago == "Sim"){
			$mensagem .= 'Pago: *'.$pago.'* %0A';
		}

		$mensagem .= '_Segue abaixo o PDF com o Detalhamento_ %0A';
		
	}else if($enviar_pdf == 'Sim'){
		$mensagem = '*Ordem de Serviço Atualizada* %0A%0A';

		$mensagem .= 'Empresa: *'.$nome_sistema.'* %0A';
		$mensagem .= 'Nome: *'.$nome_cliente.'* %0A';
		$mensagem .= 'Previsão de Entrega: *'.$data_entregaF.'* %0A%0A';

		if($nome_modelo != ''){
		$mensagem .= 'Equipamento: *'.@$nome_equipamento.'* %0A';
		$mensagem .= 'Modelo: *'.$nome_modelo.'* %0A';
		}
		
		$mensagem .= '*Acompanhe o status do ser serviço* %0A%0A';
		$mensagem .= '_Use seu telefone e sua senha para acesso o painel!_ %0A';		
		$mensagem .= 'Acessar Painel: *'.$url_sistema.'acesso.php* %0A%0A';

		$mensagem .= '_Segue abaixo o PDF com o Detalhamento_ %0A';	
	}
	
			
	

	require('../../apis/texto.php');
}	

//enviar ao técnico a notificação de nova OS
if($api_whatsapp != 'Não' and $tecnico > 0 and $id == ""){

		$query = $pdo->query("SELECT * from usuarios where id = '$tecnico' ");
		$res = $query->fetchAll(PDO::FETCH_ASSOC);
		$telefone_tec = $res[0]['telefone'];
		$nome_tecnico = $res[0]['nome'];

		$telefone_envio = '55'.preg_replace('/[ ()-]+/' , '' , $telefone_tec);

		$mensagem = '*'.mb_strtoupper($nome_sistema).'* %0A';
		$mensagem .= '*Nova Ordem de Serviço Nº '.$id_orcamento.'* %0A%0A';
		$mensagem .= 'Técnico: *'.$nome_tecnico.'* %0A';
		$mensagem .= 'Nome: *'.$nome_cliente.'* %0A';
		$mensagem .= 'Previsão de Entrega: *'.$data_entregaF.'* %0A';
		$mensagem .= 'Equipamento: *'.@$nome_equipamento.'* %0A';
		$mensagem .= 'Modelo: *'.@$nome_modelo.'* %0A';
		$mensagem .= 'Defeito: *'.$defeito.'* %0A';

		require('../../apis/texto.php');
}

?>