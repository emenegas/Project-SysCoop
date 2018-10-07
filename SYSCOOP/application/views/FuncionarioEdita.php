<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Menu');
?>



	<div>
		<?php echo form_open('funcionario/alterar', 'id="form-funcionario"'); ?>
		<input type="hidden" name="id" value="<?php echo $dados_funcionario[0]->id; ?>"/>
		<label>CPF:<?php echo $dados_funcionario[0]->cpf?></label><br/>

		<div>
			<label form="nome">Nome</label>
			<?php echo form_error('nome'); ?>
			<input type="text" name="nome" id="nome" class="form-control" value="<?php echo $dados_funcionario[0]->nome; ?>">
		</div>
		<div>
			<label form="email">Email</label>
			<?php echo form_error('email'); ?>
			<input type="text" name="email" id="email" class="form-control" value="<?php echo $dados_funcionario[0]->email; ?>">
		</div>
		<div>
			<label form="telefone">Telefone</label>
			<?php echo form_error('telefone'); ?>
			<input type="text" name="telefone" id="telefone" class="form-control" value="<?php echo $dados_funcionario[0]->telefone; ?>">
		</div>
		<div>
			<label form="cep">CEP</label>
			<?php echo form_error('cep'); ?>
			<input type="text" name="cep" id="cep" class="form-control" value="<?php echo $dados_funcionario[0]->cep; ?>">
		</div>
		<div>
			<label form="uf">UF</label>
			<?php echo form_error('uf'); ?>
			<input type="text" name="uf" id="uf" class="form-control" value="<?php echo $dados_funcionario[0]->uf; ?>">
		</div>
		<div>
			<label form="cidade">Cidade</label>
			<?php echo form_error('cidade'); ?>
			<input type="text" name="cidade" id="cidade" class="form-control" value="<?php echo $dados_funcionario[0]->cidade; ?>">
		</div>
		<div>
			<label form="endereco">Endereço</label>
			<?php echo form_error('endereco'); ?>
			<input type="text" name="endereco" id="endereco" class="form-control" value="<?php echo $dados_funcionario[0]->endereco; ?>">
		</div>
		<div>
			<label form="senha">Senha</label>
			<?php echo form_error('senha'); ?>
			<input type="text" name="senha" id="senha" class="form-control" value="<?php echo $dados_funcionario[0]->senha; ?>">
		</div>
		<div>
			<label form="cooperativa">Cooperativa</label>
			<?php echo form_error('cooperativa'); ?>
			<input type="text" name="cooperativa" id="cooperativa" class="form-control" value="<?php echo $dados_funcionario[0]->cooperativa; ?>">
		</div>

		<label for="status">Status:</label><br/>
		<select name="status" class="form-control">
			<option><a for="nome"><?php echo $dados_funcionario[0]->status?></a><br/></option>				
		</select>
		<div class="error"><?php echo form_error('status'); ?></div>

		<input type="submit" name="alterar" value="Alterar" />
		<?php echo form_close(); ?>
	</div>