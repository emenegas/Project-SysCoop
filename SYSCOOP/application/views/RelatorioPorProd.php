<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Menu')
?>


<div id='table'>
	<table class= 'table table-hover'>
		<thead>
			<tr id="title"><th colspan=3>Relatório de Agricultores por Produto</th></tr>
		</thead>

		<tbody>

			<tr style="width: 100px;">
				<th style="border: 1px solid #dee2e6;">Produto</th>
				<th style="border: 1px solid #dee2e6;">Agricultores</th> 
			</tr>
			<td>
				<select name="produto" class="form-control" id="produto" >
					<?php foreach ($produtos as $produto): ?>

						<option value="<?php echo $produto->id ?>"><?php echo $produto->nome ?></option>

					<?php endforeach ?>
				</select>
			</td>
			<td>
				<label id="agricultor" class="form-control"> </label>

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
