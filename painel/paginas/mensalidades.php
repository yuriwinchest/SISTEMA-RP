<?php
$pag = 'mensalidades';

if (@$mensalidades == 'ocultar') {
	echo "<script>window.location='index'</script>";
	exit();
}

$query = $pdo->query("SELECT * from receber_sas where cliente = '$id_empresa' and pago != 'Sim'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = @count($res);
for ($i = 0; $i < $linhas; $i++) {
$ref_pix = @$res[$i]['ref_pix'];
$id = @$res[$i]['id'];
if($ref_pix != ""){

	$query5 = $pdo->query("SELECT * from config where empresa is null or empresa = 0");
	$res5 = $query5->fetchAll(PDO::FETCH_ASSOC);
	$api_pagamento = $res5[0]['api_pagamento'];	

			if($api_pagamento == "Mercado Pago"){
				require('../sas/pagamentos/consultar_pagamento.php');

				 if($status_api == 'approved'){
			     		//buscar a forma de pagamento
			     		$query2 = $pdo->query("SELECT * from formas_pgto where nome like '%$tipo_pagamento%' and (empresa = 0 or empresa is null)");
						$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
						$id_forma_pgto = @$res2[0]['id'];

			         	$pdo->query("UPDATE receber_sas set pago = 'Sim', data_pgto = curDate(), valor = '$total_pago_api', subtotal = '$total_pago_api', forma_pgto = '$id_forma_pgto' where id = '$id'");		
			        }

			}else{
				require('../sas/asaas/verificar_pagamentos.php');
			}		     
					    
		}

}

?>



<div class="row row-sm">
	<div class="col-lg-12">
		<div class="card custom-card">
			<div class="card-body" id="listar">

			</div>
		</div>
	</div>
</div>


<script type="text/javascript">var pag = "<?= $pag ?>"</script>
<script src="js/ajax.js"></script>

