<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Menu');
?>

	<div class="container">
		<div class="row">

			<form action="<?php echo site_url('entidade/cadastrar')?>" method="post">
				<div style="width:50%; float:left;">
					<div >
						<label form="cnpj">CNPJ</label>
						<?php echo form_error('cnpj'); ?>
						<input type="text" name="cnpj" id="cnpj" class="form-control" value="<?php echo set_value('cnpj')?>">
					</div>
					<div>
						<label form="nomeFantasia">Nome Fantasia</label>
						<?php echo form_error('nomeFantasia'); ?>
						<input type="text" name="nomeFantasia" id="nomeFantasia" class="form-control" value="<?php echo set_value('nomeFantasia')?>">
					</div>
					<div>
						<label form="uf">UF</label>
						<?php echo form_error('uf'); ?>
						<input type="text" name="uf" id="uf" class="form-control" value="<?php echo set_value('uf')?>">
					</div>
					<div>
						<label form="endereco">Endereço</label>
						<?php echo form_error('endereco'); ?>
						<input type="text" name="endereco" id="endereco" class="form-control" value="<?php echo set_value('endereco')?>">
					</div>
					<div>
						<label form="representante">Representante</label>
						<?php echo form_error('representante'); ?>
						<input type="text" name="representante" id="representante" class="form-control" value="<?php echo set_value('representante')?>">
					</div>
</div>
<div style="width:50%; float:right;">
					<div>
						<label form="cpfRepresentante">CPF Representante</label>
						<?php echo form_error('cpfRepresentante'); ?>
						<input type="text" name="cpfRepresentante" id="cpfRepresentante" class="form-control" value="<?php echo set_value('cpfRepresentante')?>">
					</div>
					<div>
						<label form="email">Email</label>
						<?php echo form_error('email'); ?>
						<input type="text" name="email" id="email" class="form-control" value="<?php echo set_value('email')?>">
					</div>
					<div>
						<label form="telefone">Telefone</label>
						<?php echo form_error('telefone'); ?>
						<input type="text" name="telefone" id="telefone" class="form-control" value="<?php echo set_value('telefone')?>">
					</div>
					<div>
						<label form="cep">CEP</label>
						<?php echo form_error('cep'); ?>
						<input type="text" name="cep" id="cep" class="form-control" value="<?php echo set_value('cep')?>">
					</div>
					<div>
						<label form="cidade">Cidade</label>
						<?php echo form_error('cidade'); ?>
						<input type="text" name="cidade" id="cidade" class="form-control" value="<?php echo set_value('cidade')?>">
					</div>

					<div class="button">
						<button style="width: 100px;" type="submit" class="btn btn-outline-info">Cadastrar</button>
						<a style="width: 100px;" href="<?php echo site_url('entidade') ?>" class="btn btn-outline-danger">Cancelar</a>
					</div>
		</div>

			</form>
			<?php if(isset($formerror)):
		echo '<p>' .$formerror. '</p';
		endif;
		?>	
		</div>
	</div>
</body>
</html>