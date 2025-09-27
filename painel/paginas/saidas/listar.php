<?php 
@session_start();
$id_empresa = @$_SESSION['empresa'];

$tabela = 'saidas';
require_once("../../../conexao.php");
require_once("../../buscar_config.php");

$dataInicial = @$_POST['p1'];
$dataFinal = @$_POST['p2'];

if($dataInicial != "" and $dataFinal != ""){
	$query = $pdo->query("SELECT * from $tabela where data >= '$dataInicial' and data <= '$dataFinal' and empresa = '$id_empresa' order by id asc");
}else{
	$query = $pdo->query("SELECT * from $tabela where empresa = '$id_empresa' order by id desc limit 50");
}

$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = @count($res);
if($linhas > 0){
echo <<<HTML
<small>
	<table class="table table-striped table-hover table-bordered text-nowrap border-bottom dt-responsive" id="tabela">
	<thead>
	<tr> 
	<th>Produto</th>	
	<th>Quantidade</th>		
	<th>Motivo</th>
	<th>Usuário</th>
	<th>Data</th>	
	<th>Excluir</th>
	</tr> 
	</thead> 
	<tbody>	
HTML;

for($i=0; $i<$linhas; $i++){
	$id = $res[$i]['id'];
	$produto = $res[$i]['produto'];	
	$quantidade = $res[$i]['quantidade'];	
	$motivo = $res[$i]['motivo'];
	$usuario = $res[$i]['usuario'];
	$data = $res[$i]['data'];
	
	
	$dataF = implode('/', array_reverse(@explode('-', $data)));

	$query2 = $pdo->query("SELECT * from produtos where id = '$produto'");
	$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
	$nome_produto = @$res2[0]['nome'];
	$estoque = @$res2[0]['estoque'];

	$query2 = $pdo->query("SELECT * from usuarios where id = '$usuario'");
	$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
	$nome_usuario = @$res2[0]['nome'];
	

echo <<<HTML
<tr>
<td>{$nome_produto}</td>
<td>{$quantidade}</td>
<td>{$motivo}</td>
<td>{$nome_usuario}</td>
<td>{$dataF}</td>
<td>	

<big><a href="#" class="btn btn-danger-light btn-sm" onclick="excluir('{$id}')" title="Excluir"><i class="fa fa-trash-can"></i></a></big>


</td>
</tr>
HTML;

}

}else{
	echo 'Não possui nenhum cadastro!';
}


echo <<<HTML
</tbody>
<small><div align="center" id="mensagem-excluir"></div></small>
</table>
HTML;
?>



<script type="text/javascript">
	$(document).ready( function () {		
    $('#tabela').DataTable({
    	"language" : {
            //"url" : '//cdn.datatables.net/plug-ins/1.13.2/i18n/pt-BR.json'
        },
        "ordering": false,
		"stateSave": true
    });
} );
</script>

