<?php
$pag = 'agendas';

if (@$pag == 'ocultar') {
	echo "<script>window.location='index'</script>";
	exit();
}

?>

<div class="breadcrumb-header justify-content-between">
	<div class="left-content mt-2">
		<a class="btn ripple btn-primary text-white" onclick="inserir()" type="button"><i class="fe fe-plus me-1"></i>
			Adicionar Evento</a>

	</div>

</div>


<div class="card mb-4 border-light shadow">
	<div class="card-body">
		<h2 class="mt-0 me-3 ms-2 pb-2 border-bottom">Agenda</h2>


		<form class="ms-2 me-2 row g-3">

			<div class="col-md-5 col-sm-12">
				<label class="form-label" for="user_id">Pesquisar eventos do profissional</label>
				<select name="user_id" id="user_id" class="sel27" style="width:100%; height:35px" id="cad_user_id">
					<option value="0">Selecione um Profissional</option>
					<?php
					$query = $pdo->query("SELECT * from usuarios where nivel != 'Administrador' order by id asc");
					$res = $query->fetchAll(PDO::FETCH_ASSOC);
					$linhas = @count($res);
					if ($linhas > 0) {
						for ($i = 0; $i < $linhas; $i++) {
							echo '<option value="' . $res[$i]['id'] . '">' . $res[$i]['nome'] . '</option>';
						}
					}
					?>
				</select>
			</div>

			<div class="col-md-5 col-sm-12">
				<label class="form-label" for="pesq-events">Pesquisar Evento</label>
				<input type="text" name="pesq-events" id="pesq-events" data-target-pesq-events="" class="form-control" placeholder="Nome do Evento">
				<!-- Carregar as opções retornada do BD -->
				<span id="resultado_pesquisa" style="position: absolute; z-index: 1;"></span>
			</div>

			<div class="col-md-2 col-sm-12 mt-md-4 pt-md-3">
				<button type="button" class="btn btn-warning mt-md-1" id="limparPesquisaUsuarioCliente">Limpar Cliente</button>
			</div>

		</form>

	</div>
</div>


<div class="row">
	<div class="col-2">
		<div id='external-events'>

			<div id='external-events-list'>


				<h4>Eventos</h4>

				<?php
				$query = $pdo->query("SELECT * from agendas order by id asc");
				$res = $query->fetchAll(PDO::FETCH_ASSOC);
				$linhas = @count($res);
				if ($linhas > 0) {
					for ($i = 0; $i < $linhas; $i++) {
						$title = $res[$i]['title'];

				?>


						<div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
							<div class='fc-event-main'><?php echo $title ?></div>
						</div>



				<?php
					}
				}
				?>


			</div>

			<p>
				<input type='checkbox' id='drop-remove' />
				<label for='drop-remove'>Remover após Arastado</label>
			</p>
		</div>

	</div>



	<div class="col-10">
		<div class="card p-4 border-light shadow">
			<div class="card-body">
				<div id='calendar'></div>
			</div>
		</div>
	</div>


</div>




<!-- Modal Cadastrar -->
<div class="modal fade" id="cadastrarModal" tabindex="-1" aria-labelledby="cadastrarModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header bg-primary text-white">
				<h4 class="modal-title" id="exampleModalLabel"><span id="titulo_inserir"></span></h4>
				<button id="btn-fechar" aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span
						class="text-white" aria-hidden="true">&times;</span></button>
			</div>


			<div class="modal-body">

				<form method="POST" id="formAgenda">


					<div class="row">
						<div class="col-6">
							<label>Título</label>
							<input type="text" class="form-control" id="cad_title" name="cad_title" placeholder="Título do evento" required>
						</div>

						<div class="col-6">
							<label>Profissional</label>
							<select name="cad_user_id" class="sel25" style="width:100%; height:35px" id="cad_user_id">
								<option value="0">Selecione um Profissional</option>
								<?php
								$query = $pdo->query("SELECT * from usuarios where nivel != 'Administrador' order by id asc");
								$res = $query->fetchAll(PDO::FETCH_ASSOC);
								$linhas = @count($res);
								if ($linhas > 0) {
									for ($i = 0; $i < $linhas; $i++) {
										echo '<option value="' . $res[$i]['id'] . '">' . $res[$i]['nome'] . '</option>';
									}
								}
								?>
							</select>
						</div>




					</div>



					<div class="row">

						<div class="col-4">
							<label>Cor</label>
							<select class="form-select" id="cad_color" name="cad_color">
								<option value="">Selecione a Cor</option>
								<option style="color:#FFD700;" value="#FFD700">Amarelo</option>
								<option style="color:#0071c5;" value="#0071c5">Azul Turquesa</option>
								<option style="color:#FF4500;" value="#FF4500">Laranja</option>
								<option style="color:#8B4513;" value="#8B4513">Marrom</option>
								<option style="color:#1C1C1C;" value="#1C1C1C">Preto</option>
								<option style="color:#436EEE;" value="#436EEE">Royal Blue</option>
								<option style="color:#A020F0;" value="#A020F0">Roxo</option>
								<option style="color:#40E0D0;" value="#40E0D0">Turquesa</option>
								<option style="color:#228B22;" value="#228B22">Verde</option>
								<option style="color:#8B0000;" value="#8B0000">Vermelho</option>
							</select>
						</div>

						<div class="col-4">
							<label>Data Início</label>
							<input type="datetime-local" class="form-control" id="cad_start" name="cad_start">
						</div>

						<div class="col-4">
							<label>Data Fim</label>
							<input type="datetime-local" class="form-control" id="cad_end" name="cad_end">
						</div>
					</div>



					<div class="row">
						<div class="col-12">
							<label>Observação</label>
							<input type="text" class="form-control" id="cad_obs" name="cad_obs" placeholder="Observação do evento">
						</div>
					</div>


					<input type="hidden" class="form-control" id="id" name="id">

					<br>
					<small>
						<div id="mensagem" align="center"></div>
					</small>


					<div class="modal-footer">
						<button id="btn_salvar" name="btn_salvar" type="submit" class="btn btn-primary">Salvar <i class="fa-solid fa-check"></i></button>

						<button class="btn btn-primary" type="button" id="btn_carregando">
							<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Carregando...
						</button>
					</div>

				</form>

			</div>
		</div>
	</div>
</div>

<!-- Modal Visualizar -->


<div class="modal fade" id="visualizarModal" tabindex="-1" aria-labelledby="visualizarModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header bg-primary text-white">
				<h4 class="modal-title" id="visualizarModalLabel"><span id="visualizar_title"></span></h4>
				<h1 class="modal-title fs-5" id="editarModalLabel" style="display: none;">Editar o Evento</h1>
				<button id="btn-fechar" aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span
						class="text-white" aria-hidden="true">&times;</span></button>
			</div>


			<div class="modal-body">

				<span id="msgViewEvento"></span>

				<div id="visualizarEvento">

					<dl class="row">

						<dt class="col-sm-3">ID: </dt>
						<dd class="col-sm-9" id="visualizar_id"></dd>


						<dt class="col-sm-3">Início: </dt>
						<dd class="col-sm-9" id="visualizar_start"></dd>

						<dt class="col-sm-3">Fim: </dt>
						<dd class="col-sm-9" id="visualizar_end"></dd>

						<dt class="col-sm-3">ID do Profissional: </dt>
						<dd class="col-sm-9" id="visualizar_user_id"></dd>

						<dt class="col-sm-3">Nome do Profissional: </dt>
						<dd class="col-sm-9" id="visualizar_name"></dd>

						<dt class="col-sm-3">E-mail do Profissional: </dt>
						<dd class="col-sm-9" id="visualizar_email"></dd>

						<dt class="col-sm-3">Nome do Cliente: </dt>
						<dd class="col-sm-9" id="visualizar_client_name"></dd>

						<dt class="col-sm-3">E-mail do Cliente: </dt>
						<dd class="col-sm-9" id="visualizar_client_email"></dd>

						<dt class="col-sm-3">Observação: </dt>
						<dd class="col-sm-9" id="visualizar_obs"></dd>

					</dl>


					<div class="modal-footer">
						<button type="button" class="btn btn-warning" id="btnViewEditEvento">Editar</button>

						<button type="button" class="btn btn-danger" id="btnApagarEvento">Apagar</button>
					</div>

				</div>

				<div id="editarEvento" style="display: none;">

					<span id="msgEditEvento"></span>

					<form method="POST" id="formEditEvento">

						<input type="hidden" name="edit_id" id="edit_id">

						<div class="row mb-3">
							<label for="edit_title" class="col-sm-2 col-form-label">Título</label>
							<div class="col-sm-10">
								<input type="text" name="edit_title" class="form-control" id="edit_title" placeholder="Título do evento">
							</div>
						</div>

						<div class="row mb-3">
							<label for="edit_obs" class="col-sm-2 col-form-label">Observação</label>
							<div class="col-sm-10">
								<input type="text" name="edit_obs" class="form-control" id="edit_obs" placeholder="Observação do evento">
							</div>
						</div>

						<div class="row mb-3">
							<label for="edit_start" class="col-sm-2 col-form-label">Início</label>
							<div class="col-sm-10">
								<input type="datetime-local" name="edit_start" class="form-control" id="edit_start">
							</div>
						</div>

						<div class="row mb-3">
							<label for="edit_end" class="col-sm-2 col-form-label">Fim</label>
							<div class="col-sm-10">
								<input type="datetime-local" name="edit_end" class="form-control" id="edit_end">
							</div>
						</div>

						<div class="row mb-3">
							<label for="edit_color" class="col-sm-2 col-form-label">Cor</label>
							<div class="col-sm-10">
								<select name="edit_color" class="form-control" id="edit_color">
									<option value="">Selecione</option>
									<option style="color:#FFD700;" value="#FFD700">Amarelo</option>
									<option style="color:#0071c5;" value="#0071c5">Azul Turquesa</option>
									<option style="color:#FF4500;" value="#FF4500">Laranja</option>
									<option style="color:#8B4513;" value="#8B4513">Marrom</option>
									<option style="color:#1C1C1C;" value="#1C1C1C">Preto</option>
									<option style="color:#436EEE;" value="#436EEE">Royal Blue</option>
									<option style="color:#A020F0;" value="#A020F0">Roxo</option>
									<option style="color:#40E0D0;" value="#40E0D0">Turquesa</option>
									<option style="color:#228B22;" value="#228B22">Verde</option>
									<option style="color:#8B0000;" value="#8B0000">Vermelho</option>
								</select>
							</div>
						</div>

						<div class="row mb-3">
							<label for="edit_user_id" class="col-sm-2 col-form-label">Profissional</label>
							<div class="col-sm-10">
								<select name="edit_user_id" class="form-control" id="edit_user_id">
									<option value="">Selecione</option>
								</select>
							</div>
						</div>

						<div class="row mb-3">
							<label for="edit_client_id" class="col-sm-2 col-form-label">Cliente</label>
							<div class="col-sm-10">
								<select name="edit_client_id" class="form-control" id="edit_client_id">
									<option value="">Selecione</option>
								</select>
							</div>
						</div>

						<button type="button" name="btnViewEvento" class="btn btn-primary" id="btnViewEvento">Cancelar</button>

						<button type="submit" name="btnEditEvento" class="btn btn-warning" id="btnEditEvento">Salvar</button>

					</form>

				</div>

			</div>
		</div>
	</div>
</div>



<script type="text/javascript">
	var pag = "<?= $pag ?>"
</script>
<script src="js/ajax.js"></script>



<script type="text/javascript">
	$(document).ready(function() {
		$('.sel25').select2({
			dropdownParent: $('#cadastrarModal')
		});
	});
	$(document).ready(function() {
		$('.sel26').select2({
			dropdownParent: $('#cadastrarModal')
		});
	});

	$(document).ready(function() {
		$('.sel27').select2({
			//dropdownParent: $('#cadastrarModal')
		});
	});
</script>




<script>
	function inserir() {
		$('#mensagem').text('');
		$('#titulo_inserir').text('Inserir Registro');
		$('#cadastrarModal').modal('show');
		limparCampos();
	}
</script>


<script>
	$("#formAgenda").submit(function() {

		event.preventDefault();
		var formData = new FormData(this);

		$('#mensagem').text('Salvando...')
		$('#btn_salvar').hide();
		$('#btn_carregando').show();

		$.ajax({
			url: 'paginas/' + pag + "/salvar.php",
			type: 'POST',
			data: formData,

			success: function(mensagem) {
				$('#mensagem').text('');
				$('#mensagem').removeClass()
				if (mensagem.trim() == "Salvo com Sucesso") {




					$('#btn-fechar').click();
					sucesso();
					listar();


					//LIMPAR OS CAMPOS
					formAgenda.reset();


					$('#mensagem').text('')

				} else {

					$('#mensagem').addClass('text-danger')
					$('#mensagem').text(mensagem)
				}

				$('#btn_salvar').show();
				$('#btn_carregando').hide();

			},

			cache: false,
			contentType: false,
			processData: false,

		});

	});
</script>