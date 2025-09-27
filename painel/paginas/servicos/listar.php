<?php 
@session_start();
$id_empresa = @$_SESSION['empresa'];
require_once("../../../conexao.php");
require_once("../../buscar_config.php");
$tabela = 'servicos';


$query = $pdo->query("SELECT * from $tabela where empresa = '$id_empresa' order by nome asc");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = @count($res);
if($linhas > 0){
echo <<<HTML
<small>
	<table class="table table-striped table-hover table-bordered text-nowrap border-bottom dt-responsive" id="tabela">
	<thead> 
	<tr>
	<th align="center" width="5%" class="text-center">Selecionar</th>
	<th>Nome</th>	
	<th>Valor</th>	
	<th>Comissão %</th>	
	<th>Dias</th>	
	<th>Foto</th>	
	<th>Ações</th>
	</tr> 
	</thead> 
	<tbody>	
HTML;

for($i=0; $i<$linhas; $i++){
	$id = $res[$i]['id'];
	$nome = $res[$i]['nome'];
	$valor = $res[$i]['valor'];
	$comissao = $res[$i]['comissao'];
	$dias = $res[$i]['dias'];	
	$ativo = $res[$i]['ativo'];	
	$foto = $res[$i]['foto'];
	$mostrar_site = $res[$i]['mostrar_site'];
	$descricao = $res[$i]['descricao'];

	if($ativo == 'Sim'){
	$icone = 'bi bi-check-square-fill';
	$titulo_link = 'Desativar Usuário';
	$acao = 'Não';
	$classe_ativo = '';
	}else{
		$icone = 'bi bi-square';
		$titulo_link = 'Ativar Usuário';
		$acao = 'Sim';
		$classe_ativo = '#c4c4c4';
	}

$valorF = number_format($valor, 2, ',', '.'); 


echo <<<HTML
<tr style="color:{$classe_ativo}">
<td align="center">
<div class="custom-checkbox custom-control">
<input type="checkbox" class="custom-control-input" id="seletor-{$id}" onchange="selecionar('{$id}')">
<label for="seletor-{$id}" class="custom-control-label mt-1 text-dark"></label>
</div>
</td>
<td>{$nome}</td>
<td>R$ {$valorF}</td>
<td>{$comissao}</td>
<td>{$dias}</td>
<td><a class="icones_mobile" href="#"><img class="hovv" src="images/servicos/{$foto}" width="25px"></td>

<td>
	<a class="btn btn-info btn-sm" href="#" onclick="editar('{$id}','{$nome}','{$valor}','{$comissao}','{$dias}','{$foto}','{$mostrar_site}','{$descricao}')" title="Editar Dados"><i class="fa fa-edit"></i></a></big>

<big><a href="#" class="btn btn-danger-light btn-sm" onclick="excluir('{$id}')" title="Excluir"><i class="fa fa-trash-can"></i></a></big>

<a class="btn btn-success btn-sm" href="#" onclick="ativar('{$id}', '{$acao}')" title="{$titulo_link}"><i class="fa {$icone}"></i></a>

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

<script type="text/javascript">
	function editar(id, nome, valor, comissao, dias, foto, mostrar_site, descricao){
		$('#mensagem').text('');
    	$('#titulo_inserir').text('Editar Registro');

    	$('#id').val(id);
    	$('#nome').val(nome);
    	$('#valor').val(valor);
    	$('#dias').val(dias);    	
    	$('#comissao').val(comissao);
    	$('#mostrar_site').val(mostrar_site).change();
    	$('#descricao').val(descricao);

    	$('#foto').val('');
		$('#target').attr('src', 'images/servicos/' + foto);

    	$('#modalForm').modal('show');
	}



	function limparCampos(){
		$('#id').val('');
    	$('#nome').val('');
    	$('#dias').val('');
    	$('#valor').val('');

    	$('#target').attr('src', 'images/servicos/sem-foto.jpg');
		$('#foto').val('');
    	
    	$('#comissao').val('');

    	$('#mostrar_site').val('Sim').change();
    	$('#descricao').val('');

    	$('#ids').val('');
    	$('#btn-deletar').hide();	
	}

	function selecionar(id){

		var ids = $('#ids').val();

		if($('#seletor-'+id).is(":checked") == true){
			var novo_id = ids + id + '-';
			$('#ids').val(novo_id);
		}else{
			var retirar = ids.replace(id + '-', '');
			$('#ids').val(retirar);
		}

		var ids_final = $('#ids').val();
		if(ids_final == ""){
			$('#btn-deletar').hide();
		}else{
			$('#btn-deletar').show();
		}
	}

	function deletarSel(){
		var ids = $('#ids').val();
		var id = ids.split("-");
		
		for(i=0; i<id.length-1; i++){
			excluirMultiplos(id[i]);			
		}


		setTimeout(() => {
			listar();

		}, 1000);
		limparCampos();
	}
</script>