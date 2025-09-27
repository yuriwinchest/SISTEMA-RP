<?php
$pag = 'clientes';

//verificar se ele tem a permissão de estar nessa página
if (@$clientes == 'ocultar') {
	echo "<script>window.location='index'</script>";
	exit();
}
?>


<input type="hidden" name="pagina" id="pagina">

<div class="breadcrumb-header justify-content-between">
	<div class="left-content mt-2">
		<div style="display:inline-block;">
		<a class="btn ripple btn-primary text-white" onclick="inserir()" type="button"><i class="fe fe-user-plus me-1"></i>
			Adicionar <?php echo ucfirst($pag); ?></a>
		</div>

		<div style="position:absolute; right:40px; display:inline-block;">
		<a style="" href="" data-bs-target="#modalImportar" data-bs-toggle="modal" type="button"
			class="btn btn-primary " target="_blank"><span class="fa fa-file-excel-o"></span> Importar</a>

		<a  href="rel/excel_clientes.php" type="button"
			class="btn btn-success " target="_blank"><span class="fa fa-file-excel-o"></span> Exportar</a>

		</div>

		<a class="btn btn-danger" href="#" onclick="deletarSel()" title="Excluir" id="btn-deletar"
			style="display:none"><i class="fe fe-trash-2"></i> Deletar</a>
	</div>
</div>


<div class="row row-sm">

	<div class="d-flex justify-content-end me-2" style="max-width: 300px; margin-left: auto; margin-bottom: 10px">
    <div class="input-group">
        <span class="input-group-text bg-light border border-primary">
            <i class="fas fa-search text-secondary"></i>
        </span>
        <input type="text" class="form-control border border-primary" id="busca" placeholder="Buscar..." onkeyup="buscar()">
    </div>
</div>

	<div class="col-lg-12">
		<div class="card custom-card">
			<div class="card-body" id="listar">
			</div>
		</div>
	</div>
</div>


<input type="hidden" id="ids">

<!-- Modal Cliente -->
<div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-header bg-primary text-white">
				<h4 class="modal-title" id="exampleModalLabel"><span id="titulo_inserir"></span></h4>
				<button id="btn-fechar" aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span
						class="text-white" aria-hidden="true">&times;</span></button>
			</div>
			<form id="form_clientes">
				<div class="modal-body ">
					<div class="row">
						<div class="col-md-6 mb-2 needs-validation was-validated">
							<label>Nome <span class="text-danger" style="font-size: 9px">(Obrigatório)</span></label>
							<div class="form-group has-success mg-b-0">
								<input class="form-control" id="nome" name="nome" placeholder="Digite o Nome" required type="text"
									value="This is input">
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
						<div class="col-md-3 mb-2">
							<label>RG</label>
							<div class="row">
								<div class="col-8">
									<input type="text" class="form-control" id="rg" name="rg" placeholder="Digite o RG">
								</div>
								<div class="col-4">
									<input type="text" class="form-control" id="orgao_emissor" name="orgao_emissor" placeholder="SSP/SP">
								</div>
							</div>
							<div class="mt-1">
								<button type="button" class="btn btn-primary btn-sm" title="Buscar RG" onclick="buscarRG()">
									<i class="bi bi-search"></i> Buscar
								</button>
							</div>
						</div>
						<div class="col-md-2 mb-2  needs-validation was-validated">
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
						<div class="col-md-4 mb-2">
							<label>Cidade</label>
							<input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade">
						</div>
						<div class="col-md-2 mb-2">
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

						<div class="col-md-2">
								<label>Enviar Whatsapp</label>
								<select name="enviar_whatsapp" id="enviar_whatsapp_cob" class="form-select">
									<option value="Sim">Sim</option>
									<option value="Não">Não</option>
								</select>
						</div>



					</div>



					<div class="row">
						<div class="col-md-2 mb-2">
							<label>Api Pagamento</label>
							<select class="form-select" id="api_pagamento_cliente" name="api_pagamento_cliente">
								<option value="">Padrão</option>
								<option value="Mercado Pago">Mercado Pago</option>
								<option value="Asaas">Asaas</option>
							</select>
						</div>

						<div class="col-md-4 mb-2">
							<label>Forma Pgto Disponíveis</label>
							<select class="form-select" id="formas_pgto" name="formas_pgto">
							  <option value="">Todas</option>
							  <option value="Pix">Somente Pix</option>
							  <option value="Cartão de Crédito">Somente Cartão de Crédito</option>
							  <option value="Cartão de Débito">Somente Cartão de Débito</option>
							  <option value="Boleto">Somente Boleto</option>

							  <option value="Pix,Cartão de Crédito">Pix e Cartão de Crédito</option>
							  <option value="Pix,Cartão de Débito">Pix e Cartão de Débito</option>
							  <option value="Pix,Boleto">Pix e Boleto</option>
							  <option value="Cartão de Crédito,Cartão de Débito">Cartão de Crédito e Cartão de Débito</option>
							  <option value="Cartão de Crédito,Boleto">Cartão de Crédito e Boleto</option>
							  <option value="Cartão de Débito,Boleto">Cartão de Débito e Boleto</option>

							  <option value="Pix,Cartão de Crédito,Cartão de Débito">Pix, Cartão de Crédito e Cartão de Débito</option>
							  <option value="Pix,Cartão de Crédito,Boleto">Pix, Cartão de Crédito e Boleto</option>
							  <option value="Pix,Cartão de Débito,Boleto">Pix, Cartão de Débito e Boleto</option>
							  <option value="Cartão de Crédito,Cartão de Débito,Boleto">Cartão de Crédito, Cartão de Débito e Boleto</option>

							  <option value="Pix,Cartão de Crédito,Cartão de Débito,Boleto">Pix, Cartão de Crédito, Cartão de Débito e Boleto</option>
							</select>

						</div>
					</div>


					<input type="hidden" class="form-control" id="id" name="id">
					<br>
					<small>
						<div id="mensagem" align="center"></div>
					</small>
				</div>
				<div class="modal-footer">
					<button type="submit" id="btn_salvar" class="btn btn-primary" value="">Salvar<i
							class="fa fa-check ms-2"></i></button>
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
						<div class="col-md-12">
							<div class="tile">
								<div class="table-responsive">
									<table id="" class="text-left table table-bordered">
										<tr>
											<td style="width: 20%" class="bg-primary text-white">Telefone</td>
											<td><span id="telefone_dados"></span></td>
										</tr>
										<tr>
											<td class="bg-primary text-white w_150">Pessoa</td>
											<td><span id="pessoa_dados"></span></td>
										</tr>
										<tr>
											<td class="bg-primary text-white w_150">CPF / CNPJ</td>
											<td><span id="cpf_dados"></span></td>
										</tr>
										<tr>
											<td class="bg-primary text-white w_150">RG</td>
											<td><span id="rg_dados"></span> - <span id="orgao_emissor_dados"></span></td>
										</tr>
										<tr>
											<td class="bg-primary text-white w_150">Data Cadastro</td>
											<td><span id="data_dados"></span></td>
										</tr>
										<tr>
											<td class="bg-primary text-white w_150">Data Nascimento</td>
											<td><span id="data_nasc_dados"></span></td>
										</tr>
										<tr>
											<td class="bg-primary text-white w_150">Rua</td>
											<td><span id="endereco_dados"></span></td>
										</tr>
										<tr>
											<td style="width: 25%" class="bg-primary text-white w_150">Número</td>
											<td><span id="numero_dados"></span></td>
										</tr>
										<tr>
											<td class="bg-primary text-white w_150">Bairro</td>
											<td><span id="bairro_dados"></span></td>
										</tr>
										<tr>
											<td class="bg-primary text-white w_150">Complemento</td>
											<td><span id="complemento_dados"></span></td>
										</tr>
										<tr>
											<td class="bg-primary text-white w_150">Cidade</td>
											<td><span id="cidade_dados"></span></td>
										</tr>
										<tr>
											<td class="bg-primary text-white w_150">Estado</td>
											<td><span id="estado_dados"></span></td>
										</tr>
										<tr>
											<td class="bg-primary text-white w_150">CEP</td>
											<td><span id="cep_dados"></span></td>
										</tr>

										<tr>
											<td class="bg-primary text-white w_150">Api Pagamento</td>
											<td><span id="api_pagamento_dados"></span></td>
										</tr>

										<tr>
											<td class="bg-primary text-white w_150">Formas de Pagamento</td>
											<td><span id="formas_pgto_dados"></span></td>
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
							<button id="btn_inserir" type="submit" class="btn btn-primary">Inserir <i class="fa-solid fa-check ms-2"></i></button>
							<button class="btn btn-primary" type="button" id="btn_carregando_inserir" style="display: none">
								<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Inserindo...
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



<!-- Modal Contas -->
<div class="modal fade" id="modalContas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header bg-primary text-white">
				<h4 class="modal-title" id="exampleModalLabel"><span id="titulo_contas"></span></h4>
				<button id="btn-fechar-contas" aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span
						class="text-white" aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<div id="listar_debitos" style="margin-top: 15px">
				</div>
				<input type="hidden" id="id_contas">
			</div>
		</div>
	</div>
</div>






<!-- Modal Baixar-->
<div class="modal fade" id="modalBaixar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" style="box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;">
		<div class="modal-content">
			<div class="modal-header bg-dark text-white">
				<h4 class="modal-title" id="tituloModal">Baixar Conta: <span id="descricao-baixar"> </span></h4>
				<button id="btn-fechar-baixar" aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span
						class="text-white" aria-hidden="true">&times;</span></button>
			</div>
			<form id="form-baixar" method="post">
				<div class="modal-body">
					<div class="row">
						<div class="col-md-5 col-6">
							<label>Valor <small class="text-muted">(Total ou Parcial)</small></label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text">R$</span>
								</div>
								<input onkeyup="mascaraMoeda(this); totalizar()" type="text" class="form-control" name="valor-baixar" id="valor-baixar"
									required>
							</div>
						</div>
						<div class="col-md-7 col-6">
							<div class="form-group">
								<label>Forma PGTO</label>
								<select class="form-select" name="saida-baixar" id="saida-baixar" required onchange="calcularTaxa()">
									<?php
									$query = $pdo->query("SELECT * FROM formas_pgto where empresa = '$id_empresa' order by id asc");
									$res = $query->fetchAll(PDO::FETCH_ASSOC);
									for ($i = 0; $i < @count($res); $i++) {
										foreach ($res[$i] as $key => $value) {
										}
									?>
										<option value="<?php echo $res[$i]['id'] ?>"><?php echo $res[$i]['nome'] ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3 col-6">
							<div class="mb-3">
								<label>Multa em R$</label>
								<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text">R$</span>
								</div>
								<input onkeyup="mascaraMoeda(this); totalizar()" type="text" class="form-control" name="valor-multa" id="valor-multa"
									placeholder="Ex 15.00" value="0">
									</div>
							</div>
						</div>
						<div class="col-md-3 col-6">
							<div class="mb-3">
								<label>Júros em R$</label>
								<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text">R$</span>
								</div>
								<input onkeyup="mascaraMoeda(this); totalizar()" type="text" class="form-control" name="valor-juros" id="valor-juros"
									placeholder="Ex 0.15" value="0">
								</div>
							</div>
						</div>
						<div class="col-md-3 col-6">
							<div class="mb-3">
								<label>Desconto R$</label>
								<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text">R$</span>
								</div>
								<input onkeyup="mascaraMoeda(this); totalizar()" type="text" class="form-control" name="valor-desconto" id="valor-desconto"
									placeholder="Ex 15.00" value="0">
								</div>
							</div>
						</div>
						<div class="col-md-3 col-6">
							<div class="mb-3">
								<label>Taxa PGTO</label>
								<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text">R$</span>
								</div>
								<input onkeyup="mascaraMoeda(this); totalizar()" type="text" class="form-control" name="valor-taxa" id="valor-taxa"
									placeholder="" value="">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-6">
							<div class="mb-3">
								<label>Data da Baixa</label>
								<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa-regular fa-calendar"></i></span>
								</div>
								<input type="date" class="form-control" name="data-baixar" id="data-baixar"
									value="<?php echo date('Y-m-d') ?>">
								</div>
							</div>
						</div>
						<div class="col-md-6 col-6">
							<div class="mb-3">
								<label>SubTotal</label>
								<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text">R$</span>
								</div>
								<input type="text" class="form-control" name="subtotal" id="subtotal" readonly>
								</div>
							</div>
						</div>
					</div>
					<small>
						<div id="mensagem-baixar" align="center"></div>
					</small>
					<input type="hidden" class="form-control" name="id-baixar" id="id-baixar">
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-success" id="btn_salvar_baixar">Baixar <i class="fa-solid fa-check ms-2"></i></button>
					<button class="btn btn-success" type="button" id="btn_carregando_baixar" style="display: none">
						<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Carregando...
					</button>
				</div>
			</form>
		</div>
	</div>
</div>





<!-- Modal Contratos -->
<div class="modal fade" id="modalContratos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header bg-primary text-white">
				<h4 class="modal-title" id="exampleModalLabel"><span id="titulo_contratos"></span></h4>
				<button id="btn-fechar-contratos" aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span
						class="text-white" aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<div id="listar_contratos" style="margin-top: 15px">
				</div>
				<input type="hidden" id="id_contratos">
			</div>
		</div>
	</div>
</div>







<!-- Modal Whats -->
<div class="modal fade" id="modalWhats" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-primary text-white">
				<h4 class="modal-title" id="exampleModalLabel">Enviar Mensagem no WhatsApp</h4>
				<button id="btn-fechar-whats" aria-label="Close" class="btn-close" data-bs-dismiss="modal"
					type="button"><span class="text-white" aria-hidden="true">&times;</span></button>
			</div>

			<div class="modal-body">
				<label class="form-label mt-2">Mensagem <i class="fa-brands fa-whatsapp"></i></label>

				<!-- Botões de mensagens rápidas -->
				<div class="btn-group mb-2 w-100" role="group">
					<button type="button" class="btn btn-outline-success btn-sm" onclick="inserirSaudacao()">
						<i class="fa fa-smile-o"></i> Saudação
					</button>

					<button type="button" class="btn btn-outline-success btn-sm" onclick="inserirCobranca()">
						<i class="fa fa-money"></i> Cobrança
					</button>
					<button type="button" class="btn btn-outline-success btn-sm" onclick="inserirSuporte()">
						<i class="fa fa-life-ring"></i> Suporte
					</button>
				</div>

				<textarea id="mensagem_whatsapp" name="mensagem_whatsapp" class="form-control" rows="4"
					placeholder="Digite sua mensagem..." style="background-image: url('images/whatsapp.jpg');
							   background-size: cover;
							   background-position: center;
							   background-repeat: no-repeat;
							   opacity: 0.9;"></textarea>
			</div>


			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">❌ Fechar</button>
				<button type="button" class="btn btn-success" id="btn_enviar_whats" onclick="enviarWhats()">Enviar<i
						class="fa fa-paper-plane ms-2"></i></button>
				<button type="button" class="btn btn-success" id="btn_carregando_whats" style="display: none">
					<span class="spinner-border spinner-border-sm" role="status"
						aria-hidden="true"></span>Enviando...</button>
			</div>
			<input type="hidden" class="form-control" id="id_whats" name="id_whats">
			<input type="hidden" class="form-control" id="tipo_whats" name="tipo_whats">
			<input type="hidden" class="form-control" id="email_whats" name="email_whats">
		</div>
	</div>
</div>









<!-- Modal Whats -->
<div class="modal fade" id="modalImportar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-header bg-primary text-white">
				<h4 class="modal-title" id="exampleModalLabel">Importe um Arquivo (.xls) do Excel</h4>
				<button id="btn-fechar-import" aria-label="Close" class="btn-close" data-bs-dismiss="modal"
					type="button"><span class="text-white" aria-hidden="true">&times;</span></button>
			</div>

			<div class="modal-body">
				<form method="post" id="form_importar">
					<div class="row">
						<div class="col-md-4 mb-3">
							<label>Arquivo .Xls Excel</label>
							<input type="file" class="form-control" id="arquivo_excel" name="arquivo_excel" value="" onchange="carregarArquivoExcel()">
						</div>
						<div class="col-md-1 mb-3">
							<img src="images/sem-foto.png" width="80px" id="target_arquivo_excel">
						</div>

						<div style="margin-top: 25px" class="col-md-1 mb-3">
							<button class="btn btn-primary" type="submit">Importar</button>
						</div>
					</div>
				</form>

					<hr>

					<div class="row">
						<label>Use uma linha acima com o nome das colunas dessa forma  (<i class="fa fa-file-excel-o text-success"></i> <a target="_blank" href="images/modelo.xlsx" style="color:blue">Modelo Anexo</a>)</label>
						<img src="images/modelo_clientes.jpg">
						<label>Caso não tenha todas as colunas, deixe as que não tiver com dados vazio, mas preencha o cabeçalho delas, conforme o modelo acima ou modelo em anexo, as datas precisam estar no modelo americano (ano-mês-dia)</label>
					</div>
			</div>

		</div>
	</div>
</div>




 <form method="POST" action="rel/contrato_class.php" target="_blank">
<input type="hidden" id="texto_contrato" name="texto">
<input type="hidden" id="cabecalho_form" name="cabecalho_form">
<input type="hidden" id="cliente_form" name="cliente" >
<input type="hidden" id="modelo_form" name="modelo" >
<button type="submit" id="botao_form" style="display:none"></button>
</form>


<script type="text/javascript">
	var pag = "<?= $pag ?>"
</script>
<script src="js/ajax.js"></script>




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





<script type="text/javascript">
	function carregarImgArquivos() {
		var target = document.getElementById('target-arquivos');
		var file = document.querySelector("#arquivo_conta").files[0];

		var arquivo = file['name'];
		resultado = arquivo.split(".", 2);

		if (resultado[1] === 'pdf') {
			$('#target-arquivos').attr('src', "images/pdf.png");
			return;
		}

		if (resultado[1] === 'rar' || resultado[1] === 'zip') {
			$('#target-arquivos').attr('src', "images/rar.png");
			return;
		}

		if (resultado[1] === 'doc' || resultado[1] === 'docx' || resultado[1] === 'txt') {
			$('#target-arquivos').attr('src', "images/word.png");
			return;
		}


		if (resultado[1] === 'xlsx' || resultado[1] === 'xlsm' || resultado[1] === 'xls') {
			$('#target-arquivos').attr('src', "images/excel.png");
			return;
		}


		if (resultado[1] === 'xml') {
			$('#target-arquivos').attr('src', "images/xml.png");
			return;
		}



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
function totalizar() {
// Obtém os valores dos campos
let valor = $('#valor-baixar').val();
let desconto = $('#valor-desconto').val();
let juros = $('#valor-juros').val();
let multa = $('#valor-multa').val();
let taxa = $('#valor-taxa').val();

// Substitui vírgulas por pontos e remove pontos extras
valor = valor.replace(",", ".").replace(/\.(?=.*\.)/g, "");
desconto = desconto.replace(",", ".").replace(/\.(?=.*\.)/g, "");
juros = juros.replace(",", ".").replace(/\.(?=.*\.)/g, "");
multa = multa.replace(",", ".").replace(/\.(?=.*\.)/g, "");
taxa = taxa.replace(",", ".").replace(/\.(?=.*\.)/g, "");


// Define valores padrão como 0 se estiverem vazios
valor = valor === "" ? 0 : parseFloat(valor);
desconto = desconto === "" ? 0 : parseFloat(desconto);
juros = juros === "" ? 0 : parseFloat(juros);
multa = multa === "" ? 0 : parseFloat(multa);
taxa = taxa === "" ? 0 : parseFloat(taxa);

// Calcula o subtotal
let subtotal = valor + juros + taxa + multa - desconto;

// Supondo que subtotal já tenha sido calculado
$('#subtotal').val(formatarMoeda(subtotal));
}

  function formatarMoeda(valor) {
// Converte o valor para um número
valor = parseFloat(valor);

// Formata o número com duas casas decimais e separador de milhar
return valor.toLocaleString('pt-BR', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
}


	function calcularTaxa() {
		pgto = $('#saida-baixar').val();
		valor = $('#valor-baixar').val();
		$.ajax({
			url: 'paginas/receber/calcular_taxa.php',
			method: 'POST',
			data: {
				valor,
				pgto
			},
			dataType: "html",
			success: function(result) {
				$('#valor-taxa').val(result);
				totalizar();
			}
		});


	}
</script>




<script type="text/javascript">
	$("#form-baixar").submit(function() {

		$('#btn_salvar_baixar').hide();
		$('#btn_carregando_baixar').show();

		event.preventDefault();
		var formData = new FormData(this);

		var id = $('#id_contas').val();

		$.ajax({
			url: 'paginas/receber/baixar.php',
			type: 'POST',
			data: formData,

			success: function(mensagem) {

				$('#mensagem-baixar').text('');
				$('#mensagem-baixar').removeClass()
				if (mensagem.trim() == "Baixado com Sucesso") {
					$('#btn-fechar-baixar').click();
					listarDebitos(id);

				} else {
					$('#mensagem-baixar').addClass('text-danger')
					$('#mensagem-baixar').text(mensagem)
				}

				$('#btn_salvar_baixar').show();
				$('#btn_carregando_baixar').hide();

			},

			cache: false,
			contentType: false,
			processData: false,

		});

	});
</script>





<script>
	function limpa_formulário_cep() {
		//Limpa valores do formulário de cep.
		document.getElementById('endereco').value = ("");
		document.getElementById('bairro').value = ("");
		document.getElementById('cidade').value = ("");
		document.getElementById('estado').value = ("");
		//document.getElementById('ibge').value=("");
	}

	function meu_callback(conteudo) {
		if (!("erro" in conteudo)) {
			//Atualiza os campos com os valores.
			document.getElementById('endereco').value = (conteudo.logradouro);
			document.getElementById('bairro').value = (conteudo.bairro);
			document.getElementById('cidade').value = (conteudo.localidade);
			document.getElementById('estado').value = (conteudo.uf);
			//document.getElementById('ibge').value=(conteudo.ibge);
		} //end if.
		else {
			//CEP não Encontrado.
			limpa_formulário_cep();
			alert("CEP não encontrado.");
		}
	}

	function pesquisacep(valor) {

		//Nova variável "cep" somente com dígitos.
		var cep = valor.replace(/\D/g, '');

		//Verifica se campo cep possui valor informado.
		if (cep != "") {

			//Expressão regular para validar o CEP.
			var validacep = /^[0-9]{8}$/;

			//Valida o formato do CEP.
			if (validacep.test(cep)) {

				//Preenche os campos com "..." enquanto consulta webservice.
				document.getElementById('endereco').value = "...";
				document.getElementById('bairro').value = "...";
				document.getElementById('cidade').value = "...";
				document.getElementById('estado').value = "...";
				//document.getElementById('ibge').value="...";

				//Cria um elemento javascript.
				var script = document.createElement('script');

				//Sincroniza com o callback.
				script.src = 'https://viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';

				//Insere script no documento e carrega o conteúdo.
				document.body.appendChild(script);

			} //end if.
			else {
				//cep é inválido.
				limpa_formulário_cep();
				alert("Formato de CEP inválido.");
			}
		} //end if.
		else {
			//cep sem valor, limpa formulário.
			limpa_formulário_cep();
		}
	};
</script>



<script>
	function buscarCNPJ() {

		var cnpj = $('#cpf').val().replace(/\D/g, ''); // Remover tudo que não for número
		if (cnpj.length === 14) { // Verifica se o CNPJ tem 14 dígitos
			$.ajax({
				url: 'https://www.receitaws.com.br/v1/cnpj/' + cnpj,
				type: 'GET',
				dataType: 'jsonp', // A API retorna um JSONP para evitar CORS
				success: function(dados) {
					if (dados.status === "ERROR") {
						alert("CNPJ inválido ou não encontrado!");
					} else {
						$('#nome').val(dados.nome);
						//$('#atividade_principal').html("Atividade Principal: " + dados.atividade_principal[0].text);
						$('#cep').val(dados.cep);
						$('#telefone').val(dados.telefone);
						$('#email').val(dados.email);
						$('#endereco').val(dados.logradouro);
						$('#bairro').val(dados.bairro);
						$('#numero').val(dados.numero);
						$('#cidade').val(dados.municipio);
						$('#complemento').val(dados.complemento);
						$('#estado').val(dados.uf);
					}
				},
				error: function() {
					alert("Erro ao buscar os dados do CNPJ.");
				}
			});
		} else {
			alert("Por favor, insira um CNPJ válido com 14 dígitos.");
		}
	}
</script>


<script type="text/javascript">
	function buscar(){
		var busca = $('#busca').val();
		var pagina = $('#pagina').val();

		listar(busca, pagina);
	}
</script>


<script type="text/javascript">


$("#form_clientes").submit(function (event) {

    event.preventDefault();
    var formData = new FormData(this);
    $('#btn_salvar').hide();
    $('#btn_carregando').show();
    $.ajax({
        url: 'paginas/' + pag + "/salvar.php",
        type: 'POST',
        data: formData,
        success: function (mensagem) {
            $('#mensagem').text('');
            $('#mensagem').removeClass()
            if (mensagem.trim() == "Salvo com Sucesso") {
                $('#btn-fechar').click();
                sucesso();
                buscar();
                $('#mensagem').text('')
            } else {
            	alertErro(mensagem)
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





// ALERT EXCLUIR #######################################
function excluirClientes(id) {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: "btn btn-success", // Adiciona margem à direita do botão "Sim, Excluir!"
            cancelButton: "btn btn-danger me-1"
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


<script>
	function inserirSaudacao() {
		var hora = new Date().getHours();
		var saudacao = "";

		if (hora >= 5 && hora < 12) {
			saudacao = "Bom dia";
		} else if (hora >= 12 && hora < 18) {
			saudacao = "Boa tarde";
		} else {
			saudacao = "Boa noite";
		}

		var mensagem = `${saudacao}! 😊\nComo posso ajudar?`;
		inserirTexto(mensagem);
	}

	function inserirCobranca() {
		var mensagem = "📢 *LEMBRETE DE PAGAMENTO* 📢\n\n" +
			"Olá! Passando para lembrar sobre o pagamento pendente.\n" +
			"Por favor, entre em contato para regularização. 🤝";
		inserirTexto(mensagem);
	}

	function inserirSuporte() {
		var mensagem = "🛠️ *SUPORTE TÉCNICO* 🛠️\n\n" +
			"Olá! Como posso ajudar?\n" +
			"Por favor, descreva o problema que está enfrentando.";
		inserirTexto(mensagem);
	}

	function inserirTexto(novoTexto) {
		var textarea = document.getElementById('mensagem_whatsapp');
		var textoAtual = textarea.value;

		if (textoAtual) {
			textarea.value = textoAtual + "\n\n" + novoTexto;
		} else {
			textarea.value = novoTexto;
		}
	}
</script>


<script type="text/javascript">
		function enviarWhats() {
		let mensagem = document.getElementById('mensagem_whatsapp').value;
		let id = document.getElementById('id_whats').value;
		let tipo = document.getElementById('tipo_whats').value;

		if (mensagem.trim() === '') {
			alertWarning('Por favor, insira uma mensagem para enviar!');
			return;
		}

		$('#btn_enviar_whats').hide();
		$('#btn_carregando_whats').show();

		$.ajax({
			url: 'apis/enviar_whatsapp.php',
			method: 'POST',
			data: {
				id: id,
				mensagem: mensagem,
				tipo: tipo
			},
			success: function (response) {
				$('#btn_enviar_whats').show();
				$('#btn_carregando_whats').hide();

				if (response == 'Mensagem enviada com sucesso!') {
					alertsucesso(response);
					$('#mensagem_whatsapp').val('');
					$('#btn-fechar-whats').click();

				} else {
					alertErro(response);
				}
			},
			error: function (xhr, status, error) {
				$('#btn_enviar_whats').show();
				$('#btn_carregando_whats').hide();
				alertErro('Erro ao enviar mensagem: ' + error);
			},
			complete: function () {
				$('#mensagem_whatsapp').val(''); // Limpa o campo de mensagem
		}
	});
}

// Função para buscar cliente por RG
function buscarRG() {
    var rg = $('#rg').val().replace(/\D/g, ''); // Remove tudo que não for número

    if (rg.length >= 7) { // Verifica se o RG tem pelo menos 7 dígitos
        $.ajax({
            url: 'paginas/clientes/buscar_por_rg.php',
            method: 'POST',
            data: { rg: rg },
            dataType: "json",
            success: function(response) {
                if (response.status === 'success' && response.cliente) {
                    // Preenche os campos com os dados encontrados
                    $('#nome').val(response.cliente.nome);
                    $('#telefone').val(response.cliente.telefone);
                    $('#email').val(response.cliente.email);
                    $('#cpf').val(response.cliente.cpf);
                    $('#data_nasc').val(response.cliente.data_nasc);
                    $('#cep').val(response.cliente.cep);
                    $('#endereco').val(response.cliente.endereco);
                    $('#numero').val(response.cliente.numero);
                    $('#bairro').val(response.cliente.bairro);
                    $('#cidade').val(response.cliente.cidade);
                    $('#estado').val(response.cliente.estado);
                    $('#complemento').val(response.cliente.complemento);
                    $('#tipo_pessoa').val(response.cliente.tipo_pessoa);

                    alertSucesso('Cliente encontrado com sucesso!');
                } else {
                    alertWarning('RG não encontrado na base de dados!');
                }
            },
            error: function() {
                alertErro('Erro ao buscar RG. Verifique sua conexão.');
            }
        });
    } else {
        alertWarning('Por favor, digite um RG válido (mínimo 7 dígitos).');
    }
}
</script>





<script type="text/javascript">
	function carregarArquivoExcel() {
		var target = document.getElementById('target_arquivo_excel');
		var file = document.querySelector("#arquivo_excel").files[0];

		var arquivo = file['name'];
		resultado = arquivo.split(".", 2);


		if (resultado[1] === 'xlsx' || resultado[1] === 'xlsm' || resultado[1] === 'xls') {
			$('#target_arquivo_excel').attr('src', "images/excel.png");
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

$("#form_importar").submit(function (event) {

    event.preventDefault();
    var formData = new FormData(this);

    $.ajax({
        url: 'paginas/' + pag + "/importar.php",
        type: 'POST',
        data: formData,
        success: function (mensagem) {
            $('#mensagem').text('');
            $('#mensagem').removeClass()
            if (mensagem.trim() == "Clientes importados com sucesso!") {
                $('#btn-fechar-import').click();
                sucesso();
                listar();
                $('#arquivo_excel').val('');
            } else {
                alertErro(mensagem)
            }

        },
        cache: false,
        contentType: false,
        processData: false,
    });
});

// Função para buscar cliente por RG
function buscarRG() {
    var rg = $('#rg').val().replace(/\D/g, ''); // Remove tudo que não for número

    if (rg.length >= 7) { // Verifica se o RG tem pelo menos 7 dígitos
        $.ajax({
            url: 'paginas/clientes/buscar_por_rg.php',
            method: 'POST',
            data: { rg: rg },
            dataType: "json",
            success: function(response) {
                if (response.status === 'success' && response.cliente) {
                    // Preenche os campos com os dados encontrados
                    $('#nome').val(response.cliente.nome);
                    $('#telefone').val(response.cliente.telefone);
                    $('#email').val(response.cliente.email);
                    $('#cpf').val(response.cliente.cpf);
                    $('#data_nasc').val(response.cliente.data_nasc);
                    $('#cep').val(response.cliente.cep);
                    $('#endereco').val(response.cliente.endereco);
                    $('#numero').val(response.cliente.numero);
                    $('#bairro').val(response.cliente.bairro);
                    $('#cidade').val(response.cliente.cidade);
                    $('#estado').val(response.cliente.estado);
                    $('#complemento').val(response.cliente.complemento);
                    $('#tipo_pessoa').val(response.cliente.tipo_pessoa);

                    alertSucesso('Cliente encontrado com sucesso!');
                } else {
                    alertWarning('RG não encontrado na base de dados!');
                }
            },
            error: function() {
                alertErro('Erro ao buscar RG. Verifique sua conexão.');
            }
        });
    } else {
        alertWarning('Por favor, digite um RG válido (mínimo 7 dígitos).');
    }
}





</script>