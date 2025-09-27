<?php 
require_once("conexao.php");
$data_atual = date('Y-m-d');

$id_item = @$_POST['id_item'];

$query5 = $pdo->query("SELECT * FROM planos where id = '$id_item'");
$res5 = $query5->fetchAll(PDO::FETCH_ASSOC);
$nome_plano = $res5[0]['nome'];
$valor_plano = $res5[0]['valor'];
$valorF = number_format($valor_plano, 2, ',', '.');
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



	<body>
		<style type="text/css">
			.sub_page .hero_area {
				min-height: auto;
			}

			.inputs_agenda{
				background: transparent !important; 
				border:none; border-bottom: 1px solid #FFF !important; 
				font-size: 14px !important; 
				color:#FFF !important; 
				padding:0 !important;
				margin:0px !important;
				margin-bottom:5px !important;
			}
		</style>
	</head>

	<body>
	</div>

	<div class="footer_section" style="background: #2d4c63; ">
		<div class="container" >
			<div class="footer_content " >
				<form class="form_agendamento" id="form-agenda" method="post" style="margin-top: -25px !important">
					<div class="footer_form footer-col">
						<div class="row" style="margin-top: -40px">

							<div class="col-md-8 mb-2  needs-validation was-validated">
								<label>Nome <span class="text-danger" style="font-size: 9px">(Obrigatório)</span></label>
								<div class="form-group has-success mg-b-0">
									<input class="form-control" id="nome" name="nome" placeholder="Digite o Nome" required type="text"
									value="">
								</div>
							</div>
							<div class="col-md-4 mb-2 ">
								<label>Telefone</label>
								<div class="input-group mb-3">								
									<input type="text" class="form-control" name="telefone" id="telefone"
									onkeyup="verificarTelefone('telefone', this.value)" placeholder="(00) 00000-0000">
								</div>
							</div>
						</div>


						<div class="row">
							<div class="col-md-3 col-6 mb-2 ">
								<label>Pessoa</label>
								<select name="tipo_pessoa" id="tipo_pessoa" class="form-control" onchange="mudarPessoa()" style="height:45px">
									<option value="Física">Física</option>
									<option value="Jurídica">Jurídica</option>
									

								</select>
							</div>
							<div class="col-md-3 col-6 mb-2">
								<label>CPF / CNPJ</label>
								<input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF">
							</div>

							<div class="col-md-6 mb-2  needs-validation was-validated">
								<label>Email</label>
								<div class="input-group mb-3">

									<input type="email" class="form-control" name="email" id="email"
									placeholder="exemplo@gmail.com">
								</div>
							</div>
						</div>

						<input type="hidden" name="plano" value="<?php echo $id_item ?>">
						<input type="hidden" name="dias_teste" value="3">
						<input type="hidden" name="mensalidade" value="<?php echo $valorF ?>">
						<input type="hidden" name="assinatura" value="Sim">

						<br>


						<div class="<?php echo $col_md ?> col-xs-6 col-xxs-12">
							<!-- Pricing Item Start -->
							<div class="pricing--item ">
								<div class="header">
									<h2 style="color: #fff;" class="h5"><?php echo $nome_plano ?></h2>

									<p class="price">R$<strong class="font--semibold"><?php echo $valorF ?></strong>/por mês*</p>
								</div>

								<div class="features">
									<ul>

										<?php 
										$query2 = $pdo->query("SELECT * FROM planos_itens where plano = '$id_item'");
										$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
										$total_reg2 = @count($res2);
										if($total_reg2 > 0){

											for($i2=0; $i2 < $total_reg2; $i2++){	

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
										<button id="btn_agendar" class="btn btn-custom" type="submit" >ASSINAR</button>
									</div>
								</div>
								<!-- Pricing Item End -->
							</div>
							




							<br><br>
							<small> <div id="mensagem" align="center"></div></small>	              
								    
						</div>



					</form>



				</div>


			</div>


		</div>


	</body>

	</html>


	<script src="assets/plugins/jquery/jquery.min.js"></script>
	<script src="assets/plugins/bootstrap/js/popper.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/plugins/moment/moment.js"></script>
	<script src="assets/js/eva-icons.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script src="assets/js/themecolor.js"></script>
	<script src="assets/js/custom.js"></script>


	<!-- Mascaras JS -->
	<script type="text/javascript" src="painel/js/mascaras.js"></script>

	<!-- Ajax para funcionar Mascaras JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>


	<!-- SweetAlert JS -->
<script src="painel/js/sweetalert2.all.min.js"></script>
<script src="painel/js/sweetalert1.min.css"></script>

	<script src="painel/js/alertas.js"></script>

	<!-- Alertas -->
	<script src="assets/plugins/sweet-alert/sweetalert.min.js"></script>
	<script src="assets/plugins/sweet-alert/jquery.sweet-alert.js"></script>




	<script type="text/javascript">
	// FUNÇÃO PARA VERIFICAR TELEFONE
	function verificarTelefone(tel, valor) {
		if (valor.length > 14) {
			$('#' + tel).mask('(00) 00000-0000');
		} else if (valor.length == 14) {
			$('#' + tel).mask('(00) 0000-00000');
		} else {
			$('#' + tel).mask('(00) 0000-0000');

		}

		document.getElementById(tel).setSelectionRange(100, 100);
	}

</script>

<script>

	$("#form-agenda").submit(function () {
		event.preventDefault();

		$('#btn_agendar').hide();
		$('#mensagem').text('Carregando!');

		var formData = new FormData(this);

		$.ajax({
			url: "sas/paginas/clientes/salvar.php",
			type: 'POST',
			data: formData,

			success: function (mensagem) {

				var msg = mensagem.split('*');
				var id_agd = msg[1];				
				
				if (msg[0].trim() == "Salvo com Sucesso") { 
					sucesso();					
					window.location="pagamento/"+id_agd;
					
				}		

				else {
					//$('#mensagem').addClass('text-danger')
					alertWarning(msg[0])
					$('#mensagem').text(msg[0])
				}

				$('#btn_agendar').show();

			},

			cache: false,
			contentType: false,
			processData: false,

		});

	});

</script>




<script type="text/javascript">
	function mudarPessoa() {
		var pessoa = $('#tipo_pessoa').val();
		if (pessoa == 'Física') {
			$('#cpf').mask('000.000.000-00');
			$('#cpf').attr("placeholder", "Insira CPF");
		} else {
			$('#cpf').mask('00.000.000/0000-00');
			$('#cpf').attr("placeholder", "Insira CNPJ");
		}
	}
</script>



