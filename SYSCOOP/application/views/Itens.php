<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Menu');
?>
<body>
	
	<div class="container">
		<div class="row">
			<div class="col-md-6  col-md-offset-3 classe">

				<form action="<?php echo site_url('/projetopnae/'.$idProjeto.'/itens') ?>" method="post">

					<div id='table'>
						<table class= 'table table-hover'>
							<thead>
								<tr id="title"><th colspan=3>ITENS</th></tr>
							</thead>

							<tbody>

						
								<!--Create rows here -->
								<tr>
									<th>Produto</th>
									<th>Agricultor</th>
									<th>Quantidade</th>
									<th>Preço Unitário</th>
								</tr>
								<tr>

								<td>
									<?php foreach ($itens_do_projeto as $item): ?>

										<?php echo $item->nomeProduto ?>
										
									<?php endforeach ?>
								</td>
								<td>
									<?php foreach ($itens_do_projeto as $item): ?>

										
										<?php echo $item->nomeAgricultor ?>
						
									<?php endforeach ?>
								</td>
								<td>
									<?php foreach ($itens_do_projeto as $item): ?>

									
										<?php echo $item->quantidade ?>
									<?php endforeach ?>
								</td>
								<td>
									<?php foreach ($itens_do_projeto as $item): ?>

									
										<?php echo $item->precoUnidade ?>
									<?php endforeach ?>
								</td>
							</tr>
								<td>
									<select name="produto" class="form-control" id="produto" >
										<?php foreach ($produtos as $produto): ?>
											<option value="<?php echo $produto->id ?>"><?php echo $produto->nome ?></option>
										<?php endforeach ?>
									</select>
								</td>
								<td> 
									<input list="agricultor" name="agricultor" class="form-control">
									<datalist id="agricultor" >
										<?php foreach ($agricultores as $agricultor): ?>
											<option value="<?php echo $agricultor->id ?>"><?php echo $agricultor->nome ?></option>
										<?php endforeach ?>
									</datalist>
								</td>
								<td>
									<?php echo form_error('quantidade'); ?>
									<input type="number" name="quantidade" id="quantidade" class="form-control" value="<?php echo set_value('quantidade')?>">
								</td>
								<td>
									<?php echo form_error('precoUnidade'); ?>
									<input type="text" name="precoUnidade" id="precoUnidade" class="form-control" value="<?php echo set_value('precoUnidade')?>">
								</td>
								<td>
									<div class="btn-group" role="group" aria-label="Basic example">

										<button type="submit" class="btn btn-outline-primary" href="<?php echo site_url('projetopnae/' .$idProjeto. '/itens')?>">+</button> 
										<button type="button" class="btn btn-outline-danger"></button>
									</div>
								</td>
							</tr>

						</tbody>
					</table>
				</div>


			</form>

			<?php print_r($itens);

			?>

			<?php if(isset($formerror)): ?>
				<div class="alert alert-danger" role="alert"><?php echo $formerror ?></div>
			<?php endif; ?>

		</div>
	</div>
</body>
</html>

