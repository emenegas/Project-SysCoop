<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Menu');
?>

<?php echo form_open('agricultor/' .$agricultor->id. '/alterar', 'id="form-agricultor"'); ?>
<div class="container"style="width: 100%; margin-top: 30px;	">
	<div style="width:48%; float:left;">
		<label>CPF</label>
		<input type="cpf" class="form-control" disabled="on" name="cpf" value="<?php echo $agricultor->cpf?>">

		<label for="nome">Nome</label>
		<?php echo form_error('nome'); ?>
		<input type="text" name="nome" class="form-control" value="<?php echo $agricultor->nome; ?>"/>


		<label for="telefone">Telefone</label>
		<?php echo form_error('nome'); ?>
		<input type="text" name="telefone" class="form-control" value="<?php echo $agricultor->telefone; ?>"/>
		

		<label for="email">Email</label>
		<?php echo form_error('nome'); ?>
		<input type="email" name="email" class="form-control" value="<?php echo $agricultor->email; ?>"/>


		<label for="uf">Uf</label>
		<?php echo form_error('nome'); ?>
		<input type="text" name="uf" class="form-control" value="<?php echo $agricultor->uf; ?>"/>


		<label for="cep">CEP</label>
		<?php echo form_error('nome'); ?>
		<input type="text" name="cep" class="form-control" value="<?php echo $agricultor->cep; ?>"/>
		

		
	</div>
	<div style="width:48%; float:right;">

		<label for="cidade">Cidade</label>
		<?php echo form_error('nome'); ?>
		<input type="text" name="cidade" class="form-control" value="<?php echo $agricultor->cidade; ?>"/>

		<label for="endereco">Endereço</label>
		<?php echo form_error('nome'); ?>
		<input type="text" name="endereco" class="form-control" value="<?php echo $agricultor->endereco; ?>"/>


		<label for="dapNumero">Numero da DAP</label>
		<?php echo form_error('nome'); ?>
		<input type="text" name="dapNumero" class="form-control" value="<?php echo $agricultor->dapNumero; ?>"/>


		<label for="dapValidade">Validade da DAP</label>
		<input type="date" name="dapValidade" class="form-control" value="<?php echo $agricultor->dapValidade; ?>"/>
		
		<label for="cooperativa">Cooperativa:</label>
		<select name="cooperativa" class="form-control">
			
			<?php foreach ($cooperativas as $cooperativa)
			{
				echo'<option value="' . $cooperativa->id . '">' . $cooperativa->nomeFantasia . '</option>';
			}?>
		</select>
		

		<label for="status">Status</label>
		<select name="status" class="form-control">
			<option <?php echo $agricultor->status == 'ativo'?'selected':''; ?> value="ativo">Ativo</option>
			<option <?php echo $agricultor->status == 'inativo'?'selected':''; ?> value="inativo">Inativo</option>
		</select>

		<div >
			<label for="produtos">Produtos:</label>
			<div style="display: flex; align-items: center;">
				<?php foreach ($produtos as $produto)
				{
					echo '<input type="checkbox" name="produtos[]" value="' .$produto->id.'">' .$produto->nome;
				}?>
			</div>
		</div>
		
		<div class="button" style="margin-top: 30px;float: right;">
			<input type="submit" name="alterar" value="Confirmar" class="btn btn-outline-info"  />
			<a href="<?php echo site_url('agricultor') ?>" class="btn btn-outline-danger">Cancelar</a>
		</div>
	</div>

	<style type="text/css">
	label{
		margin-top: .5rem !important;
		margin-bottom: 0rem !important;
	}
</style>

<?php if(isset($formerror)): ?>
	<div class="alert alert-danger" role="alert"><?php echo $formerror ?></div>
<?php endif; ?>

<?php echo form_close(); ?>
