<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Menu');
?>

<div class="container-fluid">
	<form class="needs-validation" action="<?php echo site_url('funcionario/cadastrar')?>" method="post"  novalidate>
		<div class="form-row">
			<div class="col-md-4 mb-3">
				<label form="nome">Nome</label>
				<input type="text" name="nome" id="nome" class="form-control" value="<?php echo set_value('nome')?>" required>
				<div class="invalid-feedback">
					Campo obrigatório!
				</div>
			</div>
			<div class="col-md-4 mb-3">
				<label form="cpf">CPF</label>
				<input type="text" name="cpf" id="cpf" class="form-control cpf-mask" placeholder="000.000.000-00" value="<?php echo set_value('cpf')?>"required>
				<div class="invalid-feedback">
					Campo obrigatório!
				</div>
			</div>
			<div class="col-md-4 mb-3">
				<label form="email">Email</label>
				<input type="email" name="email" id="email" class="form-control" value="<?php echo set_value('email')?>" required>
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
				<label form="uf">UF</label>
				<input type="text" name="uf" id="uf" class="form-control" value="<?php echo set_value('uf')?>" required>
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
				<label form="endereco">Endereço</label>
				<input type="text" name="endereco" id="endereco" class="form-control" value="<?php echo set_value('endereco')?>" required>
				<div class="invalid-feedback">
					Campo obrigatório!
				</div>
			</div>
			<div class="col-md-4 mb-3">
				<label form="senha">Senha</label>
				<input type="password" name="senha" id="senha" class="form-control" value="<?php echo set_value('senha')?>" required>
				<div class="invalid-feedback">
					Campo obrigatório!
				</div>
			</div>

			<div class="col-md-8 mb-3">
				<label for="cooperativa">Cooperativa:</label>
				<select name="cooperativa" class="form-control" required>

					<?php foreach ($cooperativas as $cooperativa)
					{
						echo'<option value="' . $cooperativa->id . '">' . $cooperativa->nomeFantasia . '</option>';
					}?>
				</select>
				<div class="invalid-feedback">
					Campo obrigatório!
				</div>
			</div>

			<div class="button">
				<button type="submit" class="btn btn-outline-info">Cadastrar</button>
				<a href="<?php echo site_url('funcionario') ?>" class="btn btn-outline-danger">Cancelar</a>

			</div>

		</div>
	</form>
</div>	

<!-- -------------------------------------------------------------------------------------------------------------- -->
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
<?php $this->load->view('Footer');?>