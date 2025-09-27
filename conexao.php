<?php

//definir fuso horário
date_default_timezone_set('America/Sao_Paulo');

$modo_teste = 'Não'; //Usar esse recurso como Sim só para deixar recursos de testes, por exemplo login preenchendo automaticamente, não possibilitar edição de configurações, dados de usuários e outros!

$url_sistema = "https://$_SERVER[HTTP_HOST]/";
$url = explode("//", $url_sistema);
if ($url[1] == 'localhost/') {
	$url_sistema = "http://$_SERVER[HTTP_HOST]/erp/";
}

//dados conexão bd nuvem - ValueServer
$servidor = 'br63-da.valueserver.net.br';
$banco = 'prof6847_sistema';
$usuario = 'prof6847_sistema';
$senha = 'BzXnvE83VaYBP3u8BM8V';

try {
	$pdo = new PDO("mysql:dbname=$banco;host=$servidor;charset=utf8mb4", "$usuario", "$senha");
} catch (Exception $e) {
	echo 'Erro ao conectar ao banco de dados!<br>';
	echo $e;
}


//variaveis globais
$nome_sistema = 'Nome do Sistema';
$email_sistema = 'contato@hugocursos.com.br';
$telefone_sistema = '(31) 97527-5084';
$instagram_sistema = 'portalhugocursos';

//variaveis para os disparos de notificações
$hora_rand = rand(8, 10);
$minutos_rand = rand(0, 59);
if($hora_rand < 10){
	$hora_rand = '0'.$hora_rand;
}
if($minutos_rand < 10){
	$minutos_rand = '0'.$minutos_rand;
}

$hora_random = $hora_rand.':'.$minutos_rand.':00';



//variaveis para os disparos de notificações
$hora_rand2 = rand(16, 18);
$minutos_rand2 = rand(0, 59);
if($hora_rand2 < 10){
	$hora_rand2 = '0'.$hora_rand2;
}
if($minutos_rand2 < 10){
	$minutos_rand2 = '0'.$minutos_rand2;
}

$hora_random2 = $hora_rand2.':'.$minutos_rand2.':00';


$query = $pdo->query("SELECT * from config where empresa = 0 or empresa is null");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = @count($res);
if ($linhas == 0) {
	$pdo->query("INSERT INTO config SET nome = '$nome_sistema', email = '$email_sistema', telefone = '$telefone_sistema', logo = 'logo.png', logo_rel = 'logo.jpg', icone = 'icone.png', ativo = 'Sim', multa_atraso = '0', juros_atraso = '0', marca_dagua = 'Sim', assinatura_recibo = 'Não', impressao_automatica = 'Não', api_whatsapp = 'Não', alterar_acessos = 'Não', abertura_caixa = 'Sim', empresa = 0, limitar_recursos = 'Sim', fundo_login = 'sem-foto.png'");
} else {
	$nome_sistema = $res[0]['nome'];
	$email_sistema = $res[0]['email'];
	$telefone_sistema = $res[0]['telefone'];
	$endereco_sistema = $res[0]['endereco'];
	$instagram_sistema = $res[0]['instagram'];
	$logo_sistema = $res[0]['logo'];
	$logo_painel = $res[0]['logo_painel'];
	$logo_rel = $res[0]['logo_rel'];
	$icone_sistema = $res[0]['icone'];
	$ativo_sistema = $res[0]['ativo'];
	$multa_atraso = $res[0]['multa_atraso'];
	$juros_atraso = $res[0]['juros_atraso'];
	$marca_dagua = $res[0]['marca_dagua'];
	$assinatura_recibo = $res[0]['assinatura_recibo'];
	$impressao_automatica = $res[0]['impressao_automatica'];
	$cnpj_sistema = $res[0]['cnpj'];
	$entrar_automatico = $res[0]['entrar_automatico'];
	$mostrar_preloader = $res[0]['mostrar_preloader'];
	$ocultar_mobile = $res[0]['ocultar_mobile'];
	$api_whatsapp = $res[0]['api_whatsapp'];
	$token_whatsapp = $res[0]['token_whatsapp'];
	$instancia_whatsapp = $res[0]['instancia_whatsapp'];
	$alterar_acessos = $res[0]['alterar_acessos'];
	$dados_pagamento = $res[0]['dados_pagamento'];
	$abertura_caixa = $res[0]['abertura_caixa'];
	$access_token_mp = $res[0]['access_token'];
	$public_key_mp = $res[0]['public_key'];
	$limitar_recursos = $res[0]['limitar_recursos'];
	$fundo_login = $res[0]['fundo_login'];
	$api_pagamento = $res[0]['api_pagamento'];
	$chave_api_asaas = $res[0]['chave_api_asaas'];
	$alterar_api_whatsapp = $res[0]['alterar_api_whatsapp'];
	$pagina_entrada = $res[0]['pagina_entrada'];
	$multi_empresas = $res[0]['multi_empresas'];

	if($fundo_login == ""){
		$fundo_login = 'sem-foto.png';
	}

	$tel_whats = '55' . preg_replace('/[ ()-]+/', '', $telefone_sistema);

	$multa_atrasoF = str_replace('.', ',', str_replace('', '.', $multa_atraso));
	$juros_atrasoF = str_replace('.', ',', str_replace('', '.', $juros_atraso));

	if ($ativo_sistema != 'Sim' and $ativo_sistema != '') { ?>
		<style type="text/css">
			@media only screen and (max-width: 700px) {
				.imgsistema_mobile {
					width: 300px;
				}

			}
		</style>
		<div style="text-align: center; margin-top: 100px">
			<img src="<?php echo $url_sistema ?>img/bloqueio.png" class="imgsistema_mobile">
		</div>
		<?php
		exit();
	}

}
?>