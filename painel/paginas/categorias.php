<?php 
$pag = 'categorias';

//verificar se ele tem a permissão de estar nessa página
if(@$categorias == 'ocultar'){
	echo "<script>window.location='index.php'</script>";
	exit();
}

?>
<div class="breadcrumb-header justify-content-between">
	<div class="left-content mt-2">
		<a class="btn ripple btn-primary text-white" onclick="inserir()" type="button"><i class="fa fa-file-circle-plus me-1"></i> Adicionar <?php echo ucfirst($pag); ?></a>


		<!-- BOTÃO EXCLUIR SELEÇÃO -->
		<div class="dropdown" style="display: inline-block;">                      
			<a href="#" aria-expanded="false" aria-haspopup="true" data-bs-toggle="dropdown" class="btn btn-danger dropdown" id="btn-deletar" style="display:none"><i class="fe fe-trash-2"></i> Deletar</a>
			<div  class="dropdown-menu tx-13">
				<div style="width: 240px; padding:15px 5px 0 10px;" class="dropdown-item-text">
					<p>Excluir Selecionados? <a href="#" onclick="deletarSel()"><span class="text-danger"><button class="btn-danger">Sim</button></span></a></p>
				</div>
			</div>
		</div>

	</div>
</div>

<div class="row row-sm">
	<div class="col-lg-12">
		<div class="card custom-card">
			<div class="card-body" id="listar">

			</div>
		</div>
	</div>
</div>

<input type="hidden" id="ids">

<!-- Modal Perfil -->
<div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-primary text-white">
				<h4 class="modal-title" id="exampleModalLabel"><span id="titulo_inserir"></span></h4>
				<button id="btn-fechar" aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span class="text-white" aria-hidden="true">&times;</span></button>
			</div>
			<form id="form">
				<div class="modal-body">


					<div class="row">
						<div class="col-md-8">						
							<label>Nome da Categoria</label>
							<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome da Categoria" required>					
						</div>
					</div>

					<div class="row">
						<div class="col-md-8">						
							<label>Ícone da Categoria (Mostrar no PDV Vendas)</label>
							
							<div class="d-flex align-items-center">
						        <i id="icone-preview" class="fas fa-tv fa-2x me-2"></i>  <!-- Ícone exibido antes da seleção -->
						        <select class="sel3" name="icone" id="icone" onchange="atualizarIcone()" style="width:100%">
						            <option value="fas fa-tv">TV</option>
								    <option value="fas fa-laptop">Laptop</option>
								    <option value="fas fa-mobile-alt">Celular</option>
								    <option value="fas fa-gamepad">Gamepad</option>
								    <option value="fas fa-tshirt">Roupas</option>
								    <option value="fas fa-couch">Móveis</option>
								    <option value="fas fa-car">Carro</option>
								    <option value="fas fa-utensils">Restaurante</option>
								    <option value="fas fa-shopping-cart">Carrinho de Compras</option>
								    <option value="fas fa-basketball-ball">Esportes</option>
								    <option value="fas fa-book">Livros</option>
								    <option value="fas fa-music">Música</option>
								    <option value="fas fa-camera">Câmera</option>
								    <option value="fas fa-home">Casa</option>
								    <option value="fas fa-lightbulb">Ideia</option>
								    <option value="fas fa-tools">Ferramentas</option>
								    <option value="fas fa-hamburger">Comida</option>
								    <option value="fas fa-briefcase">Trabalho</option>
								    <option value="fas fa-heart">Saúde</option>
								    <option value="fas fa-user-graduate">Educação</option>
								    <option value="fas fa-plane">Viagem</option>
								    <option value="fas fa-truck">Transporte</option>
								    <option value="fas fa-industry">Indústria</option>
								    <option value="fas fa-globe">Mundo</option>
								    <option value="fas fa-map-marker-alt">Localização</option>
								    <option value="fas fa-paint-brush">Design</option>
								    <option value="fas fa-gift">Presentes</option>
								    <option value="fas fa-bolt">Energia</option>
								    <option value="fas fa-hospital">Hospital</option>
								    <option value="fas fa-credit-card">Pagamentos</option>
								    <option value="fas fa-file-invoice-dollar">Faturas</option>
								    <option value="fas fa-calendar-alt">Eventos</option>
								    <option value="fas fa-tree">Natureza</option>
								    <option value="fas fa-seedling">Meio Ambiente</option>
								    <option value="fas fa-chess">Jogos</option>
								    <option value="fas fa-robot">Tecnologia</option>
								    <option value="fas fa-code">Programação</option>
								    <option value="fas fa-dumbbell">Academia</option>
								    <option value="fas fa-film">Cinema</option>
								    <option value="fas fa-spa">Beleza</option>
								    <option value="fas fa-bell">Notificações</option>
								    <option value="fas fa-shield-alt">Segurança</option>
								    <option value="fas fa-stethoscope">Médico</option>
								    <option value="fas fa-motorcycle">Moto</option>
								    <option value="fas fa-bicycle">Bicicleta</option>
								    <option value="fas fa-sun">Clima</option>
								    <option value="fas fa-moon">Noite</option>
								    <option value="fas fa-wifi">Internet</option>
								    <option value="fas fa-suitcase">Negócios</option>
								    <option value="fas fa-key">Chaves</option>
								    <option value="fas fa-dog">Pet</option>
								    <option value="fas fa-graduation-cap">Formação</option>
								    <option value="fas fa-comments">Chat</option>
								    <option value="fas fa-tablet-alt">Tablet</option>
									<option value="fas fa-microchip">Hardware</option>
									<option value="fas fa-memory">Memória</option>
									<option value="fas fa-plug">Eletrônicos</option>
									<option value="fas fa-sim-card">Chip / SIM</option>
									<option value="fas fa-headphones">Fones de Ouvido</option>
									<option value="fas fa-blender-phone">Acessórios Celular</option>
									<option value="fas fa-database">Armazenamento</option>
									<option value="fas fa-usb">USB / Pen Drive</option>
									<option value="fas fa-charging-station">Carregador</option>
									<option value="fas fa-battery-full">Bateria</option>
									<option value="fas fa-gamepad">Games</option>
									<option value="fas fa-keyboard">Teclado</option>
									<option value="fas fa-mouse">Mouse</option>
									<option value="fas fa-tv">Monitor</option>
									<option value="fas fa-hdd">HD / SSD</option>
									<option value="fas fa-wrench">Manutenção</option>
									<option value="fas fa-satellite-dish">Antena</option>
									<option value="fas fa-volume-up">Caixa de Som</option>
									<option value="fas fa-broadcast-tower">Conectividade</option>
									<option value="fas fa-cloud">Serviços Online</option>
									<option value="fas fa-cart-plus">Vendas</option>
									<option value="fas fa-store">Lojas</option>
									<option value="fas fa-file-contract">Documentos / PDFs</option>
									<option value="fas fa-print">Impressora</option>
									<option value="fas fa-wind">Ventilação / Cooler</option>
									<option value="fas fa-camera-retro">Fotografia</option>
									<option value="fas fa-film">Filmagem</option>
									<option value="fas fa-car-battery">Bateria Veicular</option>
									<option value="fas fa-plug">Adaptadores</option>
									<option value="fas fa-lightbulb">Lâmpadas</option>
									<option value="fas fa-phone">Telefone</option>
									<option value="fas fa-door-open">Segurança / Fechaduras</option>
									<option value="fas fa-walking">Mobilidade</option>
									<option value="fas fa-hammer">Ferramentas Gerais</option>
									<option value="fas fa-screwdriver">Ajustes</option>
									<option value="fas fa-drafting-compass">Engenharia</option>
									<option value="fas fa-ethernet">Redes / Internet</option>
									<option value="fas fa-server">Servidores</option>
									<option value="fas fa-podcast">Áudio</option>
									<option value="fas fa-barcode">Código de Barras</option>
									<option value="fas fa-cash-register">PDV / Caixa</option>
									<option value="fas fa-exchange-alt">Trocas</option>
									<option value="fas fa-recycle">Reciclagem</option>
									<option value="fas fa-tools">Ajustes / Manutenção</option>
						        </select>
						    </div>

						</div>
					</div>

					<div class="row">
						<div class="col-md-8">							
							<label>Foto</label>
							<input type="file" class="form-control" id="foto_categoria" name="foto_categoria" onchange="carregarImg()">							
						</div>

						<div class="col-md-4">						
							<img src=""  width="80px" id="target">
						</div>

						
					</div>					


					<input type="hidden" class="form-control" id="id" name="id">					

					<br>
					<small><div id="mensagem" align="center"></div></small>
				</div>
				<div class="modal-footer">       
					<button type="submit" id="btn_salvar" class="btn btn-primary">Salvar<i class="fa-solid fa-check ms-2"></i></button>
				</div>
			</form>
		</div>
	</div>
</div>



<script type="text/javascript">var pag = "<?=$pag?>"</script>
<script src="js/ajax.js"></script>




<script type="text/javascript">
	function carregarImg() {
		var target = document.getElementById('target');
		var file = document.querySelector("#foto_categoria").files[0];

		var reader = new FileReader();

		reader.onloadend = function () {
			target.src = reader.result;
		};

		if (file) {
			reader.readAsDataURL(file);

		} else {
			target.src = "";
		}
	}
</script>


<script>
    function atualizarIcone() {
        var select = document.getElementById("icone");
        var icone = document.getElementById("icone-preview");
        icone.className = select.value + " fa-2x"; // Atualiza a classe do ícone
    }
</script>