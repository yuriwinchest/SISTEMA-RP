<?php
$pag = 'anotacoes';

//verificar se ele tem a permissão de estar nessa página
if (@$anotacoes == 'ocultar') {
	echo "<script>window.location='index.php'</script>";
	exit();
}

?>
<div class="breadcrumb-header justify-content-between">
	<div class="left-content mt-2">
		<a class="btn ripple btn-primary text-white" onclick="inserir()" type="button"><i class="fa fa-plus me-1"></i>
			Adicionar Anotações</a>


		<!-- BOTÃO EXCLUIR SELEÇÃO -->
<big><a class="btn btn-danger" href="#" onclick="deletarSel()" title="Excluir" id="btn-deletar" style="display:none"><i class="fe fe-trash-2"></i> Deletar</a></big>

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
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header bg-primary text-white">
				<h4 class="modal-title" id="exampleModalLabel"><span id="titulo_inserir"></span></h4>
				<button id="btn-fechar-anot" aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span
						class="text-white" aria-hidden="true">&times;</span></button>
			</div>
			<form id="form-anot">
				<div class="modal-body">


					<div class="row">
						<div class="col-md-6 needs-validation was-validated">
							<label>Título</label>
							<input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título" required>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label>Mostrar no Dashboard</label>
								<select class="form-select" name="mostrar_home" id="mostrar_home">
									<option value="Não">Não</option>
									<option value="Sim">Sim</option>
								</select>
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group">
								<label>Privado?</label>
								<select class="form-select" name="privado" id="privado">
									<option value="Não">Não</option>
									<option value="Sim">Sim</option>
								</select>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<label>Mensagem <small>(Max 2000 Caracteres)</small></label>
							<textarea maxlength="2000" class="textarea_menor" id="area" name="msg" style="height: 100px;"></textarea>
						</div>
					</div>


					<input type="hidden" class="form-control" id="id" name="id">

					<br>
					<small>
						<div id="msg-anot" align="center"></div>
					</small>
				</div>
				<div class="modal-footer">
					<button type="submit" id="btn-salvar-anot" class="btn btn-primary">Salvar<i
							class="fa-solid fa-check ms-2"></i>
					</button>
					<button class="btn btn-primary" type="button" id="btn_carregando">
						<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Carregando...
					</button>
				</div>
			</form>
		</div>
	</div>
</div>




<!-- Modal Dados -->
<div class="modal fade" id="modalDados" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header bg-primary text-white">
				<h4 class="modal-title" id="exampleModalLabel"><span id="titulo_dados"></span></h4>
				<button id="btn-fechar-dados" aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span
						class="text-white" aria-hidden="true">&times;</span></button>
			</div>

			<div class="modal-body">
				<small>

					<div class="row">

						<div class="col-md-6">
							<div class="tile">
								<div class="table-responsive">
									<table id="" class="text-left table table-bordered">

										<tr>
											<td width="20%" class="bg-primary text-white">N°</td>
											<td><span id="id_dados"></span></td>
										</tr>


										<tr>
											<td width="20%" class="bg-primary text-white w_150">Data</td>
											<td><span id="data_dados"></span></td>
										</tr>

										<tr>
											<td class="bg-primary text-white w_150">Usuário</td>
											<td><span id="usuario_dados"></span></td>
										</tr>



									</table>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="tile">
								<div class="table-responsive">
									<table id="" class="text-left table table-bordered">

										<tr>
											<td width="45%" class="bg-primary text-white">Privado</td>
											<td><span id="privado_dados"></span></td>
										</tr>


										<tr>
											<td class="bg-primary text-white w_150">Mostrar no Dashboard</td>
											<td><span id="mostrar_dados"></span></td>
										</tr>


									</table>
								</div>
							</div>
						</div>


						<div class="col-md-12">
							<div class="tile">
								<div class="table-responsive">
									<table id="" class="text-left table table-bordered">


										<tr>
											<td width="15%" class="bg-primary text-white w_150">Mensagem</td>
											<td><span id="mensagem_dados"></span></td>
										</tr>


									</table>
								</div>
							</div>
						</div>

					</div>



				</small>
				<div id="listar_servicos" style="margin-top: 15px"></div>
			</div>

		</div>
	</div>
</div>




<script type="text/javascript">var pag = "<?= $pag ?>"</script>
<script src="js/ajax.js"></script>

<script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>



<script type="text/javascript">




	$("#form-anot").submit(function () {

		event.preventDefault();

		nicEditors.findEditor('area').saveContent();

		var formData = new FormData(this);

		$('#msg-anot').text('Salvando...')
		$('#btn-salvar-anot').hide();

		$.ajax({
			url: 'paginas/' + pag + "/salvar.php",
			type: 'POST',
			data: formData,

			success: function (mensagem) {

				$('#msg-anot').text('');
				$('#msg-anot').removeClass()
				if (mensagem.trim() == "Salvo com Sucesso") {

					$('#btn-fechar-anot').click();
					sucesso();
					listar();


				} else {

					$('#msg-anot').addClass('text-danger')
					$('#msg-anot').text(mensagem)
				}

				$('#btn-salvar-anot').show();


			},

			cache: false,
			contentType: false,
			processData: false,

		});

	});


</script>