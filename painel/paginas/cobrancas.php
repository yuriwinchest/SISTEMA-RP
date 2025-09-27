<?php
$pag = 'cobrancas';

if (@$cobrancas == 'ocultar' || @$cobrancas_rec == 'ocultar') {
	echo "<script>window.location='index'</script>";
	exit();
}

?>

<div class="justify-content-between">
	<form action="rel/cobrancas_class.php" target="_blank" method="POST">
		<div class="left-content mt-2">
			<a style="margin-bottom: 20px; margin-top: 20px" class="btn ripple btn-primary text-white" onclick="inserir()"
				type="button"><i class="fe fe-plus me-2"></i>Adicionar Cobrança</a>

			<div style="display: inline-block; position:absolute; right:10px; margin-bottom: 10px">
				<button style="width:140px" type="submit" class="btn btn-primary ocultar_mobile_app" title="Gerar Relatório"><i
						class="fa fa-file-pdf-o"></i> Relatório </button>
			</div>

			<big><a class="btn btn-danger" href="#" onclick="deletarSel()" title="Excluir" id="btn-deletar"
					style="display:none"><i class="fe fe-trash-2"></i> Deletar</a></big>					

			<div class="cab_mobile"></div>

			<div style="display: inline-block; margin-bottom: 10px">
				<input style="height:35px; width:49%; font-size: 13px;" type="date" class="form-control2" name="dataInicial"
					id="dataInicial" value="<?php echo $data_inicio_mes ?>" required onchange="buscar()">
				<input style="height:35px; width:49%; font-size: 13px;" type="date" class="form-control2" name="dataFinal"
					id="dataFinal" value="<?php echo $data_final_mes ?>" required onchange="buscar()">
			</div>

			<div style="display: inline-block; margin-bottom: 10px">
			<select name="cliente" id="cliente_busca" class="sel_cli" style="width:100%; height:35px; " onchange="buscar()">
								<option value="">Selecione um Cliente</option>
								<?php
								if ($mostrar_registros == 'Não') {
									$query = $pdo->query("SELECT * from clientes where usuario = '$id_usuario' and empresa = '$id_empresa' order by id asc");
								} else {
									$query = $pdo->query("SELECT * from clientes where empresa = '$id_empresa' order by id asc");
								}
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

		
		<input type="hidden" name="tipo_data" id="tipo_data">
		<input type="hidden" name="pago" id="pago">
		<input type="hidden" name="tipo_data_filtro" id="tipo_data_filtro">
	</form>
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

<div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header bg-primary text-white">
				<h4 class="modal-title" id="exampleModalLabel"><span id="titulo_inserir"></span></h4>
				<button id="btn-fechar" aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span
						class="text-white" aria-hidden="true">&times;</span></button>
			</div>
			<form id="form">
				<div class="modal-body">

					<div class="row">
						<div class="col-md-6 mb-2 ">
							<label>Descrição</label>
							<input type="text" class="form-control" id="descricao" name="descricao" placeholder="Serviço Prestado">
						</div>
						<div class="col-md-6">
							<label>Cliente</label>
							<select name="cliente" id="cliente" class="sel32" style="width:100%; height:35px; ">
								<option value="0">Selecione um Cliente</option>
								<?php
								if ($mostrar_registros == 'Não') {
									$query = $pdo->query("SELECT * from clientes where usuario = '$id_usuario' and empresa = '$id_empresa' order by id asc");
								} else {
									$query = $pdo->query("SELECT * from clientes where empresa = '$id_empresa' order by id asc");
								}
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
						<div class="col-md-3">							
								<label>Valor</label>
								<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text">R$</span>
								</div>
								<input type="text" id="valor_cob" name="valor" class="form-control" placeholder="R$ 0,00"
									oninput="mascaraMoeda(this)">
							</div>						
						</div>

						<div class="col-md-3">							
								<label>Parcelas <small><small>(Não Obrigatória)</small></small></label>
								<input type="number" class="form-control" id="parcelas_cob" name="parcelas" placeholder="Parcelas" value="1">							
						</div>

							<div class="col-md-3">							
								<label>Data</label>
								<input type="date" class="form-control" id="data_cob" name="data"  value="<?php echo $data_atual ?>" required>							
						</div>	


						<div class="col-md-3">							
								<label>Vencimento</label>
								<input type="date" class="form-control" id="data_venc_cob" name="data_venc" placeholder="Data de Vencimento" value="<?php echo $data_atual ?>">							
						</div>
						
					</div>

				

					<div class="row">

							

						

						<div class="col-md-3">							
								<label>Júros % Dia</label>
								<input type="text" class="form-control" id="juros_cobranca" name="juros" placeholder="Júros se Houver" value="" oninput="mascaraMoeda(this)">							
						</div>


						<div class="col-md-3">							
								<label>Multa R$</label>
								<input type="text" class="form-control" id="multa_cobranca" name="multa" placeholder="Multa se Houver" value="" oninput="mascaraMoeda(this)">							
						</div>

						<div class="col-md-3">	


								<label>Frequência</label>
								<select class="form-select" name="frequencia" id="frequencia_cob">								
								<?php 
									$query = $pdo->query("SELECT * from frequencias where dias > 0 and empresa = '$id_empresa' order by id asc");
									$res = $query->fetchAll(PDO::FETCH_ASSOC);
									$linhas = @count($res);
									if($linhas > 0){
									for($i=0; $i<$linhas; $i++){

										$selec = '';
										if($res[$i]['dias'] == 30){
											$selec = 'selected';
										}
								 ?>
								  <option value="<?php echo $res[$i]['dias'] ?>" <?php echo $selec ?>><?php echo $res[$i]['frequencia'] ?></option>

								<?php } } ?>
									
								</select>	
						</div>

							<div class="col-md-3">							
								<label>Enviar Whatsapp</label>
								<select name="enviar_whatsapp" id="enviar_whatsapp_cob" class="form-select">	
									<option value="Sim">Sim</option>
									<option value="Não">Não</option>
								</select>						
						</div>


						

						
					</div>




					<div class="row">
						<div class="col-md-4">	


								<label>Dispositivo Cobrança</label>
								<select class="form-select" name="dispositivo" id="dispositivo">							
								<option value="">Dispositivo Padrão</option>	
								<?php 
									$query = $pdo->query("SELECT * from dispositivos where empresa = '$id_empresa' and status_api = 'conectado' order by id asc");
									$res = $query->fetchAll(PDO::FETCH_ASSOC);
									$linhas = @count($res);
									if($linhas > 0){
									for($i=0; $i<$linhas; $i++){

									$telefone = $res[$i]['telefone'];
									$tel = preg_replace('/\D/', '', $res[$i]['telefone']); // Remove tudo que não for número

									if (substr($tel, 0, 2) === '55') {
									    $tel = substr($tel, 2); // Remove DDI
									}

									if (strlen($tel) === 11) {
									    // Celular com 9 na frente
									    $tel = "(".substr($tel, 0, 2).") ".substr($tel, 2, 5)."-".substr($tel, 7, 4);
									} elseif (strlen($tel) === 10) {
									    // Fixo ou celular sem 9
									    $tel = "(".substr($tel, 0, 2).") ".substr($tel, 2, 4)."-".substr($tel, 6, 4);
									} else {
									    $tel = 'Número inválido';
									}

								 ?>
								  <option value="<?php echo $res[$i]['telefone'] ?>"><?php echo $tel ?></option>

								<?php } } ?>
									
								</select>	
						</div>

						<div class="col-md-3 mb-2">
							<label>Api Pagamento</label>
							<select class="form-select" id="api_pagamento_conta" name="api_pagamento_conta">
								<option value="">Padrão</option>
								<option value="Mercado Pago">Mercado Pago</option>
								<option value="Asaas">Asaas</option>
							</select>
						</div>

						<div class="col-md-5 mb-2">
							<label>Tipo Pagamentos Aceitáveis</label>
							<select class="form-select" id="pgtos_aceitaveis" name="pgtos_aceitaveis">
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


					<div class="row">
						<div class="col-md-4">
							<label>Taxa Pagamento Cartão API %</label>
							<input type="text" class="form-control" id="taxa_cartao_api_receber" name="taxa_cartao_api_receber" placeholder="Cartão Assas ou Mercado Pago"
								value="<?php echo @$taxa_cartao_api ?>">
						</div>

						<div class="col-md-8">							
								<label>Observações</label>
								<input type="text" class="form-control" id="obs_cob" name="obs" placeholder="Observações" >							
						</div>
					</div>



					<input type="hidden" class="form-control" id="id" name="id">

					<br>
					<small>
						<div id="mensagem" align="center"></div>
					</small>
				</div>
				<div class="modal-footer">
					<button id="btn_salvar" type="submit" class="btn btn-primary">Salvar <i class="fa-solid fa-check"></i>
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
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-primary text-white">
				<h4 class="modal-title" id="exampleModalLabel"><span id="titulo_dados"></span></h4>
				<button id="btn-fechar-dados" aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span
						class="text-white" aria-hidden="true">&times;</span></button>
			</div>

			<div class="modal-body">

				<div class="row">
					<div class="col-md-12">
						<div class="tile">
							<div class="table-responsive">
								<table id="" class="text-left table table-bordered">
									<tr>
										<td class="bg-primary text-white">Multa</td>
										<td><span id="multa_dados"></span></td>
									</tr>
									<tr>
										<td class="bg-primary text-white">juros</td>
										<td><span id="juros_dados"></span></td>
									</tr>
									<tr>
										<td class="bg-primary text-white w_150">Lançado Por</td>
										<td><span id="usuario_dados"></span></td>
									</tr>
									<tr>
										<td class="bg-primary text-white w_150">Frequência</td>
										<td><span id="frequencia_dados"></span></td>
									</tr>

									<tr>
										<td class="bg-primary text-white w_150">Api Pagamento Conta</td>
										<td><span id="api_pagamento_conta_dados"></span></td>
									</tr>

									<tr>
										<td class="bg-primary text-white w_150">Forma de Pgtos Aceitáveis</td>
										<td><span id="pgtos_aceitaveis_dados"></span></td>
									</tr>

									<tr>
										<td class="bg-primary text-white w_150">Taxa de Pagamento Cartão API</td>
										<td><span id="taxa_cartao_api_receber_dados"></span></td>
									</tr>
									
									<tr>
										<td class="bg-primary text-white w_150">OBS</td>
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






<!-- Modal Parcelas -->
<div class="modal fade" id="modalParcelas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">	
		<div class="modal-header bg-primary text-white">
				<h4 class="modal-title" id="exampleModalLabel"><span id="titulo_baixar">Parcelas</span></h4>
				<button id="btn-fechar-dados" aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span
						class="text-white" aria-hidden="true">&times;</span></button>
			</div>	
			<div class="modal-body">
						
				<small><div id="listar_parcelas" style="overflow: scroll; height:380px; scrollbar-width: thin;"></div></small>

				<input type="hidden" id="id_cobranca">				
			</div>
			
		</div>
	</div>
</div>



<!-- Modal Baixar -->
<div class="modal fade" id="modalBaixar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header bg-info text-white">
				<h4 class="modal-title" id="exampleModalLabel"><span id="titulo_baixar">Baixar Parcela</span></h4>
				<button id="btn-fechar-baixar" aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span
						class="text-white" aria-hidden="true">&times;</span></button>
			</div>	
			<form id="form_baixar">
			<div class="modal-body">
				

					<div class="row">
						<div class="col-md-4">							
								<label>Valor</label>
								<input type="text" class="form-control" id="valor_baixar" name="valor_baixar" placeholder="Valor" readonly="" oninput="mascaraMoeda(this)">							
						</div>						
					

							<div class="col-md-4">							
								<label>Total Júros</label>
								<input type="text" class="form-control" id="juros_baixar" name="juros_baixar" placeholder="Júros se Houver" onkeyup="calcular()">							
						</div>

						<div class="col-md-4">							
								<label>Multa R$</label>
								<input type="text" class="form-control" id="multa_baixar" name="multa_baixar" placeholder="Multa se Houver" onkeyup="calcular()" >							
						</div>


						
					</div>

				
					<div class="row">

						<div class="col-md-4">							
								<label>Data Pgto</label>
								<input type="date" class="form-control" id="data_baixa" name="data_baixa" placeholder="Data de Pagamento" value="<?php echo $data_atual ?>">							
						</div>

						<div class="col-md-4">							
								<label>Forma Pgto</label>
								<select name="forma_pgto" id="forma_pgto" class="form-select" onchange="calcular()" >
									<option value="">Selecionar Forma PGTO </option>
									<?php 
										$query = $pdo->query("SELECT * from formas_pgto where empresa = '$id_empresa' order by id asc");
						$res = $query->fetchAll(PDO::FETCH_ASSOC);
						$linhas = @count($res);
						for($i=0; $i<$linhas; $i++){
							echo '<option value="'.$res[$i]['id'].'">'.$res[$i]['nome'].'</option>';		
						}

									 ?>
								</select>
															
						</div>

						<div class="col-md-4">							
								<label>Valor Final</label>
								<input type="text" class="form-control" id="valor_final" name="valor_final" placeholder="Total Pago" required oninput="mascaraMoeda(this)">							
						</div>	

						
					</div>


					<div class="row" align="right">
						<div class="col-md-12">	
								<input type="checkbox" class="form-checkbox" id="residuo" name="residuo" value="Sim" style="display:inline-block;">
								<label style="display:inline-block;"><small>Resíduo Próxima Parcela</small></label>
						

						</div>	
					</div>


					


					<input type="hidden" class="form-control" id="id_baixar" name="id">					

				<br>
				<small><div id="mensagem_baixar" align="center"></div></small>
			</div>
			<div class="modal-footer">       
				<button id="btn_salvar_baixar" type="submit" class="btn btn-primary">Salvar</button>
			</div>
			</form>
		</div>
	</div>
</div>




<script type="text/javascript">
	var pag = "<?= $pag ?>"
</script>
<script src="js/ajax.js"></script>


<script type="text/javascript">
	$(document).ready(function () {
		$('.sel2').select2({
			dropdownParent: $('#modalForm')
		});

			$('.sel_cli').select2({
			//dropdownParent: $('#modalPerfil')
		});

	});
</script>



<script type="text/javascript">
	function buscar() {		
		var dataInicial = $('#dataInicial').val();
		var dataFinal = $('#dataFinal').val();
		var cliente = $('#cliente_busca').val();
		
		listar(dataInicial, dataFinal, cliente)
	}


	  function formatarMoeda(valor) {
    // Converte o valor para um número
    valor = parseFloat(valor);

    // Formata o número com duas casas decimais e separador de milhar
    return valor.toLocaleString('pt-BR', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
  }

	
</script>


<script type="text/javascript">

$("#form_baixar").submit(function () {

	var id_emp = $('#id_cobranca').val();
    event.preventDefault();
    var formData = new FormData(this);
      $('#mensagem_baixar').text('Carregando!!');
      $('#btn_salvar_baixar').hide();

    $.ajax({
        url: 'paginas/cobrancas/baixar.php',
        type: 'POST',
        data: formData,

        success: function (mensagem) {
        	var split = mensagem.split("*");
            $('#mensagem_baixar').text('');
            $('#mensagem_baixar').removeClass()
            if (split[0].trim() == "Salvo com Sucesso") {
            	
                $('#btn-fechar-baixar').click();
                mostrarParcelas(id_emp);                
                      

            } else {

                $('#mensagem_baixar').addClass('text-danger')
                $('#mensagem_baixar').text(split[0])
                alertErro(mensagem)
            }

            $('#btn_salvar_baixar').show();


        },

        cache: false,
        contentType: false,
        processData: false,

    });

});
</script>


<script>
	modalForm.addEventListener('shown.bs.modal', () => {
		descricao.focus()
	})
</script>