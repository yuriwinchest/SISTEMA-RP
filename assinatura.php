<?php 
@session_start();
$_SESSION['usuario_logado_pagina'] = true;
require_once("conexao.php");
$data_atual = date('Y-m-d');

$url = @$_GET['url'];

if($url == ""){
  $query = $pdo->query("SELECT * FROM config where empresa > 0 order by id asc limit 1");
    $res = $query->fetchAll(PDO::FETCH_ASSOC);
    $url = @$res[0]['url_site'];
}

if($url != "assinaturas" and $url != "" and $url != 0){
    $query = $pdo->query("SELECT * FROM config where url_site = '$url'");
    $res = $query->fetchAll(PDO::FETCH_ASSOC);
    $id_empresa = @$res[0]['empresa'];
    $empresa = @$res[0]['empresa'];

    require_once("painel/buscar_config.php");
}else{
   $id_empresa = 0;
   $empresa = 0;


}


//buscar as informações
$query = $pdo->query("SELECT * FROM site where empresa = '$id_empresa'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$logo = @$res[0]['logo'];
$titulo = @$res[0]['titulo'];
$subtitulo = @$res[0]['subtitulo'];
$botao1 = @$res[0]['botao1'];
$botao2 = @$res[0]['botao2'];
$botao3 = @$res[0]['botao3'];
$item1 = @$res[0]['item1'];
$item2 = @$res[0]['item2'];
$item3 = @$res[0]['item3'];
$titulo_recursos = @$res[0]['titulo_recursos'];
$titulo_perguntas = @$res[0]['titulo_perguntas'];
$titulo_rodape = @$res[0]['titulo_rodape'];
$link_rodape = @$res[0]['link_rodape'];
$descricao_rodape = @$res[0]['descricao_rodape'];
$botao_rodape = @$res[0]['botao_rodape'];
$logo_topo = @$res[0]['logo_topo'];
$fundo_topo = @$res[0]['fundo_topo'];
$fundo_topo_mobile = @$res[0]['fundo_topo_mobile'];
$descricao_site = @$res[0]['descricao_site'];
$video_site = @$res[0]['video_site'];
$fundo_topo_mobile = @$res[0]['fundo_topo_mobile'];
if($logo == ""){
  $logo = 'sem-foto.png';
}

$bg_desktop = "";
$bg_mobile = "";

if($fundo_topo != "sem-foto.png"){
  $bg_desktop = $url_sistema . "img/logos/" . $fundo_topo;
}

if($fundo_topo_mobile != "sem-foto.png"){
  $bg_mobile = $url_sistema . "img/logos/" . $fundo_topo_mobile;
}

if($titulo == "" and $subtitulo == "" and $logo == "sem-foto.png" and $botao1 == "" and $botao2 == "" and $botao3 == "" and $item1 == "" and $titulo_recursos == "" and $titulo_rodape == "" and $titulo_perguntas == "" and $descricao_rodape == "" and $botao_rodape == "" ){ ?>

  <div align="center"><img src="<?php echo $url_sistema ?>img/dados.jpg" width="350px"></div>
  
<?php 
  exit();
}

// Separando o título em palavras
$palavras = @explode(' ', $titulo);
// Pegando as últimas duas palavras
$ultimo_palavra = array_pop($palavras);
$penultima_palavra = array_pop($palavras);

// Recriar o título com as últimas duas palavras com a classe 'text-accent'
$titulo_modificado = implode(' ', $palavras) . ' <span class="text-accent">' . $penultima_palavra . ' ' . $ultimo_palavra . '</span>';


if (@strpos($subtitulo, $nome_sistema) !== false) {
    // Se o texto foi encontrado, colocamos ele dentro da tag <strong>
    $subtitulo_modificado = @str_ireplace($nome_sistema, "<strong>$nome_sistema</strong>", $subtitulo);
} else {
    // Caso não tenha o texto, usamos o título original
    $subtitulo_modificado = $subtitulo;
}


if (@strpos($descricao_rodape, $nome_sistema) !== false) {
    // Se o texto foi encontrado, colocamos ele dentro da tag <strong>
    $descricao_rodape_modificado = @str_ireplace($nome_sistema, "<strong class='text-white'>$nome_sistema</strong>", $descricao_rodape);
} else {
    // Caso não tenha o texto, usamos o título original
    $descricao_rodape_modificado = $descricao_rodape;
}

if($id_empresa == 0){
  $link_painel = 'index.php';
}else{
  $link_painel = '../acesso';
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="erp, sistema de gestão, <?php echo $nome_sistema ?>, controle financeiro, gestão de estoque, vendas online" />
  <meta name="description" content="<?php echo $nome_sistema ?> - O ERP Completo para Alavancar Seu Negócio! Sistema 100% online, intuitivo e integrado." />
  <meta name="author" content="Hugo Vasconcelos" />
  <title><?php echo $nome_sistema ?> - ERP Completo</title>
  <!-- Favicon -->
  <link rel="icon" href="<?php echo $url_sistema ?>img/icone.png" type="image/x-icon" />
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <!-- GSAP -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="<?php echo $url_sistema ?>assets/css/estilos_site.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $url_sistema ?>assets/css/produtos.css">

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
           primary: {
              DEFAULT: '#2d4c63',
              dark: '#1a2c3d',
              light: '#3a6080'
            },
            secondary: {
              DEFAULT: '#1E293B',
              dark: '#0F172A',
              light: '#334155'
            },
            accent: {
              DEFAULT: '#ffc107',
              dark: '#e0a800',
              light: '#ffcd38'
            },
            success: '#10b981',
            warning: '#f59e0b',
            danger: '#ef4444',
            customAzul: '#045d8a',
            customGreen: '#2ba304',
            neutral: {
              50: '#F8FAFC',
              100: '#F1F5F9',
              200: '#E2E8F0',
              300: '#CBD5E1',
              400: '#94A3B8',
              500: '#64748B',
              600: '#475569',
              700: '#334155',
              800: '#1E293B',
              900: '#0F172A',
            }
          },
          fontFamily: {
            sans: ['Inter', 'sans-serif'],
          },
          boxShadow: {
            'card': '0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)',
            'card-hover': '0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05)',
          }
        }
      }
    }
  </script>

  

  <style>
  @media (max-width: 768px) {
    .fundo-topo {
      background-image: url('<?php echo $bg_mobile ?>') !important;
    }
  }
</style>

</head>
<body class="font-poppins bg-gradient-to-br from-primary-dark to-primary text-white min-h-screen overflow-x-hidden">
  <div class="py-12 px-4 sm:px-6 lg:px-8">
    <div class="container mx-auto">
      
      <!-- Bloco CTA Simplificado -->
      <div class="mb-12 bg-primary-dark p-8 rounded-xl border border-accent/20 shadow-lg fundo-topo"
     style="background-image: url('<?php echo $bg_desktop ?>'); background-size: cover; background-position: center;">

        <div class="text-center mb-6">
          <!-- Logo adicionada acima do título -->
         <div class="flex justify-center mb-6">
            <?php if($logo_topo != 'Não'){ ?>
            <img src="<?php echo $url_sistema ?>img/logos/<?php echo $logo ?>" alt="Logo" class="large-logo" />
          <?php }else{ echo '<br>&nbsp;<br><br>&nbsp;<br><br>&nbsp;<br>'; } ?>
          </div>
          
          <?php if($titulo != ""){ ?>
          <h1 class="text-3xl md:text-4xl font-bold mb-4">
            <?php echo $titulo_modificado ?>
          </h1>
        <?php }else{ echo '<br>&nbsp;<br><br>&nbsp;<br><br>&nbsp;<br><br><br><br>'; } ?>

        <?php if($subtitulo != ""){ ?>
          <p class="text-gray-300 text-lg max-w-3xl mx-auto">
            <strong class="text-white"></strong> <?php echo $subtitulo_modificado ?>
          </p>
        <?php } ?>

        </div>
        
        <?php if($botao1 != "" || $botao2 != "" || $botao3 != ""){ ?>
        <div class="flex flex-col sm:flex-row justify-center gap-4 mb-6">
          <?php if($botao1 != ""){ ?>
          <a href="#faq-produtos" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-lg shadow-lg text-white bg-customGreen hover:bg-green-700 focus:outline-none animate-pulse-green transition-all duration-300">
            <i class="fas fa-rocket mr-2"></i> <?php echo $botao1 ?>
          </a>
        <?php } ?>
         <?php if($botao2 != ""){ ?>
          <a href="#faq-container" class="inline-flex items-center justify-center px-6 py-3 border border-white/20 text-base font-medium rounded-lg shadow-lg text-white hover:bg-white/10 focus:outline-none transition-all duration-300">
            <i class="fas fa-info-circle mr-2"></i> <?php echo $botao2 ?>
          </a>
           <?php } ?>
         <?php if($botao3 != ""){ ?>
           <a href="<?php echo $link_painel ?>" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-lg shadow-lg text-white bg-customAzul hover:bg-blue-700 focus:outline-none animate-pulse-blue transition-all duration-300">
            <i class="fas fa-key mr-2"></i> <?php echo $botao3 ?>
          </a>
        <?php } ?>

         <?php if($multi_empresas == "Não"){ ?>
           <a href="login" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-lg shadow-lg text-white bg-customGreen hover:bg-blue-700 focus:outline-none animate-pulse-blue transition-all duration-300">
            <i class="fas fa-key mr-2"></i> Login Sistema
          </a>
        <?php } ?>
        </div>
      <?php } ?>
        
        <?php if($item1 != "" || $item2 != "" || $item3 != ""){ ?>
        <div class="flex justify-center flex-wrap gap-4 text-sm text-gray-300">
          <div class="flex items-center">
            <i class="fas fa-check-circle text-accent mr-2"></i> <?php echo $item1 ?>
          </div>
          <div class="flex items-center">
            <i class="fas fa-lock text-accent mr-2"></i> <?php echo $item2 ?>
          </div>
          <div class="flex items-center">
            <i class="fas fa-headset text-accent mr-2"></i> <?php echo $item3 ?>
          </div>
        </div>

       
      <?php } ?>

      </div>








  <section class="bg-white py-10 px-4 md:px-10" id="area_sobre">
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

      <div class="w-full h-64 md:h-96 lg:h-[400px]">
        <iframe class="rounded-xl shadow-lg w-full h-full"
        src="<?php echo $video_site ?>"
        title="Vídeo de Apresentação"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>
      </div>

      <!-- Texto + Botões -->
      <div>
        <h2 class="text-2xl font-bold text-primary mb-4">Sobre Nós</h2>
        <p id="descricao" class="text-gray-700 mb-6" style="font-size: 14px"></p>





        <div class="flex flex-wrap gap-2">
          <?php if($instagram_sistema != ""){ ?>
            <a href="https://www.instagram.com/<?php echo $instagram_sistema ?>" target="_blank" class="bg-pink-500 text-white text-xs px-2 py-1 rounded hover:bg-pink-600 transition-all">
              <i class="fab fa-instagram mr-1"></i>Instagram
            </a>
          <?php } ?>



        </div>

      </div>
    </section>




<br><br>




      <?php 
        $query = $pdo->query("SELECT * FROM recursos_site where empresa = '$id_empresa' order by posicao_recurso asc");
          $res = $query->fetchAll(PDO::FETCH_ASSOC);
          $total_reg = @count($res);
          if($total_reg > 0) {
       ?>
      
      <!-- Feature Cards Section -->
      <div class="mb-10 md:mb-20">
        <?php if($titulo_recursos != ""){ ?>
        <h2 class="text-3xl font-bold text-center mb-6 md:mb-10 gsap-fade-up"><?php echo $titulo_recursos ?></h2>
      <?php } ?>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 lg:gap-8" id="features-container">

          <?php 
            for ($i = 0; $i < $total_reg; $i++) {
              $id = $res[$i]['id'];
              $titulo = $res[$i]['titulo_recurso'];
              $icone = $res[$i]['icone_recurso'];
              $descricao = $res[$i]['descricao_recurso'];
              $posicao = $res[$i]['posicao_recurso'];     
   
           ?>
          <div class="bg-glass rounded-xl p-6 text-center feature-card gsap-stagger-item">
            <div class="text-4xl mb-4 custom-green-icon" style="color: #2ba304;">
              <i class="<?php echo $icone ?>"></i>
            </div>
            <h3 class="text-xl font-semibold mb-3"><?php echo $titulo ?></h3>
            <p class="text-gray-300"><?php echo $descricao ?></p>
          </div>
        <?php } ?>
          
         
        </div>
      </div>



    <?php } ?>


    


<?php 
$query5 = $pdo->query("SELECT * from produtos where ativo = 'Sim' and (estoque > 0 or tem_estoque = 'Não') and empresa = '$id_empresa'  ");
        $res5 = $query5->fetchAll(PDO::FETCH_ASSOC);
        $produtos5 = @count($res5);

        if($produtos5 > 0){
 ?>
  <div class="container mx-auto p-4" id="faq-produtos">

    <!-- Barra de Busca e Categorias -->
        <div class="bg-white rounded-xl shadow-sm p-4 mb-6">
          <div class="search-container mb-4">
            <i class="fas fa-search search-icon"></i>
            <input style="font-weight: normal" onkeyup="buscar()" type="text" placeholder="Buscar produtos..." class="form-input" name="txt_buscar" id="txt_buscar">          
           
          </div>
          
          
          <div class="flex overflow-x-auto pb-2 gap-3">
           
            
    <?php 
    $query = $pdo->query("SELECT * from categorias where ativo = 'Sim' and empresa = '$id_empresa' order by nome asc");
    $res = $query->fetchAll(PDO::FETCH_ASSOC);
    $linhas = @count($res);
    if($linhas > 0){
      for($i=0; $i<$linhas; $i++){
        $id = $res[$i]['id'];
        $nome = $res[$i]['nome']; 
        $foto = $res[$i]['foto']; 
        $ativo = $res[$i]['ativo'];
        $icone = $res[$i]['icone'];

        $nomeF = mb_strimwidth($nome, 0, 15, "..."); 
        
    //totalizar produtos
        $query2 = $pdo->query("SELECT * from produtos where categoria = '$id' and ativo = 'Sim' and (estoque > 0 or tem_estoque = 'Não') and empresa = '$id_empresa'  ");
        $res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
        $produtos = @count($res2);

        if($produtos > 0){
          ?>
            <button title="<?php echo $nome ?>" type="button" onclick="buscar('<?php echo $id ?>')" class="category-pill flex flex-col items-center px-3 py-2 rounded-xl bg-white text-secondary text-sm font-medium whitespace-nowrap shadow-sm">
              <div class="w-12 h-12 rounded-full bg-neutral-100 flex items-center justify-center mb-1">
                <i class="<?php echo $icone ?> text-primary text-lg"></i>
              </div>
              <span class="text-dark"><small><?php echo $nomeF ?></small></span>
            </button>

        <?php } } } ?>

          
          </div>
        </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4" id="listar_produtos">

   

    </div>

  </div>

<?php } ?>



<br>








<?php 
$query5 = $pdo->query("SELECT * from servicos where ativo = 'Sim' and empresa = '$id_empresa'  ");
        $res5 = $query5->fetchAll(PDO::FETCH_ASSOC);
        $produtos5 = @count($res5);

        if($produtos5 > 0){
 ?>
  <div class="container mx-auto p-4" id="faq-produtos">

    <!-- Barra de Busca e Categorias -->
        <div class="bg-white rounded-xl shadow-sm p-4 mb-6">
          <div class="search-container mb-4">
            <i class="fas fa-search search-icon"></i>
            <input style="font-weight: normal" onkeyup="buscarServicos()" type="text" placeholder="Buscar serviços..." class="form-input" name="txt_buscar_servicos" id="txt_buscar_servicos">          
           
          </div>          
        </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4" id="listar_servicos">

   

    </div>

  </div>

<?php } ?>



<br>








         <?php 
        $query = $pdo->query("SELECT * FROM perguntas_site where empresa = '$id_empresa' order by posicao_pergunta asc");
          $res = $query->fetchAll(PDO::FETCH_ASSOC);
          $total_reg = @count($res);
          if($total_reg > 0) {
       ?>

      <!-- FAQ Section -->
      <div class="mb-12 md:mb-20">
        <?php if($titulo_perguntas != ""){ ?>
        <h2 class="text-2xl md:text-3xl font-bold text-center mb-6 md:mb-10 gsap-fade-up"><?php echo $titulo_perguntas ?></h2>
      <?php } ?>
        <div class="max-w-3xl mx-auto space-y-3 md:space-y-4 px-4" id="faq-container">

           <?php 
            for ($i = 0; $i < $total_reg; $i++) {
              $id = $res[$i]['id'];
              $titulo = $res[$i]['titulo_pergunta'];              
              $descricao = $res[$i]['descricao_pergunta'];
              $posicao = $res[$i]['posicao_pergunta'];              

               if (@strpos($descricao, $nome_sistema) !== false) {
                // Se o texto foi encontrado, colocamos ele dentro da tag <strong>
                $descricao_modificado = @str_ireplace($nome_sistema, "<strong>$nome_sistema</strong>", $descricao);
            } else {
                // Caso não tenha o texto, usamos o título original
                $descricao_modificado = $descricao;
            }  
   
           ?>

          <div class="bg-glass border border-gray-700 rounded-xl overflow-hidden gsap-stagger-item faq-item">
            <button class="w-full flex justify-between items-center p-4 text-left font-semibold focus:outline-none" 
                    onclick="toggleFaq('faq<?php echo $id ?>')">
              <?php echo $titulo ?>
              <i class="fas fa-chevron-down transition-transform duration-300" id="icon-faq1"></i>
            </button>
            <div class="hidden p-4 bg-gray-900 bg-opacity-50 border-t border-gray-700" id="faq<?php echo $id ?>">
             <?php echo $descricao_modificado ?>
            </div>
          </div>

        <?php } ?>
               
        
        </div>
      </div>

    <?php } ?>



      <!-- CTA Final após FAQ -->
      <div class="mb-12 md:mb-20 bg-glass rounded-xl p-8 border border-accent/20 shadow-lg text-center">
          <?php if($titulo_rodape != ""){ ?>
        <h2 class="text-2xl md:text-3xl font-bold mb-4"><?php echo $titulo_rodape ?></h2>
      <?php } ?>

       <?php if($descricao_rodape_modificado != ""){ ?>
        <p class="text-gray-300 text-lg max-w-3xl mx-auto mb-8">
          <?php echo $descricao_rodape_modificado ?>
        </p>
      <?php } ?>

      <?php if($botao_rodape != ""){ ?>
        <div class="flex justify-center">
          <a href="<?php echo $link_rodape ?>" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-lg shadow-lg text-white bg-customGreen hover:bg-green-700 focus:outline-none animate-pulse-green transition-all duration-300 transform hover:-translate-y-1">
            <i class="fas fa-rocket mr-2"></i> <?php echo $botao_rodape ?>
          </a>
        </div>
      <?php } ?>

      </div>
      <!-- Footer -->
      <footer class="py-4 md:py-6 border-t border-gray-700 gsap-fade-up">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-center md:justify-between px-4">
          <!-- Logo Grande no Footer - ajustado para ser menor em dispositivos móveis -->
          <div class="flex justify-center mb-4 md:mb-6">
            <img src="<?php echo $url_sistema ?>img/logos/<?php echo $logo ?>" alt="Logo" class="large-logo-footer h-16 md:h-20" />
          </div>
          <div class="text-center md:text-right">
            <p class="text-gray-400 text-sm">&copy; <?php echo date('Y'); ?> <?php echo $nome_sistema ?>. Todos os direitos reservados.</p>
            <p class="text-gray-500 text-xs md:text-sm mt-1 md:mt-2"><?php echo $nome_sistema ?> – Tecnologia que simplifica e acelera resultados!</p>
          </div>
        </div>
      </footer>
    </div>
  </div>





<!-- Modal de Detalhes do Produto -->
<div id="product-modal" class="modal-backdrop">
  <div class="modal-content">
    <!-- Cabeçalho do Modal -->
    <div class="modal-header">
      <h2 id="modal-product-title" class="text-xl md:text-2xl font-bold" ><span id="titulo_dados"></span></h2>

      <button id="modal-close" class="modal-close">
        <i class="fas fa-times"></i>
      </button>
    </div>

    <!-- Corpo do Modal -->
    <div class="modal-body">
      <!-- Imagem Principal e Galeria -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
        <div>
          <div class="rounded-xl overflow-hidden bg-gray-800 mb-3">
            <img id="modal-product-main-image" src="" alt="<?php echo $titulo ?>" class="w-full h-64 md:h-80 object-contain">
          </div>


        </div>

        <div>
          <!-- Informações Básicas -->
          <div class="mb-4">
            <div class="flex items-center mb-2">
              <div class="flex items-center bg-yellow-600 text-white rounded-full px-3 py-1.5">
                <span id="modal-product-rating" class="font-semibold">R$ <span id="valor_dados"></span></span>
              </div>


            </div>

            <div class="text-accent mt-3 mb-2" id="estoque_modal">
              <span id="">Estoque: <span id="estoque_dados"></span> Itens</span>
            </div>

            <div class="text-gray-300 mb-3">
             <span id="modal-product-installment" style="font-size: 12px"><span id="endereco_dados"></span> 
           </div>

           <!-- Estoque -->
           <div class="mb-4" id="subtitulo_modal">
            <div class="flex items-center mb-2">
              <i class="fas fa-list text-accent mr-2"></i>
              <span id="modal-product-stock-status"><span id="subtitulo_dados"></span></span>
              
            </div>

           
          </div>

          <span id="descricao_dados" style="font-size: 13px"></span>


        </div>
      </div>
    </div>

    
  </div>


</div>
</div>



 <a title="Ir para o whatsapp" target="_blank" href="http://api.whatsapp.com/send?1=pt_BR&phone=<?php echo @$tel_whats ?>"><img src="<?php echo $url_sistema ?>img/logo_whats.png" width="50px" style="position:fixed; bottom:20px; right:20px; z-index: 100"></a>


 <script src="assets/js/lgpd-cookie.js" type="module"></script>
<Lgpd-cookie text='Não capturamos nenhuma informação de dados sensíveis, somente cookies para melhor performance de nosso website!' />

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- JavaScript for FAQ Accordion and Responsive Utilities -->


  <script type="text/javascript">
 $(document).ready(function() {
  buscar();
  buscarServicos();
});
</script>


  <script>
    // FAQ Accordion
    function toggleFaq(id) {
      const content = document.getElementById(id);
      const icon = document.getElementById('icon-' + id);
      if (content.classList.contains('hidden')) {
        content.classList.remove('hidden');
        icon.classList.add('rotate-180');
      } else {
        content.classList.add('hidden');
        icon.classList.remove('rotate-180');
      }
    }
    // Utilitários responsivos
    function adjustForScreenSize() {
      const isMobile = window.innerWidth < 768;
      const isSmallMobile = window.innerWidth < 480;
      // Ajustar tamanho do logo
      const logos = document.querySelectorAll('.large-logo');
      logos.forEach(logo => {
        if (isSmallMobile) {
          logo.style.height = '70px';
        } else if (isMobile) {
          logo.style.height = '90px';
        } else {
          logo.style.height = '120px';
        }
      });
      // Ajustar tamanho do logo no footer
      const footerLogos = document.querySelectorAll('.large-logo-footer');
      footerLogos.forEach(logo => {
        if (isSmallMobile) {
          logo.style.height = '50px';
        } else if (isMobile) {
          logo.style.height = '60px';
        } else {
          logo.style.height = '80px';
        }
      });
      // Ajustar padding em cards
      const cards = document.querySelectorAll('.feature-card, .plan-card .bg-glass');
      cards.forEach(card => {
        if (isMobile) {
          card.style.padding = isSmallMobile ? '0.75rem' : '1rem';
        }
      });
    }
    // Melhorar o scroll em dispositivos móveis
    function smoothScrollToElement(elementId) {
      const element = document.getElementById(elementId);
      if (element) {
        const headerOffset = 60;
        const elementPosition = element.getBoundingClientRect().top;
        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
        window.scrollTo({
          top: offsetPosition,
          behavior: 'smooth'
        });
      }
    }
    // GSAP Animations
    document.addEventListener('DOMContentLoaded', function() {
      // Executar ajustes responsivos
      adjustForScreenSize();
      // Adicionar listener para redimensionamento
      window.addEventListener('resize', adjustForScreenSize);
      // Substituir links de âncora por scroll suave
      const anchorLinks = document.querySelectorAll('a[href^="#"]');
      anchorLinks.forEach(link => {
        link.addEventListener('click', function(e) {
          e.preventDefault();
          const targetId = this.getAttribute('href').substring(1);
          smoothScrollToElement(targetId);
        });
      });
      // Registrar o plugin ScrollTrigger
      gsap.registerPlugin(ScrollTrigger);
      // Animação dos títulos de seção
      gsap.utils.toArray(".gsap-fade-up").forEach(element => {
        gsap.to(element, {
          scrollTrigger: {
            trigger: element,
            start: "top 80%",
          },
          opacity: 1,
          y: 0,
          duration: 0.8,
          ease: "power2.out"
        });
      });
      // Animação dos cards de planos
      gsap.to(".plan-card", {
        scrollTrigger: {
          trigger: "#plans-container",
          start: "top 70%",
        },
        opacity: 1,
        y: 0,
        stagger: 0.1,
        duration: 0.6,
        ease: "back.out(1.2)"
      });
      // Animação dos preços
      gsap.from(".price-text", {
        scrollTrigger: {
          trigger: "#plans-container",
          start: "top 60%",
        },
        textContent: 0,
        duration: 1.5,
        ease: "power1.out",
        snap: { textContent: 1 },
        stagger: 0.1,
        delay: 0.5
      });
      // Animação dos itens de recursos
      gsap.from(".feature-item", {
        scrollTrigger: {
          trigger: "#plans-container",
          start: "top 50%",
        },
        opacity: 0,
        x: -20,
        stagger: 0.05,
        duration: 0.4,
        delay: 0.8
      });
      // Animação dos cards de recursos
      gsap.to(".feature-card", {
        scrollTrigger: {
          trigger: "#features-container",
          start: "top 70%",
        },
        opacity: 1,
        y: 0,
        stagger: 0.1,
        duration: 0.6,
        ease: "back.out(1.2)"
      });
      // Animação dos itens de FAQ
      gsap.to(".faq-item", {
        scrollTrigger: {
          trigger: "#faq-container",
          start: "top 80%",
        },
        opacity: 1,
        y: 0,
        stagger: 0.1,
        duration: 0.6
      });
      // Efeito de hover nos botões de assinatura
      const buttons = document.querySelectorAll('.btn-subscribe');
      buttons.forEach(button => {
        button.addEventListener('mouseenter', () => {
          gsap.to(button, {
            scale: 1.05,
            duration: 0.3,
            ease: "power1.out"
          });
        });
        button.addEventListener('mouseleave', () => {
          gsap.to(button, {
            scale: 1,
            duration: 0.3,
            ease: "power1.out"
          });
        });
      });
      // Efeito de parallax no fundo
      gsap.to("body", {
        backgroundPosition: "50% 100%",
        ease: "none",
        scrollTrigger: {
          trigger: "body",
          start: "top top",
          end: "bottom top",
          scrub: true
        }
      });
    });
  </script>
</body>
</html>




<script type="text/javascript">
  function buscar(id_categoria){
    var busca =  $('#txt_buscar').val();   
    var url_sistema = "<?=$url_sistema?>"; 
    var id_empresa = "<?=$id_empresa?>"; 
   
   $.ajax({
        url: url_sistema+'buscar_produtos.php',
        method: 'POST',
        data: {busca, id_categoria, id_empresa},
        dataType: "html",

        success:function(result){
          
            $("#listar_produtos").html(result);            
        }
    });
  }
</script>



<script type="text/javascript">
  function buscarServicos(id_categoria){
    var busca =  $('#txt_buscar_servicos').val();   
    var url_sistema = "<?=$url_sistema?>"; 
    var id_empresa = "<?=$id_empresa?>"; 
   
   $.ajax({
        url: url_sistema+'buscar_servicos.php',
        method: 'POST',
        data: {busca, id_categoria, id_empresa},
        dataType: "html",

        success:function(result){
          
            $("#listar_servicos").html(result);            
        }
    });
  }
</script>




<!-- Script simples para demonstração -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
      // Fazendo os botões de fechar o modal funcionarem
      const closeButtons = document.querySelectorAll('#modal-close, #modal-close-bottom');
      closeButtons.forEach(button => {
        button.addEventListener('click', function() {
          document.getElementById('product-modal').classList.remove('active');
        });
      });
      
      // Fazendo as miniaturas de imagem funcionarem
      const galleryItems = document.querySelectorAll('.modal-gallery-item');
      galleryItems.forEach(item => {
        item.addEventListener('click', function() {
          // Remover classe ativa de todos os itens
          galleryItems.forEach(i => i.classList.remove('active'));
          
          // Adicionar classe ativa ao item clicado
          this.classList.add('active');
          
          // Atualizar imagem principal
          const mainImage = document.getElementById('modal-product-main-image');
          mainImage.src = this.querySelector('img').src;
        });
      });
      
      // Fazendo as abas funcionarem
      const tabButtons = document.querySelectorAll('.modal-tab');
      tabButtons.forEach(tab => {
        tab.addEventListener('click', function() {
          // Remover classe ativa de todas as abas
          tabButtons.forEach(t => t.classList.remove('active'));
          
          // Adicionar classe ativa à aba clicada
          this.classList.add('active');
          
          // Obter o ID da tab
          const tabId = this.getAttribute('data-tab');
          
          // Esconder todos os conteúdos
          document.querySelectorAll('.modal-tab-content').forEach(content => {
            content.classList.remove('active');
          });
          
          // Mostrar o conteúdo da aba selecionada
          document.getElementById('tab-' + tabId).classList.add('active');
        });
      });
      
      // Controles de quantidade
      const decreaseBtn = document.getElementById('decrease-qty');
      const increaseBtn = document.getElementById('increase-qty');
      const qtyInput = document.getElementById('product-qty');
      
      decreaseBtn.addEventListener('click', function() {
        let currentQty = parseInt(qtyInput.value);
        if (currentQty > 1) {
          qtyInput.value = currentQty - 1;
        }
      });
      
      increaseBtn.addEventListener('click', function() {
        let currentQty = parseInt(qtyInput.value);
        qtyInput.value = currentQty + 1;
      });
      
      // Simular adição ao carrinho
      const addToCartBtns = document.querySelectorAll('#modal-add-to-cart, #modal-add-to-cart-bottom');
      addToCartBtns.forEach(btn => {
        btn.addEventListener('click', function() {
          alert('Produto adicionado ao carrinho: ' + qtyInput.value + 'x Smartphone Galaxy A54');
        });
      });
      
      // Simular compra rápida
      document.getElementById('modal-buy-now').addEventListener('click', function() {
        alert('Redirecionando para checkout...');
      });
    });
  </script>



  <script type="text/javascript">
    function mostrar(nome, descricao, valor, estoque, foto, subcat){    

      var url_sistema = "<?=$url_sistema?>"; 

      document.getElementById('subtitulo_modal').style.display = 'block';
      document.getElementById('estoque_modal').style.display = 'block';  

      document.getElementById('titulo_dados').innerText = nome;
      document.getElementById('subtitulo_dados').innerText = subcat;
      document.getElementById('modal-product-main-image').src = url_sistema+'painel/images/produtos/'+foto;
      document.getElementById('valor_dados').innerText = valor;
      document.getElementById('estoque_dados').innerText = estoque;     
      document.getElementById('descricao_dados').innerText = descricao;     
      

      document.getElementById('product-modal').classList.add('active')
    }
  </script>


  <script type="text/javascript">
  // Passa o conteúdo da variável PHP para uma variável JavaScript
  var descricaoSite = <?php echo json_encode($descricao_site); ?>;
  
  // Usando o conteúdo na página
  document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('descricao').innerHTML = descricaoSite;
  });
</script>




  <script type="text/javascript">
    function mostrarServicos(nome, descricao, valor, estoque, foto, subcat){    

      var url_sistema = "<?=$url_sistema?>"; 
      document.getElementById('titulo_dados').innerText = nome;
      document.getElementById('subtitulo_modal').style.display = 'none';
      document.getElementById('modal-product-main-image').src = url_sistema+'painel/images/servicos/'+foto;
      document.getElementById('valor_dados').innerText = valor;
      document.getElementById('estoque_modal').style.display = 'none';  
      document.getElementById('descricao_dados').innerText = descricao;     
      

      document.getElementById('product-modal').classList.add('active')
    }
  </script>


  <script type="text/javascript">
  // Passa o conteúdo da variável PHP para uma variável JavaScript
  var descricaoSite = <?php echo json_encode($descricao_site); ?>;
  
  // Usando o conteúdo na página
  document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('descricao').innerHTML = descricaoSite;
  });
</script>
