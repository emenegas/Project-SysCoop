 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');

 $this->load->view('Menu');
 ?>
 
 <div class="container">
 	<div class="row">

 		<form action="<?php echo site_url('produto/cadastrar')?> method="post">
 			<div>
 				<label for="nome">Nome:</label>
 				<?php echo form_error('nome'); ?>
 				<input type="text" name="nome" id="nome" class="form-control" value="<?php echo set_value('nome')?>"/>
 			</div>
 			<div>
 				<label for="unidadeMedida">Unidade de medida:</label>
 				<select id="unidadeMedida" name="unidadeMedida" class="form-control">
 					<option>Selecione</option>
 					<option>Kg</option>
 					<option>L</option>
 					<option>grama</option>
 				</select>
 			</div>
 			<div>
 				<label for="tipo">Tipo:</label>
 				<select id="tipo" name="tipo" class="form-control">
 					<option>Selecione</option>
 					<option>Transgênico</option>
 					<option>Orgânico</option>
 				</select>
 			</div>
 			<div>
 				<label for="epoca">Epoca:</label>
 				<select id="epoca" name="epoca" class="form-control">
 					<option>Selecione</option>
 					<option>Verão</option>
 					<option>Inverno</option>
 					<option>Outono</option>
 					<option>Primavera</option>
 				</select>
 			</div>
 			<div class="button">
 				<button type="submit" class="btn btn-info">Cadastrar</button>
 			</div>
 		</form>

 		<?php if(isset($formerror)): ?>
 			<div class="alert alert-danger" role="alert"><?php echo $formerror ?></div>
 		<?php endif; ?>

 	</div>
 </div>