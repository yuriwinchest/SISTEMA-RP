<?php 
$pag = 'orcamentos';

//verificar se ele tem a permissão de estar nessa página
if(@$orcamentos == 'ocultar'){
    echo "<script>window.location='index.php'</script>";
    exit();
}
?>




<div class="row row-sm">
<div class="col-lg-12">
<div class="card custom-card">
<div class="card-body" id="listar">

</div>
</div>
</div>
</div>

</div>

<!-- Modal -->
<div class="modal fade" id="modalForm" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog custom_modal" role="document" style="width:90%; overflow: scroll; height:auto; max-height: 90%; scrollbar-width: thin;">
		<div class="modal-content">
			<div class="modal-header bg-primary text-white">
				<h4 class="modal-title" id="exampleModalLabel"><span id="titulo_inserir"></span></h4>
				<button id="btn-fechar" aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span class="text-white" aria-hidden="true">&times;</span></button>
			</div>
			<form method="post" id="form_orcamento">
			<div class="modal-body">
				
					<div class="row" style="margin-top: 5px">					
						<div class="col-md-5 col-8">						
							<div class="form-group"> 
								<label>Cliente <i style="color: red">*</i></label> 
									<div id="listar_clientes">
									
									</div>
							</div>		
						</div>


					<div class="col-md-1 col-4" style="margin-top: 25px; margin-left: -15px">
						<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCliente" > <i class="fa fa-plus"></i> </button>	
					</div>


						<div class="col-md-3 mb-2">						
							<div class=""> 
								<label>Produtos / <small>R$ <span id="tot_produtos"></span></small></label> 
								<select class="sel2" name="produto" id="produto"  style="width:80%;"> 
									<option value="">Adicionar Produto</option>
									<?php 
									$query = $pdo->query("SELECT * FROM produtos where ativo = 'Sim' and empresa = '$id_empresa' order by id asc");
									$res = $query->fetchAll(PDO::FETCH_ASSOC);
									for($i=0; $i < @count($res); $i++){
										foreach ($res[$i] as $key => $value){}

											?>	
										<option value="<?php echo $res[$i]['id'] ?>"><?php echo $res[$i]['nome'] ?></option>

									<?php } ?>

								</select>

								<a class="btn btn-success" href="#" onclick="addProduto()" class="btn btn-primary"> <i class="fa fa-check"></i> </a>
							</div>						
						</div>

						


						<div class="col-md-3">						
							<div class=""> 
								<label>Serviços / <small>R$ <span id="tot_servicos"></span></small></label> 
								
								<select class="sel2" name="servico" id="servico"  style="width:80%;"> 
									<option value="">Adicionar Serviço</option>
									<?php 
									$query = $pdo->query("SELECT * FROM servicos where ativo = 'Sim' and empresa = '$id_empresa' order by id asc");
									$res = $query->fetchAll(PDO::FETCH_ASSOC);
									for($i=0; $i < @count($res); $i++){
										foreach ($res[$i] as $key => $value){}

											?>	
										<option value="<?php echo $res[$i]['id'] ?>"><?php echo $res[$i]['nome'] ?></option>

									<?php } ?>

								</select>

								<a class="btn btn-success" href="#" onclick="addServico()" class="btn btn-primary"> <i class="fa fa-check"></i> </a>
							</div>						
						</div>

					
					</div>

				

					
					<div id="div_listar" class="row" style="margin-top: 0px; margin-bottom: 10px; overflow: scroll; height:auto; max-height: 250px; scrollbar-width: thin;">
						<div class="col-md-12" id="listar_produtos">	
						</div>

						<div class="col-md-12" id="listar_servicos">	
						</div>
					</div>



					<div class="row">

						<div class="col-md-4 col-6"> 
								<label>Modelo</label> 
									<div id="listar_modelos">
										
									</div>
						</div>

						<div class="col-md-1 col-4" style="margin-top: 28px; margin-left: -10px">
						<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalModelo" > <i class="fa fa-plus"></i> </button>	
					</div>



						<div class="col-md-2 col-6">						
							<div class="form-group"> 
								<label>Validade do Orçamento</label> 
								<input class="form-control" type="text" name="dias_validade" id="dias_validade" placeholder="7 Dias" required>
							</div>						
						</div>



						<div class="col-md-2 col-6">						
							<div class="form-group"> 
								<label>Produtos e Serviços R$</label> 
								<input class="form-control" type="text" name="valor" id="valor" readonly>
							</div>						
						</div>

						<div class="col-md-2 col-6">						
							<div class="form-group"> 
								<label>Frete R$</label> 
								<input class="form-control" type="text" name="frete" id="frete" placeholder="Frete se Houver"  onkeyup="totalizar()">
							</div>						
						</div>

									

						

					</div>

					

					<div class="row" style="margin-top: 10px">

						<div class="col-md-2 col-6">		
							<div class="form-group"> 
								<div style="display: flex; align-items: center; gap: 6px;">
								 <i class="fa fa-pencil" style="color: #5775b5; cursor: pointer; font-size: 14px;" title="Editar"></i> 
								<input onblur="editarLabel()" type="text" id="mao_obra_orc" name="mao_obra_orc" value="<?= $mao_obra_orc ?>"
    style="background: transparent; border: none; padding: 0; margin-bottom: 5px; outline: none; border-bottom: 1px solid transparent; "
  >
  </div>
 
								<input class="form-control" type="number" name="mao_obra" id="mao_obra"  placeholder="" onkeyup="totalizar()" onchange="totalizar()">
							</div>	
						</div>	


						<div class="col-md-2 col-6">						
							<div class="form-group"> 
								<label>Tipo Desconto</label> 
								<select class="form-select"  name="tipo_desconto" id="tipo_desconto" onchange="totalizar()">
									<option value="%">% Porcentagem</option>
									<option value="Valor">R$ Valor</option>
								</select>
							</div>						
						</div>

						<div class="col-md-2 col-6">						
							<div class="form-group"> 
								<label>Desconto</label> 
								<input class="form-control" type="number" name="desconto" id="desconto" placeholder="Desconto"  onkeyup="totalizar()">
							</div>						
						</div>					
						

						<div class="col-md-2">						
							<div class="form-group"> 
								<label>SubTotal R$</label> 
								<input class="form-control" type="text" name="subtotal" id="subtotal" readonly required>
							</div>						
						</div>	

						<div class="col-md-2 col-6">						
							<div class="form-group"> 
								<div style="display: flex; align-items: center; gap: 6px;">
								 <i class="fa fa-pencil" style="color: #5775b5; cursor: pointer; font-size: 14px;" title="Editar"></i> 
								<input onblur="editarLabel()" type="text" id="senha_aparelho_orc" name="senha_aparelho_orc" value="<?= $senha_aparelho_orc ?>"
    style="background: transparent; border: none; padding: 0; margin-bottom: 5px; outline: none; border-bottom: 1px solid transparent; "
  >
  </div>
 
								<input class="form-control" type="text" name="senha_ap" id="senha_ap" placeholder="" >
							</div>						
						</div>	

						<div class="col-md-2 col-6">						
							<div class="form-group"> 
								<label>Previsão Orçamento</label> 
								<input class="form-control" type="date" name="data_entrega" id="data_entrega" required>
							</div>						
						</div>					

					</div>	

			

					<div class="row">
											
						<div class="col-md-12">						
							<div class="form-group"> 
								<div style="display: flex; align-items: center; gap: 6px;">
								 <i class="fa fa-pencil" style="color: #5775b5; cursor: pointer; font-size: 14px;" title="Editar"></i> 
								<input onblur="editarLabel()" type="text" id="defeito_orc" name="defeito_orc" value="<?= $defeito_orc ?>"
    style="background: transparent; border: none; padding: 0; margin-bottom: 5px; outline: none; border-bottom: 1px solid transparent; "
  >
  </div>
 
								<input class="form-control" type="text" name="defeito" id="defeito" placeholder="">
							</div>						
						</div>

						

					</div>

					
					<div class="row">
						<div class="col-md-12">						
							<div class="form-group"> 
								<div style="display: flex; align-items: center; gap: 6px;">
								 <i class="fa fa-pencil" style="color: #5775b5; cursor: pointer; font-size: 14px;" title="Editar"></i> 
								<input onblur="editarLabel()" type="text" id="avarias_orc" name="avarias_orc" value="<?= $avarias_orc ?>"
    style="background: transparent; border: none; padding: 0; margin-bottom: 5px; outline: none; border-bottom: 1px solid transparent; "
  >
  </div>
								<input maxlength="1000" class="form-control" type="text" name="condicoes" id="condicoes" placeholder="">
							</div>						
						</div>			
					</div>

					<div class="row">
						<div class="col-md-12">						
							<div class="form-group"> 
								<div style="display: flex; align-items: center; gap: 6px;">
								 <i class="fa fa-pencil" style="color: #5775b5; cursor: pointer; font-size: 14px;" title="Editar"></i> 
								<input onblur="editarLabel()" type="text" id="acessorios_orc" name="acessorios_orc" value="<?= $acessorios_orc ?>"
    style="background: transparent; border: none; padding: 0; margin-bottom: 5px; outline: none; border-bottom: 1px solid transparent; "
  >
  </div>
								<input maxlength="1000" class="form-control" type="text" name="acessorios" id="acessorios" placeholder="">
							</div>								
						</div>													
					</div>



					<div class="row">
						<div class="col-md-12">						
							<div class="form-group"> 
								<div style="display: flex; align-items: center; gap: 6px;">
								 <i class="fa fa-pencil" style="color: #5775b5; cursor: pointer; font-size: 14px;" title="Editar"></i> 
								<input onblur="editarLabel()" type="text" id="laudo_orc" name="laudo_orc" value="<?= $laudo_orc ?>"
    style="background: transparent; border: none; padding: 0; margin-bottom: 5px; outline: none; border-bottom: 1px solid transparent; "
  >
  </div>
								<input maxlength="1000" class="form-control" type="text" name="laudo" id="laudo" placeholder="">
							</div>						
						</div>								
					</div>


					<div class="row">

						<div class="col-md-8">						
							<div class="form-group"> 
								<label>OBS</label> 
								<input class="form-control" type="text" name="obs" id="obs" placeholder="Observações">
							</div>						
						</div>	


						<div class="col-md-2 col-6">						
							<div class="form-group"> 
								<label>Enviar Whatsapp</label> 
								<select class="form-select"  name="enviar_pdf" id="enviar_pdf">
									<option value="Sim">Sim</option>
									<option value="Não">Não</option>
								</select>
							</div>						
						</div>



						<div class="col-md-2" style="margin-top: 22px">						
							<button id="btn_salvar" type="submit" class="btn btn-primary">Salvar<i class="fa-solid fa-check ms-2"></i></button>					
						</div>		
					</div>	

					<input type="hidden" name="id" id="id"> 
					<small><div id="mensagem" align="center" class="mt-3"></div></small>					

				</div>


			</form>

		</div>
	</div>
</div>



<!-- Modal Modelo -->
<div class="modal fade" id="modalModelo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header bg-primary text-white">
				<h4 class="modal-title" id="exampleModalLabel">Adicionar Modelo</h4>
				<button id="btn-fechar-modelo" aria-label="Close" class="btn-close" data-bs-toggle="modal" data-bs-target="#modalForm" type="button"><span class="text-white" aria-hidden="true">&times;</span></button>
			</div>
			<form id="form-modelo">
			<div class="modal-body">
				

			<div class="row">
				<div class="col-md-4">						
								<label>Nome do Modelo</label>
					<input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o Modelo" required>
				</div>

				<div class="col-md-4 col-6"> 
					<label>Equipamento</label> 
					<select class="sel333" name="equipamento" id="equipamento" style="width:100%;" required> 
						<option value="">Selecione um Equipamento</option>
						<?php 
						$query = $pdo->query("SELECT * FROM equipamentos where ativo = 'Sim' and empresa = '$id_empresa' order by nome asc");
						$res = $query->fetchAll(PDO::FETCH_ASSOC);
						for($i=0; $i < @count($res); $i++){
							foreach ($res[$i] as $key => $value){}

								?>	
							<option value="<?php echo $res[$i]['nome'] ?>"><?php echo $res[$i]['nome'] ?></option>
						<?php } ?>

					</select>

				</div>


							
					<div class="col-md-4 col-6"> 

						<label>Marca</label> 
						<select class="sel333" name="marca" id="marca"  style="width:100%;" required> 
							<option value="">Selecione um Marca</option>
							<?php 
							$query = $pdo->query("SELECT * FROM marcas where ativo = 'Sim' and empresa = '$id_empresa' order by nome asc");
							$res = $query->fetchAll(PDO::FETCH_ASSOC);
							for($i=0; $i < @count($res); $i++){
								foreach ($res[$i] as $key => $value){}

									?>	
								<option value="<?php echo $res[$i]['nome'] ?>"><?php echo $res[$i]['nome'] ?></option>

							<?php } ?>

						</select>

					</div>

				
			</div>	


					<input type="hidden" class="form-control" id="id" name="id">					

				<br>
				<small><div id="mensagem_modelo" align="center"></div></small>
			</div>
			<div class="modal-footer">       
				<button type="submit" id="btn_salvar_modelo" class="btn btn-primary">Salvar<i class="fa-solid fa-check ms-2"></i></button>
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
				<h4 class="modal-title" id="exampleModalLabel"><span id="titulo_dados"><span>OS: </span><span id="id_dados"></span><span id="titulo_dados"></span></span></h4>
				<button id="btn-fechar-dados" aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span class="text-white" aria-hidden="true">&times;</span></button>
			</div>
			


				<div class="modal-body">

					<div class="row">

						<div class="col-md-6">
							<div class="tile">
								<div class="table-responsive">
									<table id="" class="text-left table table-bordered">

										<tr>
											<td width="40%" class="bg-primary text-white">Cliente</td>
											<td><span id="nome_cliente_dados"></span></td>
										</tr>

										<tr>
											<td width="40%" class="bg-primary text-white w_150">Data Entrega</td>
											<td><span id="data_entrega_dados"></span></td>
										</tr>

										<tr>
											<td width="40%" class="bg-primary text-white w_150">Dias Validade</td>
											<td><span id="dias_validade_dados"></span></td>
										</tr>									

										<tr>
											<td class="bg-primary text-white w_150">Equipamento</td>
											<td><span id="nome_equipamento_dados"></span></td>
										</tr>

										<tr>
											<td class="bg-primary text-white w_150">Marca</td>
											<td><span id="nome_marca_dados"></span></td>
										</tr>

										<tr>
											<td class="bg-primary text-white w_150">Modelo</td>
											<td><span id="nome_modelo_dados"></span></td>
										</tr>

																				<tr>
										<td width="35%" class="bg-primary text-white w_150"><?php echo $senha_aparelho_orc ?></td>
											<td><span id="senha_ap_dados"></span></td>
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
											<td width="35%" class="bg-primary text-white w_150">Prod e Serv</td>
											<td><span id="valor_dados"></span></td>
										</tr>
										

										<tr>
											<td width="35%" class="bg-primary text-white w_150">Frete</td>
											<td><span id="frete_dados"></span></td>
										</tr>

										<tr>
											<td width="35%" class="bg-primary text-white w_150"><?php echo $mao_obra_orc ?></td>
											<td><span id="mao_obra_dados"></span></td>
										</tr>

										<tr>
											<td width="40%" class="bg-primary text-white w_150">Desconto</td>
											<td><span id="desconto_dados"></span></td>
										</tr>

										<tr>
											<td width="40%" class="bg-primary text-white w_150">Tipo de Desconto</td>
											<td><span id="tipo_desconto_dados"></span></td>
										</tr>

										<tr>
											<td width="35%" class="bg-primary text-white w_150">Subtotal</td>
											<td><span id="subtotal_dados"></span></td>
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
											<td width="15%" class="bg-primary text-white w_150"><?php echo $defeito_orc ?></td>
											<td><span id="defeito_dados"></span></td>
										</tr>

										<tr>
											<td width="15%" class="bg-primary text-white w_150"><?php echo $laudo_orc ?></td>
											<td><span id="laudo_dados"></span></td>
										</tr>

										<tr>
											<td width="15%" class="bg-primary text-white w_150"><?php echo $avarias_orc ?></td>
											<td><span id="condicoes_dados"></span></td>
										</tr>

										<tr>
											<td width="15%" class="bg-primary text-white w_150"><?php echo $acessorios_orc ?></td>
											<td><span id="acessorios_dados"></span></td>
										</tr>

										<tr>
											<td width="15%" class="bg-primary text-white w_150">OBS</td>
											<td><span id="obs_dados"></span></td>
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



<!-- Modal Cliente -->
<div class="modal fade" id="modalCliente" tabindex="-1" data-bs-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
					


				<input type="hidden" class="form-control" name="id">
					
				<br>
				<small><div id="mensagem_cliente" align="center"></div></small>
			</div>
			<div class="modal-footer">       
				<button type="submit" id="btn_salvar_cliente" class="btn btn-primary">Salvar<i class="fa-solid fa-check ms-2"></i></button>
			</div>
			</form>
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

		
		<form id="form_rel" method="POST" action="rel/orcamento_class.php" target="_blank" style="display:none">
			<input type="text" name="id" id="id_orca">
			<input type="text" name="enviar" id="enviar_rel" value="Sim">
			<button type="submit" id="botao_disparar_rel">Enviar</button>
		</form>



		<script type="text/javascript">var pag = "<?=$pag?>"</script>
		<script src="js/ajax.js"></script>

		<script type="text/javascript">
			function listar(){
				return;
			}
		</script>

		<script type="text/javascript">
			$(document).ready(function() {

				$('.sel2').select2({
					dropdownParent: $('#modalForm')
				});

				$('.sel333').select2({
					dropdownParent: $('#modalModelo')
				});

				$(document).on('select2:open', () => {
					document.querySelector('.select2-search__field').focus();
				});	
				

				setTimeout(() => {
				listarClientes();
				listarProdutos();
				listarServicos();
				listarModelos();

				buscar();
				}, 1000);

			});
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

				if(resultado[1] === 'doc' || resultado[1] === 'docx' || resultado[1] === 'txt'){
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
				
$("#form_orcamento").submit(function () {

    $('#mensagem').text('Carregando!!');
    $('#btn_salvar').hide();

    event.preventDefault();
    var formData = new FormData(this);

    $.ajax({
        url: 'paginas/' + pag + "/salvar.php",
        type: 'POST',
        data: formData,

        success: function (mensagem) {  

        	var msg = mensagem.split('-');      	 
            $('#mensagem').text('');
            $('#mensagem').removeClass()
            if (msg[0].trim() == "Salvo com Sucesso") {

                $('#btn-fechar').click();
                buscar();
                listarServicos();
                listarProdutos();

                
                var id_orc = msg[1].trim();
                //abrir o relatório pdf
                //window.open("rel/orcamento_class.php?id="+id_orc+"&enviar=Sim");

              
                 $('#id_orca').val(id_orc);
                 $('#enviar_rel').val('Sim');

                 var enviar_pdf = $('#enviar_pdf').val(); 
                 if(enviar_pdf == 'Sim'){
                 	 $('#botao_disparar_rel').click();
                 }
                

            } else {
               alert(msg[0])
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
	

$("#form-cliente").submit(function () {

    $('#mensagem_cliente').text('Carregando!!');
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
                inserir();
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


$("#form-modelo").submit(function () { 

    $('#mensagem_modelo').text('Salvando!!');
    $('#btn_salvar_modelo').hide();

    event.preventDefault();
    var formData = new FormData(this);
    var nova_pag = 'modelos';

    $.ajax({
        url: 'paginas/' + nova_pag + "/salvar.php",
        type: 'POST',
        data: formData,

        success: function (mensagem) {
            $('#mensagem_modelo').text('');
            $('#mensagem_modelo').removeClass()
            if (mensagem.trim() == "Salvo com Sucesso") {

                $('#btn-fechar-modelo').click();
                listarModelos('1'); 


            } else {

                $('#mensagem_modelo').addClass('text-danger')
                $('#mensagem_modelo').text(mensagem)
            }

             $('#btn_salvar_modelo').show();

        },

        cache: false,
        contentType: false,
        processData: false,

    });

});


function listarModelos(valor){
	$.ajax({
        url: 'paginas/' + pag + "/listar_modelos.php",
        method: 'POST',
        data: {valor},
        dataType: "html",

        success:function(result){
            $("#listar_modelos").html(result);           
        }
    });
}

function addProduto(){
	var id = $("#id").val();
	var produto = $("#produto").val();
	if(produto == ""){
		alert('Selecione um produto');
		return;
	}
	$.ajax({
        url: 'paginas/' + pag + "/addProduto.php",
        method: 'POST',
        data: {produto, id},
        dataType: "html",

        success:function(result){
           listarProdutos();        
        }
    });
}

function listarProdutos(){	
	totalizar();
	var id = $("#id").val();
	$.ajax({
        url: 'paginas/' + pag + "/listar_produtos.php",
        method: 'POST',
        data: {id},
        dataType: "html",

        success:function(result){        	
           $("#listar_produtos").html(result);      
        }
    });
}


function quantidadeProdutos(id){		
	var quant = $("#quant_produtos_"+id).val();	
	$.ajax({
        url: 'paginas/' + pag + "/quantidade_produtos.php",
        method: 'POST',
        data: {id, quant},
        dataType: "html",

        success:function(result){             	
           listarProdutos();    
        }
    });
}


function excluirProduto(id){
	$.ajax({
        url: 'paginas/' + pag + "/excluir_produto.php",
        method: 'POST',
        data: {id},
        dataType: "html",

        success:function(result){             	
           listarProdutos();    
        }
    });
}



function addServico(){
	var id = $("#id").val();
	var servico = $("#servico").val();
	if(servico == ""){
		alert('Selecione um Serviço');
		return;
	}
	$.ajax({
        url: 'paginas/' + pag + "/addServico.php",
        method: 'POST',
        data: {servico, id},
        dataType: "html",

        success:function(result){
           listarServicos();        
        }
    });
}

function listarServicos(){
	totalizar();
	var id = $("#id").val();
	$.ajax({
        url: 'paginas/' + pag + "/listar_servicos.php",
        method: 'POST',
        data: {id},
        dataType: "html",

        success:function(result){        	
           $("#listar_servicos").html(result);      
        }
    });
}


function quantidadeServicos(id){		
	var quant = $("#quant_servicos_"+id).val();	
	$.ajax({
        url: 'paginas/' + pag + "/quantidade_servicos.php",
        method: 'POST',
        data: {id, quant},
        dataType: "html",

        success:function(result){             	
           listarServicos();    
        }
    });
}


function excluirServico(id){
	$.ajax({
        url: 'paginas/' + pag + "/excluir_servico.php",
        method: 'POST',
        data: {id},
        dataType: "html",

        success:function(result){             	
           listarServicos();    
        }
    });
}







function buscar(){	
$.ajax({
        url: 'paginas/' + pag + "/listar_vencidos.php",
        method: 'POST',
        data: {}, // Passa a página aqui
        dataType: "html",

        success: function (result) {
            $("#listar").html(result);
            $('#mensagem-excluir').text('');
        }
    });
}


function totalizar(){
	
	var desconto = $('#desconto').val();
	var tipo_desconto = $('#tipo_desconto').val();
	var frete = $('#frete').val();
	var vall = $('#vall').val();
	var id = $("#id").val();
	var mao_obra = $('#mao_obra').val();

	$.ajax({
        url: 'paginas/' + pag + "/totalizar.php",
        method: 'POST',
        data: {desconto, tipo_desconto, frete, id, vall, mao_obra},
        dataType: "html",

        success:function(result){   
        var vlr = result.split('-');          	
           $('#subtotal').val(vlr[1]);
           $('#valor').val(vlr[0]);

        }
    });
}

</script>


<script type="text/javascript">
	function mudarPessoa(){
		var pessoa = $('#pessoa').val();
		
		if(pessoa == 'Física'){
			$('#label_pessoa').text('CPF');
			$('#cpf').mask('000.000.000-00');
			$('#cpf').attr('placeholder', 'CPF');
		}else{
			$('#label_pessoa').text('CNPJ');
			$('#cpf').mask('00.000.000/0000-00');
			$('#cpf').attr('placeholder', 'CNPJ');
		}
	}


	
</script>



<script type="text/javascript">
	
// ALERT EXCLUIR #######################################
function excluirOrc(id) {
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
                        buscar();
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




<script type="text/javascript">
	
// ALERT EXCLUIR #######################################
function baixar(id) {
	$('#mensagem-excluir').text('Baixando!!!');
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: "btn btn-success", // Adiciona margem à direita do botão "Sim, Excluir!"
            cancelButton: "btn btn-danger me-1",
            container: 'swal-whatsapp-container'
        },
        buttonsStyling: false
    });

    swalWithBootstrapButtons.fire({
        title: "Deseja Baixar?",
        text: "Marcar o Orçamento como aprovado!",
        icon: "success",
        showCancelButton: true,
        confirmButtonText: "Sim, Baixar!",
        cancelButtonText: "Não, Cancelar!",
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            // Realiza a requisição AJAX para excluir o item
            $.ajax({
                url: 'paginas/' + pag + "/baixar.php",
                method: 'POST',
                data: { id },
                dataType: "html",
                success: function (mensagem) {
                    if (mensagem.trim() == "Baixado com Sucesso") {
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
                       buscar();
                       $('#mensagem-excluir').text('');
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


<style type="text/css">
	.custom_modal {
  width: 80vw;
  max-width: 1140px;  
}

/* Em telas menores (até 767px), usa largura automática */
@media (max-width: 767px) {
  .custom_modal {
    width: 95vw;
  }
}
</style>


<script type="text/javascript">
	function editarLabel(){
		var mao_obra_orc = $('#mao_obra_orc').val();
		var senha_aparelho_orc = $('#senha_aparelho_orc').val();
		var defeito_orc = $('#defeito_orc').val();
		var avarias_orc = $('#avarias_orc').val();
		var acessorios_orc = $('#acessorios_orc').val();
		var laudo_orc = $('#laudo_orc').val();

		$.ajax({
        url: 'paginas/' + pag + "/editar_campos.php",
        method: 'POST',
        data: {mao_obra_orc, senha_aparelho_orc, defeito_orc, avarias_orc, acessorios_orc, laudo_orc},
        dataType: "html",

        success:function(result){   
        	if(result.trim() == "Editado com Sucesso"){

        	}else{
        		alertWarning(result)
        	}
    	}

    	});


	}
</script>