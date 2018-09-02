<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('menu')?><!DOCTYPE html>

<html lang="pt-br">
<head>
	<script type="text/javascript"
	src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

	<title>Projeto PNAE</title>
	<meta charset="utf-8">

	
</head>
<body>
	
	<div class="container">
		<div class="row">
			<div class="col-md-6  col-md-offset-3 classe">

				<form action="<?php echo site_url('projetopnae/cadastrar') ?>" method="post">

					<div>
						<label form="numero">Numero do projeto</label>
						<?php echo form_error('numero'); ?>
						<input type="text" name="numero" id="numero" class="form-control" value="<?php echo set_value('numero')?>">
					</div>

					<h2>Cooperativa</h2>

					<div>
						<label for="cooperativa">Cooperativa:</label>
						<input list="cooperativa" name="cooperativa" class="form-control">
						<datalist id="cooperativa" >
							<?php foreach ($cooperativas as $cooperativa): ?>
								<option value="<?php echo $cooperativa->id ?>"><?php echo $cooperativa->nomeFantasia ?></option>
							<?php endforeach ?>
						</datalist>
					</div>

					<h2>Entidade</h2>

					<div>
						<label for="entidadeExecutora">Entidade Executora:</label>
						<input list="entidadeExecutora" name="entidadeExecutora" class="form-control">
						<datalist id="entidadeExecutora" >
							<?php foreach ($entidadesExecutoras as $entidadeExecutora): ?>
								<option value="<?php echo $entidadeExecutora->id ?>"><?php echo $entidadeExecutora->nomeFantasia ?></option>
							<?php endforeach ?>
						</datalist>
					</div>

					<div class="button">
						<button type="submit" class="btn btn-info">Continuar</button>
					</div>
				</form>

				<?php if(isset($formerror)): ?>
			 	<div class="alert alert-danger" role="alert"><?php echo $formerror ?></div>
				<?php endif; ?>

		</div>
	</div>
</body>
</html>