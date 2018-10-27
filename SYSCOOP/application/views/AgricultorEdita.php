<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Menu');
?>

<?php echo form_open('agricultor/' .$agricultor->id. '/alterar', 'id="form-agricultor"'); ?>
<div style="width:50%; float:left;">
	<label for="nome">CPF:<?php echo $agricultor->cpf?></label><br/>

	<label for="nome">Nome:</label><br/>
	<input type="text" name="nome" value="<?php echo $agricultor->nome; ?>"/>
	<div class="error"><?php echo form_error('nome'); ?></div>

	<label for="telefone">Telefone:</label><br/>
	<input type="text" name="telefone" value="<?php echo $agricultor->telefone; ?>"/>
	<div class="error"><?php echo form_error('telefone'); ?></div>

	<label for="email">Email:</label><br/>
	<input type="email" name="email" value="<?php echo $agricultor->email; ?>"/>
	<div class="error"><?php echo form_error('email'); ?></div>

	<label for="uf">Uf:</label><br/>
	<input type="text" name="uf" value="<?php echo $agricultor->uf; ?>"/>
	<div class="error"><?php echo form_error('uf'); ?></div>

	<label for="cep">CEP:</label><br/>
	<input type="text" name="cep" value="<?php echo $agricultor->cep; ?>"/>
	<div class="error"><?php echo form_error('cep'); ?></div>

	<label for="cidade">Cidade:</label><br/>
	<input type="text" name="cidade" value="<?php echo $agricultor->cidade; ?>"/>
	<div class="error"><?php echo form_error('cidade'); ?></div>
</div>
<div style="width:50%; float:right;">
	<label for="endereco">Endereço:</label><br/>
	<input type="text" name="endereco" value="<?php echo $agricultor->endereco; ?>"/>
	<div class="error"><?php echo form_error('endereco'); ?></div>

	<label for="dapNumero">DAP Numero:</label><br/>
	<input type="text" name="dapNumero" value="<?php echo $agricultor->dapNumero; ?>"/>
	<div class="error"><?php echo form_error('dapNumero'); ?></div>

	<label for="dapValidade">DAP Validade:</label><br/>
	<input type="date" name="dapValidade" value="<?php echo $agricultor->dapValidade; ?>"/>
	<div class="error"><?php echo form_error('dapValidade'); ?></div>
	<div>
		<label for="produtos">Produtos:</label>
		<?php foreach ($produtos as $produto)
		{
			echo '<input type="checkbox" name="produtos[]" value="' .$produto->id.'">' .$produto->nome;
		}?>
		
	</div>
	<label for="status">Status:</label>
	<select name="status" class="form-control">
		<option <?php echo $agricultor->status == 'ativo'?'selected':''; ?> value="ativo">Ativo</option>				
		<option <?php echo $agricultor->status == 'inativo'?'selected':''; ?> value="inativo">Inativo</option>				
	</select>

	<input type="submit" name="alterar" value="Confirmar" class="btn btn-outline-info" />
	<a style="width: 100px;" href="<?php echo site_url('agricultor') ?>" class="btn btn-outline-danger">Cancelar</a>
	
	<?php if(isset($formerror)): ?>
		<div class="alert alert-danger" role="alert"><?php echo $formerror ?></div>
	<?php endif; ?>
</div>
<?php echo form_close(); ?>
