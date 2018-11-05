<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Menu')
?>


<div id='table'>
	<table class= 'table table-hover'>
		<thead>
			<tr id="title"><th colspan=3>Relatório de Agricultores por Cooperativa</th></tr>
		</thead>

		<tbody>
			<tr style="width: 100px;">
				<th style="border: 1px solid #dee2e6; width: 50%;">Cooperativa

					<select name="cooperativa" class="form-control" id="cooperativa" >
						<?php foreach ($cooperativas as $cooperativa): ?>
							<option value="<?php echo $cooperativa->id ?>"><?php echo $cooperativa->nomeFantasia ?></option>
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
		$('#cooperativa').on('change', function(){
			$.get('<?php echo site_url('relatorio/PorCooperativa/') ?>' + $(this).val(), function(agricultores){
				agricultor.html('');
				$.each(agricultores, function(count, vivente){

					$('<option/>').attr('value',vivente.id).text(vivente.nome).appendTo(agricultor)

				})
			})
		})
	})()
</script>
<?php $this->load->view('Footer');?>
