<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Menu');
?>
<body>
	<div>
		<?php echo form_open('entidade/alterar', 'id="form-entidade"'); ?>
		<input type="hidden" name="id" value="<?php echo $dados_entidade[0]->id; ?>"/>
		<label for="nome">CNPJ:<?php echo $dados_entidade[0]->cnpj?></label><br/>

		<div>
			<label form="nomeFantasia">Nome Fantasia</label>
			<?php echo form_error('nomeFantasia'); ?>
			<input type="text" name="nomeFantasia" id="nomeFantasia" class="form-control" value="<?php echo $dados_entidade[0]->nomeFantasia; ?>">
		</div>
		<div>
			<label form="nomeFantasia">Nome Fantasia</label>
			<?php echo form_error('nomeFantasia'); ?>
			<input type="text" name="nomeFantasia" id="nomeFantasia" class="form-control" value="<?php echo $dados_entidade[0]->cep; ?>">
		</div>
		<div>
			<label form="uf">UF</label>
			<?php echo form_error('uf'); ?>
			<input type="text" name="uf" id="uf" class="form-control" value="<?php echo $dados_entidade[0]->cep; ?>">
		</div>
		<div>
			<label form="endereco">Endereço</label>
			<?php echo form_error('endereco'); ?>
			<input type="text" name="endereco" id="endereco" class="form-control" value="<?php echo $dados_entidade[0]->cep; ?>">
		</div>
		<div>
			<label form="representante">Representante</label>
			<?php echo form_error('representante'); ?>
			<input type="text" name="representante" id="representante" class="form-control" value="<?php echo $dados_entidade[0]->cep; ?>">
		</div>
		<div>
			<label form="cpfRepresentante">CPF Representante</label>
			<?php echo form_error('cpfRepresentante'); ?>
			<input type="text" name="cpfRepresentante" id="cpfRepresentante" class="form-control" value="<?php echo $dados_entidade[0]->cep; ?>">
		</div>
		<div>
			<label form="email">Email</label>
			<?php echo form_error('email'); ?>
			<input type="text" name="email" id="email" class="form-control" value="<?php echo $dados_entidade[0]->cep; ?>">
		</div>
		<div>
			<label form="telefone">Telefone</label>
			<?php echo form_error('telefone'); ?>
			<input type="text" name="telefone" id="telefone" class="form-control" value="<?php echo $dados_entidade[0]->cep; ?>">
		</div>
		<div>
			<label form="cep">CEP</label>
			<?php echo form_error('cep'); ?>
			<input type="text" name="cep" id="cep" class="form-control" value="<?php echo $dados_entidade[0]->cep; ?>">
		</div>
		<div>
			<label form="cidade">Cidade</label>
			<?php echo form_error('cidade'); ?>
			<input type="text" name="cidade" id="cidade" class="form-control" value="<?php echo $dados_entidade[0]->cep; ?>">
		</div>


		<label for="status">Status:</label><br/>
		<select name="status" class="form-control">
			<option><a for="nome"><?php echo $dados_entidade[0]->status?></a><br/></option>				
		</select>
		<div class="error"><?php echo form_error('status'); ?></div>

		<input type="submit" name="alterar" value="Alterar" />
		<?php echo form_close(); ?>
	</div>