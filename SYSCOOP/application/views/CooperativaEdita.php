<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Menu');
?>

<?php echo form_open('cooperativa/' .$cooperativa->id. '/alterar', 'id="form-cooperativa"'); ?>

<label for="nome" class="form-control">CNPJ: <?php echo $cooperativa->cnpj?></label><br/>
<div style="width:50%; float:left;">

	<div>
		<label form="nomeFantasia">Nome Fantasia</label>
		<input type="text" name="nomeFantasia" id="nomeFantasia" class="form-control" value="<?php echo $cooperativa->nomeFantasia; ?>">
	</div>
	<div>
		
		<label for="responsavel">Responável Legal</label>
		<input list="responsavel" name="responsavel" class="form-control">
		<datalist id="responsavel" >
			<?php foreach ($funcionarios as $item): ?>
				<option value="<?php echo $item->id; ?>"><?php echo $item->nome ?></option>
			<?php endforeach ?>
		</datalist>
	</div>

	<div>
		<label form="email">Email</label>
		<input type="text" name="email" id="email" class="form-control" value="<?php echo $cooperativa->email; ?>">
	</div>
	<div>
		<label form="telefone">Telefone</label>
		<input type="text" name="telefone" id="telefone" class="form-control" value="<?php echo $cooperativa->telefone; ?>">
	</div>
	<div>
		<label for="cooperativa">Cooperativa</label>
		<input list="cooperativa" name="cooperativa" class="form-control">
		<datalist id="cooperativa" >
			<?php foreach ($cooperativas as $item): ?>
				<option value="<?php echo $item->id ?>"><?php echo $item->nomeFantasia ?></option>
			<?php endforeach ?>
		</datalist>
	</div>
	<div>
		<label for="banco">Banco</label><br/>
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
		<input type="text" name="agencia" id="agencia" class="form-control" value="<?php echo $cooperativa->agencia; ?>">
	</div>
</div>
<div style="width:50%; float:right;">
	<div>
		<label form="numeroContaCorrente">Numero Conta Corrente</label>
		<input type="text" name="numeroContaCorrente" id="numeroContaCorrente" class="form-control" value="<?php echo $cooperativa->numeroContaCorrente; ?>">
	</div>
	<div>
		<label form="cep">CEP</label>
		<input type="text" name="cep" id="cep" class="form-control" value="<?php echo $cooperativa->cep; ?>">
	</div>
	<div>
		<label form="uf">UF</label>
		<input type="text" name="uf" id="uf" class="form-control" value="<?php echo $cooperativa->uf; ?>">
	</div>
	<div>
		<label form="cidade">Cidade</label>
		<input type="text" name="cidade" id="cidade" class="form-control" value="<?php echo $cooperativa->cidade; ?>">
	</div>
	<div>
		<label form="endereco">Endereço</label>
		<input type="text" name="endereco" id="endereco" class="form-control" value="<?php echo $cooperativa->endereco; ?>">
	</div>
	<div>
		<label form="dapNumero">DAP Jurídica</label>
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
</div>
<input type="submit" name="alterar" value="Confirmar" class="btn btn-outline-info"/>
<a style="width: 100px;" href="<?php echo site_url('Cooperativa') ?>" class="btn btn-outline-danger">Cancelar</a>

<?php if(isset($formerror)): ?>
	<div class="alert alert-danger" role="alert"><?php echo $formerror ?></div>
<?php endif; ?>
<?php echo form_close(); ?>
