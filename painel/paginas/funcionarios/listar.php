<?php
@session_start();
$id_empresa = @$_SESSION['empresa'];
$tabela = 'usuarios';
require_once("../../../conexao.php");
require_once("../../buscar_config.php");

$query = $pdo->query("SELECT * from $tabela where nivel != 'Cliente' and nivel != 'Administrador' and empresa = '$id_empresa' order by id desc");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = @count($res);
if ($linhas > 0) {
	echo <<<HTML
<small>
	<table class="table table-hover table-bordered text-nowrap border-bottom dt-responsive" id="tabela">
	<thead> 
	<tr> 
	<th align="center" width="5%" class="text-center">Selecionar</th>
	<th>Nome</th>	
	<th>Telefone</th>	
	<th>Email</th>	
	<th>Nível</th>	
	<th class="text-center">Foto</th>	
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
		$senha = $res[$i]['senha'];
		$foto = $res[$i]['foto'];
		$nivel = $res[$i]['nivel'];
		$endereco = $res[$i]['endereco'];
		$ativo = $res[$i]['ativo'];
		$data = $res[$i]['data'];
		$pix = $res[$i]['pix'];
		$numero = $res[$i]['numero'];
		$bairro = $res[$i]['bairro'];
		$cidade = $res[$i]['cidade'];
		$estado = $res[$i]['estado'];
		$cep = $res[$i]['cep'];
		$data_nasc = $res[$i]['data_nasc'];
		$acessar_painel = $res[$i]['acessar_painel'];
		$complemento = $res[$i]['complemento'];
		$tipo_chave = $res[$i]['tipo_chave'];
		$comissao = $res[$i]['comissao'];


			$salario = $res[$i]['salario'];
$valor_hora = $res[$i]['valor_hora'];
$hora_entrada = $res[$i]['hora_entrada'];
$hora_saida = $res[$i]['hora_saida'];
$jornada_horas = $res[$i]['jornada_horas'];

	$salarioF = @number_format($salario, 2, ',', '.');
$valor_horaF = @number_format($valor_hora, 2, ',', '.');

		$dataF = implode('/', array_reverse(@explode('-', $data)));

		$data_nascF = implode('/', array_reverse(@explode('-', $data_nasc)));

		$tel_whatsF = '55' . preg_replace('/[ ()-]+/', '', $telefone);

		if ($ativo == 'Sim') {
			$icone = 'fa-check-square';
			$titulo_link = 'Desativar Usuário';
			$acao = 'Não';
			$classe_ativo = '';
		} else {
			$icone = 'fa-square-o';
			$titulo_link = 'Ativar Usuário';
			$acao = 'Sim';
			$classe_ativo = '#c4c4c4';
		}

		if ($nivel == 'Administrador') {
			$senha = '******';
			$cor_adm = 'bg-danger-transparent text-danger';
		} else {
			$cor_adm = 'bg-success-transparent text-success';
		}

		if($telefone != '') {
			$ocultar_whats = '';
		}else{
			$ocultar_whats = 'ocultar';
		}



		echo <<<HTML
<tr >
<td align="center">
<div class="custom-checkbox custom-control">
<input type="checkbox" class="custom-control-input" id="seletor-{$id}" onchange="selecionar('{$id}')">
<label for="seletor-{$id}" class="custom-control-label mt-1 text-dark"></label>
</div>
</td>
<td style="color:{$classe_ativo}">{$nome}</td>
<td style="color:{$classe_ativo}">{$telefone}</td>
<td style="color:{$classe_ativo}">{$email}</td>
<td><span class="badge font-weight-semibold {$cor_adm} tx-12" style="width:90%;">{$nivel}</span></td>
<td class="text-center" style="color:{$classe_ativo}"><img alt="avatar" width="30px" height="30px" class="rounded-circle hovv" onclick="mostrar('{$nome}','{$email}','{$telefone}','{$endereco}','{$ativo}','{$dataF}', '{$senha}', '{$nivel}', '{$foto}','{$pix}','{$data_nasc}','{$numero}','{$bairro}','{$cidade}','{$estado}','{$cep}','{$acessar_painel}','{$complemento}','{$tipo_chave}', '{$salarioF}', '{$valor_horaF}', '{$hora_entrada}', '{$hora_saida}', '{$jornada_horas}')" src="../sas/images/perfil/{$foto}" width="25px"></td>
<td>
	<a class="btn btn-info-light btn-sm" href="#" onclick="editar('{$id}','{$nome}','{$email}','{$telefone}','{$endereco}','{$nivel}','{$pix}','{$data_nascF}','{$numero}','{$bairro}','{$cidade}','{$estado}','{$cep}','{$acessar_painel}','{$complemento}','{$tipo_chave}', '{$foto}', '{$comissao}', '{$salario}', '{$valor_hora}', '{$hora_entrada}', '{$hora_saida}', '{$jornada_horas}')" title="Editar Dados"><i class="fa fa-edit "></i></a>

<a href="#" class="btn btn-danger-light btn-sm" onclick="excluir('{$id}')" title="Excluir"><i class="fa fa-trash-can text-danger"></i></a>

<a class="btn btn-warning-light btn-sm" href="#" onclick="mostrar('{$nome}','{$email}','{$telefone}','{$endereco}','{$ativo}','{$dataF}', '{$senha}', '{$nivel}', '{$foto}','{$pix}','{$data_nasc}','{$numero}','{$bairro}','{$cidade}','{$estado}','{$cep}','{$acessar_painel}','{$complemento}','{$tipo_chave}', '{$salarioF}', '{$valor_horaF}', '{$hora_entrada}', '{$hora_saida}', '{$jornada_horas}')" title="Mostrar Dados"><i class="fa fa-eye "></i></a>

<a class="btn btn-success-light btn-sm" href="#" onclick="ativar('{$id}', '{$acao}')" title="{$titulo_link}"><i class="fa {$icone} "></i></a>

<a class="btn btn-dark-light btn-sm" href="#" onclick="arquivo('{$id}', '{$nome}')" title="Inserir / Ver Arquivos"><i class="fa fa-file-o " ></i></a>

<a class="{$ocultar_whats} btn btn-success-light btn-sm" class="" href="http://api.whatsapp.com/send?1=pt_BR&phone={$tel_whatsF}" title="Whatsapp" target="_blank"><i style="color: green" class="bi bi-whatsapp"></i></i></a>

</td>
</tr>
HTML;
	}
} else {
	echo 'Não possui nenhum cadastro!';
}


echo <<<HTML
</tbody>
<small><div align="center" id="mensagem-excluir"></div></small>
</table>
</small>
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
	function editar(id, nome, email, telefone, endereco, nivel, pix, data_nasc, numero, bairro, cidade, estado, cep, acessar_painel, complemento, tipo_chave, foto, comissao, salario, hora, hora_entrada, hora_saida, jornada) {
		$('#mensagem').text('');
		$('#titulo_inserir').text('Editar Registro');

		$('#id').val(id);
		$('#nome').val(nome);
		$('#email').val(email);
		$('#telefone').val(telefone);
		$('#endereco').val(endereco);
		$('#nivel').val(nivel).change();
		$('#pix').val(pix);
		$('#numero').val(numero);
		$('#bairro').val(bairro);
		$('#cidade').val(cidade);
		$('#estado').val(estado).change();
		$('#cep').val(cep);
		$('#data_nasc').val(data_nasc);
		$('#complemento').val(complemento);
		$('#acessar_painel').val(acessar_painel).change();
		$('#tipo_chave').val(tipo_chave).change();

			$('#salario').val(salario);	
		$('#valor_hora').val(hora);	
		$('#hora_entrada').val(hora_entrada);	
		$('#hora_saida').val(hora_saida);	
		$('#jornada_horas').val(jornada);

		$('#comissao').val(comissao);

		$('#target').attr("src", "../sas/images/perfil/" + foto);

		$('#modalForm').modal('show');
	}


	function mostrar(nome, email, telefone, endereco, ativo, data, senha, nivel, foto, pix, data_nasc, numero, bairro, cidade, estado, cep, acessar_painel, complemento, tipo_chave, salario, hora, hora_entrada, hora_saida, jornada) {

		if (pix != '') {
			$('#pix_dados').text(tipo_chave + ': ' + pix);
		} else {
			$('#pix_dados').text(tipo_chave);
		}

		$('#titulo_dados').text(nome);
		$('#email_dados').text(email);
		$('#telefone_dados').text(telefone);
		$('#endereco_dados').text(endereco);
		$('#ativo_dados').text(ativo);
		$('#data_dados').text(data);
		$('#senha_dados').text(senha);
		$('#nivel_dados').text(nivel);
		$('#data_nasc_dados').text(data_nasc);
		$('#numero_dados').text(numero);
		$('#bairro_dados').text(bairro);
		$('#cidade_dados').text(cidade);
		$('#estado_dados').text(estado);
		$('#cep_dados').text(cep);
		$('#complemento_dados').text(complemento);
		$('#acessar_painel_dados').text(acessar_painel);

		$('#salario_mostrar').text(salario);
		$('#hora_mostrar').text(hora);
		$('#hora_entrada_mostrar').text(hora_entrada);
		$('#hora_saida_mostrar').text(hora_saida);
		$('#jornada_mostrar').text(jornada);

		

		$('#foto_dados').attr("src", "../sas/images/perfil/" + foto);

		$('#modalDados').modal('show');
	}

	function limparCampos() {
		$('#id').val('');
		$('#nome').val('');
		$('#email').val('');
		$('#telefone').val('');
		$('#endereco').val('');
		$('#pix').val('');
		$('#data_nasc').val('');
		$('#numero').val('');
		$('#bairro').val('');
		$('#cidade').val('');
		$('#estado').val('').change();
		$('#tipo_chave').val('').change();
		$('#cep').val('');
		$('#complemento').val('');
		$('#comissao').val('');

		$('#salario').val('');	
		$('#valor_hora').val('');
		$('#hora_entrada').val('');			
		$('#hora_saida').val('');
		$('#jornada_horas').val('');

		$('#target').attr("src", "../sas/images/perfil/sem-foto.jpg");

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