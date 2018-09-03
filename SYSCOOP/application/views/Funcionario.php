<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('menu')?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	

	<title>SysCoop</title>
	<meta charset="utf-8">
</head>
<body>
	<div class="container">
		<div class="row">
			<form action="<?php echo site_url('funcionario/cadastrar')?>" method="post">
				<div>
					<label form="nome">Nome</label>
					<?php echo form_error('nome'); ?>
					<input type="text" name="nome" id="nome" class="form-control" value="<?php echo set_value('nome')?>">
				</div>
				<div>
					<label form="cpf">CPF</label>
					<?php echo form_error('cpf'); ?>
					<input type="text" name="cpf" id="cpf" class="form-control cpf-mask" placeholder="000.000.000-00" value="<?php echo set_value('cpf')?>">
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
					<label form="cep">cep</label>
					<?php echo form_error('cep'); ?>
					<input type="text" name="cep" id="cep" class="form-control" value="<?php echo set_value('cep')?>">
				</div>
				<div>
					<label form="uf">uf</label>
					<?php echo form_error('uf'); ?>
					<input type="text" name="uf" id="uf" class="form-control" value="<?php echo set_value('uf')?>">
				</div>
				<div>
					<label form="cidade">cidade</label>
					<?php echo form_error('cidade'); ?>
					<input type="text" name="cidade" id="cidade" class="form-control" value="<?php echo set_value('cidade')?>">
				</div>

				<div>
					<label form="endereco">endereco</label>
					<?php echo form_error('endereco'); ?>
					<input type="text" name="endereco" id="endereco" class="form-control" value="<?php echo set_value('endereco')?>">
				</div>
				<div>
					<label form="senha">Senha</label>
					<?php echo form_error('senha'); ?>
					<input type="text" name="senha" id="senha" class="form-control" value="<?php echo set_value('senha')?>">
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
				
				<div class="button">
					<button type="submit">Cadastrar</button>
				</div>
				
			</form>
		</div>

		<?php if(isset($formerror)):
			echo '<p>' .$formerror. '</p';
		endif;
		?>	
		
	</div>

</body>
</html>