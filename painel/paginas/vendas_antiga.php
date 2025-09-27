<?php 
$pag = 'vendas';

//verificar se ele tem a permissão de estar nessa página
if(@$vendas == 'ocultar'){
	echo "<script>window.location='index.php'</script>";
	exit();
}

//verificar se o caixa está aberto
$query = $pdo->query("SELECT * from caixas where operador = '$id_usuario' and data_fechamento is null and empresa = '$id_empresa'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = @count($res);
if($linhas > 0){
	$caixa_aberto_vendas = 'Sim';
}else{
	$caixa_aberto_vendas = 'Não';
	//echo '<script>alertWarning("Não possui caixa Aberto, abra o caixa!")</script>';
	//if($abertura_caixa == 'Sim' and $nivel_usuario != 'Administrador'){
		//echo '<script>window.location="caixas"</script>';  
	//}	
}

?>
<div style="width:78%; float:left;">
<div class="" style="padding:10px;  ">

	<div class="row" style="font-family: 'PT Sans', sans-serif; max-height: 350px; overflow: scroll; height:auto; scrollbar-width: thin;">
		<?php 
		$query = $pdo->query("SELECT * from categorias where ativo = 'Sim' and empresa = '$id_empresa' order by nome asc");
		$res = $query->fetchAll(PDO::FETCH_ASSOC);
		$linhas = @count($res);
		if($linhas > 0){
			for($i=0; $i<$linhas; $i++){
				$id = $res[$i]['id'];
				$nome = $res[$i]['nome'];	
				$foto = $res[$i]['foto'];	
				$ativo = $res[$i]['ativo'];

				$nomeF = mb_strimwidth($nome, 0, 20, "..."); 
				
		//totalizar produtos
				$query2 = $pdo->query("SELECT * from produtos where categoria = '$id' and ativo = 'Sim' and (estoque > 0 or tem_estoque = 'Não') and empresa = '$id_empresa' ");
				$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
				$produtos = @count($res2);

				if($produtos > 0){
					?>

					<!-- listar categoria-->				


					<div class="widget" style="width:24%">	
						<a href="#" onclick="listar('<?php echo $id ?>')">		
							<div class="r3_counter_box" style="min-height: 60px; padding:10px">
								<i class="pull-left fa" style="background-image:url('images/categorias/<?php echo $foto ?>'); background-size: cover; width:45px; height:45px"></i>
								<div class="stats">
									<h5 style="font-size:13px; margin-bottom:3px; margin-top:6px; color:#000"><strong><?php echo $nomeF ?>	</strong></h5>
									<span style="font-size:13px"><?php echo $produtos ?> Produtos</span>
								</div>	
							</div>
						</a>
					</div>

					
				<?php } } } else{ echo 'Cadastre uma Categoria!'; } ?>

				
			</div>
		</div>


		<!-- caixa de pesquisa -->
		<span id="area_cat" style="margin-right: 25px; font-family: 'PT Sans', sans-serif;" >
			<b><span style="color:#1f1f1f"><span class="ocultar_mobile">Produtos</span> Categoria:</span></b> <span id="nome_categoria"></span> 
		</span>
		<span>
			<i class="fa fa-search"></i>	
			<input style="width:170px; background: none; border:none; border-bottom: 1px solid #000; font-size:14px; font-family: 'PT Sans', sans-serif;" type="text" name="txt_buscar" id="txt_buscar" placeholder="Buscar Produtos" onkeyup="buscar()" class="foco_input" >
		</span>


		<br>

		<div style="margin-top: 5px; padding:5px;" id="listar" class="row">

		</div>


		</div>

		<div style="width:22%;  float:left; padding-top:10px; padding-left: 5px; background: #fef5ed ">
			<div class="row" style="padding-left:8px; padding-right: 4px">
						<div class="col-md-10" style="padding:2px;">						
								<div class="form-group"> 
	                                
										<div id="listar_clientes">
										
										</div>
								</div>		
						</div>

						<div class="col-md-2" style="">
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCliente" > <i class="fa fa-plus"></i> </button>	
						</div>
					</div>

			<div id="listar_vendas" style="margin-top: -10px">
									
			</div>

			<form id="form_venda">

			<div class="row" style="margin-top: 10px">
									<div class="col-md-7">						
										<div class="form-group"> 
											
											<select class="form-select" name="saida" id="saida" style="width:100%;" required> 
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

									<div class="col-md-5">						
										<div class="form-group">
											<input style="" type="text" class="form-control" id="valor_pago" name="valor_pago" placeholder="Valor" onkeyup="FormaPg()">												
										</div>						
									</div>
								</div>


								<div class="row" style="margin-top: -10px">									
										<div class="col-md-7 ">						
											<label>Desconto <a id="desc_reais" class="desconto_link_ativo" href="#" onclick="tipoDesc('reais')">R$</a> / <a id="desc_p" class="desconto_link_inativo" href="#" onclick="tipoDesc('%')">%</a></label>
											<input style="margin-top: -5px" type="number" class="form-control" id="desconto" name="desconto" placeholder="R$" onkeyup="listarVendas()">						
										</div>

										<div class="col-md-5 ">					
											<label>Troco Para</label>
											<input style="margin-top: -5px" type="number" class="form-control" id="troco" name="troco" placeholder="R$" onkeyup="listarVendas()">						
										</div>									
								</div>

									
									<div class="row" style="margin-top: -5px">
									<div class="col-md-7 ">						
										<label>Data Pagamento</label> 
										<input style="margin-top: -5px" type="date" class="form-control" id="data2" name="data2" value="<?php echo $data_atual ?>">
										
									</div>

									<div class="col-md-5 ">					
											<label>Garantia</label>
											<input style="margin-top: -5px" type="text" class="form-control" id="garantia_venda" name="garantia_venda" placeholder="30 Dias">						
									</div>

								</div>



								<div id="div_pgto2">
									<span><b>Total Restante: <span class="text-danger">R$ <span id="total_restante"></span></span></b></span>
								

									<div class="row" style="">
									<div class="col-md-6 " style="padding-right: 1px">						
										<label>Data Pagamento 2</label> 
										<input style=" font-size: 12px !important; " type="date" class="form-control" id="data_restante" name="data_restante" value="<?php echo $data_atual ?>">
										
									</div>

									<div class="col-md-6 " style="padding-left: 1px">					
											<label>Pgto Restante</label>
											<select class="form-select" name="forma_pgto2" id="forma_pgto2" style="width:100%; font-size: 12px !important;" > 
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

								</div>



								<div class="row">						

								<div class="col-md-12" style="margin-top: 10px" align="right">
									<button id="btn_limpar" onclick="limparVenda()" type="button" class="btn btn-secondary">Limpar Venda</button>							

									<button id="btn_venda" type="submit" class="btn btn-success">Fechar Venda</button>
									<img id="img_loading" src="../img/loading.gif" width="40px" style="display:none">
								</div>
							</div>

							<br>
							<small><div id="mensagem" align="center"></div></small>

							<input type="hidden" name="cliente" id="cliente_input">

							<input type="hidden" name="tipo_desconto" id="tipo_desconto" value="reais">

							<input type="hidden" name="subtotal_venda" id="subtotal_venda">

							<input type="hidden" name="valor_restante" id="valor_restante">

							</form>

			
		</div>





<!-- Modal Cliente -->
<div class="modal fade" id="modalCliente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header bg-primary text-white">
				<h4 class="modal-title" id="exampleModalLabel">Adicionar Cliente</h4>
				<button id="btn-fechar-cliente" aria-label="Close" class="btn-close" data-bs-toggle="modal" data-bs-target="#modalForm" type="button"><span class="text-white" aria-hidden="true">&times;</span></button>
			</div>
			<form id="form-cliente">
			<div class="modal-body">
				

					<div class="row">
						<div class="col-md-6 mb-2 needs-validation was-validated">
							<label>Nome <span class="text-danger" style="font-size: 9px">(Obrigatório)</span></label>
							<div class="form-group has-success mg-b-0">
								<input class="form-control" id="nome" name="nome" placeholder="Digite o Nome" required type="text"
									value="">
							</div>
						</div>
						<div class="col-md-3 mb-2 col-6">
							<label>Telefone</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
								</div>
								<input type="text" class="form-control" name="telefone" id="telefone"
									onkeyup="verificarTelefone('telefone', this.value);" placeholder="(00) 00000-0000">
							</div>
						</div>
						<div class="col-md-3 mb-2 col-6">
							<label>Data Nascimento</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa-regular fa-calendar"></i></span>
								</div>
								<input type="text" name="data_nasc" id="data_nasc" class="form-control"
									value="">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3 mb-2 ">
							<label>Pessoa</label>
							<select name="tipo_pessoa" id="tipo_pessoa" class="form-select" onchange="mudarPessoa()">
								<option value="Física">Física</option>
								<option value="Jurídica">Jurídica</option>
							</select>
						</div>
						<div class="col-md-3 mb-2 col-10">
							<label>CPF / CNPJ</label>
							<input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF">
						</div>
						<div class="col-md-1 col-2" style="margin-top: 28px; margin-left: -10px">
							<a title="Buscar CNPJ" class="btn btn-primary" href="#" onclick="buscarCNPJ()" class="btn btn-primary"> <i
									class="bi bi-search"></i> </a>
						</div>
						<div class="col-md-5 mb-2  needs-validation was-validated">
							<label>Email </label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa-regular fa-envelope"></i></span>
								</div>
								<input type="email" class="form-control" name="email" id="email"
									placeholder="exemplo@gmail.com">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 mb-2">
							<label>CEP</label>
							<input type="text" class="form-control" id="cep" name="cep" placeholder="Digite o CEP"
								onblur="pesquisacep(this.value);">
						</div>
						<div class="col-md-5 mb-2">
							<label>Rua</label>
							<input type="text" class="form-control" id="endereco" name="endereco" placeholder="Ex. Rua Central">
						</div>
						<div class="col-md-2 mb-2">
							<label>Número</label>
							<input type="text" class="form-control" id="numero" name="numero" placeholder="1500">
						</div>
						<div class="col-md-3 mb-2">
							<label>Complemento</label>
							<input type="text" class="form-control" id="complemento" name="complemento" placeholder="Bloco B AP 104">
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 mb-2">
							<label>Bairro</label>
							<input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro">
						</div>
						<div class="col-md-5 mb-2">
							<label>Cidade</label>
							<input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade">
						</div>
						<div class="col-md-3 mb-2">
							<label>Estado</label>
							<select class="form-select" id="estado" name="estado">
								<option value="">Selecionar</option>
								<option value="AC">Acre</option>
								<option value="AL">Alagoas</option>
								<option value="AP">Amapá</option>
								<option value="AM">Amazonas</option>
								<option value="BA">Bahia</option>
								<option value="CE">Ceará</option>
								<option value="DF">Distrito Federal</option>
								<option value="ES">Espírito Santo</option>
								<option value="GO">Goiás</option>
								<option value="MA">Maranhão</option>
								<option value="MT">Mato Grosso</option>
								<option value="MS">Mato Grosso do Sul</option>
								<option value="MG">Minas Gerais</option>
								<option value="PA">Pará</option>
								<option value="PB">Paraíba</option>
								<option value="PR">Paraná</option>
								<option value="PE">Pernambuco</option>
								<option value="PI">Piauí</option>
								<option value="RJ">Rio de Janeiro</option>
								<option value="RN">Rio Grande do Norte</option>
								<option value="RS">Rio Grande do Sul</option>
								<option value="RO">Rondônia</option>
								<option value="RR">Roraima</option>
								<option value="SC">Santa Catarina</option>
								<option value="SP">São Paulo</option>
								<option value="SE">Sergipe</option>
								<option value="TO">Tocantins</option>
								<option value="EX">Estrangeiro</option>
							</select>
						</div>
					</div>


					<input type="hidden" class="form-control" id="id" name="id">					

				<br>
				<small><div id="mensagem_cliente" align="center"></div></small>
			</div>
			<div class="modal-footer">       
				<button type="submit" id="btn_salvar_cliente" class="btn btn-primary">Salvar</button>
			</div>
			</form>
		</div>
	</div>
</div>




		<script type="text/javascript">var pag = "<?=$pag?>"</script>
		<script src="js/ajax.js"></script>

		<script type="text/javascript">
			$(document).ready(function() {

				var caixa_aberto_vendas = "<?=$caixa_aberto_vendas?>";
				var abertura_caixa = "<?=$abertura_caixa?>";
				var nivel_usuario = "<?=$nivel_usuario?>";

				if(caixa_aberto_vendas == "Não"){
					alertWarning("Não possui caixa Aberto, abra o caixa!");
				}

				if(abertura_caixa == 'Sim' && nivel_usuario != 'Administrador'){
					setTimeout(function() {
					  window.location="caixas"; 
					}, 2000)
					
				}	


				$('#div_pgto2').hide();
			listarVendas()		

				$('.sel2').select2({
					dropdownParent: $('#modalForm')
				});

				$(document).on('select2:open', () => {
					document.querySelector('.select2-search__field').focus();
				});
				listarClientes();
			});
		</script>

		<script type="text/javascript">	

			$("#form_venda").submit(function () {

				$("#btn_venda").hide();
				$("#btn_limpar").hide();
				$("#img_loading").show();


				event.preventDefault();

				var data = $("#data2").val();
				var cliente = $("#cliente").val();
				var data_atual = "<?=$data_atual?>";

				if(data > data_atual && cliente == ""){
					alert('Você precisa selecionar um cliente para essa venda!');
					$("#img_loading").hide();
					$("#btn_venda").show();
					return;
				}

				
				var formData = new FormData(this);

				$.ajax({
					url: 'paginas/' + pag + "/salvar.php",
					type: 'POST',
					data: formData,

					success: function (mensagem) {  

						var msg = mensagem.split("-");        	
						
						$('#mensagem').text('');
						$('#mensagem').removeClass()
						if (msg[0].trim() == "Salvo com Sucesso") {
							$("#img_loading").hide();
							
							$('#desconto').val('');
							$('#troco').val('');
							
							$('#cliente').val('').change();
							$('#cliente_input').val('');
							$('#data').val('<?=$data_atual?>');
							listar(); 
							listarVendas(); 
                //verificar abertura comprovante
							var imp_auto = "<?=$impressao_automatica?>";
							if(imp_auto == 'Sim'){
								window.open('rel/comprovante.php?id='+msg[1])
							}else{
								alert('Venda Efetuada!');
								$('#div_pgto2').hide();
							}
						} else {
							alert(msg[0]);               
							$("#btn_venda").show();
							$("#img_loading").hide();
							$("#btn_limpar").show();
						}

						$("#btn_venda").show();
						$("#btn_limpar").show();

					},

					cache: false,
					contentType: false,
					processData: false,

				});

			});

			function buscar(){
				var busca = $('#txt_buscar').val();
				listar('', busca)
			}

			function addVenda(id_produto, codigo){
				var quantidade = 1;

				if(quantidade <= 0){
					alert('A quantidade deve ser maior que zero')
					return;
				}
				
				$.ajax({
					url: 'paginas/' + pag + "/inserir_item.php",
					method: 'POST',
					data: {quantidade, id_produto},
					dataType: "html",

					success:function(mensagem){
						if (mensagem.trim() == "Inserido com Sucesso") {  
							listarVendas();

						}else{
							alert(mensagem)
						}
					}
				});


				
			}

			function listarVendas(){
				var desconto = $("#desconto").val();	
				var troco = $("#troco").val();
				var tipo_desconto = $("#tipo_desconto").val();	
				$.ajax({
					url: 'paginas/' + pag + "/listar_vendas.php",
					method: 'POST',
					data: {desconto, troco, tipo_desconto},
					dataType: "html",

					success:function(result){
						$("#listar_vendas").html(result);            
					}
				});

				FormaPg()
			}

			function limparVenda(){
				$("#cliente").val('').change();
				$("#quantidade").val('1');
				$("#desconto").val('');
				$("#troco").val('');
				$("#data").val('<?=$data_atual?>');
				$("#cliente_input").val('');
				$('#div_pgto2').hide();
				listarVendas()

				$("#btn_limpar").hide();		
				$.ajax({
					url: 'paginas/' + pag + "/limpar_venda.php",
					method: 'POST',
					data: {},
					dataType: "html",

					success:function(result){        	
						listarVendas();      
					}
				});
				
			}
		</script>

		<script type="text/javascript">
	$("#form-cliente").submit(function () { 

    $('#mensagem_cliente').text('Salvando!!');
    $('#btn_salvar_cliente').hide();

    event.preventDefault();
    var formData = new FormData(this);
    var nova_pag = 'clientes';

    $.ajax({
        url: 'paginas/' + nova_pag + "/salvar.php",
        type: 'POST',
        data: formData,

        success: function (mensagem) {
            $('#mensagem_cliente').text('');
            $('#mensagem_cliente').removeClass()
            if (mensagem.trim() == "Salvo com Sucesso") {

                $('#btn-fechar-cliente').click();
                listar();
                listarClientes('1'); 


            } else {

                $('#mensagem_cliente').addClass('text-danger')
                $('#mensagem_cliente').text(mensagem)
            }

             $('#btn_salvar_cliente').show();

        },

        cache: false,
        contentType: false,
        processData: false,

    });

});


	function listarClientes(valor){
	$.ajax({
        url: 'paginas/' + pag + "/listar_clientes.php",
        method: 'POST',
        data: {valor},
        dataType: "html",

        success:function(result){
            $("#listar_clientes").html(result);           
        }
    });
}


function tipoDesc(p){
	$('#desc_reais').removeClass()
	$('#desc_p').removeClass()

	if(p == '%'){
		$('#desconto').attr('placeholder', '%');
		$('#desc_reais').addClass('desconto_link_inativo')
		$('#desc_p').addClass('desconto_link_ativo')
	}else{
		$('#desconto').attr('placeholder', 'R$');
		$('#desc_reais').addClass('desconto_link_ativo')
		$('#desc_p').addClass('desconto_link_inativo')
	}

	 $("#tipo_desconto").val(p);
	 listarVendas();  
}



function FormaPg(){
	var valor_pago = $('#valor_pago').val();
	var subtotal_venda = $('#subtotal_venda').val();

	if(parseFloat(valor_pago) < parseFloat(subtotal_venda)){
		$('#div_pgto2').show();
	}else{
		$('#div_pgto2').hide();
	}

	if(valor_pago == ""){
		valor_pago = 0;
	}

	if(subtotal_venda == ""){
		subtotal_venda = 0;
	}

	var total_restante = parseFloat(subtotal_venda) - parseFloat(valor_pago);
	$('#total_restante').text(total_restante.toFixed(2));
	$('#valor_restante').val(total_restante);
}




		</script>