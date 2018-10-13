<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Menu');
?>

<?php echo form_open('cooperativa/' .$cooperativa->id. '/alterar', 'id="form-cooperativa"'); ?>

<label for="nome">CNPJ:<?php echo $cooperativa->cnpj?></label><br/>

<label for="nomeFantasia">Nome Fantasia:</label><br/>
<input type="text" name="nomeFantasia" value="<?php echo $cooperativa->nomeFantasia; ?>"/>
<div class="error"><?php echo form_error('nomeFantasia'); ?></div>

<label for="responsavel">Responsavel:</label><br/>
<input type="text" name="responsavel" value="<?php echo $cooperativa->responsavel; ?>"/>
<div class="error"><?php echo form_error('responsavel'); ?></div>

<label for="email">email:</label><br/>
<input type="text" name="email" value="<?php echo $cooperativa->email; ?>"/>
<div class="error"><?php echo form_error('email'); ?></div>

<label for="telefone">telefone:</label><br/>
<input type="text" name="telefone" value="<?php echo $cooperativa->telefone; ?>"/>
<div class="error"><?php echo form_error('telefone'); ?></div>

<label for="cooperativa">cooperativa:</label><br/>
<input type="text" name="cidade" value="<?php echo $cooperativa->cooperativa; ?>"/>
<div class="error"><?php echo form_error('cooperativa'); ?></div>

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


<label for="dapNumero">DAP Numero:</label><br/>
<input type="text" name="dapNumero" value="<?php echo $cooperativa->dapNumero; ?>"/>
<div class="error"><?php echo form_error('dapNumero'); ?></div>

<label for="dapValidade">DAP Validade:</label><br/>
<input type="date" name="dapValidade" value="<?php echo $cooperativa->dapValidade; ?>"/>
<div class="error"><?php echo form_error('dapValidade'); ?></div>

<label for="status">Status:</label>
<select name="status" class="form-control">
	<option <?php echo $cooperativa->status == 'ativo'?'selected':''; ?> value="ativo">Ativo</option>				
	<option <?php echo $cooperativa->status == 'inativo'?'selected':''; ?> value="inativo">Inativo</option>				
</select>

<input type="submit" name="alterar" value="Alterar" />
<?php echo form_close(); ?>
