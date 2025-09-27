<?php
@session_start();
require_once("../conexao.php");
require_once("verificar.php");


$id_empresa = @$_SESSION['empresa'];


//trazer as configurações
require_once("../painel/buscar_config.php");

$data_atual = date('Y-m-d');
$mes_atual = Date('m');
$ano_atual = Date('Y');
$dia_atual = Date('d');
$data_inicio_mes = $ano_atual . "-" . $mes_atual . "-01";
$data_inicio_ano = $ano_atual . "-01-01";

$data_ontem = date('Y-m-d', strtotime("-1 days", strtotime($data_atual)));
$data_amanha = date('Y-m-d', strtotime("+1 days", strtotime($data_atual)));


if ($mes_atual == '04' || $mes_atual == '06' || $mes_atual == '09' || $mes_atual == '11') {
	$data_final_mes = $ano_atual . '-' . $mes_atual . '-30';
} else if ($mes_atual == '02') {
	$bissexto = date('L', @mktime(0, 0, 0, 1, 1, $ano_atual));
	if ($bissexto == 1) {
		$data_final_mes = $ano_atual . '-' . $mes_atual . '-29';
	} else {
		$data_final_mes = $ano_atual . '-' . $mes_atual . '-28';
	}
} else {
	$data_final_mes = $ano_atual . '-' . $mes_atual . '-31';
}



$id_usuario = @$_SESSION['id_cliente'];
$query = $pdo->query("SELECT * from clientes where id = '$id_usuario'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = @count($res);
if ($linhas > 0) {
	$nome_usuario = $res[0]['nome'];
	$nome_usuario_perfil = $res[0]['nome'];
	$email_usuario = $res[0]['email'];
	$telefone_usuario = $res[0]['telefone'];	
	$foto_usuario = $res[0]['foto'];
	$endereco_usuario = $res[0]['endereco'];	
	$data_nasc_usuario = $res[0]['data_nasc'];
	$data_nasc_usuarioF = implode('/', array_reverse(@explode('-', $data_nasc_usuario)));
	$numero_usuario = $res[0]['numero'];
	$bairro_usuario = $res[0]['bairro'];
	$cidade_usuario = $res[0]['cidade'];
	$estado_usuario = $res[0]['estado'];
	$cep_usuario = $res[0]['cep'];
	$complemento_usuario = $res[0]['complemento'];
	$empresa_usuario = $res[0]['empresa'];
} else {
	echo '<script>window.location="../acesso"</script>';
	exit();
}



$pag_inicial = 'pagar';


if (@$_GET['pagina'] != "") {
	$pagina = @$_GET['pagina'];
} else {
	$pagina = $pag_inicial;
}




?>
<!DOCTYPE HTML>
<html lang="pt-BR" dir="ltr">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>


	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="Description" content="Sistemas de Hugo Vasconcelos Portal Hugo Cursos">
	<meta name="Author" content="Hugo Vasconcelos">
	<meta name="Keywords" content="sistemas hugo vasconcelos, sistemas hugo, sistemas portal hugo cursos, portal hugocursos, sistemas com php8" />

	<title><?php echo $nome_sistema ?></title>

	<link rel="icon" href="../img/<?php echo $icone_sistema ?>" type="image/x-icon" />
	<link href="../assets/css/icons.css" rel="stylesheet">
	<link id="style" href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/css/style.css" rel="stylesheet">
	<link href="../assets/css/style-dark.css" rel="stylesheet">
	<link href="../assets/css/style-transparent.css" rel="stylesheet">
	<link href="../assets/css/skin-modes.css" rel="stylesheet" />
	<link href="../assets/css/animate.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	<link href="../assets/css/custom.css" rel="stylesheet" />
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/modernizr.custom.js"></script>



	<!-- fontawesome-->
	<link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min.css">


	<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">


	<!-- SweetAlert CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

	<!-- SweetAlert JS -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	

</head>

<body class="ltr main-body app sidebar-mini">

	<?php if ($mostrar_preloader == 'Sim') { ?>
		<!-- GLOBAL-LOADER -->
		<div id="global-loader">
			<img src="../img/loader.gif" class="loader-img loader loader_mobile" alt="">
		</div>
		<!-- /GLOBAL-LOADER -->
	<?php } ?>

	<!-- Page -->
	<div class="page">

		<div>
			<!-- CABEÇALHO -->
			<div class="main-header side-header sticky nav nav-item">
				<div class=" main-container container-fluid">
					<div class="main-header-left ">
						<div class="responsive-logo logo_painel">
							<a href="index.php" class="header-logo">
								<img src="../img/<?php echo $logo_painel ?>" class="obile-logo dark-logo-1 logo_painel" alt="logo"
									style="margin-left: -120px !important">
							</a>
						</div>
						<div class="app-sidebar__toggle" data-bs-toggle="sidebar">
							<a class="open-toggle" href="javascript:void(0);"><i class="header-icon fe fe-align-left"></i></a>
							<a class="close-toggle" href="javascript:void(0);"><i class="header-icon fe fe-x"></i></a>
						</div>
						<div class="logo-horizontal">
							<a href="index.php" class="header-logo">
								<img src="../img/<?php echo $logo_painel ?>" class="mobile-logo logo-1" alt="logo">
								<img src="../img/<?php echo $logo_painel ?>" class="mobile-logo dark-logo-1" alt="logo">
							</a>
						</div>
						<div class="main-header-center ms-4 d-sm-none d-md-none d-lg-block form-group">
						</div>
					</div>
					<!-- Adiiconar data -->
					<div class="ocultar_mobile ocultar_tablet">
						<?php
						$hora = date('H');

						$diaMes = date('d');
						$diaSemana = date('w');
						$mes = date('n') - 1;
						$ano = date('Y');

						$nomesDiasDaSemana = ['Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado'];

						$nomeDosMeses = ['Janeiro', 'Fevereiro', 'março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];

						$dataFormatada = $nomesDiasDaSemana[$diaSemana] . ', ' . $diaMes . ' de ' . $nomeDosMeses[$mes] . ' de ' . $ano;

						if ($hora < 12 && $hora >= 6)
							$saudacao = "Bom Dia";

						if ($hora >= 12 && $hora < 18)
							$saudacao = "Boa Tarde";

						if ($hora >= 18 && $hora <= 23)
							$saudacao = "Boa Noite";
						if ($hora < 6 && $hora >= 0)
							$saudacao = "Boa madrugada";

						$primeiroNome = substr($nome_usuario, 0, strpos($nome_usuario, ' '));


						?>
						<div style="font-size: 15px; color: #A9ABBD">
							<?php echo $saudacao . ' <b>' . $primeiroNome ?>
						</div>

					</div>

					<!-- Fim da data -->


					<div class="main-header-right">

						<div class="mb-0 navbar navbar-expand-lg navbar-nav-right responsive-navbar navbar-dark p-0">
							<div class="" id="navbarSupportedContent-4">
								<ul class="nav nav-item header-icons navbar-nav-right ms-auto">

									<li class="dropdown nav-item" style="opacity: 0">
										------------
									</li>



									<li class="dropdown nav-item ">
										<a class="new nav-link theme-layout nav-link-bg layout-setting">
											<span class="dark-layout"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs"
													width="24" height="24" viewBox="0 0 24 24">
													<path
														d="M20.742 13.045a8.088 8.088 0 0 1-2.077.271c-2.135 0-4.14-.83-5.646-2.336a8.025 8.025 0 0 1-2.064-7.723A1 1 0 0 0 9.73 2.034a10.014 10.014 0 0 0-4.489 2.582c-3.898 3.898-3.898 10.243 0 14.143a9.937 9.937 0 0 0 7.072 2.93 9.93 9.93 0 0 0 7.07-2.929 10.007 10.007 0 0 0 2.583-4.491 1.001 1.001 0 0 0-1.224-1.224zm-2.772 4.301a7.947 7.947 0 0 1-5.656 2.343 7.953 7.953 0 0 1-5.658-2.344c-3.118-3.119-3.118-8.195 0-11.314a7.923 7.923 0 0 1 2.06-1.483 10.027 10.027 0 0 0 2.89 7.848 9.972 9.972 0 0 0 7.848 2.891 8.036 8.036 0 0 1-1.484 2.059z" />
												</svg></span>
											<span class="light-layout"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs"
													width="24" height="24" viewBox="0 0 24 24">
													<path
														d="M6.993 12c0 2.761 2.246 5.007 5.007 5.007s5.007-2.246 5.007-5.007S14.761 6.993 12 6.993 6.993 9.239 6.993 12zM12 8.993c1.658 0 3.007 1.349 3.007 3.007S13.658 15.007 12 15.007 8.993 13.658 8.993 12 10.342 8.993 12 8.993zM10.998 19h2v3h-2zm0-17h2v3h-2zm-9 9h3v2h-3zm17 0h3v2h-3zM4.219 18.363l2.12-2.122 1.415 1.414-2.12 2.122zM16.24 6.344l2.122-2.122 1.414 1.414-2.122 2.122zM6.342 7.759 4.22 5.637l1.415-1.414 2.12 2.122zm13.434 10.605-1.414 1.414-2.122-2.122 1.414-1.414z" />
												</svg></span>
										</a>
									</li>


									

									<li class="nav-item full-screen fullscreen-button">
										<a class="new nav-link full-screen-link" href="javascript:void(0);"><svg
												xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" width="24" height="24"
												viewBox="0 0 24 24">
												<path d="M5 5h5V3H3v7h2zm5 14H5v-5H3v7h7zm11-5h-2v5h-5v2h7zm-2-4h2V3h-7v2h5z" />
											</svg></a>
									</li>

									<li class="dropdown main-profile-menu nav nav-item nav-link ps-lg-2">
										<a class="new nav-link profile-user d-flex" href="#" data-bs-toggle="dropdown"><img
												src="../painel/images/clientes/<?php echo $foto_usuario ?>"></a>
										<div class="dropdown-menu">
											<div class="menu-header-content p-3 border-bottom">
												<div class="d-flex wd-100p">
													<div class="main-img-user"><img src="../painel/images/clientes/<?php echo $foto_usuario ?>"></div>
													<div class="ms-3 my-auto">
														<h6 class="tx-15 font-weight-semibold mb-0"><?php echo $nome_usuario ?></h6>
													</div>
												</div>
											</div>
											<a class="dropdown-item" href="" data-bs-target="#modalPerfil" data-bs-toggle="modal"><i
													class="fa fa-user"></i>Perfil</a>

											<a class="dropdown-item" href="logout.php"><i class="fa fa-arrow-left"></i> Sair</a>
										</div>
									</li>


								</ul>
							</div>
						</div>

					</div>
				</div>
			</div> <!-- /APP-HEADER -->

			<!--APP-SIDEBAR-->
			<div class="sticky">
				<aside class="app-sidebar">
					<div class="main-sidebar-header active">
						<a class="header-logo active" href="index.php">
							<img src="../img/<?php echo $logo_painel ?>" class="main-logo  desktop-logo" alt="logo">
							<img src="../img/<?php echo $logo_painel ?>" class="main-logo  desktop-dark" alt="logo">
							<img src="../img/<?php echo $icone_sistema ?>" class="main-logo  mobile-logo" alt="logo">
							<img src="../img/<?php echo $icone_sistema ?>" class="main-logo  mobile-dark" alt="logo">
						</a>
					</div>
					<div class="main-sidemenu">
						<div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
								width="24" height="24" viewBox="0 0 24 24">
								<path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
							</svg></div>
						<ul class="side-menu">


							<li class="slide ">
									<a class="side-menu__item" data-bs-toggle="slide" href="index.php"><i class="fa fa-usd text-white mt-1"></i>
										<span class="side-menu__label" style="margin-left: 15px">Meus Pagamentos</span></a>
								
								</li>


								<li class="slide ">
									<a class="side-menu__item" href="orcamentos">
										<i class="fa fa-pencil text-white"></i>
										<span class="side-menu__label" style="margin-left: 15px">Meus Orçamentos</span></a>
								</li>

								<li class="slide ">
									<a class="side-menu__item" href="os">
										<i class="fa fa-sun-o text-white"></i>
										<span class="side-menu__label" style="margin-left: 15px">Meus Serviços</span></a>
								</li>


								<li class="slide ">
									<a class="side-menu__item" href="compras">
										<i class="fa fa-money text-white"></i>
										<span class="side-menu__label" style="margin-left: 15px">Minhas Compras</span></a>
								</li>


								<li class="slide ">
									<a class="side-menu__item" href="contratos">
										<i class="fa fa-file-pdf-o text-white"></i>
										<span class="side-menu__label" style="margin-left: 15px">Meus Contratos</span></a>
								</li>


						</ul>
						<div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24"
								height="24" viewBox="0 0 24 24">
								<path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
							</svg></div>
					</div>
				</aside>
			</div> <!--/APP-SIDEBAR-->
		</div>

		<!-- MAIN-CONTENT -->
		<div class="main-content app-content">

			<!-- container -->
			<div class="main-container container-fluid ">

				<?php
				//Classe para ocultar mobile
				if ($ocultar_mobile == 'Sim') { ?>
					<style type="text/css">
						@media only screen and (max-width: 700px) {
							.ocultar_mobile_app {
								display: none;
							}
						}
					</style>
				<?php } ?>


				<?php
				echo "<script>localStorage.setItem('pagina', '$pagina')</script>";
				require_once('paginas/' . $pagina . '.php');
				?>


			</div>
			<!-- Container closed -->
		</div>
		<!-- MAIN-CONTENT CLOSED -->








		<!--######################## RODAPÉ ###########################-->
		<?php if ($pagina != 'vendas') { ?>
			<div class="main-footer">
				<div class="container-fluid pt-0 ht-100p">
					Copyright © <?php echo date('Y'); ?> Desevolverdor <a href="https://www.hugocursos.com.br" target="_blank"
						class="text-primary"> hugocursos.com.br</a>. Todos
					os direitos reservados
				</div>
			</div>
		<?php } ?>
		<!-- FOOTER END -->


	</div>
	<!-- End Page -->

	<!-- BUYNOW-MODAL -->



	<a href="#top" id="back-to-top"><i class="las la-arrow-up"></i></a>


	<!-- GRAFICOS -->
	<script src="../assets/plugins/chart.js/Chart.bundle.min.js"></script>
	<script src="../assets/js/apexcharts.js"></script>

	<!--INTERNAL  INDEX JS -->
	<script src="../assets/js/index.js"></script>



	<script src="../assets/plugins/jquery/jquery.min.js"></script>
	<script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
	<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/plugins/moment/moment.js"></script>
	<script src="../assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script src="../assets/plugins/perfect-scrollbar/p-scroll.js"></script>
	<script src="../assets/js/eva-icons.min.js"></script>
	<script src="../assets/plugins/side-menu/sidemenu.js"></script>
	<script src="../assets/js/sticky.js"></script>
	<script src="../assets/plugins/sidebar/sidebar.js"></script>
	<script src="../assets/plugins/sidebar/sidebar-custom.js"></script>


	<!-- INTERNAL DATA TABLES -->
	<script src="../assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script src="../assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
	<script src="../assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
	<script src="../assets/plugins/datatable/js/buttons.bootstrap5.min.js"></script>
	<script src="../assets/plugins/datatable/js/jszip.min.js"></script>
	<script src="../assets/plugins/datatable/pdfmake/pdfmake.min.js"></script>
	<script src="../assets/plugins/datatable/pdfmake/vfs_fonts.js"></script>
	<script src="../assets/plugins/datatable/js/buttons.html5.min.js"></script>
	<script src="../assets/plugins/datatable/js/buttons.print.min.js"></script>
	<script src="../assets/plugins/datatable/js/buttons.colVis.min.js"></script>
	<script src="../assets/plugins/datatable/dataTables.responsive.min.js"></script>
	<script src="../assets/plugins/datatable/responsive.bootstrap5.min.js"></script>


	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


	<!-- POPOVER JS -->
	<script src="../assets/js/popover.js"></script>

	<script src="../assets/js/themecolor.js"></script>
	<script src="../assets/js/custom.js"></script>

	<!--INTERNAL  INDEX JS -->
	<script src="../assets/js/index.js"></script>

<!-- FULLCALENDER -->
<script src="../fullcalendar/dist/index.global.min.js"></script>
<script src="../fullcalendar/core/locales/pt-br.global.min.js"></script>
<script src="js/fullcalendar.js"></script>

</body>

</html>


<!-- Modal Perfil -->
<div class="modal fade" id="modalPerfil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header bg-primary text-white">
				<h4 class="modal-title">Alterar Dados</h4>
				<button id="btn-fechar" aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span
						class="text-white" aria-hidden="true">&times;</span></button>
			</div>
			<form id="form-perfil">
				<div class="modal-body">
					<div class="row">
						<div class="col-md-6 mb-3 needs-validation was-validated">
							<label>Nome</label>
							<input type="text" class="form-control" id="nome_perfil" name="nome" placeholder="Seu Nome"	value="<?php echo @$nome_usuario_perfil ?>" required>
						</div>
						<div class="col-md-3 mb-2 col-6">
							<label>Telefone</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
								</div>
								<input type="text" class="form-control" id="telefone_perfil" name="telefone" placeholder="Seu Telefone"
								value="<?php echo @$telefone_usuario ?>" required>
							</div>
						</div>


						<div class="col-md-3 mb-2 col-6">
							<label>Data Nascimento</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa-regular fa-calendar"></i></span>
								</div>
								<input type="text" class="form-control" id="data_nasc_perfil" name="data_nasc" placeholder=""
								value="<?php echo @$data_nasc_usuarioF ?>">
							</div>
						</div>
						
					</div>
					<div class="row">
						<div class="col-md-6 mb-2 col-6">
							<label>Email</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa-regular fa-envelope"></i></span>
								</div>
								<input type="email" class="form-control" id="email_perfil" name="email" placeholder="Seu Nome"
								value="<?php echo @$email_usuario ?>" required>
							</div>
						</div>


						<div class="col-md-3 mb-3 needs-validation was-validated">
							<label>Senha</label>
							<input type="password" class="form-control" id="senha_perfil" name="senha" placeholder="Senha"
								value="" required>
						</div>
						<div class="col-md-3 mb-3 needs-validation was-validated">
							<label>Confirmar Senha</label>
							<input type="password" class="form-control" id="conf_senha_perfil" name="conf_senha"
								placeholder="Confirmar Senha" value="" required>
						</div>

						
					</div>
					<div class="row">
						<div class="col-md-3 mb-2">
							<label>CEP</label>
							<input type="text" class="form-control" id="cep_perfil" name="cep" placeholder="CEP"
								onblur="pesquisacepperfil(this.value);" value="<?php echo @$cep_usuario ?>">
						</div>
						<div class="col-md-7 mb-2">
							<label>Rua</label>
							<input type="text" class="form-control" id="endereco_perfil" name="endereco" placeholder="Rua"
								value="<?php echo @$endereco_usuario ?>">
						</div>
						<div class="col-md-2 mb-2">
							<label>Número</label>
							<input type="text" class="form-control" id="numero_perfil" name="numero" placeholder="Número"
								value="<?php echo @$numero_usuario ?>">
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 mb-2">
							<label>Complemento</label>
							<input type="text" class="form-control" id="complemento_perfil" name="complemento" placeholder="Bloco A AP 150" value="<?php echo @$complemento_usuario ?>">
						</div>
						<div class="col-md-4 mb-2">
							<label>Bairro</label>
							<input type="text" class="form-control" id="bairro_perfil" name="bairro" placeholder="Bairro"
								value="<?php echo @$bairro_usuario ?>">
						</div>
						<div class="col-md-4 mb-2">
							<label>Cidade</label>
							<input type="text" class="form-control" id="cidade_perfil" name="cidade" placeholder="Cidade"
								value="<?php echo @$cidade_usuario ?>">
						</div>
					</div>
					<div class="row">
						<div class="col-md-3 mb-2">
							<label>Estado</label>
							<select class="form-select" id="estado_perfil" name="estado" value="<?php echo @$estado_usuario ?>">
								<option value="">Selecionar</option>
								<option value="AC" <?php if ($estado_usuario == 'AC') { ?> selected <?php } ?>>Acre</option>
								<option value="AL" <?php if ($estado_usuario == 'AL') { ?> selected <?php } ?>>Alagoas</option>
								<option value="AP" <?php if ($estado_usuario == 'AP') { ?> selected <?php } ?>>Amapá</option>
								<option value="AM" <?php if ($estado_usuario == 'AM') { ?> selected <?php } ?>>Amazonas</option>
								<option value="BA" <?php if ($estado_usuario == 'BA') { ?> selected <?php } ?>>Bahia</option>
								<option value="CE" <?php if ($estado_usuario == 'CE') { ?> selected <?php } ?>>Ceará</option>
								<option value="DF" <?php if ($estado_usuario == 'DF') { ?> selected <?php } ?>>Distrito Federal</option>
								<option value="ES" <?php if ($estado_usuario == 'ES') { ?> selected <?php } ?>>Espírito Santo</option>
								<option value="GO" <?php if ($estado_usuario == 'MA') { ?> selected <?php } ?>>Goiás</option>
								<option value="MA" <?php if ($estado_usuario == 'AL') { ?> selected <?php } ?>>Maranhão</option>
								<option value="MT" <?php if ($estado_usuario == 'MT') { ?> selected <?php } ?>>Mato Grosso</option>
								<option value="MS" <?php if ($estado_usuario == 'MS') { ?> selected <?php } ?>>Mato Grosso do Sul</option>
								<option value="MG" <?php if ($estado_usuario == 'MG') { ?> selected <?php } ?>>Minas Gerais</option>
								<option value="PA" <?php if ($estado_usuario == 'PA') { ?> selected <?php } ?>>Pará</option>
								<option value="PB" <?php if ($estado_usuario == 'PB') { ?> selected <?php } ?>>Paraíba</option>
								<option value="PR" <?php if ($estado_usuario == 'PR') { ?> selected <?php } ?>>Paraná</option>
								<option value="PE" <?php if ($estado_usuario == 'PE') { ?> selected <?php } ?>>Pernambuco</option>
								<option value="PI" <?php if ($estado_usuario == 'PI') { ?> selected <?php } ?>>Piauí</option>
								<option value="RJ" <?php if ($estado_usuario == 'RJ') { ?> selected <?php } ?>>Rio de Janeiro</option>
								<option value="RN" <?php if ($estado_usuario == 'RN') { ?> selected <?php } ?>>Rio Grande do Norte
								</option>
								<option value="RS" <?php if ($estado_usuario == 'RS') { ?> selected <?php } ?>>Rio Grande do Sul</option>
								<option value="RO" <?php if ($estado_usuario == 'RO') { ?> selected <?php } ?>>Rondônia</option>
								<option value="RR" <?php if ($estado_usuario == 'RR') { ?> selected <?php } ?>>Roraima</option>
								<option value="SC" <?php if ($estado_usuario == 'SC') { ?> selected <?php } ?>>Santa Catarina</option>
								<option value="SP" <?php if ($estado_usuario == 'SP') { ?> selected <?php } ?>>São Paulo</option>
								<option value="SE" <?php if ($estado_usuario == 'SE') { ?> selected <?php } ?>>Sergipe</option>
								<option value="TO" <?php if ($estado_usuario == 'TO') { ?> selected <?php } ?>>Tocantins</option>
								<option value="EX" <?php if ($estado_usuario == 'EX') { ?> selected <?php } ?>>Estrangeiro</option>
							</select>
						</div>
						<div class="col-md-5 mb-3">
							<label>Foto</label>
							<input type="file" class="form-control" id="foto_perfil" name="foto" value="<?php echo @$foto_usuario ?>"
								onchange="carregarImgPerfil()">
						</div>
						<div class="col-md-3 mb-3">
						<img src="../painel/images/clientes/<?php echo $foto_usuario ?>" width="80px" id="target-usu">
						</div>
					</div>
					<input type="hidden" name="id_usuario" value="<?php echo @$id_usuario ?>">
					<br>
					<small>
						<div id="msg-perfil" align="center"></div>
					</small>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary" id="btn_salvar_perfil">Salvar</button>
					<button class="btn btn-primary" type="button" id="btn_carregando_peril" style="display: none">
						<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Carregando...
					</button>
				</div>
			</form>
		</div>
	</div>
</div>


<form action="../painel/rel/carteirinha_class.php" method="post" style="display:none" target="_blank">
    <input type="hidden" name="id" value="<?php echo $id_usuario ?>">    
    <button id="btn_carteirinha" type="submit"></button>
</form>

<!-- SweetAlert JS -->
<script src="js/sweetalert2.all.min.js"></script>
<script src="js/sweetalert1.min.css"></script>




<script src="js/alertas.js"></script>

<!-- Alertas -->
<script src="../assets/plugins/sweet-alert/sweetalert.min.js"></script>
<script src="../assets/plugins/sweet-alert/jquery.sweet-alert.js"></script>


<!-- Mascaras JS -->
<script type="text/javascript" src="js/mascaras.js"></script>

<!-- Ajax para funcionar Mascaras JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>



<!-- FULLCALENDER -->
<script src="../fullcalendar/dist/index.global.min.js"></script>
<script src="../fullcalendar/core/locales/pt-br.global.min.js"></script>


<!-- <script src='js/fullcalendar.js'></script> -->


<script src='js/custom.js'></script>
<script src='js/converter_data.js'></script>
<script src='js/carregar_eventos.js'></script>



<script type="text/javascript">
	$(document).ready(function() {


		$('.sel2').select2({
			dropdownParent: $('#modalPerfil')
		});

		$('.sel3').select2({
			dropdownParent: $('#modalForm')
		});

		$('.sel30').select2({
			dropdownParent: $('#modalForm')
		});

		$('.sel31').select2({
			dropdownParent: $('#modalForm')
		});

		$('.sel32').select2({
			dropdownParent: $('#modalForm')
		});


		$('.sel33').select2({
			dropdownParent: $('#modalForm')
		});


		$('.sel34').select2({
			dropdownParent: $('#modalForm')
		});


		$('.sel35').select2({
			dropdownParent: $('#modalForm')
		});


		$('.sel36').select2({
			dropdownParent: $('#modalForm')
		});


		$('#cep_perfil').mask('00000-000');

		$('.selDisc').select2({
			dropdownParent: $('#modalDisc')
		});


	});
</script>

<script type="text/javascript">
	const modalForm = document.getElementById('modalForm')
	const nome = document.getElementById('nome')

	modalForm.addEventListener('shown.bs.modal', () => {
		nome.focus()
	})
</script>


<script type="text/javascript">
	function carregarImgPerfil() {
		var target = document.getElementById('target-usu');
		var file = document.querySelector("#foto_perfil").files[0];

		var reader = new FileReader();

		reader.onloadend = function() {
			target.src = reader.result;
		};

		if (file) {
			reader.readAsDataURL(file);

		} else {
			target.src = "";
		}
	}
</script>






<script type="text/javascript">
	$("#form-perfil").submit(function() {

		event.preventDefault();
		var formData = new FormData(this);

		$('#btn_salvar_perfil').hide();
		$('#btn_carregando_perfil').show();

		$.ajax({
			url: "editar-perfil.php",
			type: 'POST',
			data: formData,

			success: function(mensagem) {
				$('#msg-perfil').text('');
				$('#msg-perfil').removeClass()
				if (mensagem.trim() == "Editado com Sucesso") {
					sucesso();
					$('#btn-fechar-perfil').click();
					location.reload();


				} else {

					$('#msg-perfil').addClass('text-danger')
					$('#msg-perfil').text(mensagem)
				}

				$('#btn_salvar_perfil').show();
				$('#btn_carregando_perfil').hide();


			},

			cache: false,
			contentType: false,
			processData: false,

		});

	});
</script>





<script>
	function limpa_formulário_cep_perfil() {
		//Limpa valores do formulário de cep.
		document.getElementById('endereco_perfil').value = ("");
		document.getElementById('bairro_perfil').value = ("");
		document.getElementById('cidade_perfil').value = ("");
		document.getElementById('estado_perfil').value = ("");
		//document.getElementById('ibge').value=("");
	}

	function meu_callback_perfil(conteudo) {
		if (!("erro" in conteudo)) {
			//Atualiza os campos com os valores.
			document.getElementById('endereco_perfil').value = (conteudo.logradouro);
			document.getElementById('bairro_perfil').value = (conteudo.bairro);
			document.getElementById('cidade_perfil').value = (conteudo.localidade);
			document.getElementById('estado_perfil').value = (conteudo.uf);
			//document.getElementById('ibge').value=(conteudo.ibge);
		} //end if.
		else {
			//CEP não Encontrado.
			limpa_formulário_cep_perfil();
			alert("CEP não encontrado.");
		}
	}

	function pesquisacepperfil(valor) {

		//Nova variável "cep" somente com dígitos.
		var cep = valor.replace(/\D/g, '');

		//Verifica se campo cep possui valor informado.
		if (cep != "") {

			//Expressão regular para validar o CEP.
			var validacep = /^[0-9]{8}$/;

			//Valida o formato do CEP.
			if (validacep.test(cep)) {

				//Preenche os campos com "..." enquanto consulta webservice.
				document.getElementById('endereco_perfil').value = "...";
				document.getElementById('bairro_perfil').value = "...";
				document.getElementById('cidade_perfil').value = "...";
				document.getElementById('estado_perfil').value = "...";
				//document.getElementById('ibge').value="...";

				//Cria um elemento javascript.
				var script = document.createElement('script');

				//Sincroniza com o callback.
				script.src = 'https://viacep.com.br/ws/' + cep + '/json/?callback=meu_callback_perfil';

				//Insere script no documento e carrega o conteúdo.
				document.body.appendChild(script);

			} //end if.
			else {
				//cep é inválido.
				limpa_formulário_cep_perfil();
				alert("Formato de CEP inválido.");
			}
		} //end if.
		else {
			//cep sem valor, limpa formulário.
			limpa_formulário_cep_perfil();
		}
	};
</script>



<script type="text/javascript">
	function gerarCarteirinha(){
		$('#btn_carteirinha').click();
	}
</script>