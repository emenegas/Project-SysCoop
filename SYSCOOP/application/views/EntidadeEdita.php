<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Menu');
?>


<div style="width:50%; float:left;">
	<?php echo form_open('entidade/' .$entidade->id. '/alterar', 'id="form-entidade"'); ?>
	<label for="nome">CNPJ: <?php echo $entidade->cnpj?></label><br/>

	<div>
		<label form="nomeFantasia">Nome Fantasia</label>
		<?php echo form_error('nomeFantasia'); ?>
		<input type="text" name="nomeFantasia" id="nomeFantasia" class="form-control" value="<?php echo $entidade->nomeFantasia; ?>">
	</div>
	<div>
		<label form="email">Email</label>
		<?php echo form_error('email'); ?>
		<input type="text" name="email" id="email" class="form-control" value="<?php echo $entidade->email; ?>">
	</div>
	<div>
		<label form="telefone">Telefone</label>
		<?php echo form_error('telefone'); ?>
		<input type="text" name="telefone" id="telefone" class="form-control" value="<?php echo $entidade->telefone; ?>">
	</div>
	<div>
		<label form="representante">representante</label>
		<?php echo form_error('representante'); ?>
		<input type="text" name="representante" id="representante" class="form-control" value="<?php echo $entidade->representante; ?>">
	</div>
	<div>
		<label form="cpfRepresentante">CPF representante</label>
		<?php echo form_error('cpfRepresentante'); ?>
		<input type="text" name="cpfRepresentante" id="cpfRepresentante" class="form-control" value="<?php echo $entidade->cpfRepresentante; ?>">
	</div>
</div>
<div style="width:50%; float:right;">
	<div>
		<label form="cep">CEP</label>
		<?php echo form_error('cep'); ?>
		<input type="text" name="cep" id="cep" class="form-control" value="<?php echo $entidade->cep; ?>">
	</div>
	<div>
		<label form="uf">Uf</label>
		<?php echo form_error('uf'); ?>
		<input type="text" name="uf" id="uf" class="form-control" value="<?php echo $entidade->uf; ?>">
	</div>
	<div>
		<label form="cidade">Cidade</label>
		<?php echo form_error('cidade'); ?>
		<input type="text" name="cidade" id="cidade" class="form-control" value="<?php echo $entidade->cidade; ?>">
	</div>
	<div>
		<label form="endereco">Endereço</label>
		<?php echo form_error('endereco'); ?>
		<input type="text" name="endereco" id="endereco" class="form-control" value="<?php echo $entidade->endereco; ?>">
	</div>
	<label for="status">Status:</label>
	<select name="status" class="form-control">
		<option <?php echo $entidade->status == 'ativo'?'selected':''; ?> value="ativo">Ativo</option>				
		<option <?php echo $entidade->status == 'inativo'?'selected':''; ?> value="inativo">Inativo</option>				
	</select>
	<div class="error"><?php echo form_error('status'); ?></div>

	<input type="submit" name="alterar" value="Confirmar" class="btn btn-outline-info" />
	<a style="width: 100px;" href="<?php echo site_url('entidade') ?>" class="btn btn-outline-danger">Cancelar</a>

	<?php echo form_close(); ?>
</div>