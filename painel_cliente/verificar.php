<?php 
@session_start();
if (@$_SESSION['id_cliente'] == ""){
	echo '<script>window.location="../acesso"</script>';
	exit();
}

 ?>
