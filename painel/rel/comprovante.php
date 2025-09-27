<?php 
@session_start();
$id_empresa = @$_SESSION['empresa'];
require_once('../../conexao.php');
require_once('../buscar_config.php');

$id = $_GET['id'];

$query = $pdo->query("SELECT * FROM receber WHERE id = '$id'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$registro = $res[0];

$cliente = $registro['cliente'];
$referencia = $registro['referencia'];
$data_lanc = $registro['data_lanc'];
$hora_alerta = $registro['hora_alerta'];
$total_venda_base = $registro['total_venda'];

$query = $pdo->query("SELECT * FROM receber WHERE cliente = '$cliente' AND referencia = 'Venda' AND data_lanc = '$data_lanc' AND hora_alerta = '$hora_alerta' AND total_venda = '$total_venda_base' ORDER BY parcela ASC");
$res = $query->fetchAll(PDO::FETCH_ASSOC);

// Somar totais reais
$valor = $troco = $desconto = $valor_restante = $valor_pago = 0;
$total_venda = 0;
$pago = 'Sim';
foreach ($res as $linha) {
	$valor += $linha['valor'];
	$troco += $linha['troco'];
	$desconto += $linha['desconto'];
	$total_venda += $linha['valor'] + $linha['desconto'];
	$valor_restante += $linha['pago'] == 'Não' ? $linha['valor'] : 0;
	$valor_pago += $linha['pago'] == 'Sim' ? $linha['valor'] : 0;
	if($linha['pago'] != 'Sim') $pago = 'Não';
}

$usuario_lanc = $res[0]['usuario_lanc'];
$saida = $res[0]['forma_pgto'];
$garantia_venda = $res[0]['garantia_venda'];
$tipo_desconto = $res[0]['tipo_desconto'];
$cancelada = $res[0]['cancelada'];

$data_lancF = implode('/', array_reverse(explode('-', $data_lanc)));
$valorF = number_format($valor_pago, 2, ',', '.');
$valor_restanteF = number_format($valor_restante, 2, ',', '.');
$trocoF = number_format($troco, 2, ',', '.');
$total_troco = $troco - $valor;
$total_trocoF = number_format($total_troco, 2, ',', '.');
$total_vendaF = number_format($total_venda, 2, ',', '.');
$descontoF = number_format($desconto, 2, ',', '.');

$nome_usu_lanc = 'Sem Usuário';
$res2 = $pdo->query("SELECT nome FROM usuarios WHERE id = '$usuario_lanc'");
if($res2->rowCount() > 0) $nome_usu_lanc = $res2->fetchColumn();

$nome_cliente = 'Não Informado';
$tel_cliente = '';
$res2 = $pdo->query("SELECT nome, telefone FROM clientes WHERE id = '$cliente'");
if($res2->rowCount() > 0) {
	$cli = $res2->fetch(PDO::FETCH_ASSOC);
	$nome_cliente = $cli['nome'];
	$tel_cliente = $cli['telefone'];
}

$res2 = $pdo->query("SELECT nome FROM formas_pgto WHERE id = '$saida'");
$saida = $res2->rowCount() > 0 ? $res2->fetchColumn() : '';
?>


<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<?php if(@$impressao_automatica == 'Sim' and @$_GET['imprimir'] != 'Não'){ ?>
<script type="text/javascript">
	$(document).ready(function() {    		
		window.print();
		window.close(); 
	} );
</script>
<?php } ?>


<style>
body {
	font-family: Arial, sans-serif;
	font-size: 12px;
	margin: 0;
	padding: 0;
	color: #000;
}
.table {
	width: 100%;
	border-collapse: collapse;
	margin-top: 10px;
}
.table th, .table td {
	border-bottom: 1px dashed #000;
	padding: 4px;
	text-align: center;
}
.text-left {
	text-align: left;
}
.text-right {
	text-align: right;
}
.text-center {
	text-align: center;
}
</style>

<div style="max-width: 400px; margin: 0 auto;">
	<div class="text-center">
		<img src="<?= $url_sistema ?>img/<?= $logo_rel ?>" width="200">
		<p><?= $endereco_sistema ?><br>
		<?= ($cnpj_sistema != "" ? "CNPJ $cnpj_sistema<br>" : "") ?>
		Contato: <?= $telefone_sistema ?></p>
	</div>

	<h3 class="text-center">Comprovante de Venda</h3>

	<p class="text-center">
	Cliente: <strong><?= $nome_cliente ?></strong><br>
	Data: <?= $data_lancF ?><br>
	Venda: <?= $id ?><?= ($cancelada == 'Sim' ? ' - CANCELADA' : '') ?><br>	
	<?php if($garantia_venda != ''): ?>Garantia de <?= $garantia_venda ?> Dias<?php else: ?>CUPOM NÃO FISCAL<?php endif; ?>
	</p>

	<table class="table" style="font-size: 12px">
		<thead>
			<tr><th>Parcela</th><th>Vencimento</th><th>Valor</th></tr>
		</thead>
		<tbody>
			<?php $contador = 1; foreach($res as $parcela): ?>
			<tr>
				<td><?= $contador++ ?></td>
				<td><?= implode('/', array_reverse(explode('-', $parcela['vencimento']))) ?></td>
				<?php
					$forma_pgto_nome = $saida; // padrão geral
					if (!empty($parcela['forma_pgto'])) {
					    $res_fp = $pdo->query("SELECT nome FROM formas_pgto WHERE id = '{$parcela['forma_pgto']}'");
					    if ($res_fp->rowCount()) {
					        $forma_pgto_nome = $res_fp->fetchColumn();
					    }
					}
					?>
					<td>
					    R$ <?= number_format($parcela['valor'], 2, ',', '.') ?>
					    <?= ($parcela['pago'] == 'Sim' ? '(Paga)' : '(Pendente)') ?> - <?= $forma_pgto_nome ?>
					</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

	<table class="table" style="font-size: 12px">
		<tr><td class="text-left">Total da Venda</td><td class="text-right">R$ <?= $total_vendaF ?></td></tr>
		<?php if($desconto > 0): ?>
		<tr><td class="text-left">Desconto</td><td class="text-right">R$ <?= $descontoF ?></td></tr>
		<?php endif; ?>
		<tr><td class="text-left">Valor Pago</td><td class="text-right">R$ <?= $valorF ?></td></tr>
		<?php if($valor_restante > 0){ ?>
		<tr><td class="text-left">Valor Restante</td><td class="text-right">R$ <?= $valor_restanteF ?></td></tr>
	<?php } ?>
		<?php if($troco > 0): ?>
		<tr><td class="text-left">Valor Recebido</td><td class="text-right">R$ <?= $trocoF ?></td></tr>
		<tr><td class="text-left">Troco</td><td class="text-right">R$ <?= $total_trocoF ?></td></tr>
		<?php endif; ?>
		
		<tr><td class="text-left">Vendedor</td><td class="text-right"><?= $nome_usu_lanc ?></td></tr>
	</table>

	<?php if($pago == 'Não'): ?>
	<br><br>
	<div class="text-center">__________________________<br><small>Assinatura do Cliente</small></div>
	<?php endif; ?>
</div>
