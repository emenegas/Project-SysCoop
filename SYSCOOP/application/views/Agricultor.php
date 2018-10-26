<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Menu');

?>
<div class="container">
	<div class="row">
		<div style="width:50%; float:left;">
		<form action="<?php echo site_url('agricultor/cadastrar')?>" method="post">
			<div>
				<label form="nome">Nome</label>
				<?php echo form_error('nome'); ?>
				<input type="text" name="nome" id="nome" class="form-control" value="<?php echo set_value('nome')?>">
			</div>
			<div>
				<label form="cpf">CPF</label>
				<?php echo form_error('cpf'); ?>
				<input type="text" name="cpf" id="cpf" class="form-control cpf-mask" placeholder="000.000.000-00" value="<?php echo set_value('cpf')?>">
			</div>
			<div>
				<label form="telefone">Telefone</label>
				<?php echo form_error('telefone'); ?>
				<input type="text" name="telefone" id="telefone" class="form-control" value="<?php echo set_value('telefone')?>">
			</div>
			<div>
				<label form="email">Email</label>
				<?php echo form_error('email'); ?>
				<input type="text" name="email" id="email" class="form-control" value="<?php echo set_value('email')?>">
			</div>

			<div>
				<label form="uf">Uf</label>
				<?php echo form_error('uf'); ?>
				<input type="text" name="uf" id="uf" class="form-control" value="<?php echo set_value('uf')?>">
			</div>
			<div>
				<label form="cep">CEP</label>
				<?php echo form_error('cep'); ?>
				<input type="text" name="cep" id="cep" class="form-control" value="<?php echo set_value('cep')?>">
			</div>
						</div>
<div style="width:50%; float:right;">
			<div>
				<label form="cidade">Cidade</label>
				<?php echo form_error('cidade'); ?>
				<input type="text" name="cidade" id="cidade" class="form-control" value="<?php echo set_value('cidade')?>">
			</div>

			<div>
				<label form="endereco">Endereço</label>
				<?php echo form_error('endereco'); ?>
				<input type="text" name="endereco" id="endereco" class="form-control" value="<?php echo set_value('endereco')?>">
			</div>
			<div>
				<label form="dapNumero">Numero DAP</label>
				<?php echo form_error('dapNumero'); ?>
				<input type="text" name="dapNumero" id="dapNumero" class="form-control" value="<?php echo set_value('dapNumero')?>">
			</div>
			<div>
				<label form="dapValidade">Validade DAP</label>
				<?php echo form_error('dapValidade'); ?>
				<input type="date" name="dapValidade" id="dapValidade" class="form-control" value="<?php echo set_value('dapValidade')?>">
			</div>
			<div>
				<label for="cooperativa">Cooperativa:</label>
				<select name="cooperativa" class="form-control">
					<option></option>
					<?php foreach ($cooperativas as $cooperativa)
					{
						echo'<option value="' . $cooperativa->id . '">' . $cooperativa->nomeFantasia . '</option>';
					}?>
				</select>
			</div>
			<div>
				<label for="produtos">Produtos:</label>
				<?php foreach ($produtos as $produto)
				{
					echo '<input type="checkbox" name="produtos[]" value="' .$produto->id.'">' .$produto->nome;
				}?>
				<!-- ver input -->
			</div>
			
			<div class="button">

				<button type="submit" class="btn btn-outline-info">Cadastrar</button>
				<a style="width: 100px;" href="<?php echo site_url('agricultor') ?>" class="btn btn-outline-danger">Cancelar</a>
			</div>

		</form>
	</div>
</div>
	<?php if(isset($formerror)):
		echo '<p>' .$formerror. '</p';
	endif;
	?>	

</div>
