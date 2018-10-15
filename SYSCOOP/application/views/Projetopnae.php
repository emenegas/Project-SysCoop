<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Menu')
?>

<div class="container">
	<div class="row">
		<div class="col-md-6  col-md-offset-3 classe"style="margin: 0 auto; flex: 0 0 80%;
		max-width: 100%;">

		<form action="<?php echo site_url('projetopnae/cadastrar') ?>" method="post">

			<div>
				<label form="nomeEdital">Identificação da proposta de atendimento ao edital/chamada pública N°</label>
				<?php echo form_error('nomeEdital'); ?>
				<input type="text" name="nomeEdital" id="nomeEdital" class="form-control" value="<?php echo set_value('nomeEdital')?>">
			</div>
			<div>
				<label form="arquivoEdital">Arquivo Edital</label>
				<?php echo form_error('arquivoEdital'); ?>
				<input type="file" name="arquivoEdital" id="arquivoEdital">
			</div>
			<div>
				<label form="dataEncerramento">Data Encerramento:</label>
				<?php echo form_error('dataEncerramento'); ?>
				<input type="date" name="dataEncerramento" id="dataEncerramento">
			</div>
			<div>
				<label for="cooperativa">Cooperativa:</label>
				<?php echo form_error('cooperativa'); ?>
				<input list="cooperativa" name="cooperativa" class="form-control">
				<datalist id="cooperativa" >
					<?php foreach ($cooperativas as $cooperativa): ?>
						<option value="<?php echo $cooperativa->id ?>"><?php echo $cooperativa->nomeFantasia ?></option>
					<?php endforeach ?>
				</datalist>
			</div>
			<div>
				<label for="entidadeExecutora">Entidade Executora:</label>
				<?php echo form_error('entidadeExecutora');?>
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
