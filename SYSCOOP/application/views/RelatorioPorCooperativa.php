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
<script type="text/javascript">
	setTimeout(function(){
		$('button.close').click()
	},2000);
</script>
