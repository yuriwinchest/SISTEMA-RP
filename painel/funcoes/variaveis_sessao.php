<?php 
@session_start();
$id_empresa = @$_SESSION['empresa'];

if($id_empresa == ""){
	echo 'Sessão expirada! Atualize a página!';
	exit();
}

$filtro = $_POST['filtro'];

unset($_SESSION['filtro_pagina']);
@$_SESSION['filtro_pagina'] = $filtro;


?>