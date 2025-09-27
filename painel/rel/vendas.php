<?php 
include('data_formatada.php');

if ($token_rel != 'M543661') {
	echo '<script>window.location="../../"</script>';
	exit();
}

$dataInicialF = implode('/', array_reverse(@explode('-', $dataInicial)));
$dataFinalF = implode('/', array_reverse(@explode('-', $dataFinal)));	

$datas = "";
if($dataInicial == $dataFinal){
	$datas = $dataInicialF;
}else{
	$datas = $dataInicialF.' à '.$dataFinalF;
}

$sql_func = "";
if($funcionario > 0){
	$sql_func = " and usuario_lanc = '$funcionario' ";
}


$sql_cliente = "";
if($cliente > 0){
	$sql_cliente = " and cliente = '$cliente' ";
}


$sql_pgto = "";
if($forma_pgto > 0){
	$sql_pgto = " and forma_pgto = '$forma_pgto' ";
}


$query2 = $pdo->query("SELECT * FROM clientes where id = '$cliente'");
$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
if(@count($res2) > 0){
	$nome_cliente = ' Cliente: '.$res2[0]['nome'];
}else{
	$nome_cliente = '';
}

$texto_filtro = $datas.''.$nome_cliente;



?>
<!DOCTYPE html>
<html>
<head>

<style>

@import url('https://fonts.cdnfonts.com/css/tw-cen-mt-condensed');
@page { margin: 145px 20px 25px 20px; }
#header { position: fixed; left: 0px; top: -110px; bottom: 100px; right: 0px; height: 35px; text-align: center; padding-bottom: 100px; }
#content {margin-top: 0px;}
#footer { position: fixed; left: 0px; bottom: -60px; right: 0px; height: 80px; }
#footer .page:after {content: counter(page, my-sec-counter);}
body {font-family: 'Tw Cen MT', sans-serif;}

.marca{
	position:fixed;
	left:50;
	top:100;
	width:80%;
	opacity:8%;
}


tr:nth-child(odd) { /* Linhas ímpares */
    background-color: #f2f2f2;
}

tr:nth-child(even) { /* Linhas pares */
    background-color: #ffffff;
}

</style>

</head>
<body>
<?php 
if($marca_dagua == 'Sim'){ ?>
<img class="marca" src="<?php echo $url_sistema ?>img/<?php echo $icone_sistema ?>">	
<?php } ?>


<div id="header" >

	<div style="border-style: solid; font-size: 10px; height: 50px;">
		<table style="width: 100%; border: 0px solid #ccc;">
			<tr style="background:#FFF">
				<td style="width: 7%; text-align: left;">
					<img style="margin-top: 7px; margin-left: 7px;" id="imag" src="<?php echo $url_sistema ?>img/<?php echo $logo_rel ?>" width="150px">
				</td>
				<td style="width: 30%; text-align: left; font-size: 13px;">
					
				</td>
				<td style="width: 1%; text-align: center; font-size: 13px;">
				
				</td>
				<td style="width: 47%; text-align: right; font-size: 9px;padding-right: 10px;">
						<b><big>RELATÓRIO DE VENDAS</span></big></b><br> <?php echo @mb_strtoupper($texto_filtro) ?> <br> <?php echo @mb_strtoupper($data_hoje) ?>
				</td>
			</tr>		
		</table>
	</div>

<br>


		<table id="cabecalhotabela" style="border-bottom-style: solid; font-size: 8px; margin-bottom:10px; width: 100%; table-layout: fixed;">
			<thead>
				
				<tr id="cabeca" style="margin-left: 0px; background-color:#CCC">
					
					<td style="width:10%">VALOR</td>
					<td style="width:20%">CLIENTE</td>
					<td style="width:10%">LANÇAMENTO</td>					
					<td style="width:10%">PAGAMENTO</td>
					<td style="width:10%">FORMA PGTO</td>
					<td style="width:20%">EFETUADA POR</td>	
					<td style="width:10%">VALOR CUSTO</td>
					<td style="width:10%">TOTAL LÍQUIDO</td>			
					
				</tr>
			</thead>
		</table>
</div>

<div id="footer" class="row">
<hr style="margin-bottom: 0;">
	<table style="width:100%;">
		<tr style="width:100%; background:#FFF">
			<td style="width:60%; font-size: 10px; text-align: left;"><?php echo $nome_sistema ?> Telefone: <?php echo $telefone_sistema ?></td>
			<td style="width:40%; font-size: 10px; text-align: right;"><p class="page">Página  </p></td>
		</tr>
	</table>
</div>

<div id="content" style="margin-top: 0;">



		<table style="width: 100%; table-layout: fixed; font-size:9px; text-transform: uppercase;">
			<thead>
				<tbody>
					<?php

$total_valor = 0;
$total_valorF = 0;
$total_liquido = 0;
$total_liquidoF = 0;
$total_custo = 0;
$total_custoF = 0;

$query = $pdo->query("SELECT * from receber where data_pgto >= '$dataInicial' and data_pgto <= '$dataFinal' and referencia = 'Venda' and empresa = '$id_empresa' $sql_pgto $sql_cliente $sql_func order by data_pgto asc");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = @count($res);
if($linhas > 0){
for($i=0; $i<$linhas; $i++){
	$id = $res[$i]['id'];
$descricao = $res[$i]['descricao'];
$valor = $res[$i]['valor'];
$data_lanc = $res[$i]['data_lanc'];
$data_venc = $res[$i]['vencimento'];
$data_pgto = $res[$i]['data_pgto'];
$usuario_lanc = $res[$i]['usuario_lanc'];
$usuario_pgto = $res[$i]['usuario_pgto'];
$arquivo = $res[$i]['arquivo'];
$pago = $res[$i]['pago'];
$obs = $res[$i]['obs'];
$referencia = $res[$i]['referencia'];
$valor_custo = $res[$i]['valor_custo'];	
$cliente = $res[$i]['cliente'];
$forma_pgto = $res[$i]['forma_pgto'];

$liquido = $valor - $valor_custo;

$data_lancF = implode('/', array_reverse(@explode('-', $data_lanc)));
$data_vencF = implode('/', array_reverse(@explode('-', $data_venc)));
$data_pgtoF = implode('/', array_reverse(@explode('-', $data_pgto)));
$valorF = number_format($valor, 2, ',', '.');
$valor_custoF = number_format($valor_custo, 2, ',', '.');
$liquidoF = number_format($liquido, 2, ',', '.');

$total_valor += $valor;
$total_custo += $valor_custo;
$total_liquido = $total_valor - $total_custo;

$total_valorF = number_format($total_valor, 2, ',', '.');
$total_custoF = number_format($total_custo, 2, ',', '.');
$total_liquidoF = number_format($total_liquido, 2, ',', '.');

$query2 = $pdo->query("SELECT * FROM usuarios where id = '$usuario_pgto'");
$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
if(@count($res2) > 0){
	$nome_usu_pgto = $res2[0]['nome'];
}else{
	$nome_usu_pgto = '';
}

$query2 = $pdo->query("SELECT * FROM clientes where id = '$cliente'");
$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
if(@count($res2) > 0){
	$nome_cliente = $res2[0]['nome'];
}else{
	$nome_cliente = '';
}


$query2 = $pdo->query("SELECT * FROM formas_pgto where id = '$forma_pgto'");
$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
if(@count($res2) > 0){
	$nome_pgto = $res2[0]['nome'];
}else{
	$nome_pgto = '';
}


if($pago == 'Sim'){
	$classe_pago = 'verde.jpg';	
	
}else{
	$classe_pago = 'vermelho.jpg';	
}



if($data_pgtoF == '00/00/0000'){
	$data_pgtoF = 'Pendente';
}
  	 ?>

  	 
      <tr>
<td style="width:10%">R$ <?php echo $valorF ?></td>
<td style="width:20%"><?php echo $nome_cliente ?></td>
<td style="width:10%"><?php echo $data_lancF ?></td>
<td style="width:10%"><?php echo $data_pgtoF ?></td>
<td style="width:10%"><?php echo $nome_pgto ?></td>
<td style="width:20%"><?php echo $nome_usu_pgto ?></td>
<td style="width:10%; color:red">R$ <?php echo $valor_custoF ?></td>
<td style="width:10%; color:green">R$ <?php echo $liquidoF ?></td>
    </tr>

<?php } } ?>
				</tbody>
	
			</thead>
		</table>
	


</div>
<hr>
		<table>
			<thead>
				<tbody>
					<tr>

						<td style="font-size: 10px; width:150px; text-align: right;"></td>

						

						<td style="font-size: 10px; width:140px; text-align: right;"><b>Total de Vendas: <span style="color:blue"><?php echo $linhas ?></span></td>

							<td style="font-size: 10px; width:140px; text-align: right;"><b>Valor Vendido: <span style="color:green">R$ <?php echo $total_valorF ?></span></td>


								<td style="font-size: 10px; width:140px; text-align: right;"><b>Total Custo: <span style="color:red">R$ <?php echo $total_custoF ?></span></td>

									<td style="font-size: 10px; width:140px; text-align: right;"><b>Total Líquido: <span style="color:green">R$ <?php echo $total_liquidoF ?></span></td>
						
					</tr>
				</tbody>
			</thead>
		</table>

</body>

</html>


