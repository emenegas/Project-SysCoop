<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('Menu');
?>

<div class="container"style="width: 100%; margin-top: 30px;	">
	
	<form action="<?php echo site_url('cooperativa/cadastrar')?>" method="post" style="width: 100%; margin-top: 30px;">
		<div style="width:48%; float:left;">
			<div>
				<label form="cnpj">CNPJ</label>
				<input type="text" name="cnpj" id="cnpj" class="form-control" value="<?php echo set_value('cnpj')?>">
			</div>
			<div>
				<label form="nomeFantasia">Nome Fantasia</label>
				<input type="text" name="nomeFantasia" id="nomeFantasia" class="form-control" value="<?php echo set_value('nomeFantasia')?>">
			</div>
			<div>
				<label for="responsavel">Responável Legal:</label>
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
				<input type="email" name="email" id="email" class="form-control" value="<?php echo set_value('email')?>">
			</div>
			<div>
				<label form="telefone">Telefone</label>
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

				<input type="text" name="agencia" id="agencia" class="form-control" value="<?php echo set_value('agencia')?>">
			</div>
			<div>
				<label form="numeroContaCorrente">Numero Conta Corrente</label>
				<input type="text" name="numeroContaCorrente" id="numeroContaCorrente" class="form-control" value="<?php echo set_value('numeroContaCorrente')?>">
			</div>
		</div>
		<div style="width:48%; float:right;">
			
			<div>
				<label form="cep">CEP</label>
				<input type="text" name="cep" id="cep" class="form-control" value="<?php echo set_value('cep')?>">
			</div>
			<div>
				<label form="uf">UF</label>
				<input type="text" name="uf" id="uf" class="form-control" value="<?php echo set_value('uf')?>">
			</div>
			<div>
				<label form="cidade">Cidade</label>
				<input type="text" name="cidade" id="cidade" class="form-control" value="<?php echo set_value('cidade')?>">
			</div>
			<div>
				<label form="endereco">Endereço</label>
				<input type="text" name="endereco" id="endereco" class="form-control" value="<?php echo set_value('endereco')?>">
			</div>
			<div>
				<label form="caracteristicasCoop">Características Fornecedor</label>
				<textarea style="height: 100px;" type="text" name="caracteristicasCoop" id="caracteristicasCoop" class="form-control" value="<?php echo set_value('caracteristicasCoop')?>"></textarea
				</div>
				<div>
					<label form="dapNumero">DAP Jurídica</label>
					<input type="text" name="dapNumero" id="dapNumero" class="form-control" value="<?php echo set_value('dapNumero')?>">
				</div>
				<div>
					<label form="dapValidade">Validade DAP</label>
					<input type="date" name="dapValidade" id="dapValidade" class="form-control">
				</div>

				<div class="button" style="margin-top: 30px;float: right;">
					<button type="submit" class="btn btn-outline-info">Cadastrar</button>
					<a style="width: 100px;" href="<?php echo site_url('cooperativa') ?>" class="btn btn-outline-danger">Cancelar</a>

				</div>
			</form>
		</div>

		<?php if(isset($formerror)): ?>
			<div class="alert alert-danger" role="alert"><?php echo $formerror ?></div>
		<?php endif; ?>

	</div>
</div>
<style type="text/css">
label{
	margin-top: .5rem !important;
	margin-bottom: 0rem !important;
}
</style>