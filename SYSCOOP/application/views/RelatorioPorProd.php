<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Menu')
?>

<?php if(isset($formerror)): ?>
   <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Aviso!</strong>
    <div><?php echo $formerror ?></div>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span> 
    </button>
  </div>
  <?php endif; ?>
<div class="container-fluid">
	<table class="table">
		<thead>
			<tr id="title"><th colspan=3>Relatório de Agricultores por Produto</th></tr>
		</thead>

		<tbody>

			<tr style="width: 100px;">
				<th style="border: 1px solid #dee2e6; width: 50%;">Produto
				<select name="produto" class="form-control" id="produto" >
					<option>Selecione um Produto</option>
					<?php foreach ($produtos as $produto): ?>

						<option value="<?php echo $produto->id ?>"><?php echo $produto->nome ?></option>

					<?php endforeach ?>
				</select>
				</th>
			</tr>
			<td>
				<label id="agricultor" > </label>

			</td>
		</tbody>
	</table>
</div>
<script type="text/javascript">
	(function(){
		agricultor = $('#agricultor')
		$('#produto').on('change', function(){
			$.get('<?php echo site_url('relatorio/PorProduto/') ?>' + $(this).val(), function(agricultores){
				agricultor.html('');
				$.each(agricultores, function(count, vivente){

					$('<option/>').attr('value',vivente.id).text(vivente.nome).appendTo(agricultor)

				})
			})
		})
	})()
</script>

<script type="text/javascript">
  setTimeout(function(){
    $('button.close').click()
  },5000);
</script>
<?php $this->load->view('Footer');?>
