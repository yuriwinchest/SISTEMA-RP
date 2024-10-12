<?php
$tabela = 'anotacoes';
@session_start();
$id_usuario = @$_SESSION['id'];

require_once ("../../../conexao.php");
require_once ("../../verificar.php");

$query = $pdo->query("SELECT * from $tabela order by id desc");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = @count($res);
if ($linhas > 0) {
	echo <<<HTML
<small>
	<table class="table table-hover table-bordered text-nowrap border-bottom dt-responsive" id="tabela">
	<thead> 
	<tr>
	<th align="center" width="5%" class="text-center">Selecionar</th>
	<th>N°</th>		
	<th>data</th>		
	<th>Título</th>
	<th>Mensagem</th>
	<th>Usuário</th>
	<th>Monstrar na Home</th>
	<th>Privado</th>
	<th>Ações</th>
	</tr> 
	</thead> 
	<tbody>	
HTML;

	for ($i = 0; $i < $linhas; $i++) {
		$id = $res[$i]['id'];
		$titulo = $res[$i]['titulo'];
		$msg = $res[$i]['msg'];
		$usuario = $res[$i]['usuario'];
		$data = $res[$i]['data'];
		$mostrar_home = $res[$i]['mostrar_home'];
		$privado = $res[$i]['privado'];




		$query2 = $pdo->query("SELECT * FROM usuarios where id = '$usuario'");
		$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
		if (@count($res2) > 0) {
			$nome_usuario = $res2[0]['nome'];
		} else {
			$nome_usuario = 'Sem Usuário';
		}

		$dataF = implode('/', array_reverse(@explode('-', $data)));


		

		if ($privado == 'Sim' and $usuario != $id_usuario) {
			$priv = 'ocultar';
		} else {
			$priv = '';
		}

		$msg = str_replace('"', "**", $msg);
		
		$msgF = mb_strimwidth($msg, 0, 50, "...");

		echo <<<HTML
		<input type="text" id="texto_anot_{$id}" value="{$msg}" style="display:none">
<tr class="{$priv}">
<td align="center">
<div class="custom-checkbox custom-control">
<input type="checkbox" class="custom-control-input" id="seletor-{$id}" onchange="selecionar('{$id}')">
<label for="seletor-{$id}" class="custom-control-label mt-1 text-dark"></label>
</div>
</td>
<td>{$id}</td>
<td>{$dataF}</td>
<td>{$titulo}</td>
<td>{$msgF}</td>
<td>{$nome_usuario}</td>
<td>{$mostrar_home}</td>
<td>{$privado}</td>
<td>
	<a class="btn btn-info-light btn-sm" href="#" onclick="editar('{$id}','{$titulo}','{$usuario}','{$mostrar_home}','{$privado}')" title="Editar Dados"><i class="fa fa-edit"></i></a>

	<a class="btn btn-primary-light btn-sm" href="#" onclick="mostrar('{$id}','{$titulo}','{$dataF}','{$nome_usuario}','{$mostrar_home}','{$privado}')" title="Mostrar Dados"><i class="fa fa-info-circle"></i></a>

	<big><a href="#" class="btn btn-danger-light btn-sm" onclick="excluir('{$id}')" title="Excluir"><i class="fa fa-trash "></i></a></big>

	<form method="POST" class="btn btn-dark-light btn-sm" action="rel/anotacoes_class.php" target="_blank" style="display:inline-block">
		<input type="hidden" name="id" value="{$id}">
		<button title="Imprimir" style="background:transparent; border:none; margin:0; padding:0"><i class="fa fa-file-pdf-o " ></i></button>
	</form>



</td>
</tr>
HTML;

	}

} else {
	echo '<small>Não possui nenhuma anotação!</small>';
}


echo <<<HTML
</tbody>
<small><div align="center" id="mensagem-excluir"></div></small>
</table>
HTML;
?>



<script type="text/javascript">
	$(document).ready(function () {
		$('#tabela').DataTable({
			"language": {
				//"url" : '//cdn.datatables.net/plug-ins/1.13.2/i18n/pt-BR.json'
			},
			"ordering": false,
			"stateSave": true
		});
	});
</script>

<script type="text/javascript">
	function editar(id, titulo, usuario, mostrar_home, privado) {

		var msg = $('#texto_anot_'+id).val();



		$('#titulo_inserir').text('Editar Registro');

		$('#id').val(id);
		$('#titulo').val(titulo);
		$('#usuario').val(usuario);
		$('#mostrar_home').val(mostrar_home);
		$('#privado').val(privado);
		nicEditors.findEditor("area").setContent(msg);



		$('#modalForm').modal('show');
	}


	function mostrar(id, titulo, data, usuario, mostrar_home, privado) {


		var msg = $('#texto_anot_'+id).val();

		$('#id_dados').text(id);
		$('#titulo_dados').text(titulo);
		$('#data_dados').text(data);
		$('#mensagem_dados').html(msg);
		$('#usuario_dados').text(usuario);
		$('#mostrar_dados').text(mostrar_home);
		$('#privado_dados').text(privado);


		$('#modalDados').modal('show');

	}


	function limparCampos() {
		$('#id').val('');
		$('#titulo').val('');
		$('#msg').val('');
		$('#usuario').val('');
		$('#mostrar_home').val('Não').change();
		$('#privado').val('Não').change();

		nicEditors.findEditor("area").setContent('');

		$('#ids').val('');
		$('#btn-deletar').hide();
	}

	function selecionar(id) {

		var ids = $('#ids').val();

		if ($('#seletor-' + id).is(":checked") == true) {
			var novo_id = ids + id + '-';
			$('#ids').val(novo_id);
		} else {
			var retirar = ids.replace(id + '-', '');
			$('#ids').val(retirar);
		}

		var ids_final = $('#ids').val();
		if (ids_final == "") {
			$('#btn-deletar').hide();
			$('#btn-baixar').hide();
		} else {
			$('#btn-deletar').show();
			$('#btn-baixar').show();
		}
	}



	function deletarSel() {
		//$('#mensagem-excluir').text('Excluindo...')


		$('body').removeClass('timer-alert');
		swal({
			title: "Deseja Excluir?",
			text: "Você não conseguirá recuperá-lo novamente!",
			type: "error",
			showCancelButton: true,
			confirmButtonClass: "btn btn-danger",
			confirmButtonText: "Sim, Excluir!",
			closeOnConfirm: true

		},
			function () {

				//swal("Excluído(a)!", "Seu arquivo imaginário foi excluído.", "success");

				var ids = $('#ids').val();
				var id = ids.split("-");

				for (i = 0; i < id.length - 1; i++) {
					excluirMultiplos(id[i]);
				}

				setTimeout(() => {
                    excluido();
                    listar();
                }, 1000);

				limparCampos();



			});

	}
</script>