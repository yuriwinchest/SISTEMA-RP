<?php
$pag = 'listar_contratos';

if (@$pag == 'ocultar') {
	echo "<script>window.location='index'</script>";
	exit();
}

?>

<br>
<div style="display: inline-block; margin-bottom: 10px">
				<input style="height:35px; width:49%; font-size: 13px;" type="date" class="form-control2" name="dataInicial"
					id="dataInicial" value="<?php echo $data_inicio_mes ?>" required onchange="buscar()">
				<input style="height:35px; width:49%; font-size: 13px;" type="date" class="form-control2" name="dataFinal"
					id="dataFinal" value="<?php echo $data_final_mes ?>" required onchange="buscar()">
			</div>


<div style="display: inline-block; vertical-align: top; margin-left: 10px;">
  <div class="btn-group" role="group" aria-label="Filtros de Contrato">
    <button type="button" class="btn btn-outline-primary btn-sm" onclick="buscar('todos')">Todos</button>
    <button type="button" class="btn btn-outline-success btn-sm" onclick="buscar('assinados')">Assinados</button>
    <button type="button" class="btn btn-outline-warning btn-sm" onclick="buscar('aguardando')">Aguardando</button>
    <button type="button" class="btn btn-outline-danger btn-sm" onclick="buscar('vencidos')">Vencidos</button>
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


 <form method="POST" action="rel/contrato_class.php" target="_blank">
<input type="hidden" id="texto_contrato" name="texto">
<input type="hidden" id="cabecalho_form" name="cabecalho_form">
<input type="hidden" id="cliente_form" name="cliente" >
<input type="hidden" id="modelo_form" name="modelo" >
<button type="submit" id="botao_form" style="display:none"></button>
</form>


<script type="text/javascript">var pag = "<?= $pag ?>"</script>
<script src="js/ajax.js"></script>

<script type="text/javascript">
	function buscar(p) {		
		var dataInicial = $('#dataInicial').val();
		var dataFinal = $('#dataFinal').val();		
		listar(p, dataInicial, dataFinal)
	}


</script>