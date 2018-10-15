<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Menu');
?>

<?php echo form_open('cooperativa/' .$cooperativa->id. '/alterar', 'id="form-cooperativa"'); ?>

<label for="nome">CNPJ:<?php echo $cooperativa->cnpj?></label><br/>

<div>
	<label form="cnpj">CNPJ</label>
	<?php echo form_error('cnpj'); ?>
	<input type="text" name="cnpj" id="cnpj" class="form-control" value="<?php echo $cooperativa->cnpj; ?>">
</div>
<div>
	<label form="nomeFantasia">Nome Fantasia</label>
	<?php echo form_error('nomeFantasia'); ?>
	<input type="text" name="nomeFantasia" id="nomeFantasia" class="form-control" value="<?php echo $cooperativa->nomeFantasia; ?>">
</div>
<div>
	<label for="responsavel">Responável Legal:</label>
	<?php echo form_error('responsavel'); ?>
	<input list="responsavel" name="responsavel" class="form-control">
	<datalist id="responsavel" >
		<option <?php echo $cooperativa->responsavel ?> value="<?php echo $cooperativa->responsavel; ?>">Atual</option>
		<?php foreach ($cooperativa as $item): ?>
			<option value="<?php echo $cooperativa->id ?>"><?php echo $cooperativa->responsavel ?></option>
		<?php endforeach ?>
	</datalist>
</div>
<div>
	<label form="email">Email</label>
	<?php echo form_error('email'); ?>
	<input type="text" name="email" id="email" class="form-control" value="<?php echo $cooperativa->email; ?>">
</div>
<div>
	<label form="telefone">Telefone</label>
	<?php echo form_error('telefone'); ?>
	<input type="text" name="telefone" id="telefone" class="form-control" value="<?php echo $cooperativa->telefone; ?>">
</div>
<div>
	<label for="cooperativa">Cooperativa:</label>
	<select name="cooperativa" class="form-control">

		<?php foreach ($cooperativa as $item)
		{
			echo'<option value="' . $item->id . '">' . $item->nomeFantasia . '</option>';
		}?>
	</select>
</div>
<div>
	<label for="banco">Banco:</label><br/>
	<select name="banco" class="form-control">
		<option type="text" name="banco" value="<?php echo $cooperativa->banco; ?>"><?php echo $cooperativa->banco;?>(atual)</option>
		<option>Itau</option>
		<option>Bradesco</option>
		<option>Cresol</option>
		<option>Santander</option>
		<option>Banrisul</option>
		<option>Caixa Federal</option>
		<option>Banco do Brasil</option>
		<option>Sicredi</option>
	</select>
</div>
<div>
	<label form="agencia">Agência</label>
	<?php echo form_error('agencia'); ?>
	<input type="text" name="agencia" id="agencia" class="form-control" value="<?php echo $cooperativa->agencia; ?>">
</div>
<div>
	<label form="numeroContaCorrente">Numero CC</label>
	<?php echo form_error('numeroContaCorrente'); ?>
	<input type="text" name="numeroContaCorrente" id="numeroContaCorrente" class="form-control" value="<?php echo $cooperativa->numeroContaCorrente; ?>">
</div>
<div>
	<label form="cep">Cep</label>
	<?php echo form_error('cep'); ?>
	<input type="text" name="cep" id="cep" class="form-control" value="<?php echo $cooperativa->cep; ?>">
</div>
<div>
	<label form="uf">UF</label>
	<?php echo form_error('uf'); ?>
	<input type="text" name="uf" id="uf" class="form-control" value="<?php echo $cooperativa->uf; ?>">
</div>
<div>
	<label form="cidade">Cidade</label>
	<?php echo form_error('cidade'); ?>
	<input type="text" name="cidade" id="cidade" class="form-control" value="<?php echo $cooperativa->cidade; ?>">
</div>
<div>
	<label form="endereco">Endereço</label>
	<?php echo form_error('endereco'); ?>
	<input type="text" name="endereco" id="endereco" class="form-control" value="<?php echo $cooperativa->endereco; ?>">
</div>
<div>
	<label form="dapNumero">DAP Juridica</label>
	<?php echo form_error('dapNumero'); ?>
	<input type="text" name="dapNumero" id="dapNumero" class="form-control" value="<?php echo $cooperativa->dapNumero; ?>">
</div>
<div>
	<label form="dapValidade">Validade DAP</label>
	<input type="date" name="dapValidade" id="dapValidade" class="form-control" value="<?php echo $cooperativa->dapValidade; ?>">
</div>

<select name="status" class="form-control">
	<option <?php echo $cooperativa->status == 'ativo'?'selected':''; ?> value="ativo">Ativo</option>				
	<option <?php echo $cooperativa->status == 'inativo'?'selected':''; ?> value="inativo">Inativo</option>				
</select>

<input type="submit" name="alterar" value="Alterar" />
<?php echo form_close(); ?>
