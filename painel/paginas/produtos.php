<?php
$pag = 'produtos';


//verificar se ele tem a permissão de estar nessa página
if (@$produtos == 'ocultar') {
	echo "<script>window.location='index.php'</script>";
	exit();
}
?>
<form method="POST" action="rel/produtos_class.php" target="_blank">
	<div class="breadcrumb-header justify-content-between">
		<div class="left-content mt-2">
			<a class="btn ripple btn-primary text-white" onclick="inserir()" type="button"><i
					class="fa fa-plus me-1"></i>
				Adicionar <?php echo ucfirst($pag); ?></a>


			<!-- BOTÃO EXCLUIR SELEÇÃO -->
			<a class="btn btn-danger" href="#" onclick="deletarSel()" title="Excluir" id="btn-deletar"
				style="display:none"><i class="fe fe-trash-2"></i> Deletar</a>


			<select class="form-select sel7" name="categoria" id="categoria_busca" style="width:200px"
				onchange="buscar()">
				<option value="">Buscasr por Categoria</option>
				<?php
				$query = $pdo->query("SELECT * from categorias where empresa = '$id_empresa' order by nome asc");
				$res = $query->fetchAll(PDO::FETCH_ASSOC);
				$linhas = @count($res);
				if ($linhas > 0) {
					for ($i = 0; $i < $linhas; $i++) { ?>
						<option value="<?php echo $res[$i]['id'] ?>"><?php echo $res[$i]['nome'] ?></option>
					<?php }
				} ?>
			</select>

			<div style="display: inline-block; margin-top: 5px">

				<div id="listar_subcategorias_busca"></div>
			</div>

			<select class="form-select" style="width:200px; display: inline-block; margin-top: 5px" id="filtrar_estoque"
				name="filtrar_estoque" onchange="buscar()">
				<option value="">Todos</option>
				<option value="estoque">Estoque Baixo</option>
			</select>


			<button type="submit" class="btn btn-success botao_rel esc">Relatório</button>

			<button type="submit" class="btn btn-success botao_rel esc_web"><span
					class="fa fa-file-pdf-o"></span></button>


		</div>
	</div>
</form>

<div class="row row-sm">
	<div class="col-lg-12">
		<div class="card custom-card">
			<div class="card-body" id="listar">

			</div>
		</div>
	</div>
</div>


<input type="hidden" id="ids">



<!-- Modal Produtios -->
<div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header bg-primary text-white">
				<h4 class="modal-title" id="exampleModalLabel"><span id="titulo_inserir"></span></h4>
				<button id="btn-fechar" aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span
						class="text-white" aria-hidden="true">&times;</span></button>
			</div>
			<form id="form-produtos">
				<div class="modal-body">


					<div class="row">
						<div class="col-md-3 mb-2 col-10">
							<label>Código</label>
							<input type="text" class="form-control" id="codigo" name="codigo" placeholder="Código de Barras"
								onkeyup="gerarCodigo()">
						</div>

						<div class="col-md-1 col-2" style="margin-top: 28px; margin-left: -10px">
							<a title="Gerar Código" class="btn btn-primary" href="#" onclick="addCodigo()" class="btn btn-primary"> <i
									class="fa-solid fa-arrow-rotate-right"></i> </a>
						</div>

						<div class="col-md-8">
							<label>Nome<span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Produto" required>
						</div>
					</div>
					<div class="row">
						<div class="col-md-5 mb-2 col-10">
							<label>Categoria<span class="text-danger">*</span></label>
							<div id="listar_categoria">
							</div>

						</div>

						<div class="col-md-1 col-2" style="margin-top: 28px; margin-left: -15px">
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCategoria"><i
									class="fa fa-plus"></i> </button>
						</div>


						<div class="col-md-5 col-10">
							<label>Sub Categoria</label>
							<div id="listar_sub_categoria">
							</div>
						</div>

						<div class="col-md-1 col-2" style="margin-top: 28px; margin-left: -15px">
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalSubCategorias">
								<i class="fa fa-plus"></i> </button>
						</div>


					</div>



					<div class="row">

						<div class="col-md-4 mb-2 col-6">
							<label>Valor Compra</label>
							<input type="text" class="form-control" id="valor_compra" name="valor_compra" placeholder="Val Compra"
								onKeyup="calcular()" onchange="calcular()" oninput="mascaraMoeda(this)">
						</div>

						<div class="col-md-4 mb-2 col-6">
							<label>Lucro em %</label>
							<input type="text" class="form-control" id="valor_lucro" name="valor_lucro"
								placeholder="Valor em Porcentagem" onKeyup="calcular()">
						</div>

						<div class="col-md-4 mb-2">
							<label>Lucro em R$</label>
							<input type="text" class="form-control" id="lucro_reais" name="lucro_reais" placeholder="Val em R$"
								onKeyup="calcular()" oninput="mascaraMoeda(this)">
						</div>



					</div>

					<div class="row">


						<div class="col-md-2 col-6">
							<label>Quantidade</label>
							<input type="number" class="form-control" id="estoque" name="estoque" placeholder="Qtd" <?php if ($nivel_usuario != 'Administrador') { ?> readonly <?php } ?>>
						</div>

						<div class="col-md-3 mb-2 col-6">
							<label>Valor Venda<span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="valor_venda" name="valor_venda" placeholder="Val Venda"
								required oninput="mascaraMoeda(this)">
						</div>

						<div class="col-md-3 mb-2 col-6">
							<label>Valor Promocional</label>
							<input type="text" class="form-control" id="valor_promocional" name="valor_promocional"
								placeholder="Val Promocional" oninput="mascaraMoeda(this)">
						</div>



						<div class="col-md-2">
							<label>Nível Estoque</label>
							<input type="number" class="form-control" id="nivel_estoque" name="nivel_estoque" placeholder="Nível Mín">
						</div>

						<div class="col-md-2">
							<div class="form-group">
								<label for="exampleInputEmail1">Tem Estoque?</label>
								<select class="form-select" id="tem_estoque" name="tem_estoque" style="width:100%;">
									<option value="Sim">Sim</option>
									<option value="Não">Não</option>
								</select>
							</div>
						</div>

					</div>


					<div class="row">
								<div class="col-md-2">						
								<label>Mostrar Site</label>
								<select class="form-select" id="mostrar_site" name="mostrar_site">
									<option value="Sim">Sim</option>
									<option value="Não">Não</option>	
								</select>				
							</div>

								<div class="col-md-7">							
									<label>Foto</label>
									<input type="file" class="form-control" id="foto" name="foto" onchange="carregarImg()">							
								</div>

								<div class="col-md-3">						
									<img src=""  width="80px" id="target">
								</div>


							</div>




					<div class="row">
						<div class="col-md-12">
							<label>Descrição <small>(Max 2000 Caracteres)</small></label>
							<input class="form-control" id="descricao" name="descricao"
								placeholder="Descrição do Produto">
						</div>
					</div>


					<div id="listar-codigo"></div>


					<input type="hidden" class="form-control" id="id" name="id">

					<br>
					<small>
						<div id="mensagem" align="center"></div>
					</small>
				</div>
				<div class="modal-footer">
					<button type="submit" id="btn_salvar" class="btn btn-primary">Salvar<i
							class="fa-solid fa-check ms-2"></i></button>
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
				<button id="btn-fechar" aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span
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
											<td class="bg-primary text-white">Codigo</td>
											<td><span id="codigo_dados"></span></td>
										</tr>

										<tr>
											<td class="bg-primary text-white">Categoria</td>
											<td><span id="categoria_dados"></span></td>
										</tr>

										<tr>
											<td class="bg-primary text-white w_150">Sub Categoria</td>
											<td><span id="sub_categoria_dados"></span></td>
										</tr>

										<tr>
											<td class="bg-primary text-white w_150">Valor Compra</td>
											<td>R$ <span id="compra_dados"></span></td>
										</tr>

										<tr>
											<td class="bg-primary text-white w_150">Lucro %</td>
											<td>%<span id="valor_lucro_dados"></span></td>
										</tr>

										<tr>
											<td class="bg-primary text-white w_150">Lucro R$</td>
											<td>R$ <span id="lucro_reais_dados"></span></td>
										</tr>

										<tr>
											<td class="bg-primary text-white w_150">Valor Venda</td>
											<td>R$ <span id="venda_dados"></span></td>
										</tr>

										<tr>
											<td class="bg-primary text-white w_150">Valor Promocional</td>
											<td>R$ <span id="promocao_dados"></span></td>
										</tr>


										<tr>
											<td class="bg-primary text-white w_150">Estoque</td>
											<td><span id="pgto_mostrar"></span></td>
										</tr>
										<tr>
											<td class="bg-primary text-white w_150">Ativo</td>
											<td><span id="ativo_dados"></span></td>
										</tr>

										<tr>
											<td class="bg-primary text-white w_150">Tem Estoque?</td>
											<td><span id="tem_estouque_dados"></span></td>
										</tr>

										<tr>
											<td class="bg-primary text-white w_150">Descrição</td>
											<td><span id="descricao_dados"></span></td>
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
											<td class="bg-primary text-white" style="width: 15%">Descrição</td>
											<td><span id="descricao_dados"></span></td>
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
											<td align="center"><img src="" id="foto_dados" width="200px"></td>
										</tr>

									</table>
								</div>
							</div>
						</div>


					</div>


				</small>
				<div id="listar_debitos" style="margin-top: 15px">

				</div>
			</div>

		</div>
	</div>
</div>

<!-- Modal categorias -->
<div class="modal fade" id="modalCategoria" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
	data-bs-backdrop='static'>
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-primary text-white">
				<h4 class="modal-title" id="exampleModalLabel">Adicionar Categorias</h4>
				<button id="btn-fechar-categoria" aria-label="Close" class="btn-close" data-bs-toggle="modal"
					data-bs-target="#modalForm" type="button"><span class="text-white" aria-hidden="true">&times;</span></button>
			</div>
			<form id="form-categoria">
				<div class="modal-body">


					<div class="row">
						<div class="col-md-12">
							<label>Nome da Categoria</label>
							<input type="text" class="form-control" id="categoria" name="nome" placeholder="Nome da Categoria"
								required>
						</div>
					</div>

					<div class="row">
						<div class="col-md-8">
							<label>Foto</label>
							<input type="file" class="form-control" id="foto_categoria" name="foto_categoria"
								onchange="carregarImgCat()">
						</div>

						<div class="col-md-4">
							<img src="" width="80px" id="target_categoria">
						</div>
					</div>

					<input type="hidden" class="form-control" name="id-categoria">

					<br>
					<small>
						<div id="mensagem_categoria" align="center"></div>
					</small>
				</div>
				<div class="modal-footer">
					<button type="submit" id="btn_salvar_categoria" class="btn btn-primary">Salvar<i
							class="fa-solid fa-check ms-2"></i></button>
				</div>
			</form>
		</div>
	</div>
</div>



<!-- Modal Sub Categorias -->
<div class="modal fade" id="modalSubCategorias" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
	data-bs-backdrop='static'>
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-primary text-white">
				<h4 class="modal-title" id="exampleModalLabel">Adicionar Sub Categorias</h4>
				<button id="btn-fechar-sub-categoria" aria-label="Close" class="btn-close" data-bs-toggle="modal"
					data-bs-target="#modalForm" type="button"><span class="text-white" aria-hidden="true">&times;</span></button>
			</div>
			<form id="form-sub-categoria">
				<div class="modal-body">


					<div class="row">
						<div class="col-md-8">
							<label>Nome da Sub Categria</label>
							<input type="text" class="form-control" id="sub_categoria" name="nome"
								placeholder="DIgite a Sub Categoria" required>
						</div>

						<div class="col-md-3" style="margin-top: 24px;">
							<button type="submit" id="btn_salvar_sub_categoria" class="btn btn-primary">Salvar<i
									class="fa-solid fa-check ms-2"></i></button>
						</div>
					</div>


					<input type="hidden" class="form-control" id="id_sub_categoria" name="id_sub_categoria">

					<br>
					<small>
						<div id="mensagem_sub_categoria" align="center"></div>
					</small>
				</div>

			</form>
		</div>
	</div>
</div>

<!-- Modal Saida-->
<div class="modal fade" id="modalSaida" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header bg-primary text-white">
				<h4 class="modal-title" id="exampleModalLabel"><span id="nome_saida"></span></h4>
				<button id="btn-fechar-saida" aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span
						class="text-white" aria-hidden="true">&times;</span></button>
			</div>

			<div class="modal-body">
				<form id="form-saida">

					<div class="row">
						<div class="col-md-4">
							<div class="form-group">

								<input type="number" class="form-control" id="quantidade_saida" name="quantidade_saida"
									placeholder="1" required>
							</div>
						</div>

						<div class="col-md-5">
							<div class="form-group">
								<input type="text" class="form-control" id="motivo_saida" name="motivo_saida" placeholder="Motivo Saída"
									required>
							</div>
						</div>
						<div class="col-md-3">
							<button type="submit" class="btn btn-primary">Salvar<i class="fa-solid fa-check ms-2"></i></button>

						</div>
					</div>

					<input type="hidden" id="id_saida" name="id">
					<input type="hidden" id="estoque_saida" name="estoque">

				</form>

				<br>
				<small>
					<div id="mensagem-saida" align="center"></div>
				</small>
			</div>


		</div>
	</div>
</div>





<!-- Modal Entrada-->
<div class="modal fade" id="modalEntrada" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header bg-primary text-white">
				<h4 class="modal-title" id="exampleModalLabel"><span id="nome_entrada"></span></h4>
				<button id="btn-fechar-entrada" aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span
						class="text-white" aria-hidden="true">&times;</span></button>
			</div>

			<div class="modal-body">
				<form id="form-entrada">

					<div class="row">
						<div class="col-md-4">
							<div class="form-group">

								<input type="number" class="form-control" id="quantidade_entrada" name="quantidade_entrada"
									placeholder="1" required>
							</div>
						</div>

						<div class="col-md-5">
							<div class="form-group">
								<input type="text" class="form-control" id="motivo_entrada" name="motivo_entrada"
									placeholder="Motivo Entrada" required>
							</div>
						</div>
						<div class="col-md-3">
							<button type="submit" class="btn btn-primary">Salvar<i class="fa-solid fa-check ms-2"></i></button>

						</div>
					</div>

					<input type="hidden" id="id_entrada" name="id">
					<input type="hidden" id="estoque_entrada" name="estoque">

				</form>

				<br>
				<small>
					<div id="mensagem-entrada" align="center"></div>
				</small>
			</div>


		</div>
	</div>
</div>









<!-- Modal etiquetas -->
<div class="modal fade" id="modalEtiquetas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-primary text-white">
				<h4 class="modal-title" id="exampleModalLabel"><span id="titulo-etiquetas"></span></h4>
				<button id="btn-fechar" aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span
						class="text-white" aria-hidden="true">&times;</span></button>
			</div>

			<form action="barras/barcode.php" method="post" target="_blank">
				<div class="modal-body">


					<div class="row">
						<div class="col-md-7">
							<label>Quantidade Gerada</label>
							<input type="text" class="form-control" id="quantidade" name="quantidade"
								placeholder="Quantidade de etiquetas" required>
						</div>

						<div class="col-md-5">
							<button type="submit" class="btn btn-primary" style="margin-top: 25px">Gerar Etiquetas<i
									class="fa-solid fa-check ms-2"></i></button>
						</div>

					</div>



					<input type="hidden" name="id" id="id-etiqueta">
					<input type="hidden" name="codigo" id="codigo-etiqueta">
					<input type="hidden" name="valor" id="valor-etiqueta">
					<input type="hidden" name="nome" id="nome-etiqueta">


					<br>
					<small>
						<div id="mensagem" align="center"></div>
					</small>
				</div>



			</form>
		</div>
	</div>
</div>





<script type="text/javascript">var pag = "<?= $pag ?>"</script>
<script src="js/ajax.js"></script>

<script type="text/javascript">

	const modalForm = document.getElementById('modalForm')
	const codigo = document.getElementById('codigo')

	modalForm.addEventListener('shown.bs.modal', () => {
		codigo.focus()
	})
</script>


<script type="text/javascript">
	$(document).ready(function () {
		listarCategoria();
		listarSubCategoria();



		$('.sel2').select2({
			dropdownParent: $('#modalForm')
		});

		$('.sel3').select2({
			dropdownParent: $('#modalComprar')
		});

		$('.sel4').select2({
			dropdownParent: $('#modalEntrada')
		});

		$('.sel5').select2({
			dropdownParent: $('#modalSaida')
		});

		$('.sel6').select2({
		});

		$('.sel7').select2({
		})
	});
</script>

<script type="text/javascript">

	$("#form-produtos").submit(function () {

		
		event.preventDefault();
		var formData = new FormData(this);

		$('#mensagem').text('Salvando...')
		$('#btn_salvar').hide();

		$.ajax({
			url: 'paginas/' + pag + "/salvar.php",
			type: 'POST',
			data: formData,

			success: function (mensagem) {
				$('#mensagem').text('');
				$('#mensagem').removeClass()
				if (mensagem.trim() == "Salvo com Sucesso") {

					$('#btn-fechar').click();
					buscar();

					$('#mensagem').text('')

				} else {

					$('#mensagem').addClass('text-danger')
					$('#mensagem').text(mensagem)
				}

				$('#btn_salvar').show();

			},

			cache: false,
			contentType: false,
			processData: false,

		});

	});
</script>

<script type="text/javascript">
	function carregarImg() {
		var target = document.getElementById('target');
		var file = document.querySelector("#foto").files[0];

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



<script type="text/javascript">


	$("#form-saida").submit(function () {

		event.preventDefault();
		var formData = new FormData(this);

		$.ajax({
			url: 'paginas/' + pag + "/saida.php",
			type: 'POST',
			data: formData,

			success: function (mensagem) {
				$('#mensagem-saida').text('');
				$('#mensagem-saida').removeClass()
				if (mensagem.trim() == "Salvo com Sucesso") {

					$('#btn-fechar-saida').click();
					buscar();

				} else {

					$('#mensagem-saida').addClass('text-danger')
					$('#mensagem-saida').text(mensagem)
				}


			},

			cache: false,
			contentType: false,
			processData: false,

		});

	});
</script>



<script type="text/javascript" src="//js.nicedit.com/nicEdit-latest.js"></script>
<script type="text/javascript">
	//<![CDATA[
	bkLib.onDomLoaded(function () {
		nicEditors.editors.push(
			new nicEditor().panelInstance(document.getElementById('area')));
	});
	//]]>
</script>


<script type="text/javascript">


	$("#form-entrada").submit(function () {

		event.preventDefault();
		var formData = new FormData(this);

		$.ajax({
			url: 'paginas/' + pag + "/entrada.php",
			type: 'POST',
			data: formData,

			success: function (mensagem) {
				$('#mensagem-entrada').text('');
				$('#mensagem-entrada').removeClass()
				if (mensagem.trim() == "Salvo com Sucesso") {

					$('#btn-fechar-entrada').click();
					buscar();

				} else {

					$('#mensagem-entrada').addClass('text-danger')
					$('#mensagem-entrada').text(mensagem)
				}


			},

			cache: false,
			contentType: false,
			processData: false,

		});

	});


	function buscar() {
		var busca = $('#categoria_busca').val();
		var estoque = $('#filtrar_estoque').val();
		listar(busca, estoque)
	}
</script>

<script type="text/javascript">
	function gerarCodigo() {
		var codigo = $('#codigo').val();


		$.ajax({
			url: 'paginas/' + pag + "/gerar-codigo.php",
			method: 'POST',
			data: { codigo },
			dataType: "html",

			success: function (result) {
				$("#listar-codigo").html(result);

			}
		});

	}
</script>


<script type="text/javascript">

	$("#form-categoria").submit(function () {


		$('#mensagem_categoria').text('Salvando!!');
		$('#btn_salvar_categoria').hide();

		event.preventDefault();
		var formData = new FormData(this);
		var nova_pag = 'categorias';

		$.ajax({
			url: 'paginas/' + nova_pag + "/salvar.php",
			type: 'POST',
			data: formData,

			success: function (mensagem) {
				$('#mensagem_categoria').text('');
				$('#mensagem_categoria').removeClass()
				if (mensagem.trim() == "Salvo com Sucesso") {

					$('#btn-fechar-categoria').click();
					listarCategoria('1');


				} else {

					$('#mensagem_categoria').addClass('text-danger')
					$('#mensagem_categoria').text(mensagem)
					$('#btn_salvar_categoria').show();
				}

				$('#btn_salvar_categoria').show();

			},

			cache: false,
			contentType: false,
			processData: false,

		});

	});

	function listarCategoria(valor) {
		$.ajax({
			url: 'paginas/' + pag + "/listar_categoria.php",
			method: 'POST',
			data: { valor },
			dataType: "html",

			success: function (result) {
				$("#listar_categoria").html(result);
			}
		});
	}


	$("#form-sub-categoria").submit(function () {

		$('#mensagem_usb_categoria').text('Salvando!!');
		$('#btn_salvar_sub_categoria').hide();

		event.preventDefault();
		var formData = new FormData(this);
		var nova_pag = 'sub_categorias';

		$.ajax({
			url: 'paginas/' + nova_pag + "/salvar.php",
			type: 'POST',
			data: formData,

			success: function (mensagem) {
				$('#mensagem_sub_categoria').text('');
				$('#mensagem_sub_categoria').removeClass()
				if (mensagem.trim() == "Salvo com Sucesso") {

					$('#btn-fechar-sub-categoria').click();
					listar();
					listarSubCategoria('1');


				} else {

					$('#mensagem_sub_categoria').addClass('text-danger')
					$('#mensagem_sub_categoria').text(mensagem)
					$('#btn_salvar_sub_categoria').show();
				}

				$('#btn_salvar_sub_categoria').show();

			},

			cache: false,
			contentType: false,
			processData: false,

		});

	});

	function listarSubCategoria(valor) {
		$.ajax({
			url: 'paginas/' + pag + "/listar_sub_categoria.php",
			method: 'POST',
			data: { valor },
			dataType: "html",

			success: function (result) {
				$("#listar_sub_categoria").html(result);
			}
		});
	}

	function listarCategoria(valor) {
		$.ajax({
			url: 'paginas/' + pag + "/listar_categoria.php",
			method: 'POST',
			data: { valor },
			dataType: "html",

			success: function (result) {
				$("#listar_categoria").html(result);
			}
		});
	}

</script>

<script type="text/javascript">
	function carregarImgCat() {
		var target = document.getElementById('target_categoria');
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



<script type="text/javascript">

	function calcular() {
		var lucro = $('#valor_lucro').val();
		var venda = $('#valor_venda').val();
		var compra = $('#valor_compra').val();
		var luc_reais = $('#lucro_reais').val();

		lucro = lucro.replace('%', '');
		lucro = lucro.replace(',', '.');

		venda = venda.replace('.', '');
		venda = venda.replace(',', '.');

		compra = compra.replace('.', '');
		compra = compra.replace(',', '.');

		luc_reais = luc_reais.replace('R$', '');
		luc_reais = luc_reais.replace(',', '.');


		if (lucro == "") {
			lucro = 0;
		}

		if (venda == "") {
			venda = 0;
		}

		if (compra == "") {
			compra = 0;
		}

		if (luc_reais == "") {
			luc_reais = 0;
		}



		var vlr_venda = parseFloat(compra) + (parseFloat(compra) * parseFloat(lucro)) / 100 + parseFloat(luc_reais);
		$('#valor_venda').val(vlr_venda.toFixed(2).replace('.', ','));

	


	}


</script>

<script type="text/javascript">
	function addCodigo() {


		var sortido = Math.floor(Math.random() * 10000000000000);

		$('#codigo').val(sortido);
		gerarCodigo()

	}

</script>


<script type="text/javascript">
	
// ALERT EXCLUIR #######################################
function excluirprod(id) {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: "btn btn-success", // Adiciona margem à direita do botão "Sim, Excluir!"
            cancelButton: "btn btn-danger me-1",
            container: 'swal-whatsapp-container'
        },
        buttonsStyling: false
    });

    swalWithBootstrapButtons.fire({
        title: "Deseja Excluir?",
        text: "Você não conseguirá recuperá-lo novamente!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Sim, Excluir!",
        cancelButtonText: "Não, Cancelar!",
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            // Realiza a requisição AJAX para excluir o item
            $.ajax({
                url: 'paginas/' + pag + "/excluir.php",
                method: 'POST',
                data: { id },
                dataType: "html",
                success: function (mensagem) {
                    if (mensagem.trim() == "Excluído com Sucesso") {
                        // Exibe mensagem de sucesso após a exclusão
                        swalWithBootstrapButtons.fire({
                            title: mensagem,
                            text: 'Fecharei em 1 segundo.',
                            icon: "success",
                            timer: 1000,
                            timerProgressBar: true,
                            confirmButtonText: 'OK',
                            customClass: {
                             container: 'swal-whatsapp-container'
                             }
                        });
                        listar();
                        limparCampos()
                    } else {
                        // Exibe mensagem de erro se a requisição falhar
                        swalWithBootstrapButtons.fire({
                            title: "Opss!",
                            text: mensagem,
                            icon: "error",
                            confirmButtonText: 'OK',
                            customClass: {
                             container: 'swal-whatsapp-container'
                             }
                        });
                    }
                }
            });
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            swalWithBootstrapButtons.fire({
                title: "Cancelado",
                text: "Fecharei em 1 segundo.",
                icon: "error",
                timer: 1000,
                timerProgressBar: true,
            });
        }
    });
}

</script>