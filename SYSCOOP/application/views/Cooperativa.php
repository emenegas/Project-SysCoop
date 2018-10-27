<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('Menu');
?>


<div class="container">
	<div class="row">
		<div style="width:50%; float:left;">
			<form action="<?php echo site_url('cooperativa/cadastrar')?>" method="post">
				<div>
					<label form="cnpj">CNPJ</label>
					<?php echo form_error('cnpj'); ?>
					<input type="text" name="cnpj" id="cnpj" class="form-control" value="<?php echo set_value('cnpj')?>">
				</div>
				<div>
					<label form="nomeFantasia">Nome Fantasia</label>
					<?php echo form_error('nomeFantasia'); ?>
					<input type="text" name="nomeFantasia" id="nomeFantasia" class="form-control" value="<?php echo set_value('nomeFantasia')?>">
				</div>
				<div>
					<label for="responsavel">Responável Legal:</label>
					<?php echo form_error('responsavel'); ?>
					<input list="responsavel" name="responsavel" class="form-control">
					<datalist id="responsavel" >
						<?php foreach ($funcionarios as $funcionario): ?>
							<option>Selecione</option>
							<option value="<?php echo $funcionario->id ?>"><?php echo $funcionario->nome ?></option>
						<?php endforeach ?>
					</datalist>
				</div>
				<div>
					<label form="email">Email</label>
					<?php echo form_error('email'); ?>
					<input type="text" name="email" id="email" class="form-control" value="<?php echo set_value('email')?>">
				</div>
				<div>
					<label form="telefone">Telefone</label>
					<?php echo form_error('telefone'); ?>
					<input type="text" name="telefone" id="telefone" class="form-control" value="<?php echo set_value('telefone')?>">
				</div>
				<div>
					<label for="cooperativa">Cooperativa:</label>
					<select name="cooperativa" class="form-control">

						<?php foreach ($cooperativas as $cooperativa)
						{
							echo'<option value="' . $cooperativa->id . '">' . $cooperativa->nomeFantasia . '</option>';
						}?>
					</select>
				</div>

				<div>
					<label for="banco">Banco:</label>
					<select name="banco" class="form-control">
						<option>Itau</option>
						<option>Bradesco</option>
						<option>Cresol</option>
						<option>Santander</option>
						<option>Banrisul</option>
						<option>Caixa Federal</option>
						<option>Sicredi</option>
					</select>

				</div>
				<div>
					<label form="agencia">Agência</label>
					<?php echo form_error('agencia'); ?>
					<input type="text" name="agencia" id="agencia" class="form-control" value="<?php echo set_value('agencia')?>">
				</div>
					</div>
			<div style="width:50%; float:right;">
				<div>
					<label form="numeroContaCorrente">Numero Conta Corrente</label>
					<?php echo form_error('numeroContaCorrente'); ?>
					<input type="text" name="numeroContaCorrente" id="numeroContaCorrente" class="form-control" value="<?php echo set_value('numeroContaCorrente')?>">
				</div>
				<div>
					<label form="cep">CEP</label>
					<?php echo form_error('cep'); ?>
					<input type="text" name="cep" id="cep" class="form-control" value="<?php echo set_value('cep')?>">
				</div>
				<div>
					<label form="uf">UF</label>
					<?php echo form_error('uf'); ?>
					<input type="text" name="uf" id="uf" class="form-control" value="<?php echo set_value('uf')?>">
				</div>
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
					<label form="dapNumero">DAP Jurídica</label>
					<?php echo form_error('dapNumero'); ?>
					<input type="text" name="dapNumero" id="dapNumero" class="form-control" value="<?php echo set_value('dapNumero')?>">
				</div>
				<div>
					<label form="dapValidade">Validade DAP</label>
					<input type="date" name="dapValidade" id="dapValidade" class="form-control">
				</div>

				<div class="button">
					<button type="submit" class="btn btn-outline-info">Cadastrar</button>
					<a style="width: 100px;" href="<?php echo site_url('cooperativa') ?>" class="btn btn-outline-danger">Cancelar</a>

				</div>
			</form>
		</div>
		<?php if(isset($formerror)):
			echo '<p>' .$formerror. '</p';
		endif;
		?>	

	</div>
</div>
