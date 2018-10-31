<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Menu');
?>

<div class="container">
	<div class="row">
		<div class="col-md-6  col-md-offset-3 "style="margin: 0 auto; flex: 0 0 100%;
		max-width: 100%;">

		<form action="<?php echo site_url('/projetopnae/'.$idProjeto.'/itens') ?>" method="post">

			<div id='table'>
				<table class= 'table table-hover'>
					<thead>
						<tr id="title">
							<th style="border:  none;" colspan=3>ITENS</th>
							<th style=" border: none;">
								<a style="width: 100px;" href="<?php echo site_url('projetopnae') ?>" class="btn btn-outline-danger">Voltar</a>
							</th>
						</tr>
					</thead>

					<tbody>

						<tr style="width: 80px;">
							<th style="border: 1px solid #dee2e6 ;">Descrição</th>
							<th style="border: 1px solid #dee2e6 ;">Produto</th>
							<th style="border: 1px solid #dee2e6 ;">Agricultor</th>
							<th style="border: 1px solid #dee2e6 ; width: 5%">Volumes</th>
							<th style="border: 1px solid #dee2e6 ;">Preço/Uni</th>
							<th style="border: 1px solid #dee2e6 ;">Total</th>
							<th style="border: 1px solid #dee2e6 ;">Cronograma de Entrega</th>
						</tr>
						<tr>

							<tr>
								<?php foreach ($itens_do_projeto as $item): ?>
									<tr>
										<td style="border: 1px solid #dee2e6 ; width: 35%;">	<?php echo $item->descricaoProd ?></td>
										<td style="border: 1px solid #dee2e6 ;"><?php echo $item->nomeProduto ?></td>
										<td style="border: 1px solid #dee2e6 ;">	<?php echo $item->nomeAgricultor ?></td>
										<td style="border: 1px solid #dee2e6 ; width: 5%;">	<?php echo $item->quantidade ?></td>
										<td style="border: 1px solid #dee2e6 ;">	<?php echo $item->precoUnidade ?></td>
										<td style="border: 1px solid #dee2e6 ;">	<?php echo $item->totalItem ?></td>
										<td style="border: 1px solid #dee2e6 ;">	<?php echo $item->cronogramaEntregaProd ?></td>
										<td style="border: 1px solid #dee2e6 ;"><button type="submit" name="itemDoProjeto" value="<?php echo $item->id ?>" formaction="<?php echo site_url('/projetopnae/'.$idProjeto.'/itens/remover') ?>" class="btn btn-outline-danger" >-</button></td>
									</tr>
								<?php endforeach ?>
							</tr>

							<tr>

							</tr>
						</tr>

						<td style="border: 1px solid #dee2e6 ;">


							<input type="text" name="descricaoProd" id="descricaoProd" class="form-control" value="<?php echo $item->descricaoProd ?>">
						</td>
						<td style="border: 1px solid #dee2e6 ;">
							<select name="produto" class="form-control" id="produto" autocomplete="off" >
								<?php foreach ($produtos as $produto): ?>
									<option value="<?php echo $produto->id ?>"><?php echo $produto->nome ?></option>
								<?php endforeach ?>
							</select>
						</td>
						<td style="border: 1px solid #dee2e6 ;"> 
							<input list="agricultor" name="agricultor" class="form-control" autocomplete="off">
							<datalist id="agricultor" >

							</datalist>
						</td>
						<td style="border: 1px solid #dee2e6 ;">

							<input type="text" name="quantidade" id="quantidade" class="form-control" autocomplete="off" value="<?php echo set_value('quantidade')?>">
						</td>
						<td style="border: 1px solid #dee2e6 ;">

							<input type="text" name="precoUnidade" id="precoUnidade" class="form-control" autocomplete="off" value="<?php echo set_value('precoUnidade')?>">
						</td>

						<td style="border: 1px solid #dee2e6 ;">
							
						</td>
						<td style="border: 1px solid #dee2e6 ;">

							<input type="text" name="cronogramaEntregaProd" id="cronogramaEntregaProd" class="form-control" value="<?php echo $item->cronogramaEntregaProd ?>">
						</td>

						<td style="border: 1px solid #dee2e6 ;">
							<div class="btn-group" role="group" aria-label="Basic example">

								<button type="submit" class="btn btn-outline-primary">+</button> 

							</div>
						</td>
					</tr>
				</tbody>
			</table>	
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
