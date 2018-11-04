<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Menu')
?>

<div class="container">
	<div class="row">
		<div class="col-md-6  col-md-offset-3 classe"style="margin: 0 auto; flex: 0 0 100%;
		max-width: 100%;">

		<form action="<?php echo site_url('projetopnae/cadastrar') ?>" method="post">

			<div>
				<label form="nomeEdital">Identificação da proposta de atendimento ao edital/chamada pública N°</label>
				<?php echo form_error('nomeEdital'); ?>
				<input type="text" name="nomeEdital" id="nomeEdital" class="form-control" value="<?php echo set_value('nomeEdital')?>">
			</div>

			<div style="width:48%; float:left;">
				<label  form="arquivoEdital">Arquivo Edital</label>
				<?php echo form_error('arquivoEdital'); ?>
				<input type="file" name="arquivoEdital" id="arquivoEdital">
			</div>


			<div style="width:48%; float:right;" > 
				<label form="dataEncerramento">Data de Encerramento:</label>
				<?php echo form_error('dataEncerramento'); ?>
				<input type="date" name="dataEncerramento" id="dataEncerramento">

			</div>
			<div>
				<label for="cooperativa">Cooperativa:</label>
				<input list="cooperativa" name="cooperativa" class="form-control">
				<datalist id="cooperativa" >
					<?php foreach ($cooperativas as $cooperativa): ?>
						<option value="<?php echo $cooperativa->id ?>"><?php echo $cooperativa->nomeFantasia ?></option>
					<?php endforeach ?>
				</datalist>
			</div>
			<div>
				<label form="caracteristicasCoop">Características Cooperativa Fornecedora</label>
				<textarea type="text" name="caracteristicasCoop" id="caracteristicasCoop" class="form-control" >Digite aqui os detalhes de comercialização e entrega dos produtos!</textarea>
			</div>
			<div>
				<label for="entidadeExecutora">Entidade Executora:</label>
				<input list="entidadeExecutora" name="entidadeExecutora" class="form-control">
				<datalist id="entidadeExecutora" >
					<?php foreach ($entidadesExecutoras as $entidadeExecutora): ?>
						<option value="<?php echo $entidadeExecutora->id ?>"><?php echo $entidadeExecutora->nomeFantasia ?></option>
					<?php endforeach ?>
				</datalist>
			</div>

			<div class="button" style="    margin-top: 30px;
			float: right;">
			<button type="submit" class="btn btn-info">Continuar</button>
			<a style="width: 100px;" href="<?php echo site_url('projetopnae') ?>" class="btn btn-outline-danger">Cancelar</a>

		</div>
	</form>

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
<script type="text/javascript">var input = document.getElementById('dataEncerramento');
input.addEventListener('change', function() {
	var agora = new Date();
	var escolhida = new Date(this.value);
	if (escolhida < agora) {
		this.value = [agora.getFullYear(), agora.getMonth() + 1, agora.getDate()].map(v => v < 10 ? '0' + v : v).join('-');
		alert("Não é permitida data retroativa!");
	}
});
</script>