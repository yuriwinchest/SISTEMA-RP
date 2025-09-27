<?php 
$id_usuario = @$_SESSION['id'];
@session_start();


$home = 'ocultar';
$configuracoes = 'ocultar';
$caixas = 'ocultar';
$lancar_tarefas = 'ocultar';
$agendas = 'ocultar';
$mensalidades = 'ocultar';
$dispositivos = 'ocultar';
$editar_conta_paga = 'ocultar';
$chamados = 'ocultar';
$vendas = 'ocultar';
$rh = 'ocultar';
$site = 'ocultar';

//grupo pessoas
$usuarios = 'ocultar';
$fornecedores = 'ocultar';
$funcionarios = 'ocultar';
$clientes = 'ocultar';

//grupo cadastros
$grupo_acessos = 'ocultar';
$acessos = 'ocultar';
$frequencias = 'ocultar';
$cargos = 'ocultar';
$formas_pgto = 'ocultar';
$marcas = 'ocultar';
$modelos = 'ocultar';
$equipamentos = 'ocultar';
$servicos = 'ocultar';
$plano_contas = 'ocultar';


//grupo contratos
$modelos_contratos = 'ocultar';
$rel_contratos = 'ocultar';
$listar_contratos = 'ocultar';

//grupo marketing
$marketing = 'ocultar';
$grupos_disparos = 'ocultar';

//orcamentos
$orcamentos = 'ocultar';
$orcamentos_pendentes = 'ocultar';
$orcamentos_aprovados = 'ocultar';
$orcamentos_vencidos = 'ocultar';

//os
$os = 'ocultar';
$os_abertas = 'ocultar';
$os_iniciadas = 'ocultar';
$os_aguardando = 'ocultar';
$os_aprovacao = 'ocultar';
$os_finalizadas = 'ocultar';
$os_entregues = 'ocultar';
$os_sem_reparo = 'ocultar';
$os_nao_aprovadas = 'ocultar';
$os_entregues_hoje = 'ocultar';


//tarefas
$tarefas = 'ocultar';
$tarefas_clientes = 'ocultar';

//grupo financeiro
$receber = 'ocultar';
$pagar = 'ocultar';
$rel_financeiro = 'ocultar';
$rel_sintetico_despesas = 'ocultar';
$rel_sintetico_receber = 'ocultar';
$rel_balanco = 'ocultar';
$rel_inadimplementes = 'ocultar';
$cobrancas = 'ocultar';
$lista_vendas = 'ocultar';
$comissoes = 'ocultar';
$minhas_comissoes = 'ocultar';
$rel_vendas = 'ocultar';

//grupo produtos
$produtos = 'ocultar';
$categorias = 'ocultar';
$sub_categorias = 'ocultar';
$estoque = 'ocultar';
$saidas = 'ocultar';
$entradas = 'ocultar';
$rel_prod_vendidos = 'ocultar';
$compras = 'ocultar';


$query = $pdo->query("SELECT * FROM usuarios_permissoes where usuario = '$id_usuario'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0){
	for($i=0; $i < $total_reg; $i++){
		foreach ($res[$i] as $key => $value){}
		$permissao = $res[$i]['permissao'];

		$query2 = $pdo->query("SELECT * FROM acessos where id = '$permissao'");
		$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
		$nome = $res2[0]['nome'];
		$chave = $res2[0]['chave'];
		$id = $res2[0]['id'];

		if($chave == 'home'){
			$home = '';
		}

		if($chave == 'configuracoes'){
			$configuracoes = '';
		}

		if($chave == 'caixas'){
			$caixas = '';
		}

		if($chave == 'tarefas'){
			$tarefas = '';
		}

		if($chave == 'lancar_tarefas'){
			$lancar_tarefas = '';
		}

		if($chave == 'mensalidades'){
			$mensalidades = '';
		}


		if($chave == 'dispositivos'){
			$dispositivos = '';
		}

			if($chave == 'editar_conta_paga'){
			$editar_conta_paga = '';
		}

			if($chave == 'marketing'){
			$marketing = '';
		}

		if($chave == 'chamados'){
			$chamados = '';
		}

			if($chave == 'rel_contratos'){
			$rel_contratos = '';
		}


		if($chave == 'vendas'){
			$vendas = '';
		}


		if($chave == 'orcamentos'){
			$orcamentos = '';
		}

		if($chave == 'os'){
			$os = '';
		}


		if($chave == 'rh'){
			$rh = '';
		}

		if($site == 'rh'){
			$site = '';
		}


	
		if($chave == 'usuarios'){
			$usuarios = '';
		}

		if($chave == 'fornecedores'){
			$fornecedores = '';
		}

		if($chave == 'funcionarios'){
			$funcionarios = '';
		}

		if($chave == 'clientes'){
			$clientes = '';
		}


		if($chave == 'grupo_acessos'){
			$grupo_acessos = '';
		}

		if($chave == 'acessos'){
			$acessos = '';
		}

		if($chave == 'frequencias'){
			$frequencias = '';
		}

		if($chave == 'cargos'){
			$cargos = '';
		}

		if($chave == 'formas_pgto'){
			$formas_pgto = '';
		}

		if($chave == 'modelos_contratos'){
			$modelos_contratos = '';
		}

		if($chave == 'marcas'){
			$marcas = '';
		}

		if($chave == 'modelos'){
			$modelos = '';
		}

		if($chave == 'equipamentos'){
			$equipamentos = '';
		}

		if($chave == 'servicos'){
			$servicos = '';
		}

		if($chave == 'plano_contas'){
			$plano_contas = '';
		}


		if($chave == 'grupos_disparos'){
			$grupos_disparos = '';
		}





		if($chave == 'receber'){
			$receber = '';
		}


		if($chave == 'pagar'){
			$pagar = '';
		}

		if($chave == 'rel_financeiro'){
			$rel_financeiro = '';
		}

		if($chave == 'rel_sintetico_receber'){
			$rel_sintetico_receber = '';
		}

		if($chave == 'rel_sintetico_despesas'){
			$rel_sintetico_despesas = '';
		}

		if($chave == 'rel_balanco'){
			$rel_balanco = '';
		}

		if($chave == 'rel_inadimplementes'){
			$rel_inadimplementes = '';
		}

		if ($chave == 'agendas') {
			$agendas = '';
		}


		if ($chave == 'cobrancas') {
			$cobrancas = '';
		}


		if ($chave == 'lista_vendas') {
			$lista_vendas = '';
		}


		if ($chave == 'comissoes') {
			$comissoes = '';
		}


		if ($chave == 'minhas_comissoes') {
			$minhas_comissoes = '';
		}



		if ($chave == 'rel_vendas') {
			$rel_vendas = '';
		}
		
		



		if($chave == 'produtos'){
			$produtos = '';
		}

		if($chave == 'categorias'){
			$categorias = '';
		}

		if($chave == 'sub_categorias'){
			$sub_categorias = '';
		}

		if($chave == 'estoque'){
			$estoque = '';
		}

		if($chave == 'saidas'){
			$saidas = '';
		}

		if($chave == 'entradas'){
			$entradas = '';
		}	

		if($chave == 'rel_prod_vendidos'){
			$rel_prod_vendidos = '';
		}

		if($chave == 'compras'){
			$compras = '';
		}



		if($chave == 'orcamentos_vencidos'){
			$orcamentos_vencidos = '';
		}

		if($chave == 'orcamentos_aprovados'){
			$orcamentos_aprovados = '';
		}

		if($chave == 'orcamentos_pendentes'){
			$orcamentos_pendentes = '';
		}


		if($chave == 'tarefas_clientes'){
			$tarefas_clientes = '';
		}


		if($chave == 'os_abertas'){
			$os_abertas = '';
		}

		if($chave == 'os_iniciadas'){
			$os_iniciadas = '';
		}

		if($chave == 'os_aguardando'){
			$os_aguardando = '';
		}

		if($chave == 'os_aprovacao'){
			$os_aprovacao = '';
		}

		if($chave == 'os_finalizadas'){
			$os_finalizadas = '';
		}

		if($chave == 'os_entregues'){
			$os_entregues = '';
		}

		if($chave == 'os_sem_reparo'){
			$os_sem_reparo = '';
		}

		if($chave == 'os_nao_aprovadas'){
			$os_nao_aprovadas = '';
		}

		if($chave == 'os_entregues_hoje'){
			$os_entregues_hoje = '';
		}



	}

}



$pag_inicial = '';
if($home != 'ocultar'){
	$pag_inicial = 'home';
}else{
	$query = $pdo->query("SELECT * FROM usuarios_permissoes where usuario = '$id_usuario'");
	$res = $query->fetchAll(PDO::FETCH_ASSOC);
	$total_reg = @count($res);	
	if($total_reg > 0){
		for($i=0; $i<$total_reg; $i++){
			$permissao = $res[$i]['permissao'];		
			$query2 = $pdo->query("SELECT * FROM acessos where id = '$permissao'");
			$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
			if($res2[0]['pagina'] == 'Não'){
				continue;
			}else{
				$pag_inicial = $res2[0]['chave'];
				break;
			}	
				
		}
				

	}else{
		echo 'Você não tem permissão para acessar nenhuma página, acione o administrador!';
		echo "<script>localStorage.setItem('id_usu', '')</script>";
		exit();
	}
}



if($usuarios == 'ocultar' and $funcionarios == 'ocultar' and $fornecedores == 'ocultar' and $clientes == 'ocultar'){
	$menu_pessoas = 'ocultar';
}else{
	$menu_pessoas = '';
}


if($grupo_acessos == 'ocultar' and $acessos == 'ocultar' and $cargos == 'ocultar' and $frequencias == 'ocultar' and $formas_pgto == 'ocultar' and $marcas == 'ocultar' and $modelos == 'ocultar' and $equipamentos == 'ocultar' and $servicos == 'ocultar' and $plano_contas == 'ocultar'){
	$menu_cadastros = 'ocultar';
}else{
	$menu_cadastros = '';
}


if($receber == 'ocultar' and $pagar == 'ocultar' and $cobrancas == 'ocultar' and $lista_vendas == 'ocultar' and $comissoes == 'ocultar' and $minhas_comissoes == 'ocultar'){
	$menu_financeiro = 'ocultar';
}else{
	$menu_financeiro = '';
}

if($rel_balanco == 'ocultar' and $rel_sintetico_despesas == 'ocultar' and $rel_sintetico_receber == 'ocultar' and $rel_financeiro == 'ocultar' and $rel_inadimplementes == 'ocultar' and $rel_vendas == 'ocultar' ){
	$menu_relatorios = 'ocultar';
}else{
	$menu_relatorios = '';
}



if($produtos == 'ocultar' and $categorias == 'ocultar' and $sub_categorias == 'ocultar' and $estoque == 'ocultar' and $saidas == 'ocultar' and $entradas == 'ocultar' and $rel_prod_vendidos == 'ocultar' and $compras == 'ocultar'){
	$menu_produtos = 'ocultar';
}else{
	$menu_produtos = '';
}



if($rel_contratos == 'ocultar' and $modelos_contratos == 'ocultar' and $listar_contratos == 'ocultar' ){
	$menu_contratos = 'ocultar';
}else{
	$menu_contratos = '';
}



if($grupos_disparos == 'ocultar' and $marketing == 'ocultar' ){
	$menu_marketing = 'ocultar';
}else{
	$menu_marketing = '';
}


if($orcamentos == 'ocultar' and $orcamentos_pendentes == 'ocultar' and $orcamentos_aprovados == 'ocultar' and $orcamentos_vencidos == 'ocultar' ){
	$menu_orcamentos = 'ocultar';
}else{
	$menu_orcamentos = '';
}


if($tarefas == 'ocultar' and $tarefas_clientes == 'ocultar'  ){
	$menu_tarefas = 'ocultar';
}else{
	$menu_tarefas = '';
}



if($os_abertas == 'ocultar' and $os_iniciadas == 'ocultar'  and $os_aguardando == 'ocultar'  and $os_aprovacao == 'ocultar'  and $os_finalizadas == 'ocultar'  and $os_entregues == 'ocultar'  and $os_sem_reparo == 'ocultar'  and $os_nao_aprovadas == 'ocultar'  and $os_entregues_hoje == 'ocultar'  ){
	$menu_os = 'ocultar';
}else{
	$menu_os = '';
}

?>