<!-- abre o formulário de edição -->
<?php echo form_open('cooperativa/alterar', 'id="form-cooperativa"'); ?>
<input type="hidden" name="id" value="<?php echo $dados_cooperativa[0]->id; ?>"/>
<label for="nome">CNPJ:<?php echo $dados_cooperativa[0]->cnpj?></label><br/>

<label for="nomeFantasia">Nome Fantasia:</label><br/>
<input type="text" name="nomeFantasia" value="<?php echo $dados_cooperativa[0]->nomeFantasia; ?>"/>
<div class="error"><?php echo form_error('nomeFantasia'); ?></div>

<label for="presidente">Presidente:</label><br/>
<input type="text" name="presidente" value="<?php echo $dados_cooperativa[0]->presidente; ?>"/>
<div class="error"><?php echo form_error('presidente'); ?></div>

<label for="responsavel">Responsavel:</label><br/>
<input type="text" name="responsavel" value="<?php echo $dados_cooperativa[0]->responsavel; ?>"/>
<div class="error"><?php echo form_error('responsavel'); ?></div>

<label for="email">email:</label><br/>
<input type="text" name="email" value="<?php echo $dados_cooperativa[0]->email; ?>"/>
<div class="error"><?php echo form_error('email'); ?></div>

<label for="telefone">telefone:</label><br/>
<input type="text" name="telefone" value="<?php echo $dados_cooperativa[0]->telefone; ?>"/>
<div class="error"><?php echo form_error('telefone'); ?></div>

<label for="cooperativa">cooperativa:</label><br/>
<input type="text" name="cidade" value="<?php echo $dados_cooperativa[0]->cooperativa; ?>"/>
<div class="error"><?php echo form_error('cooperativa'); ?></div>

<label for="banco">Banco:</label><br/>
<select name="banco" class="form-control">
	<option type="text" name="banco" value="<?php echo $dados_cooperativa[0]->banco; ?>"><?php echo $dados_cooperativa[0]->banco;?>(atual)</option>
	<option>Itau</option>
	<option>Bradesco</option>
	<option>Cresol</option>
	<option>Santander</option>
	<option>Banrisul</option>
	<option>Caixa Federal</option>
	<option>Sicredi</option>
</select>


<label for="dapNumero">DAP Numero:</label><br/>
<input type="text" name="dapNumero" value="<?php echo $dados_cooperativa[0]->dapNumero; ?>"/>
<div class="error"><?php echo form_error('dapNumero'); ?></div>

<label for="dapValidade">DAP Validade:</label><br/>
<input type="date" name="dapValidade" value="<?php echo $dados_cooperativa[0]->dapValidade; ?>"/>
<div class="error"><?php echo form_error('dapValidade'); ?></div>

<label for="status">Status:</label><br/>
<select name="status" class="form-control">
	<option><a for="nome"><?php echo $dados_cooperativa[0]->status?></a><br/></option>				
</select>
<div class="error"><?php echo form_error('status'); ?></div>

<input type="submit" name="alterar" value="Alterar" />
<?php echo form_close(); ?>
<!-- fecha o formulário de edição -->