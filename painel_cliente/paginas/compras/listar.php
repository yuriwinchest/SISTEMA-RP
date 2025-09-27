<?php 
@session_start();
$id_empresa = @$_SESSION['empresa'];
$id_usuario = @$_SESSION['id_cliente'];
require_once("../../../conexao.php");
require_once("../../../painel/buscar_config.php");

$pagina = 'receber';
$data_atual = date('Y-m-d');

$total_valor = 0;
$total_valorF = 0;

$dataInicial = @$_POST['p2'];
$dataFinal = @$_POST['p3'];
$status = '%'.@$_POST['p4'].'%';
$vencidas = @$_POST['p1'];

if($dataInicial == ""){
	$dataInicial = $data_atual;
}

if($dataFinal == ""){
	$dataFinal = $data_atual;
}


//PEGAR O TOTAL DAS CONTAS A PAGAR PENDENTES
$query = $pdo->query("SELECT * from $pagina where pago = 'Não' and referencia = 'Venda' and empresa = '$id_empresa' and cliente = '$id_usuario'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0){
	for($i=0; $i < $total_reg; $i++){
	foreach ($res[$i] as $key => $value){}
		$total_valor += $res[$i]['valor'];
		$total_valorF = number_format($total_valor, 2, ',', '.');
}}




$data_hoje = date('Y-m-d');
$data_amanha = date('Y/m/d', strtotime("+1 days",strtotime($data_hoje)));


if($vencidas == 'Vencidas'){
	$query = $pdo->query("SELECT * from $pagina where vencimento < curDate() and pago = 'Não' and referencia = 'Venda' and empresa = '$id_empresa' and cliente = '$id_usuario' order by id desc ");
}

else if($vencidas == 'Hoje'){
	$query = $pdo->query("SELECT * from $pagina where vencimento = curDate() and pago = 'Não' and referencia = 'Venda' and empresa = '$id_empresa' and cliente = '$id_usuario' order by id desc ");
}

else if($vencidas == 'Amanha'){
	$query = $pdo->query("SELECT * from $pagina where vencimento = '$data_amanha' and pago = 'Não' and referencia = 'Venda' and empresa = '$id_empresa' and cliente = '$id_usuario' order by id desc ");
}
else if($vencidas == 'Canceladas'){
	$query = $pdo->query("SELECT * from $pagina where cancelada = 'Sim' and referencia = 'Venda' and empresa = '$id_empresa' and cliente = '$id_usuario' order by id desc ");
}
else{
	$query = $pdo->query("SELECT * from $pagina WHERE vencimento >= '$dataInicial' and vencimento <= '$dataFinal' and pago LIKE '$status' and referencia = 'Venda' and empresa = '$id_empresa' and cliente = '$id_usuario' order by id desc ");
}


echo <<<HTML
<small>
HTML;
$total_pago = 0;
$total_pendentes = 0;
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0){
echo <<<HTML
	<table class="table table-striped table-hover table-bordered text-nowrap border-bottom dt-responsive" id="tabela">
	<thead> 
			<tr> 				
				<th>Descrição</th>
				<th>Valor</th> 
				<th>Cliente</th>
				<th>Efetuada</th> 
				<th>Vencimento</th> 				
				<th>Forma Pgto</th>							
				<th>Comprovante</th>
			</tr> 
		</thead> 
		<tbody> 
HTML;
for($i=0; $i < $total_reg; $i++){
	foreach ($res[$i] as $key => $value){}
$id = $res[$i]['id'];
$descricao = $res[$i]['descricao'];
$cliente = $res[$i]['cliente'];
$valor = $res[$i]['valor'];
$data_lanc = $res[$i]['data_lanc'];
$data_venc = $res[$i]['vencimento'];
$data_pgto = $res[$i]['data_pgto'];
$usuario_lanc = $res[$i]['usuario_lanc'];
$usuario_pgto = $res[$i]['usuario_pgto'];
$frequencia = $res[$i]['frequencia'];
$saida = $res[$i]['forma_pgto'];
$arquivo = $res[$i]['arquivo'];
$pago = $res[$i]['pago'];
$obs = $res[$i]['obs'];
$cancelada = $res[$i]['cancelada'];


if($descricao == 'Nova Venda'){
			$descricao = 'Compra';
		}


//extensão do arquivo
$ext = pathinfo($arquivo, PATHINFO_EXTENSION);
if($ext == 'pdf'){
	$tumb_arquivo = 'pdf.png';
}else if($ext == 'rar' || $ext == 'zip'){
	$tumb_arquivo = 'rar.png';
}else if($ext == 'doc' || $ext == 'docx'){
	$tumb_arquivo = 'word.png';
}else{
	$tumb_arquivo = $arquivo;
}

$data_lancF = implode('/', array_reverse(@explode('-', $data_lanc)));
$data_vencF = implode('/', array_reverse(@explode('-', $data_venc)));
$data_pgtoF = implode('/', array_reverse(@explode('-', $data_pgto)));
$valorF = number_format($valor, 2, ',', '.');

$query2 = $pdo->query("SELECT * FROM usuarios where id = '$usuario_lanc'");
$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
if(@count($res2) > 0){
	$nome_usu_lanc = $res2[0]['nome'];
}else{
	$nome_usu_lanc = 'Sem Usuário';
}


$query2 = $pdo->query("SELECT * FROM usuarios where id = '$usuario_pgto'");
$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
if(@count($res2) > 0){
	$nome_usu_pgto = $res2[0]['nome'];
}else{
	$nome_usu_pgto = 'Sem Usuário';
}


$query2 = $pdo->query("SELECT * FROM frequencias where dias = '$frequencia'");
$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
if(@count($res2) > 0){
	$nome_frequencia = $res2[0]['frequencia'];
}else{
	$nome_frequencia = 'Única';
}

$nome_pessoa = 'Sem Registro';
$tipo_pessoa = 'Pessoa';
$pix_pessoa = 'Sem Registro';
$tel_pessoa = 'Sem Registro';

$query2 = $pdo->query("SELECT * FROM clientes where id = '$cliente'");
$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
if(@count($res2) > 0){
	$nome_pessoa = $res2[0]['nome'];	
	$tipo_pessoa = 'Cliente';
	$tel_pessoa = $res2[0]['telefone'];
}


$query2 = $pdo->query("SELECT * FROM formas_pgto where id = '$saida'");
$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
if(@count($res2) > 0){
	$nome_forma_pgto = $res2[0]['nome'];
	
}else{
	$nome_forma_pgto = "";
}


if($pago == 'Sim'){
	$classe_pago = 'verde';
	$ocultar = 'ocultar';
	$total_pago += $valor;
}else{
	$classe_pago = 'text-danger';
	$ocultar = '';
	$total_pendentes += $valor;
}

if($cancelada == 'Sim'){
	$classe_pago = 'text-warning';
	$ocultar_cancelar = 'ocultar';
}else{
	$ocultar_cancelar = '';
}



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


	if($valor_com_residuos > 0){
		$vlr_antigo_conta = '('.$valor_com_residuos.')';
		$descricao_link = '';
		$descricao_texto = 'd-none';
	}else{
		$vlr_antigo_conta = '';
		$descricao_link = 'd-none';
		$descricao_texto = '';
	}

$total_pagoF = number_format($total_pago, 2, ',', '.');
$total_pendentesF = number_format($total_pendentes, 2, ',', '.');

echo <<<HTML
			<tr> 
				<td><i class="fa fa-square {$classe_pago} mr-1"></i> {$descricao}</td> 
					<td>R$ {$valorF} <small><a href="#" onclick="mostrarResiduos('{$id}')" class="text-danger" title="Ver Resíduos">{$vlr_antigo_conta}</a></small></td>	
					<td>{$nome_pessoa}</td>
					<td>{$data_lancF}</td>
				<td>{$data_vencF}</td>				
				<td>{$nome_forma_pgto}</td>
				
				<td>
					
				
					<a class="btn btn-primary btn-sm" href="../painel/rel/comprovante.php?id={$id}&imprimir=Não" target="_blank" title="Ver Comprovante"><i class="fa fa-file-pdf-o"></i></a>
				</td>  
			</tr> 
HTML;
}
echo <<<HTML
		</tbody> 
		<small><div align="center" id="mensagem-excluir"></div></small>
	</table>
	<br>
	<div align="right"><span>Total Pendentes: <span class="text-danger">{$total_pendentesF}</span></span> <span style="margin-left: 25px">Total Pago: <span class="verde">{$total_pagoF}</span></span></div>
</small>
HTML;
}else{
	echo 'Não possui nenhum cadastro!';
}

?>


<script type="text/javascript">


	$(document).ready( function () {
	    $('#tabela').DataTable({
	    	"ordering": false,
	    	"stateSave": true,
	    });
	    $('#tabela_filter label input').focus();
	    $('#total_itens').text('R$ <?=$total_valorF?>');
	} );



	function editar(id, descricao, cliente, valor, data_venc, frequencia, saida, arquivo, obs, data_pgto){

		if(cliente == 0){
			cliente = "";
		}

	
		
		$('#id').val(id);
		$('#descricao').val(descricao);
		$('#cliente').val(cliente).change();
		$('#valor').val(valor);
		$('#data_venc').val(data_venc);
		$('#data_pgto').val(data_pgto);
		$('#frequencia').val(frequencia).change();
		$('#saida').val(saida).change();
		
		$('#obs').val(obs);		

		$('#arquivo').val('');
		$('#foto').val(''); 
		

		$('#titulo_inserir').text('Editar Registro');
		$('#modalForm').modal('show');
		$('#mensagem').text('');


		resultado = arquivo.split(".", 2);

    	 if(resultado[1] === 'pdf'){
            $('#target').attr('src', "images/pdf.png");
            return;
        } else if(resultado[1] === 'rar' || resultado[1] === 'zip'){
            $('#target').attr('src', "images/rar.png");
            return;
        }else if(resultado[1] === 'doc' || resultado[1] === 'docx'){
            $('#target').attr('src', "images/word.png");
            return;
        }else{
        	$('#target').attr('src','images/contas/' + arquivo);			
        }		
	}



	function mostrar(id, descricao, pessoa, tipo_pessoa, valor, data_lanc, data_venc, data_pgto, usuario_lanc, usuario_pgto, frequencia, saida, arquivo, pago, obs, pix, tel){

		
		if(data_pgto == "00/00/0000"){
			data_pgto = 'Não Pago Ainda';
		}

		$('#pessoa_mostrar').text(pessoa);
		$('#tipo_pessoa_mostrar').text(tipo_pessoa);


		$('#nome_mostrar').text(descricao);
		$('#tel_mostrar').text(tel);
		$('#valor_mostrar').text(valor);
		$('#lanc_mostrar').text(data_lanc);
		$('#venc_mostrar').text(data_venc);
		$('#pgto_mostrar').text(data_pgto);		
		$('#usu_lanc_mostrar').text(usuario_lanc);	
		$('#usu_pgto_mostrar').text(usuario_pgto);	
		$('#freq_mostrar').text(frequencia);
		$('#saida_mostrar').text(saida);
		$('#pago_mostrar').text(pago);
		$('#obs_mostrar').text(obs);
		
		$('#pix_mostrar').text(pix);
		
		$('#link_arquivo').attr('href','images/contas/' + arquivo);
		

		$('#modalMostrar').modal('show');

		resultado = arquivo.split(".", 2);

    	 if(resultado[1] === 'pdf'){
            $('#target_mostrar').attr('src', "images/pdf.png");
            return;
        } else if(resultado[1] === 'rar' || resultado[1] === 'zip'){
            $('#target_mostrar').attr('src', "images/rar.png");
            return;
        }else if(resultado[1] === 'doc' || resultado[1] === 'docx'){
            $('#target_mostrar').attr('src', "images/word.png");
            return;
        }else{
        	$('#target_mostrar').attr('src','images/contas/' + arquivo);			
        }		
	}

	function limparCampos(){
		$('#id').val('');
		$('#descricao').val('');		
		$('#valor').val('');
		$('#data_pgto').val('');		
		$('#data_venc').val('<?=$data_atual?>');			
		$('#arquivo').val('');
		$('#target').attr('src','images/contas/sem-foto.png');
		$('#obs').val('');
		$('#cliente').val('').change();
		
	}


	function parcelar(id, valor, nome){
    $('#id-parcelar').val(id);
    $('#valor-parcelar').val(valor);
    $('#qtd-parcelar').val('');
    $('#nome-parcelar').text(nome);
    $('#nome-input-parcelar').val(nome);
    $('#modalParcelar').modal('show');
    $('#mensagem-parcelar').text('');
}


function baixar(id, valor, descricao, saida){
	$('#id-baixar').val(id);
	$('#descricao-baixar').text(descricao);
	$('#valor-baixar').val(valor);
	$('#saida-baixar').val(saida).change();
	$('#subtotal').val(valor);

	
	$('#valor-juros').val('');
	$('#valor-desconto').val('');
	$('#valor-multa').val('');

	$('#modalBaixar').modal('show');
	$('#mensagem-baixar').text('');
}



function mostrarResiduos(id){

	$.ajax({
		url: 'paginas/' + pag + "/listar-residuos.php",
		method: 'POST',
		data: {id},
		dataType: "html",

		success:function(result){
			$("#listar-residuos").html(result);
		}
	});
	$('#modalResiduos').modal('show');
	
	
}


	function arquivo(id, nome){
    $('#id-arquivo').val(id);    
    $('#nome-arquivo').text(nome);
    $('#modalArquivos').modal('show');
    $('#mensagem-arquivo').text(''); 
    listarArquivos();   
}





</script>



