<?php
$tabela = 'agendas';
require_once("../../../conexao.php");


$query = $pdo->query("SELECT * from $tabela order by id desc");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = @count($res);


for ($i = 0; $i < $linhas; $i++) {
	$id = $res[$i]['id'];
	$title = $res[$i]['title'];
	$color = $res[$i]['color'];
	$start = $res[$i]['start'];
	$end = $res[$i]['end'];
	$obs = $res[$i]['obs'];
	$user_id = $res[$i]['user_id'];


	$eventos[] = [
		
		'id' => $id,
		'title' => $title,
		'color' => $color,
		'start' => $start,
		'end' => $end,
		'obs' => $obs,
		'user_id' => $user_id,
	];
}




echo json_encode($eventos);


