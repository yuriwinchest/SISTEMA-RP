<?php
@session_start();
$id_empresa = @$_SESSION['empresa'];
require_once("../../../conexao.php");
require_once("../../buscar_config.php");
$tabela = 'produtos';

$categoria = @$_POST['p1'];
$estoque = @$_POST['p2'];

if($estoque == ""){
	$sql_estoque = " ";
}else{
	$sql_estoque = " and estoque < nivel_estoque  ";
}

if ($categoria != "") {
	$query = $pdo->query("SELECT * from $tabela where categoria = '$categoria' and empresa = '$id_empresa' $sql_estoque order by id desc");
} else {
	$query = $pdo->query("SELECT * from $tabela where empresa = '$id_empresa' $sql_estoque order by id desc");
}

$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = @count($res);
if ($linhas > 0) {
	echo <<<HTML
<small>
	<table class="table table-hover table-bordered text-nowrap border-bottom dt-responsive" id="tabela2">
	<thead> 
	<tr>
	<th align="center" width="5%" class="text-center">Selecionar</th>
	<th>Código</th>
	<th>Nome</th>	
	<th>Valor Venda</th>
	<th>Categoria</th>
	<th>Sub Categoria</th>
	<th>Estoque</th>			
	<th>Foto</th>	
	<th>Ações</th>
	</tr> 
	</thead> 
	<tbody>	
HTML;

	for ($i = 0; $i < $linhas; $i++) {
		$id = $res[$i]['id'];
		$codigo = $res[$i]['codigo'];
		$nome = $res[$i]['nome'];
		$categoria = $res[$i]['categoria'];
		$sub_categoria = $res[$i]['sub_categoria'];
		$valor_venda = $res[$i]['valor_venda'];
		$valor_compra = $res[$i]['valor_compra'];
		$estoque = $res[$i]['estoque'];
		$nivel_estoque = $res[$i]['nivel_estoque'];
		$foto = $res[$i]['foto'];
		$ativo = $res[$i]['ativo'];
		$descricao = $res[$i]['descricao'];
		$valor_lucro = $res[$i]['valor_lucro'];
		$lucro_reais = $res[$i]['lucro_reais'];
		$valor_promo = $res[$i]['valor_promocional'];
		$tem_estoque = $res[$i]['tem_estoque'];

		$mostrar_site = $res[$i]['mostrar_site'];
	$descricao = $res[$i]['descricao'];

	$nomeF = @rawurlencode($nome);
	$descricaoF = @rawurlencode($descricao);


		if ($ativo == 'Sim') {
			$icone = 'bi bi-check-square-fill';
			$titulo_link = 'Desativar Usuário';
			$acao = 'Não';
			$classe_ativo = '';
		} else {
			$icone = 'bi bi-square';
			$titulo_link = 'Ativar Usuário';
			$acao = 'Sim';
			$classe_ativo = '#c4c4c4';
		}

		$valor_vendaF = @number_format($valor_venda, 2, ',', '.');
		$valor_compraF = @number_format($valor_compra, 2, ',', '.');
		$lucro_reaisF = @number_format($lucro_reais, 2, ',', '.');
		$valor_promoF = @number_format($valor_promo, 2, ',', '.');

		$query2 = $pdo->query("SELECT * FROM categorias where id = '$categoria'");
		$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
		$total_reg2 = @count($res2);
		if ($total_reg2 > 0) {
			$nome_categoria = $res2[0]['nome'];
		} else {
			$nome_categoria = "Nenhuma";
		}


		$query2 = $pdo->query("SELECT * FROM sub_categorias where id = '$sub_categoria'");
		$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
		$total_reg2 = @count($res2);
		if ($total_reg2 > 0) {
			$nome_sub_categoria = $res2[0]['nome'];
		} else {
			$nome_sub_categoria = "Nenhuma";
		}


		$classe_estoque = '';
		if ($estoque <= $nivel_estoque) {
			$classe_estoque = 'text-danger';
		}

		$valor_promoF = @number_format($valor_promo, 2, ',', '.');

		if ($valor_promo > 0) {
			$texto_promo = ' / <span style="color:#E47500">' . $valor_promoF . '</span>';
			$texto_color = '<span style="color: #E47500">(Promoção)</span>';
		} else {
			$texto_promo = '';
			$texto_color = '';
		}

		$cor = '';

		if ($estoque == 0 and $tem_estoque == 'Sim') {
			$cor = 'table-danger';
		} else if ($estoque <= $nivel_estoque and $tem_estoque == 'Sim') {
			$cor = 'table-warning';
		} else if ($estoque > 0 and $estoque != $nivel_estoque) {
			$cor = 'table-success';
		}


		if ($tem_estoque == 'Não') {
			$mostrar_ent_said = 'ocultar';
		} else {
			$mostrar_ent_said = '';
		}
		

		echo <<<HTML
<tr style="color:{$classe_ativo}" class="{$cor}">
<td align="center">
<div class="custom-checkbox custom-control">
<input type="checkbox" class="custom-control-input" id="seletor-{$id}" onchange="selecionar('{$id}')">
<label for="seletor-{$id}" class="custom-control-label mt-1 text-dark"></label>
</div>
</td>
<td> {$codigo}</td>
<td>{$nome} {$texto_color}</td>
<td>R$ {$valor_vendaF} $texto_promo</td>
<td >{$nome_categoria}</td>
<td >{$nome_sub_categoria}</td>

<td class="{$classe_estoque}">{$estoque}</td>
<td><a class="icones_mobile" href="#" onclick="mostrar('{$codigo}','{$nomeF}','{$nome_categoria}','{$nome_sub_categoria}','{$valor_compraF}','{$valor_vendaF}','{$estoque}','{$ativo}','{$foto}','{$descricaoF}','{$valor_lucro}','{$lucro_reais}','{$valor_promoF}','{$tem_estoque}')"><img class="hovv" src="images/produtos/{$foto}" width="25px"></td>
<td>

<a class="btn btn-info btn-sm" href="#" onclick="editar('{$id}','{$codigo}','{$nomeF}','{$categoria}','{$sub_categoria}','{$valor_compraF}','{$valor_vendaF}','{$estoque}','{$nivel_estoque}','{$foto}','{$descricao}','{$valor_lucro}','{$lucro_reaisF}','{$valor_promoF}','{$tem_estoque}','{$mostrar_site}', '{$descricaoF}')" title="Editar Dados"><i class="fa fa-edit"></i></a>


		<big><a href="#" class="btn btn-danger-light btn-sm" onclick="excluirprod('{$id}')" title="Excluir"><i class="fa fa-trash-can"></i></a></big>



	<a class="btn btn-warning btn-sm" href="#" onclick="mostrar('{$codigo}','{$nomeF}','{$nome_categoria}','{$nome_sub_categoria}','{$valor_compraF}','{$valor_vendaF}','{$estoque}','{$ativo}','{$foto}','{$descricaoF}','{$valor_lucro}','{$lucro_reais}','{$valor_promoF}','{$tem_estoque}')" title="Mostrar Dados"><i class="fa fa-info-circle"></i></a>


<a class="btn btn-success btn-sm" href="#" onclick="ativarprod('{$id}', '{$acao}')" title="{$titulo_link}"><i class="fa {$icone}"></i></a>




<a class="btn btn-danger btn-sm {$mostrar_ent_said}" href="#" onclick="saida('{$id}','{$nome}', '{$estoque}')" title="Saída de Produto"><i class="fa fa-sign-out"></i></a>

<a class="btn btn-success btn-sm {$mostrar_ent_said}" href="#" onclick="entrada('{$id}','{$nome}', '{$estoque}')" title="Entrada de Produto"><i class="fa fa-sign-in"></i></a>

	<a class="btn btn-dark btn-sm" href="#" onclick="gerarEtiquetas('{$id}', '{$codigo}', '{$valor_vendaF}', '{$nome}')" title="Gerar Etiquetas"><i class="fa fa-barcode"></i></a>

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
	$(document).ready(function () {
		$('#tabela2').DataTable({
			"language": {
				//"url" : '//cdn.datatables.net/plug-ins/1.13.2/i18n/pt-BR.json'
			},
			"ordering": false,
			"stateSave": true
		});
	});

</script>

<script type="text/javascript">
	function editar(id, codigo, nome, categoria, sub_categoria, compra, venda, estoque, nivel, foto, descricao, valor_lucro, lucro_reais, valor_promo, tem_estoque, mostrar_site, descricao) {

		

		$('#mensagem').text('');
		$('#titulo_inserir').text('Editar Registro');

		$('#id').val(id);
		$('#nome').val(decodeURIComponent(nome));
		$('#codigo').val(codigo);
		$('#categoria').val(categoria).change();
		$('#sub_categoria').val(sub_categoria).change();
		$('#valor_compra').val(compra);
		$('#valor_venda').val(venda);
		$('#estoque').val(estoque);
		$('#nivel_estoque').val(nivel);
		$('#foto').val('');
		$('#foto_dados').attr("src", "images/perfil/" + foto);
		$('#valor_lucro').val(valor_lucro);
		$('#lucro_reais').val(lucro_reais);
		$('#valor_promocional').val(valor_promo);
		$('#tem_estoque').val(tem_estoque);

		$('#mostrar_site').val(mostrar_site).change();
    	$('#descricao').val(decodeURIComponent(descricao));


		$('#target').attr('src', 'images/produtos/' + foto);

		$('#modalForm').modal('show');

		gerarCodigo()
	}

	function mostrar(codigo, nome, categoria, sub_categoria, compra, venda, estoque, ativo, foto, descricao, valor_lucro, lucro_reais, valor_promo, tem_estoque) {


		$('#titulo_dados').text(decodeURIComponent(nome));
		$('#codigo_dados').text(codigo);
		$('#categoria_dados').text(categoria);
		$('#sub_categoria_dados').text(sub_categoria);
		$('#compra_dados').text(compra);
		$('#venda_dados').text(venda);
		$('#estoque_dados').text(estoque);
		$('#ativo_dados').text(ativo);
		$('#descricao_dados').text(decodeURIComponent(descricao));
		$('#valor_lucro_dados').text(valor_lucro);
		$('#lucro_reais_dados').text(lucro_reais);
		$('#promocao_dados').text(valor_promo);
		$('#tem_estoque_dados').text(tem_estoque);

		$('#foto_dados').attr("src", "images/produtos/" + foto);


		$('#modalDados').modal('show');

	}


	function limparCampos() {
		$('#id').val('');
		$('#codigo').val('');
		$('#nome').val('');
		$('#estoque').val('');
		$('#nivel_estoque').val('');
		$('#valor_venda').val('');
		$('#valor_compra').val('');
		$('#descricao').val('');
		$('#valor_lucro').val('');
		$('#lucro_reais').val('');
		$('#valor_promo').val('');
		$('#tem_estoque').val('Sim');
		$('#descricao').val('');
		$('#mostrar_site').val('Sim');

		$('#target').attr('src', 'images/produtos/sem-foto.jpg');
		$('#foto').val('');

		$('#ids').val('');
		$('#btn-deletar').hide();
		$('#categoria').val('').change();
		$('#sub_categoria').val('').change();
	}


	function gerarEtiquetas(id, codigo, valor, nome) {
		$('#id-etiqueta').val(id);
		$('#codigo-etiqueta').val(codigo);
		$('#valor-etiqueta').val(valor);
		$('#nome-etiqueta').val(nome);

		$('#titulo-etiquetas').text(nome);

		$('#modalEtiquetas').modal('show');
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

	function deletarSel() {
		var ids = $('#ids').val();
		var id = ids.split("-");

		for (i = 0; i < id.length - 1; i++) {
			excluirMultiplos(id[i]);
		}


		setTimeout(() => {
			listar();

		}, 1000);

		limparCampos();
	}
</script>



<script type="text/javascript">
	function saida(id, nome, estoque) {

		$('#nome_saida').text(nome);
		$('#estoque_saida').val(estoque);
		$('#id_saida').val(id);

		$('#quantidade_saida').val('');
		$('#motivo_saida').val('');

		$('#modalSaida').modal('show');
	}
</script>


<script type="text/javascript">
	function entrada(id, nome, estoque) {

		$('#nome_entrada').text(nome);
		$('#estoque_entrada').val(estoque);
		$('#id_entrada').val(id);

		$('#quantidade_entrada').val('');
		$('#motivo_entrada').val('');

		$('#modalEntrada').modal('show');
	}

	

	function ativarprod(id, acao) {
		$.ajax({
			url: 'paginas/' + pag + "/mudar-status.php",
			method: 'POST',
			data: { id, acao },
			dataType: "html",

			success: function (mensagem) {
				if (mensagem.trim() == "Alterado com Sucesso") {
					buscar();
				} else {
					$('#mensagem-excluir').addClass('text-danger')
					$('#mensagem-excluir').text(mensagem)
				}
			}
		});
	}

</script>