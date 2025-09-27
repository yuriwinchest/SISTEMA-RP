<?php 
$pag = 'pagar';
require_once("verificar.php");
?>



<div class="row margem_mobile">
 	<div class="left-content mt-2">



			<i style="display: inline-block;" title="Filtrar por Status" class="fa fa-search"></i>
			<select style="width:200px; margin-bottom: 10px; margin-top: 20px; display: inline-block;" class="form-select" aria-label="Default select example" name="status" id="status" onchange="busca()">
				<option value="">Pagas e Pendentes</option>
				<option value="Não">Pendentes</option>
				<option value="Sim">Pagas</option>
				
			</select>
		
		
		
		<small style="display: inline-block; position: absolute; right: 20px; margin-top: 10px"><i class="fa fa-usd text-danger"></i> <span class="text-dark">Total Vencidas: <span class="text-danger" id="total_itens"></span></span></small>


	</div>

	<input type="hidden" name="tipo_data" id="tipo_data">


		
</div>	


<div class="row row-sm">
<div class="col-lg-12">
<div class="card custom-card">
<div class="card-body" id="listar">

</div>
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

				<div class="row">
					<div class="col-md-6">
						<div class="tile">
							<div class="table-responsive">
								<table id="" class="text-left table table-bordered">
									<tr>
										<td class="bg-primary text-white">Cliente</td>
										<td><span id="cliente_dados"></span></td>
									</tr>
									<tr>
										<td class="bg-primary text-white">Vencimento</td>
										<td><span id="vencimento_dados"></span></td>
									</tr>
									<tr>
										<td class="bg-primary text-white w_150">Pagamento</td>
										<td><span id="data_pgto_dados"></span></td>
									</tr>
									<tr>
										<td class="bg-primary text-white w_150">Frequência</td>
										<td><span id="frequencia_dados"></span></td>
									</tr>
									<tr>
										<td class="bg-primary text-white w_150">Multa</td>
										<td>R$ <span id="multa_dados"></span></td>
									</tr>
									<tr>
										<td class="bg-primary text-white w_150">Júros</td>
										<td>R$ <span id="juros_dados"></span></td>
									</tr>
									<tr>
										<td class="bg-primary text-white w_150">Desconto</td>
										<td>R$ <span id="desconto_dados"></span></td>
									</tr>
									<tr>
										<td class="bg-primary text-white w_150">Taxa</td>
										<td>R$ <span id="taxa_dados"></span></td>
									</tr>
									<tr>
										<td class="bg-primary text-white w_150">Subtotal</td>
										<td>R$ <span id="total_dados"></span></td>
									</tr>
									<tr>
										<td class="bg-primary text-white w_150">Qtd Recorrência</td>
										<td><span id="quant_recorrencia_dados"></span></td>
									</tr>
									<tr>
										<td class="bg-primary text-white w_150">Pago</td>
										<td><span id="pago_dados"></span></td>
									</tr>
									<tr>
										<td class="bg-primary text-white w_150">Forma PGTO</td>
										<td><span id="nome_pgto_dados"></span></td>
									</tr>
									<tr>
										<td class="bg-primary text-white w_150">Lançado Por</td>
										<td><span id="usu_lanc_dados"></span></td>
									</tr>
									<tr>
										<td class="bg-primary text-white w_150">Baixa Usuário</td>
										<td><span id="usu_pgto_dados"></span></td>
									</tr>
									<tr>
										<td class="bg-primary text-white w_150">OBS</td>
										<td><span id="obs_dados"></span></td>
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
										<td align="center"><img src="" id="target_dados" width="200px"></td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>





<!-- Modal Arquivos -->
<div class="modal fade" id="modalArquivos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header bg-primary text-white">
				<h4 class="modal-title" id="tituloModal">Gestão de Arquivos - <span id="nome-arquivo"> </span></h4>
				<button id="btn-fechar-arquivos" aria-label="Close" class="btn-close" data-bs-dismiss="modal"
					type="button"><span class="text-white" aria-hidden="true">&times;</span></button>
			</div>
			<form id="form-arquivos" method="post">
				<div class="modal-body">

					<div class="row">
						<div class="col-md-8">
							<div class="form-group">
								<label>Arquivo</label>
								<input class="form-control" type="file" name="arquivo_conta" onChange="carregarImgArquivos();"
									id="arquivo_conta">
							</div>
						</div>
						<div class="col-md-4">
							<div id="divImgArquivos">
								<img src="images/arquivos/sem-foto.png" width="60px" id="target-arquivos">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-8">
							<input type="text" class="form-control" name="nome-arq" id="nome-arq" placeholder="Nome do Arquivo * "
								required>
						</div>

						<div class="col-md-4">
							<button type="submit" class="btn btn-primary" id="btn_inserir">Inserir<i
									class="fa fa-check ms-2"></i></button>
							<button class="btn btn-primary" type="button" id="btn_carregando_inserir" style="display: none">
								<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Carregando...
							</button>
						</div>
					</div>
					<hr>
					<small>
						<div id="listar-arquivos"></div>
					</small>
					<br>
					<small>
						<div align="center" id="mensagem-arquivo"></div>
					</small>
					<input type="hidden" class="form-control" name="id-arquivo" id="id-arquivo">
				</div>
			</form>
		</div>
	</div>
</div>












</div>

		<script type="text/javascript">var pag = "<?=$pag?>"</script>
		<script src="js/ajax.js"></script>





		<script type="text/javascript">
			function carregarImgArquivos() {
				var target = document.getElementById('target-arquivos');
				var file = document.querySelector("#arquivo_conta").files[0];

				var arquivo = file['name'];
				resultado = arquivo.split(".", 2);

				if(resultado[1] === 'pdf'){
					$('#target-arquivos').attr('src', "../painel/images/pdf.png");
					return;
				}

				if(resultado[1] === 'rar' || resultado[1] === 'zip'){
					$('#target-arquivos').attr('src', "../painel/images/rar.png");
					return;
				}

				if(resultado[1] === 'doc' || resultado[1] === 'docx' || resultado[1] === 'txt'){
					$('#target-arquivos').attr('src', "../painel/images/word.png");
					return;
				}


				if(resultado[1] === 'xlsx' || resultado[1] === 'xlsm' || resultado[1] === 'xls'){
					$('#target-arquivos').attr('src', "../painel/images/excel.png");
					return;
				}


				if(resultado[1] === 'xml'){
					$('#target-arquivos').attr('src', "../painel/images/xml.png");
					return;
				}



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
			function listarArquivos(){
				var id = $('#id-arquivo').val();	
				$.ajax({
					url: 'paginas/' + pag + "/listar-arquivos.php",
					method: 'POST',
					data: {id},
					dataType: "text",

					success:function(result){
						$("#listar-arquivos").html(result);
					}
				});
			}

		</script>



<script type="text/javascript">
	function busca(){
		var status = $("#status").val();
		listar(status);
	}
</script>