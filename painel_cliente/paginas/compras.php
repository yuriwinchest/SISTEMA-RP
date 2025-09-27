<?php 
$pag = 'compras';

//verificar se ele tem a permissão de estar nessa página
if(@$lista_vendas == 'ocultar'){
    echo "<script>window.location='index.php'</script>";
    exit();
}
?>

<div class="justify-content-between">
	<form action="rel/pagar_class.php" target="_blank" method="POST">
 	<div class="left-content mt-2">




		<div class="row" style="padding:15px; margin-top: 15px">
		<div class="col-md-5" style="margin-bottom:5px;">
			<div style="float:left; margin-right:10px"><span><small><i title="Data de Vencimento Inicial" class="fa fa-calendar-o"></i></small></span></div>
			<div  style="float:left; margin-right:20px">
				<input type="date" class="form-control " name="data-inicial"  id="data-inicial" value="<?php echo date('Y-m-d') ?>" required onchange="buscar()">
			</div>

			<div style="float:left; margin-right:10px"><span><small><i title="Data de Vencimento Final" class="fa fa-calendar-o"></i></small></span></div>
			<div  style="float:left; margin-right:30px">
				<input type="date" class="form-control " name="data-final"  id="data-final" value="<?php echo date('Y-m-d') ?>" required onchange="buscar()">
			</div>
		</div>

		<div style="display: inline-block;">
			<select class="form-select ocultar_mobile" aria-label="Default select example" name="status-busca" id="status-busca" onchange="buscar()">
				<option value="">Todas</option>
				<option value="Não">Pendentes</option>
				<option value="Sim">Pagas</option>
				
			</select>
		</div>
	

	
		<small class="ocultar_mobile" style="display: inline-block; position: absolute; right: 20px; margin-top: 10px"><i class="fa fa-usd verde"></i> <span class="text-dark">Total: <span class="verde" id="total_itens"></span></span></small>



	</div>

	<input type="hidden" name="tipo_data" id="tipo_data">
	<input type="hidden" name="tipo_conta" id="tipo_conta">
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





</div>


		<script type="text/javascript">var pag = "<?=$pag?>"</script>
		<script src="js/ajax.js"></script>

		<script type="text/javascript">
			$(document).ready(function() {
				
				$('.sel2').select2({
					dropdownParent: $('#modalForm')
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

			function buscar(){
				var venc = $('#tipo_conta').val();
				var dataInicial = $('#data-inicial').val();
				var dataFinal = $('#data-final').val();
				var status = $('#status-busca').val();
				listar(venc, dataInicial, dataFinal, status);

			}

		</script>


