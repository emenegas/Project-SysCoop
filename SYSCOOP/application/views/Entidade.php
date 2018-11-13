<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Menu');
?>

<div class="container-fluid">
	<form class="needs-validation" action="<?php echo site_url('entidade/cadastrar')?>" method="post"  novalidate>
		<div class="form-row">
			<div class="col-md-4 mb-3">
				<label form="cnpj">CNPJ</label>
				<input type="text" name="cnpj" id="cnpj" class="form-control" autocomplete="off" value="<?php echo set_value('cnpj')?>" required>
				<div class="invalid-feedback">
					Campo obrigatório!
				</div>
			</div>
			<div class="col-md-4 mb-3">

				<label form="nomeFantasia">Nome Fantasia</label>
				<input type="text" name="nomeFantasia" id="nomeFantasia" class="form-control" autocomplete="off" value="<?php echo set_value('nomeFantasia')?>" required>
				<div class="invalid-feedback">
					Campo obrigatório!
				</div>
			</div>
			<div class="col-md-4 mb-3">
				<label form="representante">Representante</label>
				<input type="text" name="representante" id="representante" class="form-control" value="<?php echo set_value('representante')?>" required>
				<div class="invalid-feedback">
					Campo obrigatório!
				</div>
			</div>

			<div class="col-md-4 mb-3">
				<label form="cpfRepresentante">CPF Representante</label>
				<input type="text" name="cpfRepresentante" id="cpfRepresentante" class="form-control" value="<?php echo set_value('cpfRepresentante')?>" required>
				<div class="invalid-feedback">
					Campo obrigatório!
				</div>
			</div>
			<div class="col-md-4 mb-3">
				<label form="email">Email</label>
				<input type="text" name="email" id="email" class="form-control" value="<?php echo set_value('email')?>" required>
				<div class="invalid-feedback">
					Campo obrigatório!
				</div>
			</div>
			<div class="col-md-4 mb-3">
				<label form="telefone">Telefone</label>
				<input type="text" name="telefone" id="telefone" class="form-control" value="<?php echo set_value('telefone')?>" required>
				<div class="invalid-feedback">
					Campo obrigatório!
				</div>
			</div>
			<div class="col-md-4 mb-3">
				<label form="cep">CEP</label>
				<input type="text" name="cep" id="cep" class="form-control" value="<?php echo set_value('cep')?>" required>
				<div class="invalid-feedback">
					Campo obrigatório!
				</div>
			</div>
			<div class="col-md-4 mb-3">
				<label form="cidade">Cidade</label>
				<input type="text" name="cidade" id="cidade" class="form-control" value="<?php echo set_value('cidade')?>" required>
				<div class="invalid-feedback">
					Campo obrigatório!
				</div>
			</div>
			<div class="col-md-4 mb-3">
				<label form="uf">UF</label>
				<input type="text" name="uf" id="uf" class="form-control" value="<?php echo set_value('uf')?>" required>
				<div class="invalid-feedback">
					Campo obrigatório!
				</div>
			</div>
			<div class="col-md-4 mb-3">
				<label form="endereco">Endereço</label>
				<input type="text" name="endereco" id="endereco" class="form-control" value="<?php echo set_value('endereco')?>" required>
				<div class="invalid-feedback">
					Campo obrigatório!
				</div>
			</div>

			<div class="button" >
				<button type="submit" class="btn btn-outline-info">Cadastrar</button>
				<a href="<?php echo site_url('entidade') ?>" class="btn btn-outline-danger">Cancelar</a>
			</div>
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

<?php $this->load->view('Footer');?>