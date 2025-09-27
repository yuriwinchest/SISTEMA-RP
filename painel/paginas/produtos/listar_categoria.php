<?php 
@session_start();
$id_empresa = @$_SESSION['empresa'];
require_once("../../../conexao.php");
require_once("../../buscar_config.php");
$pagina = 'categorias';

$valor = @$_POST['valor'];

echo '<select class="sel2" name="categoria" id="categoria" style="width:100%;" required>';

if($valor == ""){
	echo '<option value="">Selecionar Categoria</option>';
}

$query = $pdo->query("SELECT * FROM categorias where empresa = '$id_empresa' order by id desc");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
for($i=0; $i < @count($res); $i++){
	foreach ($res[$i] as $key => $value){}

	echo '<option value="'.$res[$i]['id'].'">'.$res[$i]['nome'].'</option>';

}

echo '</select>';


?>

	<script type="text/javascript">
			$(document).ready(function() {				
				$('.sel2').select2({
					dropdownParent: $('#modalForm')
					
				});
			});
	</script>




