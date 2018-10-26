<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Menu');
?>

<div>
	<?php echo form_open('produto/' .$produto->id. '/alterar', 'id="form-produto"'); ?>
	<label>Código:<?php echo $produto->id?></label><br/>

	<div>
		<label form="nome">Nome</label>
		<?php echo form_error('nome'); ?>
		<input type="text" name="nome" id="nome" class="form-control" value="<?php echo $produto->nome; ?>">
	</div>
	<div>
 				<label for="unidadeMedida">Unidade de medida:</label>
 				<select id="unidadeMedida" name="unidadeMedida" class="form-control" value="<?php echo $produto->unidadeMedida; ?>">
 					<option>Selecione</option>
 					<option>Quilograma</option>
 					<option>Grama</option>
 					<option>Litro</option>
 					<option>Unidade</option>
 					
 				</select>
 			</div>
	<div>
 				<label for="tipo">Tipo:</label>
 				<select id="tipo" name="tipo" class="form-control" value="<?php echo $produto->tipo; ?>">
 					<option>Selecione</option>
 					<option>Transgênico</option>
 					<option>Orgânico</option>
 				</select>
 			</div>
 			<div>
 				<label for="epoca">Epoca:</label>
 				<select id="epoca" name="epoca" class="form-control" value="<?php echo $produto->epoca; ?>">
 					<option>Selecione</option>
 					<option>Verão</option>
 					<option>Inverno</option>
 					<option>Outono</option>
 					<option>Primavera</option>
 					<option>Todos</option>
 				</select>
 			</div>
	
	

	<input type="submit" name="alterar" value="Confirmar" class="btn btn-outline-info"/>
	<a style="width: 100px;" href="<?php echo site_url('produto') ?>" class="btn btn-outline-danger">Cancelar</a>

	<?php echo form_close(); ?>
	
</div>