<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Menu')?><!DOCTYPE html>
<html lang="pt-br">
<head>
	
	<title>SysCoop</title>
	<meta charset="utf-8">
</head>
<body>
	<div class="container">
		<div class="row">

			<form action="<?php echo site_url('dap/cadastrar')?>" method="post">
				<div>
					
					<select name="tipoDoc" id="tipoDoc">
						<option value="cpf">Pessoa Física (CPF)</option>
						<option value="cnpj">Pessoa Juridica (CNPJ)</option>

					</select>
				</div>

				<div class="doc">
					<label for="docCPF">CPF:</label>
					<input list="docCPF" name="docCPF" placeholder="000.000.000-00" class="form-control">
					<datalist id="docCPF" >
						<?php foreach ($agricultores as $item ): ?>
							<option value="<?php echo $item->id ?>"><?php echo $item->cpf ?></option>
						<?php endforeach ?>
					</datalist>
				</div>
				<div  class="doc collapse">
					<label for="docCNPJ">CNPJ:</label>
					<input list="docCNPJ" name="docCNPJ" placeholder="00.000.000/0000-00" class="form-control">
					<datalist id="docCNPJ" >
						<?php foreach ($cooperativas as $item ): ?>
							<option value="<?php echo $item->id ?>"><?php echo $item->cnpj ?></option>
						<?php endforeach ?>
					</datalist>
				</div>
				<div>
					<label form="numero">Numero</label>
					<?php echo form_error('numero'); ?>
					<input type="text" name="numero" id="numero" class="form-control" value="<?php echo set_value('numero')?>">
				</div>

				<div>
					<label form="dataExpiracao">Data de Expiração</label>
					<?php echo form_error('dataExpiracao'); ?>
					<input type="date" name="dataExpiracao" id="dataExpiracao" class="form-control"> 
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
<script type="text/javascript">
	$('#tipoDoc').change(function(){
		$('.doc').toggle('collapse');
	})
</script>