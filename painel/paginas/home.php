<?php 
$pag = 'home';

if ($mostrar_registros == 'Não') {
    $sql_usuario = " and usuario = '$id_usuario '";
    $sql_usuario_lanc = " and usuario_lanc = '$id_usuario'";
} else {
    $sql_usuario = " ";
    $sql_usuario_lanc = " ";
}

//total clientes
if ($mostrar_registros == 'Não') {
    $query = $pdo->query("SELECT * from clientes where usuario = '$id_usuario' and empresa = '$id_empresa'");
} else {
    $query = $pdo->query("SELECT * from clientes where empresa = '$id_empresa'");
}
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_clientes = @count($res);

//total clientes mes
$query = $pdo->query("SELECT * from clientes where data_cad >= '$data_inicio_mes' and data_cad <= '$data_final_mes' and empresa = '$id_empresa' $sql_usuario");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_clientes_mes = @count($res);

$total_pagar_vencidas = 0;
$query = $pdo->query("SELECT * from pagar where vencimento < curDate() and pago != 'Sim' and empresa = '$id_empresa' $sql_usuario_lanc");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$contas_pagar_vencidas = @count($res);
for ($i = 0; $i < $contas_pagar_vencidas; $i++) {
    $valor_1 = $res[$i]['valor'];
    $total_pagar_vencidas += $valor_1;
}
$total_pagar_vencidasF = @number_format($total_pagar_vencidas, 2, ',', '.');

$total_receber_vencidas = 0;
$query = $pdo->query("SELECT * from receber where vencimento < curDate() and pago != 'Sim' and empresa = '$id_empresa' $sql_usuario_lanc");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$contas_receber_vencidas = @count($res);
for ($i = 0; $i < $contas_receber_vencidas; $i++) {
    $valor_2 = $res[$i]['valor'];
    $total_receber_vencidas += $valor_2;
}
$total_receber_vencidasF = @number_format($total_receber_vencidas, 2, ',', '.');

//total recebidas mes
$total_recebidas_mes = 0;
$query = $pdo->query("SELECT * from receber where data_pgto >= '$data_inicio_mes' and data_pgto <= '$data_final_mes' and pago = 'Sim' and empresa = '$id_empresa' $sql_usuario_lanc");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$contas_recebidas_mes = @count($res);
for ($i = 0; $i < $contas_recebidas_mes; $i++) {
    $valor_3 = $res[$i]['valor'];
    $total_recebidas_mes += $valor_3;
}
$total_recebidas_mesF = @number_format($total_recebidas_mes, 2, ',', '.');

//total contas pagas mes
$total_pagas_mes = 0;
$query = $pdo->query("SELECT * from pagar where data_pgto >= '$data_inicio_mes' and data_pgto <= '$data_final_mes' and pago = 'Sim' and empresa = '$id_empresa' $sql_usuario_lanc");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$contas_pagas_mes = @count($res);
for ($i = 0; $i < $contas_pagas_mes; $i++) {
    $valor_4 = $res[$i]['valor'];
    $total_pagas_mes += $valor_4;
}
$total_pagas_mesF = @number_format($total_pagas_mes, 2, ',', '.');

$total_saldo_mes = $total_recebidas_mes - $total_pagas_mes;
$total_saldo_mesF = @number_format($total_saldo_mes, 2, ',', '.');
if ($total_saldo_mes >= 0) {
    $classe_saldo = 'text-success';
    $classe_saldo2 = 'bg-success';
    $classe_icon_dia = 'fa fa-caret-up text-success';
} else {
    $classe_saldo = 'text-danger';
    $classe_saldo2 = 'bg-danger';
    $classe_icon_dia = 'fa fa-caret-down text-danger';
}

//total recebidas dia
$total_recebidas_dia = 0;
$query = $pdo->query("SELECT * from receber where data_pgto = curDate() and pago = 'Sim' and empresa = '$id_empresa' $sql_usuario_lanc");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$contas_recebidas_dia = @count($res);
for ($i = 0; $i < $contas_recebidas_dia; $i++) {
    $valor_3 = $res[$i]['valor'];
    $total_recebidas_dia += $valor_3;
}
$total_recebidas_diaF = @number_format($total_recebidas_dia, 2, ',', '.');

//total contas pagas dia
$total_pagas_dia = 0;
$query = $pdo->query("SELECT * from pagar where data_pgto = curDate() and pago = 'Sim' and empresa = '$id_empresa' $sql_usuario_lanc");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$contas_pagas_dia = @count($res);
for ($i = 0; $i < $contas_pagas_dia; $i++) {
    $valor_4 = $res[$i]['valor'];
    $total_pagas_dia += $valor_4;
}
$total_pagas_diaF = @number_format($total_pagas_dia, 2, ',', '.');

$total_saldo_dia = $total_recebidas_dia - $total_pagas_dia;
$total_saldo_diaF = @number_format($total_saldo_dia, 2, ',', '.');
if ($total_saldo_dia >= 0) {
    $classe_saldo_dia = 'bg-success';
} else {
    $classe_saldo_dia = 'bg-danger';
}

//valores para o grafico de linhas (ano atual, despesas e recebimentos)
$total_meses_pagar_grafico = '';
$total_meses_receber_grafico = '';

for ($i = 1; $i <= 12; $i++) {
    if ($i < 10) {
        $mes_verificado = '0' . $i;
    } else {
        $mes_verificado = $i;
    }

    $data_inicio_mes_grafico = $ano_atual . "-" . $mes_verificado . "-01";

    if ($mes_verificado == '04' || $mes_verificado == '06' || $mes_verificado == '09' || $mes_verificado == '11') {
        $data_final_mes_grafico = $ano_atual . '-' . $mes_verificado . '-30';
    } else if ($mes_verificado == '02') {
        $bissexto = date('L', @mktime(0, 0, 0, 1, 1, $mes_verificado));
        if ($bissexto == 1) {
            $data_final_mes_grafico = $ano_atual . '-' . $mes_verificado . '-29';
        } else {
            $data_final_mes_grafico = $ano_atual . '-' . $mes_verificado . '-28';
        }
    } else {
        $data_final_mes_grafico = $ano_atual . '-' . $mes_verificado . '-31';
    }

    //total recebidas mes
    $total_recebidas_mes_grafico = 0;
    $query2 = $pdo->query("SELECT * from receber where data_pgto >= '$data_inicio_mes_grafico' and data_pgto <= '$data_final_mes_grafico' and pago = 'Sim' and empresa = '$id_empresa' $sql_usuario_lanc");
    $res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
    $contas_recebidas_mes_grafico = @count($res2);
    for ($i2 = 0; $i2 < $contas_recebidas_mes_grafico; $i2++) {
        $valor_3 = $res2[$i2]['valor'];
        $total_recebidas_mes_grafico += $valor_3;
    }

    //total contas pagas mes
    $total_pagas_mes_grafico = 0;
    $query2 = $pdo->query("SELECT * from pagar where data_pgto >= '$data_inicio_mes_grafico' and data_pgto <= '$data_final_mes_grafico' and pago = 'Sim' and empresa = '$id_empresa' $sql_usuario_lanc");
    $res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
    $contas_pagas_mes_grafico = @count($res2);
    for ($i2 = 0; $i2 < $contas_pagas_mes_grafico; $i2++) {
        $valor_4 = $res2[$i2]['valor'];
        $total_pagas_mes_grafico += $valor_4;
    }

    $total_meses_pagar_grafico .= $total_pagas_mes_grafico . '-';
    $total_meses_receber_grafico .= $total_recebidas_mes_grafico . '-';
}

//tarefas
$query = $pdo->query("SELECT * from tarefas where usuario = '$id_usuario' and status = 'Agendada' and data <= curDate() and hora < curTime() and empresa = '$id_empresa' order by id desc");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$tarefas_atrasadas = @count($res);

$query = $pdo->query("SELECT * from tarefas where usuario = '$id_usuario' and status = 'Agendada' and empresa = '$id_empresa' order by id desc");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_tarefas = @count($res);

$query = $pdo->query("SELECT * from tarefas where usuario = '$id_usuario' and status = 'Agendada' and data = curDate() and empresa = '$id_empresa' order by id desc");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$tarefas_agendadas_hoje = @count($res);

#####ANOTAÇÕES#####################################
$query = $pdo->query("SELECT * from anotacoes where empresa = '$id_empresa'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = @count($res);
for ($i5 = 0; $i5 < $linhas; $i5++) {
    $msg = $res[$i5]['msg'];
    $titulo = $res[$i5]['titulo'];
}

//verificar se essa empresa tem débitos
$query = $pdo->query("SELECT * from receber_sas where cliente = '$id_empresa' and pago = 'Não' and vencimento < curDate()");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$tem_debito = @count($res);

//total de orcamentos
$query = $pdo->query("SELECT * from orcamentos where status = 'Pendente' and empresa = '$id_empresa' ");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$orc_pendentes = @count($res);

//total de orcamentos
$query = $pdo->query("SELECT * from orcamentos where status = 'Pendente' and data >= '$data_inicio_mes' and data <= '$data_final_mes' and empresa = '$id_empresa'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$orc_pendentes_mes = @count($res);

//total de orcamentos
$query = $pdo->query("SELECT * from orcamentos where status != 'Pendente' and empresa = '$id_empresa' ");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$orcamentos_concluidos = @count($res);

//total de orcamentos
$query = $pdo->query("SELECT * from orcamentos where status != 'Pendente' and data >= '$data_inicio_mes' and data <= '$data_final_mes' and empresa = '$id_empresa'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$orcamentos_concluidos_mes = @count($res);

//total de os
$query = $pdo->query("SELECT * from os where status = 'Aberta' and empresa = '$id_empresa' ");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$os_pendentes = @count($res);

//total de os
$query = $pdo->query("SELECT * from os where status = 'Aberta' and data >= '$data_inicio_mes' and data <= '$data_final_mes' and empresa = '$id_empresa'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$os_pendentes_mes = @count($res);

//total de os finalizadas
$query = $pdo->query("SELECT * from os where (status = 'Entregue' or status = 'Finalizada') and empresa = '$id_empresa' ");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$os_finalizadas = @count($res);

//total de os finalizadas mes
$query = $pdo->query("SELECT * from os where (status = 'Entregue' or status = 'Finalizada') and data >= '$data_inicio_mes' and data <= '$data_final_mes' and empresa = '$id_empresa'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$os_finalizadas_mes = @count($res);

//totalizar vendas

//total vendas mes
$vendas_mes = 0;
$query = $pdo->query("SELECT * from receber where data_pgto >= '$data_inicio_mes' and data_pgto <= '$data_final_mes' and pago = 'Sim' and empresa = '$id_empresa' and referencia = 'Venda' $sql_usuario_lanc");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$contas_recebidas_mes = @count($res);
for ($i = 0; $i < $contas_recebidas_mes; $i++) {
    $valor_3 = $res[$i]['valor'];
    $vendas_mes += $valor_3;
}
$vendas_mesF = @number_format($vendas_mes, 2, ',', '.');

//total vendas dia
$vendas_hoje = 0;
$query = $pdo->query("SELECT * from receber where data_pgto = curDate() and pago = 'Sim' and empresa = '$id_empresa' and referencia = 'Venda' $sql_usuario_lanc");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$contas_recebidas_mes = @count($res);
for ($i = 0; $i < $contas_recebidas_mes; $i++) {
    $valor_3 = $res[$i]['valor'];
    $vendas_hoje += $valor_3;
}
$vendas_hojeF = @number_format($vendas_hoje, 2, ',', '.');

//verificar se ele tem a permissão de estar nessa página
if (@$home == 'ocultar') {
    echo "<script>window.location='index'</script>";
    exit();
}
?>


<link rel="stylesheet" type="text/css" href="css/estilos_home.css">


<div class="container-fluid py-4">
    <?php if($tem_debito > 0){ ?>
    <div class="alert-custom alert-warning" style="background: #fff0d6">
        <i class="fa fa-exclamation-triangle alert-icon"></i>
        <div>
            <strong>Aviso:</strong>Prezado Cliente, não identificamos o pagamento de sua última mensalidade. Entre em contato conosco o mais rápido possível para regularizar o pagamento, caso contrário seu acesso ao sistema será desativado. <a href="mensalidades" class="text-primary font-weight-bold">Clique Aqui</a> para ver seus débitos.
        </div>
    </div>
    <?php } ?>

    <!-- Primeira linha de cards -->
    <div class="row mb-4">
        <!-- Card de Clientes -->
        <div class="col-xl-3 col-lg-6 col-md-6 mb-3">
            <a href="clientes" class="text-decoration-none">
                <div class="dashboard-card bg-white">
                    <div class="card-body ">
                        <h5 class="card-title text-dark">Clientes Cadastrados</h5>
                        <h2 class="card-value text-primary"><?php echo $total_clientes ?></h2>
                        <p class="card-subtitle text-dark">
                            Este Mês 
                            <span class="badge-sm badge-success ms-2">
                                <i class="fa fa-arrow-up me-1"></i><?php echo $total_clientes_mes ?>
                            </span>
                        </p>
                        <div class="card-icon info">
                            <i class="fe fe-user"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Card de Despesas Vencidas -->
        <div class="col-xl-3 col-lg-6 col-md-6 mb-3">
            <a href="pagar" class="text-decoration-none">
                <div class="dashboard-card bg-white">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Despesas Vencidas</h5>
                        <h2 class="card-value text-danger">R$ <?php echo $total_pagar_vencidasF ?></h2>
                        <p class="card-subtitle text-dark">
                            Contas Vencidas
                            <span class="badge-sm badge-danger ms-2">
                                <i class="fa fa-arrow-down me-1"></i><?php echo $contas_pagar_vencidas ?>
                            </span>
                        </p>
                        <div class="card-icon danger">
                            <i class="bi bi-currency-dollar"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Card de Contas a Receber Vencidas -->
        <div class="col-xl-3 col-lg-6 col-md-6 mb-3">
            <a href="receber" class="text-decoration-none">
                <div class="dashboard-card bg-white">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Receber Vencidas</h5>
                        <h2 class="card-value text-success">R$ <?php echo $total_receber_vencidasF ?></h2>
                        <p class="card-subtitle text-dark">
                            Contas Vencidas
                            <span class="badge-sm badge-success ms-2">
                                <i class="fa fa-arrow-up me-1"></i><?php echo $contas_receber_vencidas ?>
                            </span>
                        </p>
                        <div class="card-icon success">
                            <i class="bi bi-currency-dollar"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Card de Saldo no Mês -->
        <div class="col-xl-3 col-lg-6 col-md-6 mb-3">
            <a href="receber" class="text-decoration-none">
                <div class="dashboard-card bg-white">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Saldo no Mês</h5>
                        <h2 class="card-value <?php echo $classe_saldo ?>">R$ <?php echo $total_saldo_mesF ?></h2>
                        <p class="card-subtitle text-dark">
                            Saldo Hoje
                            <span class="badge-sm <?php echo ($total_saldo_dia >= 0) ? 'badge-success' : 'badge-danger' ?> ms-2">
                                <i class="fa <?php echo ($total_saldo_dia >= 0) ? 'fa-arrow-up' : 'fa-arrow-down' ?> me-1"></i>R$ <?php echo $total_saldo_diaF ?>
                            </span>
                        </p>
                        <div class="card-icon <?php echo ($total_saldo_mes >= 0) ? 'success' : 'danger' ?>">
                            <i class="bi bi-currency-dollar"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <!-- Segunda linha de cards -->
    <div class="row mb-4">
        <!-- Card de Orçamentos Pendentes -->
        <div class="col-xl-3 col-lg-6 col-md-6 mb-3 <?php echo @$orcamentos_rec ?>">
            <a href="orcamentos" class="text-decoration-none">
                <div class="dashboard-card bg-white">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Orçamentos Pendentes</h5>
                        <h2 class="card-value text-primary"><?php echo $orc_pendentes ?></h2>
                        <p class="card-subtitle text-dark">
                            Pendentes Mês 
                            <span class="badge-sm badge-info ms-2">
                                <i class="fa fa-info-circle me-1"></i><?php echo $orc_pendentes_mes ?>
                            </span>
                        </p>
                        <div class="card-icon warning">
                            <i class="fe fe-file"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Card de Orçamentos Concluídos -->
        <div class="col-xl-3 col-lg-6 col-md-6 mb-3 <?php echo @$orcamentos_rec ?>">
            <a href="orcamentos" class="text-decoration-none">
                <div class="dashboard-card bg-white">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Orçamentos Concluídos</h5>
                        <h2 class="card-value text-success"><?php echo $orcamentos_concluidos ?></h2>
                        <p class="card-subtitle text-dark">
                            Concluídos no Mês
                            <span class="badge-sm badge-success ms-2">
                                <i class="fa fa-check-circle me-1"></i><?php echo $orcamentos_concluidos_mes ?>
                            </span>
                        </p>
                        <div class="card-icon success">
                            <i class="bi bi-currency-dollar"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Card de OS Abertas -->
        <div class="col-xl-3 col-lg-6 col-md-6 mb-3 <?php echo @$os_rec ?>">
            <a href="os" class="text-decoration-none">
                <div class="dashboard-card bg-white">
                    <div class="card-body">
                        <h5 class="card-title text-dark">OS Abertas</h5>
                        <h2 class="card-value text-warning"><?php echo $os_pendentes ?></h2>
                        <p class="card-subtitle text-dark">
                            Abertas no Mês
                            <span class="badge-sm badge-warning ms-2">
                                <i class="fa fa-exclamation-circle me-1"></i><?php echo $os_pendentes_mes ?>
                            </span>
                        </p>
                        <div class="card-icon warning">
                            <i class="bi bi-file-pdf"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Card de OS Finalizadas -->
        <div class="col-xl-3 col-lg-6 col-md-6 mb-3 <?php echo @$os_rec ?>">
            <a href="os" class="text-decoration-none">
                <div class="dashboard-card bg-white">
                    <div class="card-body ">
                        <h5 class="card-title text-dark">OS Finalizadas</h5>
                        <h2 class="card-value text-success"><?php echo $os_finalizadas ?></h2>
                        <p class="card-subtitle text-dark">
                            Finalizadas no Mês
                            <span class="badge-sm badge-success ms-2">
                                <i class="fa fa-check-circle me-1"></i><?php echo $os_finalizadas_mes ?>
                            </span>
                        </p>
                        <div class="card-icon success">
                            <i class="bi bi-currency-dollar"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <!-- Gráfico de Estatísticas -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="chart-container bg-white">
                <h5 class="chart-title text-dark">Recebimentos / Despesas <?php echo $ano_atual ?></h5>
                <div id="statistics1" class="w-100" style="height: 350px;"></div>
            </div>
        </div>
    </div>

    <!-- Painel de Informações Estilo Kanban -->
    <?php
    $query = $pdo->query("SELECT * from anotacoes where mostrar_home = 'Sim' and empresa = '$id_empresa' order by id desc");
    $res = $query->fetchAll(PDO::FETCH_ASSOC);
    $linhas = @count($res);
    if ($linhas > 0) {
    ?>
    <div class="mb-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="chart-title m-0">PAINEL DE INFORMAÇÕES</h5>
            <button class="btn btn-sm btn-outline-primary d-none d-md-block" onclick="toggleKanbanView()">
                <i class="fa fa-th-large me-1"></i> Alterar Visualização
            </button>
        </div>
        
        <!-- Botão de alternar visualização para dispositivos móveis -->
        <button class="btn btn-sm btn-outline-primary d-md-none toggle-view-btn-mobile mb-3" onclick="toggleKanbanView()">
            <i class="fa fa-th-large me-1"></i> Alternar Visualização (Grid/Horizontal)
        </button>
        
        <!-- Indicador de rolagem para visualização horizontal -->
        <div class="scroll-indicator" id="scrollIndicator">
            <i class="fa fa-arrows-alt-h me-1"></i> Deslize para ver mais cards
        </div>
        
        <div class="kanban-container" id="kanbanContainer">
            <div class="row" id="kanbanRow">
                <?php
                for ($i = 0; $i < $linhas; $i++) {
                    $id = $res[$i]['id'];
                    $titulo = $res[$i]['titulo'];
                    $msg = $res[$i]['msg'];
                    $usuario = $res[$i]['usuario'];
                    $data = $res[$i]['data'];

                    $query2 = $pdo->query("SELECT * FROM usuarios where id = '$usuario'");
                    $res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
                    if (@count($res2) > 0) {
                        $nome_usuario = $res2[0]['nome'];
                    } else {
                        $nome_usuario = 'Sem Usuário';
                    }

                    $dataF = implode('/', array_reverse(@explode('-', $data)));
                    
                    // Definir cores aleatórias para os cards
                    $card_colors = ['primary', 'success', 'info', 'warning', 'danger', 'purple'];
                    $color_index = $i % count($card_colors);
                    $card_color = $card_colors[$color_index];
                    
                    // Definir ícones baseados no título (simplificado)
                    $icon_class = 'fa-info-circle';
                    if (stripos($titulo, 'aviso') !== false) {
                        $icon_class = 'fa-exclamation-circle';
                    } elseif (stripos($titulo, 'lembrete') !== false) {
                        $icon_class = 'fa-bell';
                    } elseif (stripos($titulo, 'tarefa') !== false) {
                        $icon_class = 'fa-tasks';
                    } elseif (stripos($titulo, 'nota') !== false) {
                        $icon_class = 'fa-sticky-note';
                    }
                ?>
                <div class="col-md-6 col-lg-4 mb-3 kanban-item">
                    <div class="kanban-card">
                        <div class="kanban-card-header bg-<?php echo $card_color ?>">
                            <div class="d-flex align-items-center">
                                <i class="fa <?php echo $icon_class ?> me-2"></i>
                                <h6 class="m-0 kanban-card-title"><?php echo $titulo ?></h6>
                            </div>
                            <div class="kanban-card-date"><?php echo $dataF ?></div>
                        </div>
                        <div class="kanban-card-body bg-white text-dark">
                            <p class="kanban-card-text "><?php echo $msg ?></p>
                        </div>
                        <div class="kanban-card-footer bg-white">
                            <span class="kanban-card-user text-dark">
                                <i class="fa fa-user-circle me-1"></i> <?php echo $nome_usuario ?>
                            </span>
                            <span class="kanban-card-id text-dark">#<?php echo $id ?></span>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php } ?>

    <!-- Última linha de cards -->
    <div class="row">
        <!-- Card de Tarefas -->
        <div class="col-xl-6 col-lg-12 col-md-12 mb-3">
            <a href="tarefas" class="text-decoration-none">
                <div class="dashboard-card task-sales-card bg-white">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Total de Tarefas Pendentes</h5>
                        <div class="d-flex flex-wrap align-items-center mb-3">
                            <h2 class="card-value text-danger me-3"><?php echo $total_tarefas ?></h2>
                            <div>
                                <div class="d-flex align-items-center mb-1">
                                    <span class="me-2 text-dark">Pendentes Hoje:</span>
                                    <span class="badge-sm badge-success">
                                        <i class="fa fa-calendar-check me-1"></i><?php echo $tarefas_agendadas_hoje ?>
                                    </span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="me-2 text-dark">Tarefas Atrasadas:</span>
                                    <span class="badge-sm badge-danger">
                                        <i class="fa fa-exclamation-circle me-1"></i><?php echo $tarefas_atrasadas ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="card-icon purple">
                            <i class="fe fe-shopping-bag"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Card de Vendas -->
        <div class="col-xl-6 col-lg-12 col-md-12 mb-3">
            <div class="dashboard-card task-sales-card bg-white">
                <div class="card-body">
                    <h5 class="card-title text-dark">Vendas Hoje</h5>
                    <div class="d-flex flex-wrap align-items-center mb-3">
                        <h2 class="card-value text-success me-3">R$ <?php echo $vendas_hojeF ?></h2>
                        <div>
                            <div class="d-flex align-items-center">
                                <span class="me-2 text-dark">Vendas Mês:</span>
                                <span class="badge-sm badge-success">
                                    <i class="fa fa-chart-line me-1"></i>R$ <?php echo $vendas_mesF ?>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="card-icon info">
                        <i class="fe fe-dollar-sign"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    // GRAFICO DE BARRAS
    function statistics1() {
        var total_pagar = "<?= $total_meses_pagar_grafico ?>";
        var total_receber = "<?= $total_meses_receber_grafico ?>";

        var split_pagar = total_pagar.split("-");
        var split_receber = total_receber.split("-");

        setTimeout(() => {
            var options1 = {
                series: [{
                    name: 'Contas à Receber',
                    data: [split_receber[0], split_receber[1], split_receber[2], split_receber[3], split_receber[4], split_receber[5], split_receber[6], split_receber[7], split_receber[8], split_receber[9], split_receber[10], split_receber[11]],
                }, {
                    name: 'Contas à Pagar',
                    data: [split_pagar[0], split_pagar[1], split_pagar[2], split_pagar[3], split_pagar[4], split_pagar[5], split_pagar[6], split_pagar[7], split_pagar[8], split_pagar[9], split_pagar[10], split_pagar[11]],
                }],
                chart: {
                    type: 'bar',
                    height: 280,
                    fontFamily: 'Inter, sans-serif',
                    toolbar: {
                        show: false
                    },
                    redrawOnWindowResize: true,
                    redrawOnParentResize: true
                },
                grid: {
                    borderColor: '#f2f6f7',
                },
                colors: ["#10B981", "#EF4444"],
                plotOptions: {
                    bar: {
                        borderRadius: 4,
                        columnWidth: '40%',
                    }
                },
                dataLabels: {
                    enabled: false,
                },
                stroke: {
                    show: true,
                    width: 2,
                    colors: ['transparent']
                },
                legend: {
                    show: true,
                    position: 'top',
                    fontSize: '14px',
                    fontFamily: 'Inter, sans-serif',
                    fontWeight: 500,
                    labels: {
                        colors: '#1E293B'
                    },
                    markers: {
                        width: 12,
                        height: 12,
                        radius: 12
                    },
                    itemMargin: {
                        horizontal: 10,
                        vertical: 0
                    },
                    onItemClick: {
                        toggleDataSeries: true
                    },
                    onItemHover: {
                        highlightDataSeries: true
                    }
                },
                yaxis: {
                    title: {
                        text: 'Valores',
                        style: {
                            color: '#64748B',
                            fontSize: '14px',
                            fontFamily: 'Inter, sans-serif',
                            fontWeight: 500,
                        },
                    },
                    labels: {
                        formatter: function (y) {
                            return y.toFixed(0) + "";
                        },
                        style: {
                            colors: '#64748B',
                            fontSize: '12px',
                            fontFamily: 'Inter, sans-serif',
                        }
                    }
                },
                xaxis: {
                    type: 'month',
                    categories: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
                    axisBorder: {
                        show: true,
                        color: 'rgba(119, 119, 142, 0.05)',
                        offsetX: 0,
                        offsetY: 0,
                    },
                    axisTicks: {
                        show: true,
                        borderType: 'solid',
                        color: 'rgba(119, 119, 142, 0.05)',
                        width: 6,
                        offsetX: 0,
                        offsetY: 0
                    },
                    labels: {
                        rotate: -45,
                        style: {
                            colors: '#64748B',
                            fontSize: '12px',
                            fontFamily: 'Inter, sans-serif',
                        }
                    }
                },
                tooltip: {
                    y: {
                        formatter: function (val) {
                            return "R$ " + val.toFixed(2)
                        }
                    }
                },
                responsive: [
                    {
                        breakpoint: 576,
                        options: {
                            plotOptions: {
                                bar: {
                                    columnWidth: '70%'
                                }
                            },
                            legend: {
                                position: 'bottom',
                                fontSize: '12px',
                                offsetY: 0,
                                itemMargin: {
                                    horizontal: 5,
                                    vertical: 10
                                }
                            },
                            xaxis: {
                                labels: {
                                    rotate: -90,
                                    style: {
                                        fontSize: '10px'
                                    }
                                }
                            }
                        }
                    }
                ]
            };
            document.getElementById('statistics1').innerHTML = '';
            var chart1 = new ApexCharts(document.querySelector("#statistics1"), options1);
            chart1.render();
        }, 300);
    }

    // Inicializar gráfico quando a página carregar
    document.addEventListener('DOMContentLoaded', function() {
        statistics1();
        
        // Redimensionar o gráfico quando a janela for redimensionada
        window.addEventListener('resize', function() {
            setTimeout(function() {
                statistics1();
            }, 250);
        });
    });

// Adicione esta função JavaScript para alternar a visualização do Kanban
function toggleKanbanView() {
    const container = document.getElementById('kanbanContainer');
    const row = document.getElementById('kanbanRow');
    const scrollIndicator = document.getElementById('scrollIndicator');
    
    if (container.classList.contains('kanban-horizontal')) {
        // Mudar para visualização em grid
        container.classList.remove('kanban-horizontal');
        row.classList.remove('flex-nowrap');
        
        // Esconder o indicador de rolagem
        if (scrollIndicator) {
            scrollIndicator.style.display = 'none';
        }
        
        const items = document.querySelectorAll('.kanban-item');
        items.forEach(item => {
            item.classList.remove('kanban-item-horizontal');
            item.style.width = '';
            item.style.flex = '';
        });
        
        // Atualizar o texto do botão
        const buttons = document.querySelectorAll('.toggle-view-btn-mobile, .btn-outline-primary');
        buttons.forEach(button => {
            button.innerHTML = '<i class="fa fa-list me-1"></i> Visualização Horizontal';
        });
    } else {
        // Mudar para visualização horizontal
        container.classList.add('kanban-horizontal');
        row.classList.add('flex-nowrap');
        
        // Mostrar o indicador de rolagem em dispositivos móveis
        if (scrollIndicator && window.innerWidth < 992) {
            scrollIndicator.style.display = 'block';
        }
        
        const items = document.querySelectorAll('.kanban-item');
        items.forEach(item => {
            item.classList.add('kanban-item-horizontal');
            
            // Ajustar largura com base no tamanho da tela
            if (window.innerWidth < 768) {
                const cardWidth = Math.min(300, window.innerWidth * 0.85);
                item.style.width = `${cardWidth}px`;
                item.style.flex = `0 0 ${cardWidth}px`;
            } else {
                item.style.width = '300px';
                item.style.flex = '0 0 300px';
            }
        });
        
        // Atualizar o texto do botão
        const buttons = document.querySelectorAll('.toggle-view-btn-mobile, .btn-outline-primary');
        buttons.forEach(button => {
            button.innerHTML = '<i class="fa fa-th-large me-1"></i> Visualização em Grid';
        });
        
        // Rolar para o início do container
        container.scrollLeft = 0;
    }
}

// Inicializar quando o documento estiver pronto
document.addEventListener('DOMContentLoaded', function() {
    // Inicializar o gráfico
    statistics1();
    
    // Redimensionar o gráfico quando a janela for redimensionada
    window.addEventListener('resize', function() {
        setTimeout(function() {
            statistics1();
        }, 250);
    });
    
    // Inicializar o estado do indicador de rolagem
    const scrollIndicator = document.getElementById('scrollIndicator');
    if (scrollIndicator) {
        scrollIndicator.style.display = 'none';
    }
    
    // Adicionar suporte básico a gestos de toque para o kanban
    const kanbanContainer = document.getElementById('kanbanContainer');
    if (kanbanContainer) {
        kanbanContainer.addEventListener('scroll', function() {
            // Atualizar visibilidade do indicador de rolagem
            if (scrollIndicator && kanbanContainer.classList.contains('kanban-horizontal')) {
                const isAtEnd = kanbanContainer.scrollLeft + kanbanContainer.clientWidth >= kanbanContainer.scrollWidth - 10;
                scrollIndicator.style.opacity = isAtEnd ? '0' : '1';
            }
        });
    }
});
</script>

