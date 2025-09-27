<?php 
@session_start();
$id_empresa = @$_SESSION['empresa'];
require_once("../../../conexao.php");
require_once("../../buscar_config.php");

$pagina = 'orcamentos';
$data_atual = date('Y-m-d');

$total_valor = 0;
$total_valorF = 0;

$dataInicial = @$_POST['p1'];
$dataFinal = @$_POST['p2'];
$status = '%'.@$_POST['p3'].'%';

if($dataFinal == ""){
	$dataFinal = $data_atual;
}

if($dataInicial == ""){
	$dataInicial = $data_atual;
}
 

//PEGAR O TOTAL ORÇAMENTOS PENDENTES
$query = $pdo->query("SELECT * from $pagina where status = 'Pendente' and empresa = '$id_empresa'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_orcamentos = @count($res);


$query = $pdo->query("SELECT * from $pagina WHERE data >= '$dataInicial' and data <= '$dataFinal' and status LIKE '$status' and empresa = '$id_empresa' order by id desc ");

echo <<<HTML
<small>
HTML;
$total_pago = 0;
$total_pendentes = 0;
$total_pagoF = 0;
$total_pendentesF = 0;
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0){
echo <<<HTML
	<table class="table table-striped table-hover table-bordered text-nowrap border-bottom dt-responsive" id="tabela">
	<thead> 
			<tr> 				
				<th>ID</th>
				<th width="25%">Cliente</th>
				<th>Equipamento</th> 
				<th>Modelo</th>
				<th>Data</th> 
				<th>Entrega</th> 
				<th>Subtotal</th>
				<th>Efetuado Por</th>					
				<th>Ações</th>
			</tr> 
		</thead> 

HTML;
for($i=0; $i < $total_reg; $i++){
	foreach ($res[$i] as $key => $value){}
$id = $res[$i]['id'];
$data = $res[$i]['data'];
$cliente = $res[$i]['cliente'];
$equipamento = $res[$i]['equipamento'];
$marca = $res[$i]['marca'];
$modelo = $res[$i]['modelo'];
$data_entrega = $res[$i]['data_entrega'];
$dias_validade = $res[$i]['dias_validade'];
$valor = $res[$i]['valor'];
$desconto = $res[$i]['desconto'];
$tipo_desconto = $res[$i]['tipo_desconto'];
$subtotal = $res[$i]['subtotal'];
$obs = $res[$i]['obs'];
$defeito = $res[$i]['defeito'];
$status = $res[$i]['status'];
$total_produtos = $res[$i]['total_produtos'];
$total_servicos = $res[$i]['total_servicos'];
$funcionario = $res[$i]['funcionario'];
$frete = $res[$i]['frete'];
$vall = $res[$i]['vall'];
$condicoes = $res[$i]['condicoes'];
$acessorios = $res[$i]['acessorios'];
$laudo = $res[$i]['laudo'];
$senha_ap = $res[$i]['senha_ap'];
$mao_obra = $res[$i]['mao_obra'];

;

$dataF = implode('/', array_reverse(@explode('-', $data)));
$data_entregaF = implode('/', array_reverse(@explode('-', $data_entrega)));

//formatar os valores
$valorF = @number_format($valor, 2, ',', '.');
$subtotalF = @number_format($subtotal, 2, ',', '.');
$freteF = @number_format($frete, 2, ',', '.');
$total_produtosF = @number_format($total_produtos, 2, ',', '.');
$total_servicosF = @number_format($total_servicos, 2, ',', '.');
$vallF = @number_format($vall, 2, ',', '.');

$query2 = $pdo->query("SELECT * FROM usuarios where id = '$funcionario'");
$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
if(@count($res2) > 0){
	$nome_usu_lanc = $res2[0]['nome'];
}else{
	$nome_usu_lanc = 'Sem Usuário';
}


$query2 = $pdo->query("SELECT * FROM clientes where id = '$cliente'");
$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
if(@count($res2) > 0){
	$nome_cliente = $res2[0]['nome'];	
	$tel_cliente = $res2[0]['telefone'];
	$endereco = $res2[0]['endereco'];
	$numero = $res2[0]['numero'];
	$bairro = $res2[0]['bairro'];
	$cidade = $res2[0]['cidade'];
	$estado = $res2[0]['estado'];
	$cep = $res2[0]['cep'];

	$endereco_cliente = $endereco.' '.$numero.' '.$bairro.' '.$cidade.' '.$estado.' '.$cep;	
	
}


if($status == 'Aprovado'){
	$debito2 = 'table-success';
	$classe_pago = 'verde';
	$ocultar = 'ocultar';
	$total_pago += $subtotal;
}else{
	$debito2 = 'table-danger';
	$classe_pago = 'text-danger';
	$ocultar = '';
	$total_pendentes += $subtotal;
}


$total_pagoF = number_format($total_pago, 2, ',', '.');
$total_pendentesF = number_format($total_pendentes, 2, ',', '.');

if($tel_cliente == "Sem Registro"){
	$ocultar_whats = 'ocultar';
}else{
	$ocultar_whats = '';
}

$tel_pessoaF = '55'.preg_replace('/[ ()-]+/' , '' , $tel_cliente);

if($tipo_desconto == "%"){
	$valor_porcent = '%';
	$valor_reais = '';
	$descontoF = $desconto;
}else{
	$valor_porcent = '';
	$valor_reais = 'R$';
	$descontoF = number_format($desconto, 2, ',', '.');
}

$ocultar_obs = '';
$classe_obs = 'text-warning';
if($obs == ""){
	$ocultar_obs = 'ocultar';
	$classe_obs = 'text-primary';
}



$nome_equipamento = '';
$nome_marca = '';
$nome_modelo = '';

	//trocando os ID pelos noems
	$query2 = $pdo->query("SELECT * FROM equipamentos where id = '$equipamento'");
	$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
	$total_reg2 = @count($res2);
	if($total_reg2 > 0){
		$nome_equipamento = $res2[0]['nome'];
	}

	$query2 = $pdo->query("SELECT * FROM marcas where id = '$marca'");
	$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
	$total_reg2 = @count($res2);
	if($total_reg2 > 0){
		$nome_marca = $res2[0]['nome'];
	}

	$query2 = $pdo->query("SELECT * FROM modelos where id = '$modelo'");
	$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
	$total_reg2 = @count($res2);
	if($total_reg2 > 0){
		$nome_modelo = $res2[0]['nome'];
	}



echo <<<HTML

			<tr class="{$debito2}"> 
				<td>{$id}</td>
				<td><i class="fa fa-square {$classe_pago} mr-1"></i> {$nome_cliente}</td>
				<td>{$equipamento}</td>
				<td>{$nome_modelo}</td>
				<td>{$dataF}</td>	
				<td>{$data_entregaF}</td>
				<td class="text-danger">R$ {$subtotalF}</td>
				<td>{$nome_usu_lanc}</td>
				
			<td>

			<a class="btn btn-info btn-sm" class="{$ocultar}" href="#" onclick="editar('{$id}','{$cliente}','{$data_entrega}','{$dias_validade}','{$valor}','{$desconto}','{$tipo_desconto}','{$subtotal}','{$obs}','{$frete}','{$equipamento}','{$marca}','{$modelo}','{$defeito}','{$condicoes}','{$acessorios}','{$laudo}','{$senha_ap}','{$mao_obra}','{$vall}')" title="Editar Dados"><i class="fa fa-edit"></i></a>


			<a class="btn btn-primary btn-sm" href="#" onclick="mostrar('{$id}','{$nome_cliente}','{$data_entregaF}','{$dias_validade}','{$valor}','{$desconto}','{$tipo_desconto}','{$subtotal}','{$obs}','{$frete}','{$nome_equipamento}','{$nome_marca}','{$nome_modelo}','{$defeito}','{$condicoes}','{$acessorios}','{$laudo}','{$senha_ap}','{$mao_obra}','{$vall}')" title="Mostrar Dados"><i class="fa fa-info-circle"></i></a>

	

				
	<a class="btn btn-danger-light btn-sm {$ocultar}" href="#" onclick="excluirOrc('{$id}')" title="Excluir"><i class="fa fa-trash-can"></i></a>



	<a class="btn btn-success-light btn-sm {$ocultar}" href="#" onclick="baixar('{$id}')" title="Aprovar Orçamento"><i class="fa fa-check-square"></i></a>


				
					

					<a class="btn btn-dark btn-sm" href="#" onclick="arquivo('{$id}', '{$nome_cliente}')" title="Inserir / Ver Arquivos"><i class="fa fa-file-lines"></i></a>


					<form class="btn btn-primary btn-sm" method="POST" action="rel/orcamento_class.php" target="_blank" style="display:inline-block">
					<input type="hidden" name="id" value="{$id}">
					<input type="hidden" name="enviar" value="Não">
					<button title="PDF do Orçamento" style="background:transparent; border:none; margin:0; padding:0"><i class="fa fa-file-pdf-o " style="color:white"></i></button>
					</form>


					<div class="dropdown" style="display: inline-block;">                      
						<a title="Impressão da OS 80mm" class="btn btn-danger btn-sm" href="#" aria-expanded="false" aria-haspopup="true" data-bs-toggle="dropdown" class="dropdown"><i class="fa fa-print"></i></a>
						<div  class="dropdown-menu tx-13">
							<div style="width: 240px; padding:15px 5px 0 10px;" class="dropdown-item-text">
									<form class="btn btn-dark btn-sm" method="POST" action="rel/imp_orcamento.php" target="_blank" >
										<input type="hidden" name="id" value="{$id}">
										<input type="hidden" name="duas_vias_os" value="Não">
												<button title="Impressão da OS 80mm" style="background:transparent; border:none; margin:0; padding:0; color:#FFF">
													Uma Via
												</button>							
									</form>


									<form class="btn btn-dark btn-sm" method="POST" action="rel/imp_orcamento.php" target="_blank" >
										<input type="hidden" name="id" value="{$id}">
										<input type="hidden" name="duas_vias_os" value="Sim">
												<button title="Impressão da OS 80mm" style="background:transparent; border:none; margin:0; padding:0; color:#FFF">
													Duas Via
												</button>							
									</form>
							</div>
						</div>
					</div>



					<a class="btn btn-success btn-sm" class="{$ocultar_whats}" href="http://api.whatsapp.com/send?1=pt_BR&phone={$tel_pessoaF}" title="Whatsapp" target="_blank"><i class="bi bi-whatsapp"></i></a>



				</td>  
			</tr> 
HTML;
}
echo <<<HTML
		</tbody> 
		<small><div align="center" id="mensagem-excluir"></div></small>
	</table>
	<br>
	<div align="right"><span>Total Pendentes: <span class="text-danger">{$total_pendentesF}</span></span> <span style="margin-left: 25px">Total Aprovados: <span class="verde">{$total_pagoF}</span></span></div>
</small>
HTML;
}else{
	echo 'Não possui nenhuma Orçamento!';
}

?>


<script type="text/javascript">


	$(document).ready( function () {
	    $('#tabela').DataTable({
	    	"ordering": false,
	    	"stateSave": true,
	    });
	    $('#tabela_filter label input').focus();
	    $('#total_itens').text('<?=$total_orcamentos?>');
	} );



	function editar(id, cliente, data_entrega, dias_validade, valor, desconto, tipo_desconto, subtotal, obs, frete, equipamento, marca, modelo, defeito, condicoes, acessorios, laudo, senha_ap, mao_obra, vall){

		if(cliente == 0){
			cliente = "";
		}

		
		$('#id').val(id);
		$('#cliente').val(cliente).change();
		$('#data_entrega').val(data_entrega);
		
		$('#dias_validade').val(dias_validade);
		$('#valor').val(valor);
		$('#desconto').val(desconto);
		$('#tipo_desconto').val(tipo_desconto).change();
		$('#subtotal').val(subtotal);
		$('#obs').val(obs);	
		$('#frete').val(frete);
		$('#equipamento').val(equipamento);
		$('#marca').val(marca);
		$('#modelo').val(modelo).change();
		$('#defeito').val(defeito);
		$('#condicoes').val(condicoes);
		$('#acessorios').val(acessorios);
		$('#laudo').val(laudo);	
		$('#senha_ap').val(senha_ap);
		$('#mao_obra').val(mao_obra);
		$('#vall').val(vall);
						

		listarProdutos();
		listarServicos();
		totalizar();
		
		$('#modalForm').modal('show');
		$('#mensagem').text('');
		
	}



		function mostrar(id, nome_cliente, data_entrega, dias_validade, valor, desconto, tipo_desconto, subtotal, obs, frete, nome_equipamento, nome_marca, nome_modelo, defeito, condicoes, acessorios, laudo, senha_ap, mao_obra, vall){
		    	
    	$('#id_dados').text(id);
    	$('#nome_cliente_dados').text(nome_cliente);
    	$('#data_entrega_dados').text(data_entrega);
    	$('#dias_validade_dados').text(dias_validade);
    	$('#valor_dados').text(valor);
    	$('#desconto_dados').text(desconto);
    	$('#tipo_desconto_dados').text(tipo_desconto);
    	$('#subtotal_dados').text(subtotal);
    	$('#obs_dados').text(obs);
    	$('#frete_dados').text(frete);
    	$('#nome_equipamento_dados').text(nome_equipamento);
		$('#nome_marca_dados').text(nome_marca);	
		$('#nome_modelo_dados').text(nome_modelo);
    	$('#defeito_dados').text(defeito);
    	$('#condicoes_dados').text(condicoes);
		$('#acessorios_dados').text(acessorios);
		$('#laudo_dados').text(laudo);
    	$('#senha_ap_dados').text(senha_ap);
    	$('#mao_obra_dados').text(mao_obra);
    	$('#vall_dados').text(vall);
    	
    	    	

    	$('#modalDados').modal('show');
    	//listarDebitos(id);
    	listarServicos(id);
	}


	function limparCampos(){
		$('#id').val('');
		$('#cliente').val('').change();		
		$('#produto').val('').change();	
		$('#servico').val('').change();
		$('#data_entrega').val('<?=$data_atual?>');	
		$('#dias_validade').val('');	
		$('#valor').val('');
		$('#desconto').val('');
		$('#subtotal').val('');		
		$('#obs').val('');
		$('#frete').val('');
		$('#equipamento').val('');
		$('#marca').val('');
		$('#modelo').val('').change();	
		$('#defeito').val('');
		$('#condicoes').val('');
		$('#acessorios').val('');
		$('#laudo').val('');
		$('#senha_ap').val('');
		$('#mao_obra').val('');
		$('#vall').val('');
		listarServicos()
		listarProdutos()
		totalizar()
		
	}


	


	function arquivo(id, nome){
    $('#id-arquivo').val(id);    
    $('#nome-arquivo').text(nome);
    $('#modalArquivos').modal('show');
    $('#mensagem-arquivo').text(''); 
    listarArquivos();   
}




</script>





