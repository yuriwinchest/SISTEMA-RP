<?php
@session_start();
$id_empresa = @$_SESSION['empresa'];
$mostrar_registros = @$_SESSION['registros'];
$id_usuario = @$_SESSION['id_cliente'];
$tabela = 'receber';
require_once("../../../conexao.php");
require_once("../../../painel/buscar_config.php");

$data_atual = date('Y-m-d');
$data_hoje = date('Y-m-d');

$total_pago = 0;
$total_pendentes = 0;

$valor_juros_multa = 0;
$subtotal_juros = 0;

$total_valor = 0;
$total_valorF = 0;
$total_total = 0;
$total_totalF = 0;
$total_vencidas = 0;
$total_vencidasF = 0;
$total_hoje = 0;
$total_hojeF = 0;
$total_amanha = 0;
$total_amanhaF = 0;
$total_recebidas = 0;
$total_recebidasF = 0;

$status = @$_POST['p1'];

if($status == ""){
	$sql_status = " ";
}else{
	$sql_status = " and pago = '$status' ";
}

$query = $pdo->query("SELECT * from $tabela WHERE empresa = '$id_empresa' and cliente = '$id_usuario' $sql_status order by id desc ");




$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = @count($res);
if ($linhas > 0) {
	echo <<<HTML
<small>
	<table class="table table-bordered text-nowrap border-bottom dt-responsive" id="tabela">
	<thead> 
	<tr> 
	
	<th>Descrição</th>	
	<th class="">Valor</th>
	<th>Juros e Multa</th>
	<th>Subtotal</th>
	
	<th>Vencimento</th>	
	<th>Pagamento</th>		
	<th class="text-center">Arquivo</th>	
	<th>Ações</th>
	</tr> 
	</thead> 
	<tbody>	
	<small>
HTML;


	for ($i = 0; $i < $linhas; $i++) {
		$id = $res[$i]['id'];
		$descricao = $res[$i]['descricao'];
		$cliente = $res[$i]['cliente'];
		$valor = $res[$i]['valor'];
		$vencimento = $res[$i]['vencimento'];
		$data_pgto = $res[$i]['data_pgto'];
		$data_lanc = $res[$i]['data_lanc'];
		$forma_pgto = $res[$i]['forma_pgto'];
		$frequencia = $res[$i]['frequencia'];
		$obs = $res[$i]['obs'];
		$arquivo = $res[$i]['arquivo'];
		$referencia = $res[$i]['referencia'];
		$id_ref = $res[$i]['id_ref'];
		$multa = $res[$i]['multa'];
		$juros = $res[$i]['juros'];
		$desconto = $res[$i]['desconto'];
		$taxa = $res[$i]['taxa'];
		$subtotal = $res[$i]['subtotal'];
		$usuario_lanc = $res[$i]['usuario_lanc'];
		$usuario_pgto = $res[$i]['usuario_pgto'];
		$pago = $res[$i]['pago'];
		$quant_recorrencia = $res[$i]['quant_recorrencia'];
		$id_recorrencia = $res[$i]['id_recorrencia'];

		$vencimentoF = implode('/', array_reverse(@explode('-', $vencimento)));
		$data_pgtoF = implode('/', array_reverse(@explode('-', $data_pgto)));
		$data_lancF = implode('/', array_reverse(@explode('-', $data_lanc)));



		$valorF = @number_format($valor, 2, ',', '.');
		$multaF = @number_format($multa, 2, ',', '.');
		$jurosF = @number_format($juros, 2, ',', '.');
		$descontoF = @number_format($desconto, 2, ',', '.');
		$taxaF = @number_format($taxa, 2, ',', '.');
		$subtotalF = @number_format($subtotal, 2, ',', '.');



		//extensão do arquivo
		$ext = pathinfo($arquivo, PATHINFO_EXTENSION);
		if ($ext == 'pdf' || $ext == 'PDF') {
			$tumb_arquivo = 'pdf.png';
		} else if ($ext == 'rar' || $ext == 'zip' || $ext == 'RAR' || $ext == 'ZIP') {
			$tumb_arquivo = 'rar.png';
		} else if ($ext == 'doc' || $ext == 'docx' || $ext == 'DOC' || $ext == 'DOCX') {
			$tumb_arquivo = 'word.png';
		} else if ($ext == 'xlsx' || $ext == 'xlsm' || $ext == 'xls') {
			$tumb_arquivo = 'excel.png';
		} else if ($ext == 'xml') {
			$tumb_arquivo = 'xml.png';
		} else {
			$tumb_arquivo = $arquivo;
		}


		if($descricao == 'Nova Venda'){
			$descricao = 'Compra';
		}



		$query2 = $pdo->query("SELECT * FROM usuarios where id = '$usuario_lanc'");
		$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
		if (@count($res2) > 0) {
			$nome_usu_lanc = $res2[0]['nome'];
		} else {
			$nome_usu_lanc = 'Sem Usuário';
		}


		$query2 = $pdo->query("SELECT * FROM usuarios where id = '$usuario_pgto'");
		$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
		if (@count($res2) > 0) {
			$nome_usu_pgto = $res2[0]['nome'];
		} else {
			$nome_usu_pgto = 'Sem Usuário';
		}


		$query2 = $pdo->query("SELECT * FROM frequencias where dias = '$frequencia'");
		$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
		if (@count($res2) > 0) {
			$nome_frequencia = $res2[0]['frequencia'];
		} else {
			$nome_frequencia = 'Sem Registro';
		}

		$query2 = $pdo->query("SELECT * FROM formas_pgto where id = '$forma_pgto'");
		$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
		if (@count($res2) > 0) {
			$nome_pgto = $res2[0]['nome'];
			$taxa_pgto = $res2[0]['taxa'];
		} else {
			$nome_pgto = 'Sem Registro';
			$taxa_pgto = 0;
		}


		$query2 = $pdo->query("SELECT * FROM clientes where id = '$cliente'");
		$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
		if (@count($res2) > 0) {
			$nome_cliente = $res2[0]['nome'];
		} else {
			$nome_cliente = 'Sem Registro';
		}


		if ($pago == 'Sim') {
			$classe_pago = 'verde';
			$classe_pago2 = '#ddffe1';
			$ocultar = 'ocultar';
			$ocultar_pendentes = '';
			$total_pago += $subtotal;
		} else if ($pago == 'Não' and @strtotime($vencimento) > @strtotime($data_atual)) {
			$classe_pago2 = '';
			$classe_pago = 'text-danger';
			$ocultar = '';
			$total_pago += $valor;
			$ocultar_pendentes = 'ocultar';
		} else if ($pago == 'Não' and @strtotime($vencimento) == @strtotime($data_hoje)) {
			$classe_pago2 = '#fff8dd';
			$classe_pago = 'text-danger';
			$ocultar = '';
			$total_pago += $valor;
			$ocultar_pendentes = 'ocultar';
		} else {
			$classe_pago = 'text-danger';
			$classe_pago2 = '#ffdddd';
			$ocultar = '';
			
			$ocultar_pendentes = 'ocultar';
		}


		if ($pago == 'Sim') {
			$ocultar_checkbox = 'ocultar';	
		}else{
			$ocultar_checkbox = '';
			$total_pendentes += $valor;
		}


		$valor_multa = 0;
		$valor_juros = 0;
		$classe_venc = '';
		if (@strtotime($vencimento) < @strtotime($data_hoje)) {
			$classe_venc = 'text-danger';
			$valor_multa = $multa_atraso;


			//pegar a quantidade de dias que o pagamento está atrasado
			$dif = @strtotime($data_hoje) - @strtotime($vencimento);
			$dias_vencidos = floor($dif / (60 * 60 * 24));

			$valor_juros = ($valor * $juros_atraso / 100) * $dias_vencidos;
		}

		$valor_jurosF = @number_format($valor_juros, 2, ',', '.');


		$total_pendentesF = @number_format($total_pendentes, 2, ',', '.');
		$total_pagoF = @number_format($total_pago, 2, ',', '.');

		$taxa_conta = $taxa_pgto * $valor / 100;

		

		$taxa_contaF = @number_format($taxa_conta, 2, ',', '.');


		$valor_juros_multa = $valor_juros + $valor_multa;
		$valor_juros_multaF = @number_format($valor_juros_multa, 2, ',', '.');

		$subtotal_juros = $valor + $valor_juros_multa;
		$subtotal_jurosF = @number_format($subtotal_juros, 2, ',', '.');

		//PEGAR RESIDUOS DA CONTA
		$total_resid = 0;
		$valor_com_residuos = 0;
		$query2 = $pdo->query("SELECT * FROM receber WHERE id_ref = '$id' and residuo = 'Sim'");
		$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
		if (@count($res2) > 0) {

			$descricao = '(Resíduo) - ' . $descricao;

			for ($i2 = 0; $i2 < @count($res2); $i2++) {
				foreach ($res2[$i2] as $key => $value) {
				}
				$id_res = $res2[$i2]['id'];
				$valor_resid = $res2[$i2]['subtotal'];
				$valor_resid = $valor_resid + $res2[$i2]['desconto'] - $res2[$i2]['taxa'] - $res2[$i2]['juros'] - $res2[$i2]['multa'];
				$total_resid += $valor_resid;
			}


			$valor_com_residuos = $valor + $total_resid;
		}
		
		if ($valor_com_residuos > 0) {
			$vlr_antigo_conta = '(' . $valor_com_residuos . ')';
			$descricao_link = '';
			$descricao_texto = 'd-none';
		} else {
			$vlr_antigo_conta = '';
			$descricao_link = 'd-none';
			$descricao_texto = '';
		}


		if ($api_whatsapp != 'Não' and $cliente != "" and $cliente != "0") {
			$ocultar_cobranca = '';
		} else {
			$ocultar_cobranca = 'ocultar';
		}

		$classe_rec = '';
		if ($quant_recorrencia > 0) {
			$classe_rec = '<span style="color:blue">(Recorrência Múltipla)</span>';
		}

		$ocultar_rec = 'ocultar';
		if (($quant_recorrencia > 0 or $id_recorrencia > 0) and $id_recorrencia != '') {
			if ($pago != 'Sim') {
				$ocultar_rec = '';
			}
		}


		echo <<<HTML

<tr style="background: {$classe_pago2}">

<td><i class="fa fa-square {$classe_pago} mr-1"></i> {$descricao} {$classe_rec}</td>
<td class="">R$ {$valorF} <small><a href="#" onclick="mostrarResiduos('{$id}')" class="text-danger" title="Ver Resíduos">{$vlr_antigo_conta}</a></small></td>	
<td>{$valor_juros_multaF}</td>
<td>{$subtotal_jurosF}</td>

<td class="esc {$classe_venc}">{$vencimentoF}</td>
<td>{$data_pgtoF}</td>

<td><a href="../painel/images/contas/{$arquivo}" target="_blank"><img src="../painel/images/contas/{$tumb_arquivo}" width="25px"></a></td>
<td>
	

<a class="btn btn-warning-light btn-sm" href="#" onclick="mostrar('{$descricao}','{$valorF}','{$nome_cliente}','{$vencimentoF}','{$data_pgtoF}','{$nome_pgto}','{$nome_frequencia}','{$obs}','{$tumb_arquivo}','{$multaF}','{$jurosF}','{$descontoF}','{$taxaF}','{$subtotalF}','{$nome_usu_lanc}','{$nome_usu_pgto}', '{$pago}', '{$arquivo}','{$quant_recorrencia}')" title="Mostrar Dados"><i class="fa-regular fa-eye"></i></a>



		<a class="btn btn-dark-light btn-sm" href="#" onclick="arquivo('{$id}', '{$descricao}')" title="Inserir / Ver Arquivos"><i class="fa fa-file-o"></i></a>


		<span class="{$ocultar} ">	
					<a href="#" onclick="pagar('{$id}', '{$dados_pagamento}')" class="{$ocultar} btn btn-success btn-sm" title="Efetuar Pagamento" ><i class="fa fa-money"></i></a>
					
			</span>

		
			<span class="{$ocultar_pendentes} btn btn-dark-light btn-sm">
				<form   method="POST" action="../painel/rel/recibo_conta_class.php" target="_blank" style="display:inline-block">
					<input type="hidden" name="id" value="{$id}">
					<button class="{$ocultar_pendentes}" title="PDF do Recibo Conta" style="background:transparent; border:none; margin:0; padding:0"><i class="fa fa-file-pdf-o"></i></button>
					</form>
			</span>


			<span class="{$ocultar_pendentes} btn btn-secondary-light btn-sm">
					<form   method="POST" action="../painel/rel/imp_recibo.php" target="_blank" style="display:inline-block">
					<input type="hidden" name="id" value="{$id}">
					<button class="{$ocultar_pendentes}" title="Imprimir Recibo 80mmm" style="background:transparent; border:none; margin:0; padding:0"><i class="fa fa-print"></i></button>
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
	

	function mostrar(descricao, valor, cliente, vencimento, data_pgto, nome_pgto, frequencia, obs, arquivo, multa, juros, desconto, taxa, total, usu_lanc, usu_pgto, pago, arq, quant_recorrencia) {

		if (data_pgto == "") {
			data_pgto = 'Pendente';
		}

		$('#titulo_dados').text(descricao);
		$('#valor_dados').text(valor);
		$('#cliente_dados').text(cliente);
		$('#vencimento_dados').text(vencimento);
		$('#data_pgto_dados').text(data_pgto);
		$('#nome_pgto_dados').text(nome_pgto);
		$('#frequencia_dados').text(frequencia);
		$('#obs_dados').text(obs);

		$('#multa_dados').text(multa);
		$('#juros_dados').text(juros);
		$('#desconto_dados').text(desconto);
		$('#taxa_dados').text(taxa);
		$('#total_dados').text(total);
		$('#usu_lanc_dados').text(usu_lanc);
		$('#usu_pgto_dados').text(usu_pgto);
		$('#quant_recorrencia_dados').text(quant_recorrencia);

		$('#pago_dados').text(pago);
		$('#target_dados').attr("src", "../painel/images/contas/" + arquivo);
		$('#target_link_dados').attr("href", "../painel/images/contas/" + arq);

		$('#modalDados').modal('show');
	}

	


	function mostrarResiduos(id) {
		$.ajax({
			url: 'paginas/' + pag + "/listar-residuos.php",
			method: 'POST',
			data: {
				id
			},
			dataType: "html",

			success: function (result) {
				$("#listar-residuos").html(result);
			}
		});
		$('#modalResiduos').modal('show');


	}

	function arquivo(id, nome) {
		$('#id-arquivo').val(id);
		$('#nome-arquivo').text(nome);
		$('#modalArquivos').modal('show');
		$('#mensagem-arquivo').text('');
		$('#arquivo_conta').val('');
		listarArquivos();
	}



function pagar(id, dados_pagamento){
		if(dados_pagamento == ""){
			window.open("../pagar/"+id);
		}else{
			mensagem_pagar(dados_pagamento)
		}
	}




// MODAL PAGAMENTO #######################################
function mensagem_pagar(dados_pagamento) {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: "btn btn-success",
            copyButton: "btn btn-info me-2"
        },
        buttonsStyling: false
    });

    swalWithBootstrapButtons.fire({
        title: "Dados para o Pagamento",
        text: dados_pagamento,
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Ok",
        cancelButtonText: '<i class="bi bi-clipboard"></i> Copiar Código',
        customClass: {
            confirmButton: "btn btn-success ms-2",
            cancelButton: "btn btn-info me-2"
        },
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            // Usuário clicou em Ok
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            // Usuário clicou em Copiar Código
            copiarCodigo(dados_pagamento);
        }
    });
}

// FUNÇÃO PARA COPIAR CÓDIGO
function copiarCodigo(texto) {
    navigator.clipboard.writeText(texto).then(function() {
        // Mostra mensagem de sucesso
        Swal.fire({
            title: "Copiado!",
            text: "Código copiado para a área de transferência",
            icon: "success",
            timer: 1500,
            timerProgressBar: true,
            showConfirmButton: false
        });
    }).catch(function(err) {
        // Fallback para navegadores mais antigos
        const textArea = document.createElement("textarea");
        textArea.value = texto;
        document.body.appendChild(textArea);
        textArea.select();
        document.execCommand('copy');
        document.body.removeChild(textArea);
        
        Swal.fire({
            title: "Copiado!",
            text: "Código copiado para a área de transferência",
            icon: "success",
            timer: 1500,
            timerProgressBar: true,
            showConfirmButton: false
        });
    });
}
	
</script>

