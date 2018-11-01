<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Menu');
?>

<?php echo form_open('agricultor/' .$agricultor->id. '/alterar', 'id="form-agricultor"'); ?>
<label for="nome" class="form-control">CPF: <?php echo $agricultor->cpf?></label><br/>

<div style="width:48%; float:left;">

	<label for="nome">Nome</label><br/>
	<input type="text" name="nome" class="form-control" value="<?php echo $agricultor->nome; ?>"/>


	<label for="telefone">Telefone</label><br/>
	<input type="text" name="telefone" class="form-control" value="<?php echo $agricultor->telefone; ?>"/>
	

	<label for="email">Email</label><br/>
	<input type="email" name="email" class="form-control" value="<?php echo $agricultor->email; ?>"/>


	<label for="uf">Uf</label><br/>
	<input type="text" name="uf" class="form-control" value="<?php echo $agricultor->uf; ?>"/>


	<label for="cep">CEP</label><br/>
	<input type="text" name="cep" class="form-control" value="<?php echo $agricultor->cep; ?>"/>
	

	<label for="cidade">Cidade</label><br/>
	<input type="text" name="cidade" class="form-control" value="<?php echo $agricultor->cidade; ?>"/>
	
</div>
<div style="width:48%; float:right;">
	<label for="endereco">Endereço</label><br/>
	<input type="text" name="endereco" class="form-control" value="<?php echo $agricultor->endereco; ?>"/>


	<label for="dapNumero">Numero da DAP</label><br/>
	<input type="text" name="dapNumero" class="form-control" value="<?php echo $agricultor->dapNumero; ?>"/>


	<label for="dapValidade">Validade da DAP</label><br/>
	<input type="date" name="dapValidade" class="form-control" value="<?php echo $agricultor->dapValidade; ?>"/>

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
