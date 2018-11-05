<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('Menu');
?>

<div class="container">
	<div class="row">
		<form action="<?php echo site_url('produto/cadastrar')?>" method="post">
			<div>
				<label for="nome">Nome</label>
				<input type="text" name="nome" id="nome" class="form-control" value="<?php echo set_value('nome')?>"/>
			</div>
			<div>
				<label for="unidadeMedida">Unidade de medida</label>
				<select id="unidadeMedida" name="unidadeMedida" class="form-control">
					<option>Pacote 1KG</option>
					<option>Pacote 5KG</option>
					<option>KG</option>
					<option>Litro</option>
					<option>Unidade</option>
				</select>
			</div>
			<div>
				<label for="tipo">Tipo</label>
				<select id="tipo" name="tipo" class="form-control">
					<option>N/A</option>
					<option>Transgênico</option>
					<option>Orgânico</option>
				</select>
			</div>
			<div>
				<label for="epoca">Epoca</label>
				<select id="epoca" name="epoca" class="form-control">
					<option>N/A</option>
					<option>Verão</option>
					<option>Inverno</option>
					<option>Outono</option>
					<option>Primavera</option>
				</select>
			</div>
			<div class="button">
				<button type="submit" class="btn btn-info">Cadastrar</button>
				<a style="width: 100px;" href="<?php echo site_url('produto') ?>" class="btn btn-outline-danger">Cancelar</a>

			</div>

			<?php if(isset($formerror)): ?>
				<div class="alert alert-danger" role="alert"><?php echo $formerror ?></div>
			<?php endif; ?>

		</form>
	</div>	
</div>
<?php $this->load->view('Footer');?>