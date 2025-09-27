<?php 
@session_start();
$id_empresa = @$_SESSION['empresa'];
require_once("../../../conexao.php");
require_once("../../buscar_config.php");

$pagina = 'receber';

$cliente = @$_POST['cliente'];


echo '<option value="">Selecionar Conta</option>';


$query = $pdo->query("SELECT * FROM receber where empresa = '$id_empresa' and cliente = '$cliente' and data_assinatura is not null order by id desc");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
for($i=0; $i < @count($res); $i++){
	foreach ($res[$i] as $key => $value){}

	echo '<option value="'.$res[$i]['id'].'">'.$res[$i]['descricao'].' / '.$res[$i]['valor'].'</option>';

}


?>


