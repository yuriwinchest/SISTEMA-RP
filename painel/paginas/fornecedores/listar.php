<?php
@session_start();
$id_empresa = @$_SESSION['empresa'];
$tabela = 'fornecedores';
require_once("../../../conexao.php");
require_once("../../verificar.php");
require_once("../../buscar_config.php");

$query = $pdo->query("SELECT * from $tabela where empresa = '$id_empresa' order by id desc");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = @count($res);
if ($linhas > 0) {
	echo <<<HTML
<small>
	<table class="table table-striped table-hover table-bordered text-nowrap border-bottom dt-responsive" id="tabela">
	<thead>
	<tr>
	<th align="center" width="5%" class="text-center">Selecionar</th>
	<th>Empresa</th>
	<th>Telefone</th>
	<th>Vendedor</th>
	<th>Pix</th>
	<th>Ações</th>
	</tr>
	</thead>
	<tbody>
HTML;

	for ($i = 0; $i < $linhas; $i++) {
		$id = $res[$i]['id'];
		$nome = $res[$i]['nome'];
		$telefone = $res[$i]['telefone'];
		$email = $res[$i]['email'];
		$endereco = $res[$i]['endereco'];
		$data = $res[$i]['data'];
		$pix = $res[$i]['pix'];
		$numero = $res[$i]['numero'];
		$bairro = $res[$i]['bairro'];
		$cidade = $res[$i]['cidade'];
		$estado = $res[$i]['estado'];
		$cep = $res[$i]['cep'];
		$cnpj = $res[$i]['cnpj'];
		$complemento = $res[$i]['complemento'];
		$tipo_chave = $res[$i]['tipo_chave'];
		$nome_vendedor = $res[$i]['nome_vendedor'];
		$telefone_vendedor = $res[$i]['telefone_vendedor'];

		$dataF = implode('/', array_reverse(@explode('-', $data)));

		if ($pix != '') {
			$chave_pix_mod = $tipo_chave . ': ' . $pix;
		} else {
			$chave_pix_mod = '';
		}


		echo <<<HTML
<tr>
<td align="center">
<div class="custom-checkbox custom-control">
<input type="checkbox" class="custom-control-input" id="seletor-{$id}" onchange="selecionar('{$id}')">
<label for="seletor-{$id}" class="custom-control-label mt-1 text-dark"></label>
</div>
</td>
<td>{$nome}</td>
<td>{$telefone}</td>
<td>{$nome_vendedor}</td>
<td>{$chave_pix_mod}</td>
<td>
	<a class="btn btn-info-light btn-sm" href="#" onclick="editar('{$id}','{$nome}','{$email}','{$telefone}','{$endereco}','{$pix}','{$numero}','{$bairro}','{$cidade}','{$estado}','{$cep}','{$cnpj}','{$complemento}', '{$tipo_chave}','{$nome_vendedor}','{$telefone_vendedor}')" title="Editar Dados"><i class="fa fa-edit"></i></a>

<big><a href="#" class="btn btn-danger-light btn-sm" onclick="excluir('{$id}')" title="Excluir"><i class="fa fa-trash-can"></i></a></big>

	<a class="btn btn-warning-light btn-sm" href="#" onclick="mostrar('{$nome}','{$email}','{$telefone}','{$endereco}','{$pix}','{$dataF}','{$numero}','{$bairro}','{$cidade}','{$estado}','{$cep}','{$cnpj}','{$complemento}', '{$tipo_chave}','{$nome_vendedor}','{$telefone_vendedor}')" title="Mostrar Dados"><i class="fa fa-eye"></i></a>

<a class="btn btn-dark-light btn-sm" href="#" onclick="arquivo('{$id}', '{$nome}')" title="Inserir / Ver Arquivos"><i class="fa fa-file-o " ></i></a>



</td>
</tr>
HTML;
	}
} else {
	echo '<small>Não possui nenhum cadastro!</small>';
}


echo <<<HTML
</tbody>
<small><div align="center" id="mensagem-excluir"></div></small>
</table>
HTML;
?>



<script type="text/javascript">
	$(document).ready(function() {
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
	function editar(id, nome, email, telefone, endereco, pix, numero, bairro, cidade, estado, cep, cnpj, complemento, tipo_chave, nome_vendedor, telefone_vendedor) {
		$('#mensagem').text('');
		$('#titulo_inserir').text('Editar Registro');

		$('#id').val(id);
		$('#nome').val(nome);
		$('#email').val(email);
		$('#telefone').val(telefone);
		$('#endereco').val(endereco);
		$('#pix').val(pix);
		$('#numero').val(numero);
		$('#bairro').val(bairro);
		$('#cidade').val(cidade);
		$('#estado').val(estado).change();
		$('#tipo_chave').val(tipo_chave).change();
		$('#cep').val(cep);
		$('#cnpj').val(cnpj);
		$('#complemento').val(complemento);
		$('#nome_vendedor').val(nome_vendedor);
		$('#telefone_vendedor').val(telefone_vendedor);

		$('#modalForm').modal('show');
	}


	function mostrar(nome, email, telefone, endereco, pix, data, numero, bairro, cidade, estado, cep, cnpj, complemento, tipo_chave, nome_vendedor, telefone_vendedor) {

		if (pix != '') {
			$('#pix_dados').text(tipo_chave + ': ' + pix);
		} else {
			$('#pix_dados').text(tipo_chave);
		}

		$('#titulo_dados').text(nome);
		$('#email_dados').text(email);
		$('#telefone_dados').text(telefone);
		$('#endereco_dados').text(endereco);

		$('#data_dados').text(data);
		$('#numero_dados').text(numero);
		$('#bairro_dados').text(bairro);
		$('#cidade_dados').text(cidade);
		$('#estado_dados').text(estado);
		$('#cep_dados').text(cep);
		$('#cnpj_dados').text(cnpj);
		$('#complemento_dados').text(complemento);
		$('#nome_vendedor_dados').text(nome_vendedor);
		$('#telefone_vendedor_dados').text(telefone_vendedor);

		$('#modalDados').modal('show');
	}

	function limparCampos() {
		$('#id').val('');
		$('#nome').val('');
		$('#email').val('');
		$('#telefone').val('');
		$('#endereco').val('');
		$('#pix').val('');
		$('#numero').val('');
		$('#bairro').val('');
		$('#cidade').val('');
		$('#estado').val('').change();
		$('#cep').val('');
		$('#cnpj').val('');
		$('#complemento').val('');
		$('#tipo_chave').val('').change();
		$('#nome_vendedor').val('');
		$('#telefone_vendedor').val('');

		$('#ids').val('');
		$('#btn-deletar').hide();
	}


	function arquivo(id, nome) {
		$('#id-arquivo').val(id);
		$('#nome-arquivo').text(nome);
		$('#modalArquivos').modal('show');
		$('#mensagem-arquivo').text('');
		$('#arquivo_conta').val('');
		listarArquivos();
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
		} else {
			$('#btn-deletar').show();
		}
	}

		// ALERT EXCLUIR #######################################
		function deletarSel(id) {
		const swalWithBootstrapButtons = Swal.mixin({
			customClass: {
				confirmButton: "btn btn-success", // Adiciona margem à direita do botão "Sim, Excluir!"
				cancelButton: "btn btn-danger me-1"
			},
			buttonsStyling: false
		});
		swalWithBootstrapButtons.fire({
			title: "Deseja Excluir?",
			text: "Você não conseguirá recuperá-lo novamente!",
			icon: "warning",
			showCancelButton: true,
			confirmButtonText: "Sim, Excluir!",
			cancelButtonText: "Não, Cancelar!",
			reverseButtons: true
		}).then((result) => {
			if (result.isConfirmed) {
				// Realiza a requisição AJAX para excluir o item
				var ids = $('#ids').val();
				var id = ids.split("-");
				for (i = 0; i < id.length - 1; i++) {
					excluirMultiplos(id[i]);
				}
				setTimeout(() => {
					// Ação de exclusão aqui
					Swal.fire({
						title: 'Excluido com Sucesso!',
						text: 'Fecharei em 1 segundo.',
						icon: "success",
						timer: 1000
					})
					listar();
				}, 1000);
				limparCampos();
			} else if (result.dismiss === Swal.DismissReason.cancel) {
				swalWithBootstrapButtons.fire({
					title: "Cancelado",
					text: "Fecharei em 1 segundo.",
					icon: "error",
					timer: 1000,
					timerProgressBar: true,
				});
			}
		});
	}
</script>