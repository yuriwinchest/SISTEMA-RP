<?php 
@session_start();
$id_empresa = @$_SESSION['empresa'];
require_once("../../../conexao.php");
require_once("../../buscar_config.php");
$tabela = 'orcamentos';

$id_usuario = $_SESSION['id'];

$id = $_POST['id'];

$query = $pdo->query("SELECT * from orcamentos where id = '$id'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$data = $res[0]['data'];
$cliente = $res[0]['cliente'];
$equipamento = $res[0]['equipamento'];
$marca = $res[0]['marca'];
$modelo = $res[0]['modelo'];
$data_entrega = $res[0]['data_entrega'];
$dias_validade = $res[0]['dias_validade'];
$valor = $res[0]['valor'];
$desconto = $res[0]['desconto'];
$tipo_desconto = $res[0]['tipo_desconto'];
$subtotal = $res[0]['subtotal'];
$obs = $res[0]['obs'];
$status = $res[0]['status'];
$total_produtos = $res[0]['total_produtos'];
$total_servicos = $res[0]['total_servicos'];
$funcionario = $res[0]['funcionario'];
$frete = $res[0]['frete'];
$vall = $res[ 0]['vall'];
$defeito = $res[ 0]['defeito'];
$acessorios = $res[ 0]['acessorios'];
$condicoes = $res[ 0]['condicoes'];
$laudo = $res[ 0]['laudo'];
$senha_ap = $res[ 0]['senha_ap'];
$mao_obra = $res[ 0]['mao_obra'];




if($tipo_desconto == "%"){
	$total_do_desconto = $valor * $desconto / 100;
}else{
	$total_do_desconto = $desconto;
}

// mudar status do Orçamento
$pdo->query("UPDATE orcamentos SET status = 'Aprovado' where id = '$id'");

if(($total_servicos > 0) || ($vall > 0)){
	//inserção da OS
	$pdo->query("INSERT INTO os SET data = curDate(), cliente = '$cliente', modelo = '$modelo', data_entrega = '$data_entrega', defeito = '$defeito', dias_validade = '$dias_validade', valor = '$valor', vall = '$vall', desconto = '$desconto', tipo_desconto = '$tipo_desconto', subtotal = '$subtotal', funcionario = '$id_usuario', status = 'Aberta', total_produtos = '$total_produtos', total_servicos = '$total_servicos', obs = '$obs', frete = '$frete', orcamento = '$id', acessorios = '$acessorios', condicoes = '$condicoes', laudo = '$laudo', senha_ap = '$senha_ap', mao_obra = '$mao_obra', empresa = '$id_empresa'");

}else{
	if($total_produtos > 0){
		//inserção da venda
		$pdo->query("INSERT INTO receber SET descricao = 'Nova Venda', valor = '$subtotal', vencimento = curDate(), data_lanc = curDate(), usuario_lanc = '$id_usuario', arquivo = 'sem-foto.png', pago = 'Não', cliente = '$cliente', referencia = 'Venda', hora = curTime(), desconto = '$total_do_desconto', id_ref = '$id', empresa = '$id_empresa', hora_alerta = '$hora_random'");
		$id_venda = $pdo->lastInsertId();

		$total_das_compras = 0;
		$query2 = $pdo->query("SELECT * from produtos_orc where orcamento = '$id'");
		$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
		$linhas2 = @count($res2);
		for($i=0; $i<$linhas2; $i++){
		$id_pro_orc = $res2[$i]['id'];
		$id_produto = $res2[$i]['produto'];
		$quantidade = $res2[$i]['quantidade'];
		$valor_prod = $res2[$i]['valor'];
		$total_prod = $res2[$i]['total'];

		$pdo->query("INSERT INTO itens_venda SET produto = '$id_produto', valor = '$valor_prod', quantidade = '$quantidade', total = '$total_prod', id_venda = '$id_venda', funcionario = '$id_usuario', empresa = '$id_empresa'");

		$query7 = $pdo->query("SELECT * from produtos where id = '$id_produto'");
		$res7 = $query7->fetchAll(PDO::FETCH_ASSOC);
		$estoque = $res7[0]['estoque'];
		$tem_estoque = $res7[0]['tem_estoque'];
		$vendas = $res7[0]['vendas'];
		$valor_compra = $res7[0]['valor_compra'] * $quantidade;
		$total_das_compras += $valor_compra;

		$pdo->query("UPDATE receber SET valor_custo = '$total_das_compras' WHERE id = '$id_venda'");

		if($tem_estoque == 'Sim'){
			$novo_estoque = $estoque - $quantidade;
			$vendas = $vendas + $quantidade;
			//remove o produto do estoque
			$pdo->query("UPDATE produtos SET estoque = '$novo_estoque', vendas = '$vendas' WHERE id = '$id_produto'");
		}
		
	}
}

}

echo 'Baixado com Sucesso';

?>

