<?php 
$pag = 'contratos';

?>


<div class="row row-sm">
<div class="col-lg-12">
<div class="card custom-card">
<div class="card-body" id="listar">

</div>
</div>
</div>
</div>



 <form method="POST" action="../painel/rel/contrato_class.php" target="_blank">
 	<input type="hidden" name="gerar" id="gerar" value="Sim">   
<input type="hidden" id="texto_contrato" name="texto">
<input type="hidden" id="cabecalho_form" name="cabecalho_form">
<input type="hidden" id="cliente_form" name="cliente" >
<input type="hidden" id="modelo_form" name="modelo" >
<button type="submit" id="botao_form" style="display:none"></button>
</form>


	<script type="text/javascript">var pag = "<?=$pag?>"</script>
		<script src="js/ajax.js"></script>
