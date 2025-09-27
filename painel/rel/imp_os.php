<?php 
@session_start();
$id_empresa = @$_SESSION['empresa'];
include('../../conexao.php');
include('../buscar_config.php');
 
$id = $_POST['id'];
$duas_vias_os = $_POST['duas_vias_os'];

$query = $pdo->query("SELECT * from os where id = '$id'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);


$data = $res[0]['data'];
$cliente = $res[0]['cliente'];
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
$tecnico = $res[0]['tecnico'];
$condicoes = $res[0]['condicoes'];
$acessorios = $res[0]['acessorios'];
$equipamento = $res[0]['equipamento'];
$marca = $res[0]['marca'];
$modelo = $res[0]['modelo'];
$orcamento = $res[0]['orcamento'];
$mao_obra = $res[0]['mao_obra'];
$laudo = $res[0]['laudo'];
$vall = $res[0]['vall'];
$defeito = $res[0]['defeito'];
$val_entrada = $res[0]['val_entrada'];
$dias_garantia = $res[0]['dias_garantia'];
$senha_ap = $res[0]['senha_ap'];
$pago = $res[0]['pago'];



$dataF = implode('/', array_reverse(@explode('-', $data)));
$data_entregaF = implode('/', array_reverse(@explode('-', $data_entrega)));

$valorF = number_format($valor, 2, ',', '.');
$subtotalF = number_format($subtotal, 2, ',', '.');
$freteF = number_format($frete, 2, ',', '.');
$total_produtosF = number_format($total_produtos, 2, ',', '.');
$total_servicosF = number_format($total_servicos, 2, ',', '.');
$mao_obraF = number_format($mao_obra, 2, ',', '.');
$total_vallF = number_format($vall, 2, ',', '.');
$val_entradaF = number_format($val_entrada, 2, ',', '.');


$query2 = $pdo->query("SELECT * FROM usuarios where id = '$funcionario'");
$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
if(@count($res2) > 0){
	$nome_usu_lanc = $res2[0]['nome'];
}else{
	$nome_usu_lanc = 'Sem Usuário';
}

$query2 = $pdo->query("SELECT * FROM usuarios where id = '$tecnico'");
$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
if(@count($res2) > 0){
	$nome_tecnico = $res2[0]['nome'];
}else{
	$nome_tecnico = 'Sem Usuário';
}


$query2 = $pdo->query("SELECT * FROM clientes where id = '$cliente'");
$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
if(@count($res2) > 0){
	$nome_cliente = $res2[0]['nome'];	
	$tel_cliente = $res2[0]['telefone'];
	
	$endereco = $res2[0]['endereco'];
	$numero = $res2[0]['numero'];
	$bairro = $res2[0]['bairro'];
	$cidade = $res2[0]['cidade'];
	$estado = $res2[0]['estado'];
	$cep = $res2[0]['cep'];

	$endereco_cliente = $endereco.' '.$numero.' '.$bairro.' '.$cidade.' '.$estado.' '.$cep;
}


$nome_equipamento = '';

$query3 = $pdo->query("SELECT * FROM equipamentos where id = '$equipamento'");
$res3 = $query3->fetchAll(PDO::FETCH_ASSOC);
if(@count($res3) > 0){
	$nome_equipamento = $res3[0]['nome'];	
	
}

$nome_marca = '';

$query3 = $pdo->query("SELECT * FROM marcas where id = '$marca'");
$res3 = $query3->fetchAll(PDO::FETCH_ASSOC);
if(@count($res3) > 0){
	$nome_marca = $res3[0]['nome'];	
	
}

$nome_modelo = '';

$query3 = $pdo->query("SELECT * FROM modelos where id = '$modelo'");
$res3 = $query3->fetchAll(PDO::FETCH_ASSOC);
if(@count($res3) > 0){
	$nome_modelo = $res3[0]['nome'];	
	
}

if($tipo_desconto == "%"){
	$valor_porcent = '%';
	$valor_reais = '';
	$descontoF = $desconto;
}else{
	$valor_porcent = '';
	$valor_reais = 'R$';
	$descontoF = number_format($desconto, 2, ',', '.');
}

?>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<?php if(@$impressao_automatica == 'Sim'){ ?>
	<script type="text/javascript">
		$(document).ready(function() {  
			var duas_vias_os = "<?=$duas_vias_os?>"; 
			if(duas_vias_os.trim() === "Sim"){
				window.print();
			}	

			setTimeout(() => {
			window.print();
			window.close(); 

		}, 500);
			
		} );
	</script>
<?php } ?>


<style type="text/css">
	*{
		margin:0px;

		/*Espaçamento da margem da esquerda e da Direita*/
		padding:0px;
		background-color:#ffffff;

		font-color:#000;	
		font-family: TimesNewRoman, Geneva, sans-serif; 

	}
	.text {
		&-center { text-align: center; }
	}
	.ttu { text-transform: uppercase;
		font-weight: bold;
		font-size: 1.2em;
	}

	.printer-ticket {
		display: table !important;
		width: 100%;

		/*largura do Campos que vai os textos*/
		max-width: 400px;
		font-weight: light;
		line-height: 1.3em;

		/*Espaçamento da margem da esquerda e da Direita*/
		padding: 0px;
		font-family: TimesNewRoman, Geneva, sans-serif; 

		/*tamanho da Fonte do Texto*/
		font-size: <?php echo $fonte_comprovante ?>;
		font-color:#000;


	}
	
	th { 
		font-weight: inherit;

		/*Espaçamento entre as uma linha para outra*/
		padding:5px;
		text-align: center;

		/*largura dos tracinhos entre as linhas*/
		border-bottom: 1px dashed #000000;
	}

	.cor{
		color:#000000;
	}
	

	/*margem Superior entre as Linhas*/
	.margem-superior{
		padding-top:5px;
	}
	
	
}
</style>


 
<table class="printer-ticket">

	<td>
		<img style="margin-top: 10px; margin-left: 50px;" id="imag" src="<?php echo $url_sistema ?>img/<?php echo $logo_rel ?>" width="180px">
	</td>

	<tr>
		<th class="ttu" class="title" colspan="3"></th>
	</tr>
	<tr style="font-size: 12px">
		<th colspan="3">
		<b>	<?php echo $endereco_sistema ?></b> <br />
			<b>CONTATO: <?php echo $telefone_sistema ?>  <?php if($cnpj_sistema != ""){ ?> / CNPJ: <?php echo  $cnpj_sistema  ?><?php } ?></b><br>

		</th>
	</tr>

	<tr style="font-size: 12px">
	<th colspan="3"><b>CLIENTE:</b> <?php echo $nome_cliente ?> - Tel: <?php echo $tel_cliente ?>	<br/>
	
	</th>



<tr >
	<th class="ttu margem-superior" colspan="3">
		ORDEM DE SERVIÇO Nº <?php echo $id ?> 

	</th>
</tr>




<?php if($equipamento != ""){ ?>

	
	<tr style="font-size: 12px">
		<td><b>EQUIPAMENTO:</b> <?php echo $nome_equipamento ?></td>			
	</tr>



	<tr style="font-size: 12px">
		<td><b>MODELO:</b> <?php echo $nome_modelo ?></td>			
	</tr>


	<tr style="font-size: 12px">
		<td><b>MARCA:</b> <?php echo $nome_marca ?></td>	

	</tr>


		<tr>
			<th class="ttu"  colspan="3" class="cor">
			<!-- _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ -->
			</th>
		</tr>

<?php } ?>



<tbody>

	<?php 
	$total_servicos = 0;
	$total_servicosF = 0;
	$query = $pdo->query("SELECT * from servicos_orc where os = '$id'");
	$res = $query->fetchAll(PDO::FETCH_ASSOC);
	$linhas = @count($res);
	if($linhas > 0){

		for($i=0; $i<$linhas; $i++){

			$servico = $res[$i]['servico'];
			$quantidade = $res[$i]['quantidade'];
			$valor = $res[$i]['valor'];
			$total = $res[$i]['total'];

			$valorF = number_format($valor, 2, ',', '.');
			$totalF = number_format($total, 2, ',', '.');

			$total_servicos += $total;
			$total_servicosF = number_format($total_servicos, 2, ',', '.');

			$query2 = $pdo->query("SELECT * from servicos where id = '$servico'");
			$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
			$nome_servico = $res2[0]['nome'];

			?>




			<tr style="font-size: 12px">				
				<td colspan="2" width="70%"> <?php echo $quantidade ?> - <?php echo $nome_servico ?>
				</td>
				<td align="right" style="white-space: nowrap;">R$ <?php echo $totalF ;?></td>
			</tr>

<?php } } ?>






<?php 
$total_produtos = 0;
$total_produtosF = 0;
$query = $pdo->query("SELECT * from produtos_orc where os = '$id'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = @count($res);
if($linhas > 0){


	for($i=0; $i<$linhas; $i++){

		$produto = $res[$i]['produto'];
		$quantidade = $res[$i]['quantidade'];
		$valor = $res[$i]['valor'];
		$total = $res[$i]['total'];

		$valorF = number_format($valor, 2, ',', '.');
		$totalF = number_format($total, 2, ',', '.');

		$total_produtos += $total;
		$total_produtosF = number_format($total_produtos, 2, ',', '.');

		$query2 = $pdo->query("SELECT * from produtos where id = '$produto'");
		$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
		$nome_produto = $res2[0]['nome'];
		?>


		<tr style="font-size: 12px">
				
			<td colspan="2" width="70%"> <?php echo $quantidade ?> - <?php echo $nome_produto ?></td>				

			<td align="right" style="white-space: nowrap;">R$ <?php echo $totalF ;?></td>
		</tr>


		<tr>
			<th class="ttu"  colspan="3" class="cor">
				<!-- _ _	_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ -->
			</th>
		</tr>


	<?php } } ?>



<tr></tr>

</tbody>
<tfoot>

	<tfoot>


		
		<?php if($total_servicos > 0){ ?>
			<tr style="font-size: 12px">
				<td colspan="2">Total Serviços</td>
				<td align="right" style="white-space: nowrap;">R$ <?php echo $total_servicosF ?></td>
			</tr>
		<?php } ?>

		<?php if($total_produtos > 0){ ?>
			<tr style="font-size: 12px">
				<td colspan="2">Total Produtos</td>
				<td align="right" style="white-space: nowrap;">R$ <?php echo $total_produtosF ?></td>
			</tr>
		<?php } ?>

		


		<?php if($mao_obra > 0){ ?>
			<tr style="font-size: 12px">
				<td colspan="2">Total <?php echo $mao_obra_os ?></td>
				<td align="right" style="white-space: nowrap;">R$ <?php echo $mao_obraF ?></td>
			</tr>
		<?php } ?>


		<?php if($desconto > 0){ ?>
			<tr style="font-size: 12px">
				<td colspan="2">Total Desconto</td>
				<td align="right" style="white-space: nowrap;"><?php echo $valor_reais ?> -<?php echo $descontoF ?><?php echo $valor_porcent ?></td>
			</tr>
		<?php } ?>

		<?php if($frete > 0){ ?>
			<tr style="font-size: 12px">
				<td colspan="2">Total Frete</td>
				<td align="right" style="white-space: nowrap;">R$ <?php echo $freteF ?></td>
			</tr>
		<?php } ?>

		<?php if($val_entrada > 0){ ?>
			<tr style="font-size: 12px">
				<td colspan="2">Entrada</td>
				<td align="right" style="white-space: nowrap;"><?php echo $val_entradaF ?></td>
			</tr>
		<?php } ?>


		
	</tr>

	<tr style="font-size: 13px">
		<td colspan="2"><b>SubTotal</b></td>
		<td align="right" style="white-space: nowrap;"><b>R$ <?php echo $subtotalF ?></b></td>
	</tr>

	<?php if($pago == "Sim"){ ?>
		
			<th colspan="3">
			</th>


	<tr >
		<td style="font-size: 15px; text-align:center" colspan="3">
			<b>PAGO</b>

		</td>
	</tr>



	<?php } ?>


	<?php if($defeito != ""){ ?>
		
			<th colspan="3">
			</th>
		

		<tr style=" font-size: 12px">
			<td colspan="3"><b><?php echo @mb_strtoupper($defeito_os) ?>:</b> <?php echo $defeito ?></td>			
		</tr>
	<?php } ?>


	<?php if($acessorios != ""){ ?>

		<tr >
			<th colspan="3">
			</th>
		</tr>

		<tr style="margin-top:2px; font-size: 12px">
			<td colspan="3"><b><?php echo @mb_strtoupper($acessorios_os) ?>:</b> <?php echo $acessorios ?></td>			
		</tr>
	<?php } ?>

	<?php if($condicoes != ""){ ?>

		<tr >
			<th colspan="3">
			</th>
		</tr>

		<tr style="margin-top:2px; font-size: 12px">
			<td colspan="3"><b><?php echo @mb_strtoupper($avarias_os) ?>:</b> <?php echo $condicoes ?></td>			
		</tr>
	<?php } ?>

	<?php if($laudo != ""){ ?>

		<tr >
			<th colspan="3">
			</th>
		</tr>

		<tr style="margin-top:2px; font-size: 12px">
			<td colspan="3"><b><?php echo @mb_strtoupper($laudo_os) ?>:</b> <?php echo $laudo ?></td>			
		</tr>
	<?php } ?>



	<?php if($obs != ""){ ?>

		<tr >
			<th colspan="3">
			</th>
		</tr>

		<tr style="margin-top:2px; font-size: 12px">
			<td colspan="3"><b>OBS:</b> <?php echo $obs ?></td>
			
		</tr>
	<?php } ?>





	<tr >
		<th colspan="3">
		</th>
	</tr>
	

	<?php 
$dias_garantia == 0;
	if($dias_garantia > 0){ ?>

	<tr >
		<th style="font-size: 12px" colspan="3"><b>DATA</b> <?php echo $dataF ?> / <b>GARANTIA:</b> <?php echo $dias_garantia ?>
		</th>
	</tr>

	<?php }else{ ?>
	<tr >
		<th style="font-size: 12px" colspan="3">DATA <?php echo $dataF ?> / Previsão de Entrega <b><?php echo $data_entregaF ?></b>
		</th>
	</tr>
<?php
	} ?>


<!-- Campo senha -->
	<tr style="margin-top:2px; font-size: 13px; text-align:center">
			<td colspan="3"><small><b><?php echo @mb_strtoupper($senha_aparelho_os) ?>:</b>


			<?php if($senha_ap != ""){ ?>
				<?php echo $senha_ap ?> </small></td>
		<?php 	}else{ ?>
			__________________
		<?php } ?>
			 
			
		</tr>

	

</tfoot>


</table>

<?php 
$dias_garantia == 0;
	if($dias_garantia > 0){ ?>

		<div style="margin-top: 5px; font-size:11px;">
			<center><label><b>GARANTIA</b></label> </center> 
			<div style="text-align: left;" >
				<span style="margin-top: 3px"><?php echo @$garantia ?></span>
			</div>

		</div>

		
	<?php } ?>


<?php 

	if(@$termos > 0){ ?>
	<div style="margin-top: 5px; font-size:11px">
			<center> <label style="margin-top: 5px"><b>ATENÇÃO</b></label> </center> 
			<div style="" >
				<span style="margin-top: 3px"><?php echo @$termos ?></span>
			</div>
		</div>
	<?php } ?>


<div align="right" style="margin-top: 20px; font-size:1px; text-align: center;" >
	<span><?php echo $msg_rodape ?></span>
</div>


<br><br>
<div align="center">__________________________</div>
<div align="center"><small>ASSINATURA DO CLIENTE</small></div>
	