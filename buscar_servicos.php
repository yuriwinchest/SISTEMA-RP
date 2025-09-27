<?php 
@session_start();

$tabela = 'servicos';
require_once("conexao.php");

$id_empresa = @$_POST['id_empresa'];
require_once("painel/buscar_config.php");


$id = @$_POST['id_categoria'];
$busca = @$_POST['busca'];


if($busca == ""){
  $query = $pdo->query("SELECT * from $tabela where (mostrar_site != 'Não' or mostrar_site is null) and ativo = 'Sim' and empresa = '$id_empresa' order by id asc");
}else{
  $query = $pdo->query("SELECT * from $tabela where (mostrar_site != 'Não' or mostrar_site is null) and (nome LIKE '%$busca%') and ativo = 'Sim' and empresa = '$id_empresa' order by id asc");
}

$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = @count($res);
if($linhas > 0){
  for($i=0; $i<$linhas; $i++){
    $id = $res[$i]['id'];
    $nome = $res[$i]['nome']; 
    $valor_venda = $res[$i]['valor'];         
    $foto = $res[$i]['foto'];  
    $descricao = $res[$i]['descricao'];  
        
    $valor_vendaF = number_format($valor_venda, 2, ',', '.'); 
    $nomeF = mb_strimwidth($nome, 0, 80, "..."); 

    $estoque = 0;
    $mensagem = urlencode("Olá! Tenho interesse no serviço: $nome");
    $link_whatsapp = "https://wa.me/$tel_whats?text=$mensagem";

    $nome_da_categoria = '';

    $nota = mt_rand(45, 50) / 10;

?>
<div style="cursor: pointer" onclick="mostrarServicos('<?php echo $nome ?>','<?php echo $descricao ?>','<?php echo $valor_vendaF ?>','<?php echo $estoque ?>','<?php echo $foto ?>','<?php echo $nome_da_categoria ?>')" class="product-card <?php echo $ocultar_card ?>">
  <div class="bg-glass border border-gray-700 rounded-2xl overflow-hidden h-full flex flex-col shadow-[0_10px_25px_rgba(0,0,0,0.3)] transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_20px_35px_rgba(0,0,0,0.5)] hover:border-accent group">
   

    <div class="relative h-56 overflow-hidden">
      <div class="absolute inset-0 bg-gradient-to-b from-black/30 to-transparent z-10"></div>
      <img 
      src="<?php echo $url_sistema ?>painel/images/servicos/<?php echo $foto ?>"
      alt="<?php echo $nomeF ?>" 
      class="w-full h-full object-cover transition-transform duration-700 ease-in-out group-hover:scale-110 group-hover:rotate-1"
      onerror="this.src='images/sem-foto.jpg'"
      />
      <div class="absolute inset-0 bg-gradient-to-t from-primary-dark/90 via-primary/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-center pb-6 z-20">
        <div class="flex gap-3">
          <button class="bg-white text-primary-dark font-semibold px-4 py-2 rounded-full transform translate-y-10 group-hover:translate-y-0 transition-transform duration-500 hover:bg-accent flex items-center">
            <i class="fas fa-eye mr-2"></i> Detalhes
          </button>
         

        </div>
      </div>
    </div>

    <div class="p-6 flex-grow flex flex-col">
      <div class="flex justify-between items-start mb-2">
        <h3 class="text-lg font-bold text-white leading-tight"><?php echo $nomeF ?></h3>
        <div class="flex items-center bg-accent/20 rounded-full px-2 py-1">
          <i class="fas fa-star text-accent text-xs mr-1"></i>
          <span class="text-xs font-semibold"><?php echo $nota ?></span>
        </div>
      </div>

    

      <div class="mt-auto">
        <div class="mb-3">
          <div class="flex items-baseline">
            <span class="text-accent font-bold text-2xl">R$ <?php echo $valor_vendaF ?></span>
          </div>
          
        </div>

        <div class="w-full bg-gray-700 rounded-full h-1.5 mb-3">
          <div class="bg-customGreen h-1.5 rounded-full" style="width: <?php echo ($estoque > 100 ? 100 : $estoque) ?>%"></div>
        </div>

        <a target="_blank" href="<?php echo $link_whatsapp ?>" class="w-full bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-semibold py-2.5 rounded-xl transition-all duration-300 flex items-center justify-center group">
        <i class="fab fa-whatsapp mr-2 group-hover:animate-bounce"></i> Conversar no whatsapp
      </a>

      </div>
    </div>
  </div>
</div>
<?php 
  } 
} 
?>
