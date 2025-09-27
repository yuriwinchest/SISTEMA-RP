<?php 
$pag = 'compras';

//verificar se ele tem a permissão de estar nessa página
if(@$compras == 'ocultar'){
    echo "<script>window.location='index.php'</script>";
    exit();
}
?>

<div class="justify-content-between">
	<form action="rel/pagar_class.php" target="_blank" method="POST">
 	<div class="left-content mt-2">

 <a style="margin-bottom: 20px; margin-top: 20px" class="btn ripple btn-primary text-white" onclick="inserir()" type="button"><i class="fa fa-file-circle-plus me-2"></i>Adicionar <?php echo ucfirst($pag); ?></a>

 <small class="ocultar_mobile" style="display: inline-block; position: absolute; right: 20px; margin-top: 30px"><i class="fa fa-file-circle-plus me-2"></i> <span class="text-dark">Pendentes: <span class="text-danger" id="total_itens"></span></span></small>



 <span id="div_botoes" style="display:none">

	<div class="dropdown" style="display: inline-block;">                      
         <a href="#" aria-expanded="false" aria-haspopup="true" data-bs-toggle="dropdown" class="btn btn-danger dropdown" id="btn-deletar" style=""><i class="fe fe-trash-2"></i> Deletar</a>
             <div  class="dropdown-menu tx-13">
                        <div style="width: 240px; padding:15px 5px 0 10px;" class="dropdown-item-text">
                        <p>Excluir Selecionados? <a href="#" onclick="deletarSel()"><span class="text-danger"><button class="btn-danger">Sim</button></span></a></p>
                        </div>
             </div>
    </div>



 	<div class="dropdown head-dpdn2" style="display: inline-block;">                      
                        <a  href="#" aria-expanded="false" aria-haspopup="true" data-bs-toggle="dropdown" class="btn btn-success dropdown" id="btn-baixar" style=""><i class="fa fa-check-square"></i> Baixar</a>
         <div  class="dropdown-menu tx-13">
                        <div style="width: 240px; padding:15px 5px 0 10px;" class="dropdown-item-text">
                       <p>Baixar contas Selecionadas? <a href="#" onclick="baixarSel()"><span class="text-verde">Sim</span></a></p>
							
                        </div>
         </div>
     </div>
</span>



	  <div style="display: inline-block; margin-bottom: 10px; margin: 10px 10px;">
			<input type="date" name="data-inicial"  class="form-control2" id="data-inicial" style="height:35px; width:49%; font-size: 13px;" value="<?php echo date('Y-m-d') ?>" required>

			<input type="date" name="data-final" class="form-control2" id="data-final" style="height:35px; width:49%; font-size: 13px;" value="<?php echo date('Y-m-d') ?>" required>	
		</div>	





		<div style="display: inline-block;">
			<select class="form-select" aria-label="Default select example" name="status-busca" id="status-busca">
				<option value="">Todas</option>
				<option value="Não">Pendentes</option>
				<option value="Sim">Pagas</option>
				
			</select>
		</div>

			<div style="display: inline-block;">
				<span class="ocultar_mobile" style="font-size: 14px; border:1px solid #6092a8; padding:5px; ">
				<a title="Contas à Pagar Vencidas" class="text-muted" href="#" onclick="listarContasVencidas('Vencidas')"><span>Vencidas</span></a> / 
				<a title="Contas à Pagar Hoje" class="text-muted" href="#" onclick="listarContasVencidas('Hoje')"><span>Hoje</span></a> / 
				<a title="Contas à Pagar Amanhã" class="text-muted" href="#" onclick="listarContasVencidas('Amanha')"><span>Amanhã</span></a>
			</span>
			</div>

	
	

		




	</div>

	<input type="hidden" name="tipo_data" id="tipo_data">

	</form>
		
</div>	


<div class="row row-sm">
<div class="col-lg-12">
<div class="card custom-card">
<div class="card-body" id="listar" style="font-weight: normal">

</div>
</div>
</div>
</div>




<div class="bs-example widget-shadow" style="padding:15px" id="listar">
	
</div>



<input type="hidden" id="ids">


<!-- Modal Principal-->
<div class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header bg-primary text-white">
				<h4 class="modal-title" id="exampleModalLabel"><span id="titulo_inserir"></span></h4>
				<button id="btn-fechar" aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span class="text-white" aria-hidden="true">&times;</span></button>
			</div>
			<form method="post" id="form-contas">
				<div class="modal-body">

					<div class="row">
						<div class="col-md-7">						
							<div class="form-group"> 
								<label>Produto</label> 
								<select class="form-select sel3" name="produto" id="produto" style="width:100%">
									<option value="">Selecione um Produto</option>
								  <?php 
								  	$query = $pdo->query("SELECT * from produtos where empresa = '$id_empresa' order by nome asc");
									$res = $query->fetchAll(PDO::FETCH_ASSOC);									
									$linhas = @count($res);							
									if($linhas > 0){										
									for($i=0; $i<$linhas; $i++){
										$categoria = $res[$i]['categoria'];

										$query2 = $pdo->query("SELECT * FROM categorias where id = '$categoria' and empresa = '$id_empresa'");
										$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
										$total_reg2 = @count($res2);
										if($total_reg2 > 0){											
											$nome_categoria = $res2[0]['nome'];											
										}

								   ?>

								<option value="<?php echo $res[$i]['id'] ?>"><?php echo $res[$i]['nome'] ?> / <?php echo $nome_categoria ?></option>
								<?php } }else{ ?>
									<option value="">Cadastre um Produto</option>
								<?php } ?>
								</select>		
							</div>						
						</div>



						<div class="col-md-5 col-8">						
							<div class="form-group"> 
								<label>Fornecedor</label> 
								<select class="form-select sel3" name="fornecedor" id="fornecedor" style="width:100%">
									<option value="">Selecione um Fornecedor</option>
								  <?php 
								  	$query = $pdo->query("SELECT * from fornecedores where empresa = '$id_empresa' order by nome asc");
									$res = $query->fetchAll(PDO::FETCH_ASSOC);
									$linhas = @count($res);
									if($linhas > 0){
									for($i=0; $i<$linhas; $i++){
								   ?>

								   

								   <option value="<?php echo $res[$i]['id'] ?>"><?php echo $res[$i]['nome'] ?></option>

								<?php } }else{ ?>
									<option value="">Cadastre um Fornecedor</option>
								<?php } ?>
								</select>		
							</div>						
						</div>

						


					</div>

					<div class="row">

						<div class="col-md-3 col-4">						
							<div class="form-group"> 
								<label>Quantidade</label> 
								<input type="number" class="form-control" name="quantidade" id="quantidade" value="" placeholder="1" required> 
							</div>						
						</div>
						<div class="col-md-3 col-6">						
							<div class="form-group"> 
								<label>Total da Compra</label> 
								<input type="text" class="form-control" name="valor" id="valor" placeholder="Valor" required> 
							</div>						
						</div>

						<div class="col-md-3 col-6">						
							<div class="form-group"> 
								<label>Vencimento</label> 
								<input type="date" class="form-control" name="vencimento" id="vencimento" value="<?php echo date('Y-m-d') ?>"  required> 
							</div>						
						</div>

						<div class="col-md-3 col-6">						
							<div class="form-group"> 
								<label>Pago Em</label> 
								<input type="date" class="form-control" name="data_pgto" id="data_pgto" > 
							</div>						
						</div>

						
					</div>								

					<div class="row">

						<div class="col-md-4 col">						
							<div class="form-group"> 
								<label>Forma de Pagamento</label> 
								<select class="form-select sel3" name="saida" id="saida" style="width:100%;">
								<option value="">Forma de Pgto</option> 
									<?php 
									$query = $pdo->query("SELECT * FROM formas_pgto where empresa = '$id_empresa' order by id asc");
									$res = $query->fetchAll(PDO::FETCH_ASSOC);
									for($i=0; $i < @count($res); $i++){
										foreach ($res[$i] as $key => $value){}

											?>	
										<option value="<?php echo $res[$i]['id'] ?>"><?php echo $res[$i]['nome'] ?></option>

									<?php } ?>

								</select>
							</div>						
						</div>

						<div class="col-md-8 mb-3">
							<label>Observações</label>
							<input maxlength="255" type="text" class="form-control" id="obs" name="obs" placeholder="Observações" >			
						</div>			

					</div>

					<div class="row">	
						<div class="col-md-8">						
							<div class="form-group"> 
								<label>Imagem / Arquivo</label> 
								<input class="form-control" type="file" name="arquivo" onChange="carregarImg();" id="arquivo">
							</div>						
						</div>
						<div class="col-md-4">
							<div id="divImg">
								<img src="images/contas/sem-foto.png"  width="100px" id="target">									
							</div>
						</div>
					</div>			
					

					<br>
					<input type="hidden" name="id" id="id"> 
					<small><div id="mensagem" align="center" class="mt-3"></div></small>					

				</div>


				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Salvar<i class="fa-solid fa-check ms-2"></i></button>
				</div>



			</form>

		</div>
	</div>
</div>






<!-- Modal Mostrar -->
<div class="modal fade" id="modalMostrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header bg-primary text-white">
				<h4 class="modal-title" id="tituloModal"><span id="nome_mostrar"> </span></h4>
				  <button id="btn-fechar-dados" aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span class="text-white" aria-hidden="true">&times;</span></button>
			</div>
			
			<div class="modal-body">			


				<div class="row">

						<div class="col-md-6">
							<div class="tile">
								<div class="table-responsive">
									<table id="" class="text-left table table-bordered">

										<tr>
											<td class="bg-primary text-white">Valor</td>
											<td><span id="valor_mostrar"></span></td>
										</tr>

										<tr>
											<td class="bg-primary text-white w_150">Chave Pix</td>
											<td><span id="pix_mostrar"></span></td>
										</tr>

										<tr>
											<td class="bg-primary text-white w_150">Data Lançamento</td>
											<td><span id="lanc_mostrar"></span></td>
										</tr>

										<tr>
											<td class="bg-primary text-white w_150">Data Vencimento</td>
											<td><span id="venc_mostrar"></span></td>
										</tr>

										<tr>
											<td class="bg-primary text-white w_150">Data PGTO</td>
											<td><span id="pgto_mostrar"></span></td>
										</tr>

										<tr>
											<td class="bg-primary text-white w_150">Usuário Cadastro</td>
											<td><span id="usu_lanc_mostrar"></span></td>
										</tr>

										<tr>
											<td class="bg-primary text-white w_150">Usuário Baixa</td>
											<td><span id="usu_pgto_mostrar"></span></td>
										</tr>


										<tr>
											<td class="bg-primary text-white w_150">Pago</td>
											<td><span id="pago_mostrar"></span></td>
										</tr>

										<tr>
											<td class="bg-primary text-white w_150">OBS</td>
											<td><span id="obs_mostrar"></span></td>
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
											<td align="center"><img src="" id="target_mostrar" width="200px"></td>
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
					 <button id="btn-fechar-arquivos" aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span class="text-white" aria-hidden="true">&times;</span></button>
				</div>
				<form id="form-arquivos" method="post">
					<div class="modal-body">

						<div class="row">
							<div class="col-md-8">						
								<div class="form-group"> 
									<label>Arquivo</label> 
									<input class="form-control" type="file" name="arquivo_conta" onChange="carregarImgArquivos();" id="arquivo_conta">
								</div>	
							</div>
							<div class="col-md-4">	
								<div id="divImgArquivos">
									<img src="images/arquivos/sem-foto.png"  width="60px" id="target-arquivos">									
								</div>					
							</div>




						</div>

						<div class="row">
							<div class="col-md-8">
								<input type="text" class="form-control" name="nome-arq"  id="nome-arq" placeholder="Nome do Arquivo * " required>
							</div>

							<div class="col-md-4">										 
								<button type="submit" class="btn btn-primary">Inserir<i class="fa-solid fa-check ms-2"></i></button>
							</div>
						</div>

						<hr>

						<small><div id="listar-arquivos"></div></small>

						<br>
						<small><div align="center" id="mensagem-arquivo"></div></small>

						<input type="hidden" class="form-control" name="id-arquivo"  id="id-arquivo">


					</div>
				</form>
			</div>
		</div>


</div>


<script type="text/javascript">var pag = "<?=$pag?>"</script>
<script src="js/ajax.js"></script>



		<script type="text/javascript">
			$(document).ready(function() {
				

				$(document).on('select2:open', () => {
				    document.querySelector('.select2-search__field').focus();
				  });	



				$('#data-inicial').change(function(){					
					var dataInicial = $('#data-inicial').val();
					var dataFinal = $('#data-final').val();
					var status = $('#status-busca').val();
					var alterou_data = 'Sim';
					listarBusca(dataInicial, dataFinal, status, alterou_data);

				});

				$('#data-final').change(function(){
					var dataInicial = $('#data-inicial').val();
					var dataFinal = $('#data-final').val();
					var status = $('#status-busca').val();
					var alterou_data = 'Sim';
					listarBusca(dataInicial, dataFinal, status, alterou_data);
				});

				$('#status-busca').change(function(){
					var dataInicial = $('#data-inicial').val();
					var dataFinal = $('#data-final').val();
					var status = $('#status-busca').val();
					listarBusca(dataInicial, dataFinal, status);
				});


			});
		</script>


		<script type="text/javascript">
			$(document).ready(function() {
				$('.sel3').select2({
					dropdownParent: $('#modalParcelar')
				});
			});
		</script>

		<script type="text/javascript">
			$(document).ready(function() {
				$('.sel4').select2({
					dropdownParent: $('#modalBaixar')
				});
			});
		</script>



<script type="text/javascript">

			function listarBusca(dataInicial, dataFinal, status, alterou_data){				
				$.ajax({
					url: 'paginas/' + pag + "/listar.php",
					method: 'POST',
					data: {dataInicial, dataFinal, status, alterou_data},
					dataType: "html",

					success:function(result){
						$("#listar").html(result);
					}
				});
			}



			function listarContasVencidas(vencidas){

				$.ajax({
					url: 'paginas/' + pag + "/listar.php",
					method: 'POST',
					data: {vencidas},
					dataType: "html",

					success:function(result){
						$("#listar").html(result);
					}
				});
			}


			function listarContasHoje(hoje){
				$.ajax({
					url: 'paginas/' + pag + "/listar.php",
					method: 'POST',
					data: {hoje},
					dataType: "html",

					success:function(result){
						$("#listar").html(result);
					}
				});
			}


			function listarContasAmanha(amanha){
				$.ajax({
					url: 'paginas/' + pag + "/listar.php",
					method: 'POST',
					data: {amanha},
					dataType: "html",

					success:function(result){
						$("#listar").html(result);
					}
				});
			}

		</script>


<script type="text/javascript">
			function carregarImg() {
				var target = document.getElementById('target');
				var file = document.querySelector("#arquivo").files[0];

				var arquivo = file['name'];
				resultado = arquivo.split(".", 2);


				if(resultado[1] === 'pdf'){
					$('#target').attr('src', "images/pdf.png");
					return;
				}

				if(resultado[1] === 'rar' || resultado[1] === 'zip'){
					$('#target').attr('src', "images/rar.png");
					return;
				}

				if(resultado[1] === 'doc' || resultado[1] === 'docx'){
					$('#target').attr('src', "images/word.png");
					return;
				}

				if(resultado[1] === 'xlsx' || resultado[1] === 'xlsm' || resultado[1] === 'xls'){
					$('#target').attr('src', "images/excel.png");
					return;
				}


				if(resultado[1] === 'xml'){
					$('#target').attr('src', "images/xml.png");
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
			function carregarImgArquivos() {
				var target = document.getElementById('target-arquivos');
				var file = document.querySelector("#arquivo_conta").files[0];

				var arquivo = file['name'];
				resultado = arquivo.split(".", 2);


				if(resultado[1] === 'pdf'){
					$('#target-arquivos').attr('src', "images/pdf.png");
					return;
				}

				if(resultado[1] === 'rar' || resultado[1] === 'zip'){
					$('#target-arquivos').attr('src', "images/rar.png");
					return;
				}

				if(resultado[1] === 'doc' || resultado[1] === 'docx'){
					$('#target-arquivos').attr('src', "images/word.png");
					return;
				}

				if(resultado[1] === 'xlsx' || resultado[1] === 'xlsm' || resultado[1] === 'xls'){
					$('#target-arquivos').attr('src', "images/excel.png");
					return;
				}


				if(resultado[1] === 'xml'){
					$('#target-arquivos').attr('src', "images/xml.png");
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
	
$("#form-contas").submit(function () {
	event.preventDefault();
	var formData = new FormData(this);

	$.ajax({
		url: 'paginas/' + pag + "/inserir.php",
		type: 'POST',
		data: formData,

		success: function (mensagem) {
			
            $('#mensagem').text('');
            $('#mensagem').removeClass()
            if (mensagem.trim() == "Salvo com Sucesso") {                    
                    $('#btn-fechar').click();
                   var dataInicial = $('#data-inicial').val();
				var dataFinal = $('#data-final').val();
				var status = $('#status-busca').val();
				var alterou_data = 'Sim';
				listarBusca(dataInicial, dataFinal, status, alterou_data);
                } else {
                	$('#mensagem').addClass('text-danger')
                    $('#mensagem').text(mensagem)
                }

            },

            cache: false,
            contentType: false,
            processData: false,
            
        });

});

</script>


<script type="text/javascript">
	

function excluir_conta(id){	
    $('#mensagem-excluir').text('Excluindo...')
    
    $.ajax({
        url: 'paginas/' + pag + "/excluir.php",
        method: 'POST',
        data: {id},
        dataType: "html",

        success:function(mensagem){
        	
            if (mensagem.trim() == "Excluído com Sucesso") {    

                var dataInicial = $('#data-inicial').val();
				var dataFinal = $('#data-final').val();
				var status = $('#status-busca').val();
				var alterou_data = 'Sim';
				listarBusca(dataInicial, dataFinal, status, alterou_data);
            } else {
                $('#mensagem-excluir').addClass('text-danger')
                $('#mensagem-excluir').text(mensagem)
            }
        }
    });
}




function baixar_conta(id){	
    $('#mensagem-excluir').text('Baixando...')
    
    $.ajax({
        url: 'paginas/' + pag + "/baixar.php",
        method: 'POST',
        data: {id},
        dataType: "html",

        success:function(mensagem){
        	
            if (mensagem.trim() == "Baixado com Sucesso") {    
            	listar();
                
            } else {
                $('#mensagem-excluir').addClass('text-danger')
                $('#mensagem-excluir').text(mensagem)
            }
        }
    });
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

