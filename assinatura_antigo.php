<?php 

require_once("conexao.php");
$data_atual = date('Y-m-d');
?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->

  <link rel="icon" href="img/icone.png" type="image/x-icon" />
  <link href="assets/css/icons.css" rel="stylesheet">
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="planos assinatura, erp saas, planos saas, planos sistemas saas, sistema gestão saas" />
  <meta name="description" content="Planos de Assinaturas para nosso Sistema de Gestão SAAS" />
  <meta name="author" content="Hugo Vasconcelos" />

  <title><?php echo $nome_sistema ?></title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css_planos/bootstrap.css" />

  <!-- Custom styles for this template -->
  <link href="css_planos/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css_planos/responsive.css" rel="stylesheet" />
    <link href="css_planos/pricing-table.css" rel="stylesheet" />  
  <link href="css_planos/pricing.css" rel="stylesheet" />

<style type="text/css">
	.sub_page .hero_area {
		min-height: auto;
	}
</style>

</head>

<body>

<div class="footer_section" style="background: #2d4c63; ">
	
	<!-- start Pricing Plan -->
	<section id="pricing" class="pricing ">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="title-wrap text-center"> 					
						<h4 class="section-title">ESCOLHA UM PLANO</h4>
						<div class="title-line">
							<span class="short-line"></span>
							<span class="long-line"></span>
						</div><!-- end title-line -->
					</div><!-- end title-wrap -->
					<div class="intro-text">
						<a style="color: #fff;">Deseja um sistema de Gestão ERP completo? Adquira um de nossos planos e comece hoje mesmo uma gestão profissional de sua empresa!</a>
					</div>
				</div>
			</div>


			<!-- Service Start -->
			<div class="service" style="margin-top: -35px">
				<div class="container">
					<div class="section-header text-center">
						
					</div>
					<div class="row">
						
						<div class="col-lg-4 col-md-6">
							<div class="service-item">
								<div class="service-img">
									<a href="https://www.mercadopago.com.br/subscriptions/checkout?preapproval_plan_id=2c93808487ad3deb0187aecbe3a6007e" target="_blank"> <img src="img/home/planos-plata.png" alt="Image"></a>
								</div>
								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="service-item">
								<div class="service-img">
									<a href="https://www.mercadopago.com.br/subscriptions/checkout?preapproval_plan_id=2c93808487ad3deb0187aecdd059007f" target="_blank"> <img src="img/home/planos-ouro.png" alt="Image"></a>
								</div> 
								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="service-item">
								<div class="service-img">
									<a href="https://www.mercadopago.com.br/subscriptions/checkout?preapproval_plan_id=2c93808487ad3deb0187aecef6960081" target="_blank"> <img src="img/home/planos-diamante.png" alt="Image"></a>
								</div> 
								
							</div>
						</div>
					</div>
				</div>


				<?php 
				

		$query22 = $pdo->query("SELECT * FROM planos where ativo = 'Sim'");
	$res22 = $query22->fetchAll(PDO::FETCH_ASSOC);
	$total_itens = @count($res22);

	if($total_itens == 2){
		$col_md = 'col-md-6';
	}else if($total_itens == 3){
		$col_md = 'col-md-4';
	}else{
		$col_md = 'col-md-3';
		}

	

	//pegar ultimo plano
	$query5 = $pdo->query("SELECT * FROM planos where ativo = 'Sim' order by id desc limit 1");
	$res5 = $query5->fetchAll(PDO::FETCH_ASSOC);
	$id_ultimo_plano = $res5[0]['id'];

	$query2 = $pdo->query("SELECT * FROM planos_itens where plano = '$id_ultimo_plano'");
	$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
	$total_it_ult_plano = @count($res2);

	
				 ?>
	
						

				<!-- Pricing Section Start -->
				<div class="pricing--section pd--100-0-40">
					<!-- Pricing Background Image Start -->
					<div class="pricing--bg-img" data-bg-img="images/home/planos-diamante.png"></div>
					<!-- Pricing Background Image End -->

					<div class="container">
						<div class="row">

							<?php 
								$query = $pdo->query("SELECT * FROM planos where ativo = 'Sim'");
			$res = $query->fetchAll(PDO::FETCH_ASSOC);
			$total_reg = @count($res);
			if($total_reg > 0){

				for($i=0; $i < $total_reg; $i++){
	
	$id_item = $res[$i]['id'];
	$nome_item = $res[$i]['nome'];	
	$valor = $res[$i]['valor'];	
	$ativo = $res[$i]['ativo'];		
			
	$valorF = number_format($valor, 0, ',', '.');		


							 ?>

							<div class="<?php echo $col_md ?> col-xs-6 col-xxs-12">
								<!-- Pricing Item Start -->
								<div class="pricing--item " style="background:#000;">
									<div class="header">
										<h2 style="color: #fff;" class="h5"><?php echo $nome_item ?></h2>

										<p class="price">R$<strong class="font--semibold"><?php echo $valorF ?></strong>/por mês*</p>
									</div>

									<div class="features">
										<ul>

											<?php 
												$query2 = $pdo->query("SELECT * FROM planos_itens where plano = '$id_item'");
			$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
			$total_reg2 = @count($res2);
			if($total_reg2 > 0){

				for($i2=0; $i2 < $total_it_ult_plano; $i2++){	
	
	$nome_item_carac = @$res2[$i2]['nome'];	
	if($nome_item_carac == ""){
		$nome_item_carac = " - ";
	}


											 ?>											
											<li><?php echo $nome_item_carac ?></li>
											<?php } } ?>
																		
										</ul>
									</div>

									<div class="action">
										<form action="assinar.php" method="POST" target="_blank">
										<input type="hidden" name="id_item" value="<?php echo $id_item ?>">
										<button class="btn btn-custom" type="submit" >ASSINAR</button>
										</form>
									</div>
								</div>
								<!-- Pricing Item End -->
							</div>
							
						
							
							
							
						<?php } } ?>
						</div>
					</div>
				</div>
			
			</div>
			</div>
			</section>



				
		
</div>


></body>
</html>