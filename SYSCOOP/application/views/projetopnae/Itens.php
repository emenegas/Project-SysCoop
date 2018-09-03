<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Menu');
?>
<body>
	
	<div class="container">
		<div class="row">
			<div class="col-md-6  col-md-offset-3 classe">

				<form action="<?php echo site_url('itens/adicionar') ?>" method="post">

					
					<div>

						<label for="produto">Produto:</label>
						<input list="produto" name="produto" class="form-control">
						<select id="produto" >
							<?php foreach ($produtos as $produto): ?>
								<option value="<?php echo $produto->id ?>"><?php echo $produto->nome ?></option>
							<?php endforeach ?>
						</select>
					</div>

					<div>
						<label for="agricultor">Agricultor:</label>
						<input list="agricultor" name="agricultor" class="form-control">
						<datalist id="agricultor" >
							<?php foreach ($agricultores as $agricultor): ?>
								<option value="<?php echo $agricultor->id ?>"><?php echo $agricultor->nome ?></option>
							<?php endforeach ?>
						</datalist>
					</div>
					<div>
						<label form="quantidade"></label>
						<?php echo form_error('quantidade'); ?>
						<input type="text" name="quantidade" id="quantidade" class="form-control" value="<?php echo set_value('quantidade')?>">
					</div>
					<div>
						<label form="valorUnitario"></label>
						<?php echo form_error('valorUnitario'); ?>
						<input type="text" name="valorUnitario" id="valorUnitario" class="form-control" value="<?php echo set_value('valorUnitario')?>">
					</div>
					<div class="button">
						<button type="submit" class="btn btn-info">Adicionar</button>
					</div>
				</form>

				<?php if(isset($formerror)): ?>
					<div class="alert alert-danger" role="alert"><?php echo $formerror ?></div>
				<?php endif; ?>

			</div>
		</div>
	</body>
	</html>