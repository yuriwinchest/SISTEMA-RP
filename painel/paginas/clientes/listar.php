<?php
@session_start();
$id_empresa = @$_SESSION['empresa'];
$mostrar_registros = @$_SESSION['registros'];
$id_usuario = @$_SESSION['id'];

$tabela = 'clientes';
require_once("../../../conexao.php");
require_once("../../buscar_config.php");

$ultima_pagina = '';

$busca = @$_POST['p1'];
$pagina = @$_POST['p2'];

if($pagina == ""){
	$pagina = 0;
}
$itens_paginacao = 10;
$limite = $pagina * @$itens_paginacao;


if ($mostrar_registros == 'Não') {
	$query = $pdo->prepare("SELECT * from $tabela where usuario = '$id_usuario' and empresa = '$id_empresa' and (nome like :busca or email like :busca or cpf like :busca or telefone like :busca) order by id desc LIMIT $limite, $itens_paginacao");
} else {
	$query = $pdo->prepare("SELECT * from $tabela where empresa = '$id_empresa' and (nome like :busca or email like :busca or cpf like :busca or telefone like :busca) order by id desc LIMIT $limite, $itens_paginacao");
}

$query->bindValue(":busca", "%$busca%");
$query->execute();

$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = @count($res);
if ($linhas > 0) {
	echo <<<HTML
	<small>
	<table class="table table-hover table-bordered text-nowrap border-bottom dt-responsive" id="">
	<thead>
	<tr>
	<th class="esc" align="center" width="5%" class="text-center">Selecionar</th>
	<th >Nome</th>
	<th class="esc">Telefone</th>
	<th class="esc">Tipo Pessoa</th>
	<th class="esc">Data Cadastro</th>
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
		$tipo_pessoa = $res[$i]['tipo_pessoa'];
		$cpf = $res[$i]['cpf'];
		$rg = $res[$i]['rg'];
		$orgao_emissor = $res[$i]['orgao_emissor'];
		$numero = $res[$i]['numero'];
		$bairro = $res[$i]['bairro'];
		$cidade = $res[$i]['cidade'];
		$estado = $res[$i]['estado'];
		$cep = $res[$i]['cep'];
		$data_cad = $res[$i]['data_cad'];
		$data_nasc = $res[$i]['data_nasc'];
		$complemento = $res[$i]['complemento'];
		$marketing = $res[$i]['marketing'];
		$ativo = $res[$i]['ativo'];
		$api_pagamento_cliente = $res[$i]['api_pagamento_cliente'];
		$formas_pgto = $res[$i]['formas_pgto'];

		$data_cadF = implode('/', array_reverse(@explode('-', $data_cad)));
		$data_nascF = implode('/', array_reverse(@explode('-', $data_nasc)));

		$tel_whatsF = '55' . preg_replace('/[ ()-]+/', '', $telefone);

		//verificar débitos cliente
		$query2 = $pdo->query("SELECT * from receber where cliente = '$id' and vencimento < curDate() and pago != 'Sim'");
		$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
		$linhas2 = @count($res2);
		if ($linhas2 > 0) {
			$debito2 = '#ffdddd';
			$debito = 'text-danger';
		} else {
			$debito2 = '';
			$debito = '';
		}

		if ($telefone == '' || $telefone == "Sem Registro") {
			$ocultar_whats = 'ocultar';
		} else {
			$ocultar_whats = '';
		}


		if ($tipo_pessoa == 'Física') {
			$cor_adm = 'bg-success-transparent text-success';
		} else {
			$cor_adm = 'bg-danger-transparent text-danger';
		}


		$nomeF = mb_strimwidth($nome, 0, 40, "...");


		//trazer o total de registros para paginacao
		if ($mostrar_registros == 'Não') {
			$query2 = $pdo->prepare("SELECT * from $tabela where usuario = '$id_usuario' and empresa = '$id_empresa' and (nome like :busca or email like :busca or cpf like :busca or telefone like :busca) order by id desc ");
		} else {
			$query2 = $pdo->prepare("SELECT * from $tabela where empresa = '$id_empresa' and (nome like :busca or email like :busca or cpf like :busca or telefone like :busca) order by id desc ");
		}
		$query2->bindValue(":busca", "%$busca%");
		$query2->execute();
		$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
		$num_total = @count($res2);
		$num_paginas = ceil($num_total/$itens_paginacao);


		if ($marketing == 'Não') {
			$ocultar_mark = 'ocultar';
		} else {
			$ocultar_mark = '';
		}


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


		$enderecoF2 = rawurlencode($endereco);
		$nomeF2 = rawurlencode($nome);

		echo <<<HTML
		<tr style="background: {$debito2}">
		<td class="esc" align="center">
		<div class="custom-checkbox custom-control">
		<input type="checkbox" class="custom-control-input" id="seletor-{$id}" onchange="selecionar('{$id}')">
		<label for="seletor-{$id}" class="custom-control-label mt-1 text-dark"></label>
		</div>
		</td>
		<td class="{$debito}"> {$nomeF}</td>
		<td class="esc">{$telefone}</td>
		<td class="esc"><span class="badge font-weight-semibold {$cor_adm} tx-12" style="width:90%;">{$tipo_pessoa}</span></td>
		<td class="esc">{$data_cadF}</td>
		<td>
		<a class="btn btn-info-light btn-sm" class="" href="#" onclick="editar('{$id}','{$nomeF2}','{$email}','{$telefone}','{$enderecoF2}','{$cpf}','{$rg}','{$orgao_emissor}','{$tipo_pessoa}','{$data_nascF}','{$numero}','{$bairro}','{$cidade}','{$estado}','{$cep}','{$complemento}','{$api_pagamento_cliente}','{$formas_pgto}')" title="Editar Dados"><i class="fa fa-edit text-info"></i></a>

		<a class="btn btn-danger-light btn-sm" href="#" onclick="excluirClientes('{$id}')" title="Excluir"><i class="fa fa-trash-can text-danger"></i></a>

		<a class="btn btn-warning-light btn-sm" href="#" onclick="mostrar('{$nomeF2}','{$email}','{$telefone}','{$enderecoF2}', '{$data_cadF}','{$cpf}','{$rg}','{$orgao_emissor}','{$tipo_pessoa}','{$data_nascF}','{$numero}','{$bairro}','{$cidade}','{$estado}','{$cep}','{$complemento}','{$api_pagamento_cliente}','{$formas_pgto}')" title="Mostrar Dados"><i class="fa fa-eye"></i></a>

		<a class="btn btn-success-light btn-sm" href="#" onclick="mostrarContas('{$nome}','{$id}')" title="Mostrar Contas"><i style="color: green" class="fa fa-hand-holding-dollar"></i></a>

		<a class="btn btn-dark-light btn-sm" href="#" onclick="arquivo('{$id}', '{$nome}')" title="Inserir / Ver Arquivos"><i class="fa fa-file-o taxt-secondary"></i></a>

		<a class="{$ocultar_whats} btn btn-success-light btn-sm" class="" href="http://api.whatsapp.com/send?1=pt_BR&phone={$tel_whatsF}" title="Whatsapp" target="_blank"><i style="color: green" class="bi bi-whatsapp"></i></i></a>


		<big><a class="btn btn-danger-light btn-sm {$ocultar_mark}" href="#" onclick="excluirMarketing('{$id}')" title="Remover do Marketing Whatsapp"><i class="fa fa-close text-danger"></i></a></big>

		<a class="btn btn-success-light btn-sm" href="#" onclick="ativar('{$id}', '{$acao}')" title="{$titulo_link}"><i class="fa {$icone} "></i></a>

		<a href="#" class="btn btn-info-light btn-sm" onclick="contratos('{$nome}','{$id}')" title="Ver Contratos Assinados"><i class="fa fa-file-pdf text-info"></i></a>

		<a href="#" class="btn btn-danger-light btn-sm" onclick="resetar('{$id}')" title="Redefinir senha para 123"><i class="fa fa-ban text-danger"></i></a>


		<a href="#" class="btn btn-success-light btn-sm {$ocultar_whats}" onclick="modalWhats('{$id}','Cliente', '{$email}')" title="Enviar Mensagem para o Cliente"><i class="fa-solid fa-paper-plane"></i></a>

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



<div class="" align="center">
<a href="#" onclick="listar('{$busca}', 0)" class="btn btn-outline-primary "><i class="fa fa-chevron-left"></i></a>
HTML;

for($i = 0; $i < @$num_paginas; $i++){
	$estilo = '';
	if($pagina == $i){
		$estilo = 'active';
	}
	$pagina_cont = $i + 1;
	$ultima_pagina = $num_paginas - 1;

	if($pagina >= ($i - 2) && $pagina <= ($i + 2)){
echo <<<HTML
		<a style="width:35px" href="#" onclick="listar('{$busca}', '{$i}')" class="btn btn btn-outline-primary {$estilo}">{$pagina_cont}</a>
HTML;

}

}
echo <<<HTML
<a href="#" onclick="listar('{$busca}', '{$ultima_pagina}')" class="btn btn-outline-primary "><i class="fa fa-chevron-right"></i></a>
</div>


HTML;
?>



<script type="text/javascript">
	$(document).ready(function() {

		var pagina = "<?= $pagina ?>";
		$('#pagina').val(pagina);

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
	function editar(id, nome, email, telefone, endereco, cpf, rg, orgao_emissor, tipo_pessoa, data_nasc, numero, bairro, cidade, estado, cep, complemento, api_pagamento, formas_pgto) {
		$('#mensagem').text('');
		$('#titulo_inserir').text('Editar Registro');

		$('#id').val(id);
		$('#nome').val(decodeURIComponent(nome));
		$('#email').val(email);
		$('#telefone').val(telefone);
		$('#endereco').val(decodeURIComponent(endereco));
		$('#cpf').val(cpf);
		$('#rg').val(rg);
		$('#orgao_emissor').val(orgao_emissor);
		$('#tipo_pessoa').val(tipo_pessoa).change();
		$('#data_nasc').val(data_nasc);

		$('#numero').val(numero);
		$('#bairro').val(bairro);
		$('#cidade').val(cidade);
		$('#estado').val(estado).change();
		$('#cep').val(cep);
		$('#complemento').val(complemento);

		$('#api_pagamento_cliente').val(api_pagamento).change();
		$('#formas_pgto').val(formas_pgto).change();

		$('#modalForm').modal('show');
	}


	function mostrar(nome, email, telefone, endereco, data_cad, cpf, rg, orgao_emissor, tipo_pessoa, data_nasc, numero, bairro, cidade, estado, cep, complemento, api_pagamento, formas_pgto) {

		$('#titulo_dados').text(decodeURIComponent(nome));
		$('#email_dados').text(email);
		$('#telefone_dados').text(telefone);
		$('#endereco_dados').text(decodeURIComponent(endereco));
		$('#cpf_dados').text(cpf);
		$('#rg_dados').text(rg);
		$('#orgao_emissor_dados').text(orgao_emissor);
		$('#data_dados').text(data_cad);
		$('#pessoa_dados').text(tipo_pessoa);
		$('#data_nasc_dados').text(data_nasc);

		$('#numero_dados').text(numero);
		$('#bairro_dados').text(bairro);
		$('#cidade_dados').text(cidade);
		$('#estado_dados').text(estado);
		$('#cep_dados').text(cep);
		$('#complemento_dados').text(complemento);
		$('#api_pagamento_dados').text(api_pagamento);
		$('#formas_pgto_dados').text(formas_pgto);

		$('#modalDados').modal('show');
	}

	function limparCampos() {
		$('#id').val('');
		$('#nome').val('');
		$('#email').val('');
		$('#telefone').val('');
		$('#endereco').val('');
		$('#cpf').val('');
		$('#rg').val('');
		$('#orgao_emissor').val('');
		$('#tipo_pessoa').val('Física').change();
		$('#data_nasc').val('');
		$('#numero').val('');
		$('#bairro').val('');
		$('#cidade').val('');
		$('#estado').val('').change();
		$('#cep').val('');
		$('#complemento').val('');

		$('#formas_pgto').val('').change();
		$('#api_pagamento_cliente').val('').change();

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



	function mostrarContas(nome, id) {

		$('#titulo_contas').text(nome);
		$('#id_contas').val(id);

		$('#modalContas').modal('show');
		listarDebitos(id);

	}


	function listarDebitos(id) {

		$.ajax({
			url: 'paginas/' + pag + "/listar_debitos.php",
			method: 'POST',
			data: {
				id
			},
			dataType: "html",

			success: function(result) {
				$("#listar_debitos").html(result);
			}
		});
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



function excluirMarketing(id) {
    //$('#mensagem-excluir').text('Excluindo...')

    $('body').removeClass('timer-alert');
    Swal.fire({
        title: "Excluir do Marketing?",
        text: "Ele não receberá mais mensagens!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33', // Cor do botão de confirmação (vermelho)
        cancelButtonColor: '#3085d6', // Cor do botão de cancelamento (azul)
        confirmButtonText: "Sim, Excluir!",
        cancelButtonText: "Cancelar",
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {


            $.ajax({
                url: 'paginas/' + pag + "/excluir_marketing.php",
                method: 'POST',
                data: { id },
                dataType: "html",

                success: function (mensagem) {
                    if (mensagem.trim() == "Excluído com Sucesso") {

                        // Ação de exclusão aqui
                        Swal.fire({
                            title: 'Excluido com Sucesso!',
                            text: 'Fecharei em 1 segundo.',
                            icon: "success",
                            timer: 1000
                        })
                        //excluido();
                        listar();
                        limparCampos();


                    } else {
                        $('#mensagem-excluir').addClass('text-danger')
                        $('#mensagem-excluir').text(mensagem)
                    }
                }
            });

        }
    });


};







// ALERT REDEFINIR SENHA #######################################
function resetar(id) {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: "btn btn-success", // Adiciona margem à direita do botão "Sim, Excluir!"
            cancelButton: "btn btn-danger me-1",
            container: 'swal-whatsapp-container'
        },
        buttonsStyling: false
    });

    swalWithBootstrapButtons.fire({
        title: "Deseja Redefinir?",
        text: "A senha agora será 123",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Sim, Redefinir!",
        cancelButtonText: "Não, Cancelar!",
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            // Realiza a requisição AJAX para excluir o item
            $.ajax({
                url: 'paginas/' + pag + "/redefinir.php",
                method: 'POST',
                data: { id },
                dataType: "html",
                success: function (mensagem) {
                    if (mensagem.trim() == "Redefinido com Sucesso") {
                        // Exibe mensagem de sucesso após a exclusão
                        swalWithBootstrapButtons.fire({
                            title: mensagem,
                            text: 'Fecharei em 1 segundo.',
                            icon: "success",
                            timer: 1000,
                            timerProgressBar: true,
                            confirmButtonText: 'OK',
                            customClass: {
                             container: 'swal-whatsapp-container'
                             }
                        });
                        listar();

                    } else {
                        // Exibe mensagem de erro se a requisição falhar
                        swalWithBootstrapButtons.fire({
                            title: "Opss!",
                            text: mensagem,
                            icon: "error",
                            confirmButtonText: 'OK',
                            customClass: {
                             container: 'swal-whatsapp-container'
                             }
                        });
                    }
                }
            });
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


	<script type="text/javascript">
		function contratos(nome, id) {

		$('#titulo_contratos').text(nome);
		$('#id_contratos').val(id);

		$('#modalContratos').modal('show');
		listarContratos(id);

	}
	</script>


	<script type="text/javascript">
		function listarContratos(id) {

		$.ajax({
			url: 'paginas/' + pag + "/listar_contratos.php",
			method: 'POST',
			data: {
				id
			},
			dataType: "html",

			success: function(result) {
				$("#listar_contratos").html(result);
			}
		});
	}
	</script>


	<script type="text/javascript">
		function modalWhats(id, tipo, email) {
		$('#id_whats').val(id);
		$('#tipo_whats').val(tipo);
		$('#email_whats').val(email);
		$('#mensagem_whatsapp').val('');
		$('#modalWhats').modal('show');
	}

	</script>