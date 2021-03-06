<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Menu');
?>
<body>
	<div class="container-fluid">
		<form action="<?php echo site_url('produto/' .$produto->id. '/alterar')?>" method="post" class="needs-validation" novalidate>
			<div class="form-row">
				<div class="col-md-2 mb-3">
					<label >Código</label>
					<input  class="form-control" type="codigo" disabled="on" name="codigo" value="<?php echo $produto->id?>">
				</div>
				<div class="col-md-4 mb-3">
					<label form="nome">Nome</label>
					<input type="text" name="nome" id="nome" class="form-control" value="<?php echo $produto->nome; ?>">
				</div>
				<div class="col-md-4 mb-3">
					<label for="unidadeMedida">Unidade de medida</label>
					<select id="unidadeMedida" name="unidadeMedida" class="form-control" value="<?php echo $produto->unidadeMedida; ?>">
						<option>Pacote 1KG</option>
						<option>Pacote 5KG</option>
						<option>KG</option>
						<option>Litro</option>
						<option>Unidade</option>

					</select>
				</div>
				<div class="col-md-4 mb-3">
					<label for="tipo">Tipo</label>
					<select id="tipo" name="tipo" class="form-control" value="<?php echo $produto->tipo; ?>">
						<option>N/A</option>
						<option>Transgênico</option>
						<option>Orgânico</option>
					</select>
				</div>
				<div class="col-md-4 mb-3">
					<label for="epoca">Epoca</label>
					<select id="epoca" name="epoca" class="form-control" value="<?php echo $produto->epoca; ?>">
						<option>N/A</option>
						<option>Verão</option>
						<option>Inverno</option>
						<option>Outono</option>
						<option>Primavera</option>
						<option>Todos</option>
					</select>
				</div>
			</div>
			<div class="button" style="margin-top: 30px;float: right;">
				<input type="submit" name="alterar" value="Confirmar" class="btn btn-outline-info"/>
				<a href="<?php echo site_url('produto') ?>" class="btn btn-outline-danger">Cancelar</a>
			</div>
		</form>
	</div>
	<?php if(isset($formerror)): ?>
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Aviso!</strong>
			<div><?php echo $formerror ?></div>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span> 
			</button>
		</div>
	<?php endif; ?>
</body>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
	'use strict';
	window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
    	form.addEventListener('submit', function(event) {
    		if (form.checkValidity() === false) {
    			event.preventDefault();
    			event.stopPropagation();
    		}
    		form.classList.add('was-validated');
    	}, false);
    });
}, false);
})();
</script>

<script type="text/javascript">
	setTimeout(function(){
		$('button.close').click()
	},2000);
</script>
