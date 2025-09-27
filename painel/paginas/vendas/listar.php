<?php 
@session_start();
$id_empresa = @$_SESSION['empresa'];
require_once("../../../conexao.php");
require_once("../../buscar_config.php");
$tabela = 'produtos';


$id = @$_POST['p1'];
$busca = @$_POST['p2'];

$id_cat = @$_POST['p1'];

if($id == ""){
	$query = $pdo->query("SELECT * from categorias where ativo = 'Sim' and empresa = '$id_empresa' order by nome asc limit 1");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$id = @$res[0]['id'];
$nome_cat = @$res[0]['nome'];
}else{

	if($id == 0){		
		$nome_cat = 'Serviços';
	}else{
		$query = $pdo->query("SELECT * from categorias where id = '$id' and empresa = '$id_empresa'");
		$res = $query->fetchAll(PDO::FETCH_ASSOC);
		$nome_cat = @$res[0]['nome'];
	}

}

if($busca == ""){
	$query = $pdo->query("SELECT * from $tabela where categoria = '$id' and ativo = 'Sim' and (estoque > 0 or tem_estoque = 'Não') and empresa = '$id_empresa' order by id asc");

	$query_serv = $pdo->query("SELECT * from servicos where ativo = 'Sim' and empresa = '$id_empresa' order by id asc");
}else{
	$query = $pdo->query("SELECT * from $tabela where (nome LIKE '%$busca%' OR codigo LIKE '%$busca%') and ativo = 'Sim' and (estoque > 0 or tem_estoque = 'Não') and empresa = '$id_empresa' order by id asc");

	$query_serv = $pdo->query("SELECT * from servicos where (nome LIKE '%$busca%') and ativo = 'Sim' and empresa = '$id_empresa' order by id asc");

}

$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = @count($res);
if($linhas > 0){
	for($i=0; $i<$linhas; $i++){
	$id = $res[$i]['id'];
	$nome = $res[$i]['nome'];	
	$valor_venda = $res[$i]['valor_venda'];	
	$estoque = $res[$i]['estoque'];			
	$foto = $res[$i]['foto'];
	$categoria = $res[$i]['categoria'];
	$subcategoria = $res[$i]['sub_categoria'];
	$codigo = $res[$i]['codigo'];
	$tem_estoque = $res[$i]['tem_estoque'];
		
	$valor_vendaF = number_format($valor_venda, 2, ',', '.'); 
	$nomeF = mb_strimwidth($nome, 0, 80, "..."); 

	if($estoque <= 0){
		$ocultar_card = 'ocultar';
	}else{
		$ocultar_card = '';
	}

	$query2 = $pdo->query("SELECT * from categorias where id = '$categoria'");
	$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
	$cat_ativo = $res2[0]['ativo'];	

	$query2 = $pdo->query("SELECT * from sub_categorias where id = '$subcategoria'");
	$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
	$nome_sub = @$res2[0]['nome'];

	if($nome_sub == ""){
		$nome_subF = "";
	}else{
		$nome_subF = '<small><i style="color:#07356e">('.$nome_sub.')</i></small>';
	}

	$possui_estoque = '';
	if($tem_estoque == 'Não'){
		$possui_estoque = 'ocultar';
	}

	$nomes_prod = $nomeF.' '.$nome_subF;
	while (strlen($nomes_prod) < 28) {
    	$nomes_prod .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	}		


	if($cat_ativo == 'Sim'){
echo <<<HTML

		
		 <!-- Produto 1 -->
		 <a href="#" onclick="addVenda('{$id}', '$codigo', 'Produto')">	
          <div class="product-card" data-id="1" data-name="{$nome}" data-price="" data-stock="15">
            <div class="card-image">
              <img src="images/produtos/{$foto}" alt="{$nome}" class="w-full h-16 object-contain mx-auto">
            </div>
            <div class="card-content">
              <h3 class="card-title">{$nomes_prod}</h3>
              <p class="card-price">R$ {$valor_vendaF}</p>
              <p class="card-stock">Estoque: ({$estoque}) unidades</p>
              <button class="add-to-cart">
                <i class="fas fa-plus text-xs"></i>
              </button>
            </div>
          </div>
          </a>

		


HTML;
}
}
}else{
	//echo '<p>Nenhum Produto / Serviço Encontrado!</p>';
}



//buscar os serviços caso existam
$res = $query_serv->fetchAll(PDO::FETCH_ASSOC);
$linhas_serv = @count($res);
if($linhas_serv > 0 and ($id == 0 || $busca != "")){
	for($i=0; $i<$linhas_serv; $i++){
	$id = $res[$i]['id'];
	$nome = $res[$i]['nome'];	
	$valor_venda = $res[$i]['valor'];
	$foto = $res[$i]['foto'];	
	$nomeF = mb_strimwidth($nome, 0, 80, "..."); 

	$valor_vendaF = number_format($valor_venda, 2, ',', '.'); 
	
	while (strlen($nome) < 28) {
    	$nome .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	}			
	
echo <<<HTML

		
		 <!-- Produto 1 -->
		 <a href="#" onclick="addVenda('{$id}', '', 'Serviço')">	
          <div class="product-card" data-id="1" data-name="{$nome}" data-price="" data-stock="15">
            <div class="card-image">
              <img src="images/servicos/{$foto}" alt="{$nome}" class="w-full h-16 object-contain mx-auto">
            </div>
            <div class="card-content">
              <h3 class="card-title">{$nome}</h3>
              <p class="card-price">R$ {$valor_vendaF}</p>
              <p class="card-stock"></p>
              <button class="add-to-cart">
                <i class="fas fa-plus text-xs"></i>
              </button>
            </div>
          </div>
          </a>

		


HTML;

}
}else{
	//echo '<p>Nenhum Serviço Encontrado!</p>';
}



?>


<script type="text/javascript">
	$(document).ready( function () {
		
	//campo buscar
	$('#nome_categoria').text('<?=$nome_cat?>')

	var busca = $('#txt_buscar').val();
	var id_cat = '<?=$id_cat?>';

	if(id_cat != ""){
		$('#txt_buscar').val('');
	}

	if(busca != ""){
		$('#area_cat').hide();
	}else{
		$('#area_cat').show();
	}

	});

	function produto(id, nome, valor, codigo){

		$('#mensagem').text('');
    	$('#titulo_inserir').text('Venda: '+nome);
    	
    	$('#id').val(id);     	
    	$('#quantidade').val('1');
    	$('#codigo').val(codigo);
    	
    	$('#modalForm').modal('show');
    	listarVendas();
	}


	function limparCampos(){
		setTimeout(function() {
					$('#txt_buscar').val('');
			        $('#txt_buscar').focus();

			    }, 100);


	}
</script>