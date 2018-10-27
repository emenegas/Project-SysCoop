<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Menu');
?>

<div class="container">
	<div class="row">
		<div class="col-md-6  col-md-offset-3 "style="margin: 0 auto; flex: 0 0 80%;
		max-width: 100%;">

		<form action="<?php echo site_url('/projetopnae/'.$idProjeto.'/itens') ?>" method="post">

			<div id='table'>
				<table class= 'table table-hover'>
					<thead>
						<tr id="title"><th colspan=3>ITENS</th></tr>
					</thead>

					<tbody>

						<tr style="width: 80px;">
							<th>Descrição</th>
							<th>Produto</th>
							<th>Agricultor</th>
							<th>Quantidade</th>
							<th>Preço Unitário</th>
							<th>Total do Item</th>
							<th>Cronograma de Entrega</th>
						</tr>
						<tr>

							<tr>
								<?php foreach ($itens_do_projeto as $item): ?>
									<tr>
										<td>	<?php echo $item->descricaoProd ?></td>
										<td style="width: 15%"><?php echo $item->nomeProduto ?></td>
										<td>	<?php echo $item->nomeAgricultor ?></td>
										<td>	<?php echo $item->quantidade ?></td>
										<td>	<?php echo $item->precoUnidade ?></td>
										<td>	<?php echo $item->totalItem ?></td>
										<td>	<?php echo $item->cronogramaEntregaProd ?></td>
										<td><button type="submit" name="itemDoProjeto" value="<?php echo $item->id ?>" formaction="<?php echo site_url('/projetopnae/'.$idProjeto.'/itens/remover') ?>" class="btn btn-outline-danger" >-</button></td>
									</tr>
								<?php endforeach ?>
							</tr>

							<tr>

							</tr>
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
								
							</datalist>
						</td>
						<td>
							
							<input type="number" name="quantidade" id="quantidade" class="form-control" value="<?php echo set_value('quantidade')?>">
						</td>
						<td>
							
							<input type="text" name="precoUnidade" id="precoUnidade" class="form-control" value="<?php echo set_value('precoUnidade')?>">
						</td>
						
						<tr style="width: 5000px;">
							<td>
								
								<input type="text" name="descricaoProd" id="descricaoProd" class="form-control" value="<?php echo $item->descricaoProd ?>">
							</td>
							<td>
								
								<input type="text" name="cronogramaEntregaProd" id="cronogramaEntregaProd" class="form-control" value="<?php echo $item->cronogramaEntregaProd ?>">
							</td>
						</tr>
						<td>
							<div class="btn-group" role="group" aria-label="Basic example">

								<button type="submit" class="btn btn-outline-primary">+</button> 

							</div>
						</td>

					</tr>

				</tbody>
			</table>
			<a style="width: 100px;" href="<?php echo site_url('projetopnae') ?>" class="btn btn-outline-danger">Voltar</a>

		</div>


	</form>

	<?php if(isset($formerror)): ?>
		<div class="alert alert-danger" role="alert"><?php echo $formerror ?></div>
	<?php endif; ?>

</div>


<script type="text/javascript">
	(function(){
		agricultor = $('#agricultor')
		$('#produto').on('change', function(){
			$.get('<?php echo site_url('agricultor/PorProduto/') ?>' + $(this).val(), function(agricultores){
				agricultor.html('');
				$.each(agricultores, function(count, vivente){
					
					$('<option/>').attr('value',vivente.id).text(vivente.nome).appendTo(agricultor)
					
				})
			})
		})
	})()
</script>
