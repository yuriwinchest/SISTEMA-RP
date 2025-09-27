<?php 
if($id_empresa == ""){
	echo 'Sessão expirada! Atualize a página!';
	exit();
}

$query = $pdo->query("SELECT * from config where empresa = '$id_empresa'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = @count($res);
if ($linhas > 0) {
	$nome_sistema = $res[0]['nome'];
	$email_sistema = $res[0]['email'];
	$telefone_sistema = $res[0]['telefone'];
	$endereco_sistema = $res[0]['endereco'];
	$instagram_sistema = $res[0]['instagram'];
	$logo_sistema = $res[0]['logo'];
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
	$url_site = $res[0]['url_site'];
	$dispositivos = $res[0]['dispositivos'];


	$mao_obra_orc = $res[0]['mao_obra_orc'] ?? 'Mão de Obra';
	$senha_aparelho_orc = $res[0]['senha_aparelho_orc'] ?? 'Senha do Aparelho';
	$defeito_orc = $res[0]['defeito_orc'] ?? 'Defeito';
	$avarias_orc = $res[0]['avarias_orc'] ?? 'Condições ou Avarias';
	$acessorios_orc = $res[0]['acessorios_orc'] ?? 'Acessórios';
	$laudo_orc = $res[0]['laudo_orc'] ?? 'Laudo Técnico';

	$mao_obra_os = $res[0]['mao_obra_os'] ?? 'Mão de Obra';
	$senha_aparelho_os = $res[0]['senha_aparelho_os'] ?? 'Senha do Aparelho';
	$defeito_os = $res[0]['defeito_os'] ?? 'Defeito';
	$avarias_os = $res[0]['avarias_os'] ?? 'Condições ou Avarias';
	$acessorios_os = $res[0]['acessorios_os'] ?? 'Acessórios';
	$laudo_os = $res[0]['laudo_os'] ?? 'Laudo Técnico';

	if($dispositivos == "" || $dispositivos == 0){
		$dispositivos = 1;
	}

	if($alterar_api_whatsapp == 'Sim'){
		$instancia_whatsapp = $res[0]['instancia_whatsapp'];
		$api_whatsapp = $res[0]['api_whatsapp'];
	}


	
	$token_whatsapp = $res[0]['token_whatsapp'];
	
	$alterar_acessos = $res[0]['alterar_acessos'];
	$dados_pagamento = $res[0]['dados_pagamento'];
	$abertura_caixa = $res[0]['abertura_caixa'];
	$access_token_mp = $res[0]['access_token'];
	$public_key_mp = $res[0]['public_key'];
	$logo_painel = $res[0]['logo_painel'];
	$imagem_assinatura = $res[0]['imagem_assinatura'];
	$cidade_sistema = $res[0]['cidade_sistema'];
	$api_pagamento = $res[0]['api_pagamento'];
	$chave_api_asaas = $res[0]['chave_api_asaas'];
	$dias_comissao = $res[0]['dias_comissao'];
	$assinatura_cliente = $res[0]['assinatura_cliente'];
	$cobrar_automaticamente = $res[0]['cobrar_automaticamente'];
	$cobrar_duas_vezes = $res[0]['cobrar_duas_vezes'];
	$taxa_cartao_api = $res[0]['taxa_cartao_api'];

	if($imagem_assinatura == ""){
		$imagem_assinatura = 'sem-foto.png';
	}

	if($logo_painel == ""){
		$logo_painel = 'foto-painel.png';
	}

	if($icone_sistema == ""){
		$icone_sistema = 'icone.png';
	}



	$tel_whats = '55' . preg_replace('/[ ()-]+/', '', $telefone_sistema);

	$multa_atrasoF = str_replace('.', ',', str_replace('', '.', $multa_atraso));
	$juros_atrasoF = str_replace('.', ',', str_replace('', '.', $juros_atraso));

}
 ?>