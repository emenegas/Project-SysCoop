<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Menu')
?>
<?php if(isset($formerror)): ?>
  <div class="alert alert-danger" role="alert"><?php echo $formerror ?></div>
<?php endif; ?>

<div class="container-fluid">
	<form class="needs-validation" action="<?php echo site_url('projetopnae/cadastrar') ?>" method="post" novalidate>
		<div class="form-row">
			<div class="col-md-10 mb-3">	
				<label for="nomeEdital">Identificação da proposta de atendimento ao edital/chamada pública N°</label>
				<input type="text" class="form-control" id="nomeEdital" name="nomeEdital" required>
				<div class="invalid-feedback">Numero obrigatório!</div>
			</div>
			
			<div class="col-md-2 mb-3">
				<label for="dataEncerramento">Data de Encerramento</label>
				<input type="date" class="form-control" id="dataEncerramento" name="dataEncerramento"  required>
			</div>
			<div class="custom-file col-md-12 mb-4">
				<input type="file" class="custom-file-input" id="arquivoEdital" name="arquivoEdital">
				<label class="custom-file-label" for="customFile">Escolher arquivo</label>
				<div class="invalid-feedback">O Arquivo do Edital é obrigatório!</div>
			</div>
			<div class="col-md-12 mb-3">
				<label for="cooperativa">Cooperativa:</label>
				<input list="cooperativa" name="cooperativa" class="form-control">
				<datalist id="cooperativa" >
					<?php foreach ($cooperativas as $cooperativa): ?>
						<option value="<?php echo $cooperativa->id ?>"><?php echo $cooperativa->nomeFantasia ?></option>
					<?php endforeach ?>
				</datalist>
			</div>
			<div class="col-md-12 mb-4">
				<label form="caracteristicasCoop">Características Cooperativa Fornecedora</label>
				<textarea type="text" name="caracteristicasCoop" id="caracteristicasCoop" class="form-control" >Digite aqui os detalhes de comercialização e entrega dos produtos!</textarea>
			</div>
			<div class="col-md-12 mb-3"> 
				<label for="entidadeExecutora">Entidade Executora:</label>
				<input list="entidadeExecutora" name="entidadeExecutora" class="form-control">
				<datalist id="entidadeExecutora" >
					<?php foreach ($entidadesExecutoras as $entidadeExecutora): ?>
						<option value="<?php echo $entidadeExecutora->id ?>"><?php echo $entidadeExecutora->nomeFantasia ?></option>
					<?php endforeach ?>
				</datalist>
			</div>
		</div>

		<div class="button">
			<button type="submit" class="btn btn-info">Continuar</button>
			<a href="<?php echo site_url('projetopnae') ?>" class="btn btn-outline-danger">Cancelar</a>

		</div>
	</form>
</div>

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

<script type="text/javascript">var input = document.getElementById('dataEncerramento');
input.addEventListener('change', function() {
	var agora = new Date();
	var escolhida = new Date(this.value);
	if (escolhida < agora) {
		this.value = [agora.getFullYear(), agora.getMonth() + 1, agora.getDate()].map(v => v < 10 ? '0' + v : v).join('-');
		alert("Não é permitida data retroativa!");
	}
});
</script>
<script type="text/javascript">
	setTimeout(function(){
		$('button.close').click()
	},2000);
</script>
<?php $this->load->view('Footer');?>
