<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Menu');
?>

<?php echo form_open('funcionario/' .$funcionario->id. '/alterar', 'id="form-funcionario"'); ?>
<div class="container"style="width: 100%; margin-top: 30px;	">
	
		<div style="width:48%; float:left;">
			<label >CPF</label>
			<input class="form-control" disabled="on" type="cpf" name="cpf" value="<?php echo $funcionario->cpf?>">
			<div>
				<label form="nome">Nome</label>
				<?php echo form_error('nome'); ?>
				<input type="text" name="nome" id="nome" class="form-control" value="<?php echo $funcionario->nome; ?>">
			</div>
			<div>
				<label form="email">Email</label>
				<?php echo form_error('email'); ?>
				<input type="email" name="email" id="email" class="form-control" value="<?php echo $funcionario->email; ?>">
			</div>
			<div>
				<label form="telefone">Telefone</label>
				<?php echo form_error('telefone'); ?>
				<input type="text" name="telefone" id="telefone" class="form-control" value="<?php echo $funcionario->telefone; ?>">
			</div>
			<div>
				<label form="cep">CEP</label>
				<?php echo form_error('cep'); ?>
				<input type="text" name="cep" id="cep" class="form-control" value="<?php echo $funcionario->cep; ?>">
			</div>
			<div>
				<label form="uf">UF</label>
				<?php echo form_error('uf'); ?>
				<input type="text" name="uf" id="uf" class="form-control" value="<?php echo $funcionario->uf; ?>">
			</div>

		</div>
		<div style="width:48%; float:right;">
			<div>
				<label form="cidade">Cidade</label>
				<?php echo form_error('cidade'); ?>
				<input type="text" name="cidade" id="cidade" class="form-control" value="<?php echo $funcionario->cidade; ?>">
			</div>
			<div>
				<label form="endereco">Endereço</label>
				<?php echo form_error('endereco'); ?>
				<input type="text" name="endereco" id="endereco" class="form-control" value="<?php echo $funcionario->endereco; ?>">
			</div>
			<div>
				<label form="senha">Senha</label>
				<?php echo form_error('senha'); ?>
				<input type="text" name="senha" id="senha" class="form-control" value="">
			</div>
			<div>
				<label for="cooperativa">Cooperativa:</label>
				<select name="cooperativa" class="form-control">
					<option  value="<?php echo $funcionario->cooperativa; ?>">Atual</option>
					<?php foreach ($cooperativas as $cooperativa)
					{
						echo'<option value="' . $cooperativa->id . '">' . $cooperativa->nomeFantasia . '</option>';
					}?>
				</select>
			</div>

			<label for="status">Status</label>
			<select name="status" class="form-control">
				<option <?php echo $funcionario->status == 'ativo'?'selected':''; ?> value="ativo">Ativo</option>				
				<option <?php echo $funcionario->status == 'inativo'?'selected':''; ?> value="inativo">Inativo</option>				
			</select>
			<div class="error"><?php echo form_error('status'); ?></div>
<div class="button" style="    margin-top: 30px; float: right;">
			<input type="submit" name="alterar" value="Continuar" class="btn btn-outline-info"/>
			<a style="width: 100px;" href="<?php echo site_url('funcionario') ?>" class="btn btn-outline-danger">Cancelar</a>
</div>
			<?php echo form_close(); ?>

		</div>
	</div>
</div>

<style type="text/css">
label{
	margin-top: .5rem !important;
	margin-bottom: 0rem !important;
}
</style>