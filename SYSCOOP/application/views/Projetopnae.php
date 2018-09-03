<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Menu')
?>


<body>
	
	<div class="container">
		<div class="row">
			<div class="col-md-6  col-md-offset-3 classe">

				<form action="<?php echo site_url('projetopnae/cadastrar') ?>" method="post">

					<div>
						<label form="numero">Nome do projeto</label>
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