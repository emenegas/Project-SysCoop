	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	$this->load->view('Menu');
	?>

	
	<body>

	<div class="container">
		<div class="row">

			<form action="<?php echo site_url('Cooperativa/cadastrar')?> method="post">
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
						<label form="presidente">Presidente</label>
						<?php echo form_error('presidente'); ?>
						<input type="text" name="presidente" id="presidente" class="form-control" value="<?php echo set_value('presidente')?>">
					</div>
					<div>
						<label form="responsavel">Responsavel</label>
						<?php echo form_error('responsavel'); ?>
						<input type="text" name="responsavel" id="responsavel" class="form-control" value="<?php echo set_value('responsavel')?>">
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
					<div>
						<label form="numeroContaCorrente">Numero CC</label>
						<?php echo form_error('numeroContaCorrente'); ?>
						<input type="text" name="numeroContaCorrente" id="numeroContaCorrente" class="form-control" value="<?php echo set_value('numeroContaCorrente')?>">
					</div>
					<div>
						<label form="cep">Cep</label>
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
					

					<div class="button">
						<button type="submit">Cadastrar</button>
					</div>
			</form>

		<?php if(isset($formerror)):
		echo '<p>' .$formerror. '</p';
		endif;
		?>	

		</div>
	</div>
</body>
</html>