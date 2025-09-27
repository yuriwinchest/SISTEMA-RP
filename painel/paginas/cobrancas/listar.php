<?php
@session_start();
$id_empresa = @$_SESSION['empresa'];
$mostrar_registros = @$_SESSION['registros'];
$id_usuario = @$_SESSION['id'];
$tabela = 'cobrancas';
require_once("../../../conexao.php");
require_once("../../buscar_config.php");

if ($mostrar_registros == 'Não') {
	$sql_usuario_lanc = " and usuario_lanc = '$id_usuario' and empresa = '$id_empresa' ";
} else {
	$sql_usuario_lanc = " and empresa = '$id_empresa' ";
}



$data_hoje = date('Y-m-d');
$data_atual = date('Y-m-d');
$mes_atual = Date('m');
$ano_atual = Date('Y');
$data_inicio_mes = $ano_atual . "-" . $mes_atual . "-01";
$data_inicio_ano = $ano_atual . "-01-01";

$data_ontem = date('Y-m-d', @strtotime("-1 days", @strtotime($data_atual)));
$data_amanha = date('Y-m-d', @strtotime("+1 days", @strtotime($data_atual)));


if ($mes_atual == '04' || $mes_atual == '06' || $mes_atual == '07' || $mes_atual == '09') {
	$data_final_mes = $ano_atual . '-' . $mes_atual . '-30';
} else if ($mes_atual == '02') {
	$bissexto = date('L', @mktime(0, 0, 0, 1, 1, $ano_atual));
	if ($bissexto == 1) {
		$data_final_mes = $ano_atual . '-' . $mes_atual . '-29';
	} else {
		$data_final_mes = $ano_atual . '-' . $mes_atual . '-28';
	}
} else {
	$data_final_mes = $ano_atual . '-' . $mes_atual . '-31';
}



$dataInicial = @$_POST['p1'];
$dataFinal = @$_POST['p2'];
$cliente = @$_POST['p3'];

if ($dataInicial == "") {
	$dataInicial = $data_inicio_mes;
}

if ($dataFinal == "") {
	$dataFinal = $data_final_mes;
}




$data_hoje = date('Y-m-d');
$data_amanha = date('Y/m/d', @strtotime("+1 days", @strtotime($data_hoje)));


if($cliente == "" || $cliente == 0){
	$query = $pdo->query("SELECT * from $tabela WHERE data >= '$dataInicial' and data <= '$dataFinal' $sql_usuario_lanc order by id desc ");
}else{
	$query = $pdo->query("SELECT * from $tabela WHERE data >= '$dataInicial' and data <= '$dataFinal' and cliente = '$cliente' $sql_usuario_lanc order by id desc ");
}





$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = @count($res);
if ($linhas > 0) {
	echo <<<HTML
<small>
	<table class="table table-bordered text-nowrap border-bottom dt-responsive" id="tabela">
	<thead> 
	<tr> 
	<th align="center" width="5%" class="text-center">Selecionar</th>
	<th>Cliente</th>	
	<th class="esc">Valor</th>	
	<th class="esc">Parcelas</th>
	<th class="esc">Data</th>	
	<th class="esc">Prox Venc</th>	
	<th>Ações</th>
	</tr> 
	</thead> 
	<tbody>	
	<small>
HTML;


	for($i=0; $i<$linhas; $i++){
	$id = $res[$i]['id'];
$valor = $res[$i]['valor'];
$parcelas = $res[$i]['parcelas'];
$data_venc = $res[$i]['data_venc'];
$data = $res[$i]['data'];
$cliente = $res[$i]['cliente'];
$juros = $res[$i]['juros'];
$multa = $res[$i]['multa'];
$usuario = $res[$i]['usuario'];
$obs = $res[$i]['obs'];
$frequencia = $res[$i]['frequencia'];
$descricao = $res[$i]['descricao'];
$api_pagamento_conta = $res[$i]['api_pagamento_conta'];
$pgtos_aceitaveis = $res[$i]['pgtos_aceitaveis'];

$data_vencF = date('d', @strtotime($data_venc));
$dataF = implode('/', array_reverse(@explode('-', $data)));
$valorF = @number_format($valor, 2, ',', '.');
$jurosF = @number_format($juros, 2, ',', '.');
$multaF = @number_format($multa, 2, ',', '.');

$query2 = $pdo->query("SELECT * from clientes where id = '$cliente'");
$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
$nome_cliente = @$res2[0]['nome'];

$query2 = $pdo->query("SELECT * from usuarios where id = '$usuario'");
$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
$nome_usuario = @$res2[0]['nome'];


$classe_debito = '';
//verificar débito
$query2 = $pdo->query("SELECT * from receber where referencia = 'Cobrança' and id_ref = '$id' and pago = 'Não' and vencimento < curDate()");
$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
$total_atras = @count($res2);
if(@count($res2) > 0){
	$classe_debito = 'text-danger';
}

$atrasadas = '';
if($total_atras > 0){
	$atrasadas = '('.$total_atras.')';
}

//verificar parcelas pagas
$query2 = $pdo->query("SELECT * from receber where referencia = 'Cobrança' and id_ref = '$id' and pago = 'Sim'");
$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
$parcelas_pagas = @count($res2);


if($parcelas > 1){
	$parcelas_nome = $parcelas_pagas .' / '. $parcelas;
}else{
	$parcelas_nome = 'Recorrente ';
}


$query2 = $pdo->query("SELECT * FROM receber where referencia = 'Cobrança' and id_ref = '$id' and pago != 'Sim' order by id asc limit 1");
$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
$data_ultimo_venc = @$res2[0]['data_venc'];
$data_ultimo_vencF = implode('/', array_reverse(@explode('-', $data_ultimo_venc)));



		echo <<<HTML

<tr>
<td align="center">
<div class="custom-checkbox custom-control ">
<input type="checkbox" class="custom-control-input" id="seletor-{$id}" onchange="selecionar('{$id}')">
<label for="seletor-{$id}" class="custom-control-label mt-1 text-dark"></label>
</div>
</td>

<td class="{$classe_debito}">
{$nome_cliente}
</td>
<td class="esc">R$ {$valorF}</td>
<td class="esc">{$parcelas_nome} <span style="color:red"><small>{$atrasadas}</small></span></td>
<td class="esc">{$dataF}</td>
<td class="esc {$classe_debito}">{$data_ultimo_vencF}</td>

<td>

<a class="btn btn-danger-light btn-sm" href="#" onclick="excluirConta('{$id}')" title="Excluir"><i class="fa fa-trash-can"></i></a>

<a class="btn btn-warning-light btn-sm" href="#" onclick="mostrar('{$descricao}', '{$multaF}','{$jurosF}','{$nome_usuario}','{$frequencia}','{$obs}','{$api_pagamento_conta}','{$pgtos_aceitaveis}')" title="Mostrar Dados"><i class="fa-regular fa-eye"></i></a>

<a class="btn btn-success btn-sm" href="#" onclick="mostrarParcelas('{$id}')" title="Mostrar Parcelas"><i class="fa fa-money"></i></a>

<span class=" btn btn-secondary-light btn-sm">
   <form   method="POST" action="rel/detalhamento_cobranca_class.php" target="_blank" style="display:inline-block">
					<input type="hidden" name="id" value="{$id}">
					<big><button style="background:transparent; border:none; margin:0; padding:0" class="" title="Detalhamento Cobrança"><i class="fa fa-file-pdf-o text-danger"></i></button></big>
		</form>		
</span>

</td>
</tr>
HTML;
	}


	echo <<<HTML
</small>
</tbody>
<small><div align="center" id="mensagem-excluir"></div></small>

</table>
</small>
<br>

HTML;
} else {
	echo '<small>Nenhum Registro Encontrado!</small>';
}
?>



<script type="text/javascript">
	$(document).ready(function () {
		var tableId = '#tabela';

    // Verifica se a tabela já foi inicializada
    if (!$.fn.dataTable.isDataTable(tableId)) {
        $(tableId).DataTable({
           "language": {
				//"url" : '//cdn.datatables.net/plug-ins/1.13.2/i18n/pt-BR.json'
			},
			"ordering": false,
			"stateSave": true
        });
    }
		
	});
</script>


<script type="text/javascript">
	
	function mostrar(descricao, multa, juros, usuario, frequencia, obs, api_pagamento_conta, pgtos_aceitaveis) {

		
		$('#titulo_dados').text(descricao);
		$('#multa_dados').text(multa);
		$('#juros_dados').text(juros);
		$('#usuario_dados').text(usuario);
		$('#frequencia_dados').text(frequencia);		
		$('#pgtos_aceitaveis_dados').text(pgtos_aceitaveis);		
		$('#obs_dados').text(obs);	
		$('#api_pagamento_conta_dados').text(api_pagamento_conta);	

		$('#modalDados').modal('show');
	}

	function limparCampos() {
		$('#id').val('');
		$('#descricao').val('');
		$('#valor_cob').val('0,00');
		$('#data_cob').val("<?= $data_atual ?>");
		$('#data_venc_cob').val("<?= $data_atual ?>");
		$('#parcelas_cob').val('1');
		$('#obs').val('');
		$('#juros_cobranca').val('');		
		$('#multa_cobranca').val('');		
		$('#frequencia').val('30').change();
		$('#api_pagamento_conta').val('').change();
		$('#pgtos_aceitaveis').val('').change();
		
		$('#ids').val('');
		$('#btn-deletar').hide();
		$('#btn-baixar').hide();
	}





	function deletarSelBaixar() {
    const ids = $('#ids').val(); // Recupera os IDs
    const idArray = ids.split("-").filter((id) => id); // Divide os IDs e remove entradas vazias
    const promises = []; // Array para armazenar as promessas de cada requisição

    idArray.forEach((novo_id) => {
        const promise = $.ajax({
            url: 'paginas/' + pag + "/baixar_multiplas.php",
            method: 'POST',
            data: { novo_id },
            dataType: "html",
        });

        promises.push(promise); // Adiciona a promessa ao array
    });

    // Aguarda todas as requisições serem concluídas
    Promise.all(promises)
        .then((results) => {
            // Verifica se todos os resultados foram bem-sucedidos
            const allSuccess = results.every((result) => result.trim() === "Baixado com Sucesso");

            if (allSuccess) {
                setTimeout(() => {
                    alertsucesso("Todos os itens foram baixados com sucesso!");
                    buscar();
                    limparCampos();
                }, 1000);
            } else {
                // Exibe erro para os itens que falharam
                const errors = results.filter((result) => result.trim() !== "Baixado com Sucesso");
                alertErro("Alguns itens não foram baixados: " + errors.join(", "));
            }
        })
        .catch(() => {
            // Trata falhas gerais nas requisições
            alertErro("Ocorreu um erro ao processar as requisições.");
        });
}



	

	
</script>



<script type="text/javascript">
	function excluirConta(id) {
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
				$.ajax({
					url: 'paginas/' + pag + "/excluir.php",
					method: 'POST',
					data: { id },
					dataType: "html",
					success: function (mensagem) {
						listar();
						limparCampos();
						// Exibe mensagem de sucesso após a exclusão
						swalWithBootstrapButtons.fire({
							title: mensagem,
							text: 'Fecharei em 2 segundo.',
							icon: "success",
							timer: 2000,
							timerProgressBar: true,
							confirmButtonText: 'OK',
						});
					},
					error: function () {
						// Exibe mensagem de erro se a requisição falhar
						swalWithBootstrapButtons.fire({
							title: "Erro!",
							text: mensagem,
							icon: "error",
							confirmButtonText: 'OK',
						});
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
					excluirMultiplosContas(id[i]);
				}

				

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

	function excluirMultiplosContas(id) {
    //$('#mensagem-excluir').text('Excluindo...')

    $.ajax({
        url: 'paginas/' + pag + "/excluir.php",
        method: 'POST',
        data: { id },
        dataType: "html",

        success: function (mensagem) {
            if (mensagem.trim() == "Excluído com Sucesso") {
				alertexcluido(mensagem)
                buscar();
                limparCampos()
            } else {
                $('#mensagem-excluir').addClass('text-danger')
                $('#mensagem-excluir').text(mensagem)
            }
        }
    });
}



function cancelarBaixa(id) {
    //$('#mensagem-excluir').text('Excluindo...')

    $.ajax({
        url: 'paginas/receber/cancelar_baixa.php',
        method: 'POST',
        data: { id },
        dataType: "html",

        success: function (mensagem) {
            if (mensagem.trim() == "Excluído com Sucesso") {
				alertsucesso('Remoção da baixa feita!')
                buscar();
                limparCampos()
            } else {
                $('#mensagem-excluir').addClass('text-danger')
                $('#mensagem-excluir').text(mensagem)
            }
        }
    });
}
</script>


<script type="text/javascript">

	function mostrarParcelas(id_emp){	

		var mostrar = 'cobranca';
    
    $.ajax({
        url: 'paginas/' + pag + "/mostrar_parcelas.php",
        method: 'POST',
        data: {id_emp, mostrar},
        dataType: "text",

        success: function (mensagem) {           
           $("#listar_parcelas").html(mensagem);
        },      

    });

    $('#id_cobranca').val(id_emp);
    $('#modalParcelas').modal('show');

}


</script>

