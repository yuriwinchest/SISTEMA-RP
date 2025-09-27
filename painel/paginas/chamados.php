<?php
require_once("verificar.php");
$pag = 'chamados';

//verificar se ele tem a permissão de estar nessa página
if (@$chamados == 'ocultar') {
	echo "<script>window.location='index'</script>";
	exit();
}

?>

<div class="justify-content-between" style="margin-top: 20px">
	<nav style="margin-bottom: 20px">
		<div class="nav nav-tabs" id="nav-tab" role="tablist">
			<button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button"
				role="tab" aria-controls="nav-home" aria-selected="true">Listar Chamados</button>
			<button onclick="limparCampos()" class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
				data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
				<i class="fa fa-plus "></i>
				Novo Chamado</button>
		</div>
	</nav>
</div>

<div class="tab-content" id="nav-tabContent">
	<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
		<div class="row row-sm">
			<div class="col-lg-12">
				<div class="card custom-card">
					<div class="card-body" id="listar">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
		<form id="form">
			<div>
				<div class="row">
					<div class="col-md-6 mb-2">
						<label>Título</label>
						<input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título" required>
					</div>
					
					<div class="col-md-2 mb-2" style="margin-top: 26px">
						<button id="btn_salvar" type="submit" class="btn btn-primary">Salvar<i class="fa fa-check ms-2"></i>
						</button>
						<button class="btn btn-primary" type="button" id="btn_carregando">
							<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Carregando...
						</button>
										</div>
				</div>
				<div class="row">
					<div class="col-md-8 mb-2">
						<label>Descreva sua Necessidade</label>
						<div id="editor" style="width: 100%; height: 200px"></div>
						<textarea id="hiddenTextarea" name="texto" style="display:none"></textarea>
					</div>
				</div>
				<input type="hidden" class="form-control" id="id" name="id">
			</div>
		</form>
	</div>
</div>





<!-- Modal Resposta -->
<div class="modal fade" id="modalResposta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header bg-primary text-white">
				<h4 class="modal-title" id="empresa_resposta"></h4>
				<button id="btn-fechar-resposta" aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span
						class="text-white" aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				
				<form id="form_resp">
					<div class="row">
						<label id="titulo_resposta"></label>
					</div>

					<div class="row">
					<div class="col-md-10 mb-2">
						
							<input type="text" class="form-control" id="texto_resposta" name="texto_resposta"
								placeholder="Escreva a Resposta" required>						
					</div>

						<div class="col-md-2" >
							<button id="btn_salvar_resp" type="submit" class="btn btn-primary">Salvar<i class="fa fa-check ms-2"></i>
							</button>
							<button class="btn btn-primary" type="button" id="btn_carregando_resp">
								<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Carregando...
							</button>
						</div>

				</div>

				


				<input type="hidden" class="form-control" id="id_resposta" name="id">
				</form>

				<div id="listar_respostas" style="margin-top: 15px"></div>
				
			</div>
		</div>
	</div>
</div>


  <!-- Include stylesheet -->
  <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />

  <!-- Include the Quill library -->
  <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>

<script>
	// Inicializando o Quill
var quill = new Quill('#editor', {
    theme: 'snow',
		placeholder: 'Digite seu texto aqui...',
    modules: {
        toolbar: [
            [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
						[{ 'font': [] }],
            ['bold', 'italic', 'underline', 'strike'],
            [{ 'list': 'ordered' }, { 'list': 'bullet' }],
            [{ 'color': [] }, { 'background': [] }],
            [{ 'align': [] }],
        ]
    }
});


// Sincronizando o conteúdo do Quill com o textarea oculto
quill.on('text-change', function () {
    var content = quill.root.innerHTML; // Obtendo o conteúdo HTML
    document.getElementById('hiddenTextarea').value = content; // Atualizando o textarea
});
</script>


<script type="text/javascript">
	var pag = "<?= $pag ?>"
</script>
<script src="js/ajax.js"></script>




<script type="text/javascript">
	$(document).ready(function () {
    $('#btn_carregando_resp').hide();
    
});

</script>



<script type="text/javascript">
	
$("#form_resp").submit(function (event) {

    event.preventDefault();
    var formData = new FormData(this);
    $('#btn_salvar_resp').hide();
    $('#btn_carregando_resp').show();
    $.ajax({
        url: 'paginas/' + pag + "/resposta.php",
        type: 'POST',
        data: formData,
        success: function (mensagem) {
            $('#mensagem').text('');
            $('#mensagem').removeClass()
            if (mensagem.trim() == "Salvo com Sucesso") {
                $('#btn-fechar-resposta').click();
                sucesso();
                listar();
                $('#mensagem').text('')
            } else {
                alertErro(mensagem)
                $('#mensagem').addClass('text-danger')
                $('#mensagem').text(mensagem)
            }
            $('#btn_salvar_resp').show();
            $('#btn_carregando_resp').hide();
        },
        cache: false,
        contentType: false,
        processData: false,
    });
});




	function listarRespostas() {

		var id = $('#id_resposta').val();

		$.ajax({
			url: 'paginas/' + pag + "/listar_respostas.php",
			method: 'POST',
			data: {
				id
			},
			dataType: "html",

			success: function(result) {
				$("#listar_respostas").html(result);
			}
		});
	}

</script>