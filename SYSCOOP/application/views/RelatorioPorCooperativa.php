<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Menu')
?>

<select name="cooperativa" class="form-control" id="cooperativa" >
	<?php foreach ($cooperativas as $cooperativa): ?>
		<option value="<?php echo $cooperativa->id ?>"><?php echo $cooperativa->nomeFantasia ?></option>
	<?php endforeach ?>
</select>


<label id="agricultor" class="form-control"> </label>


<script type="text/javascript">
	(function(){
		agricultor = $('#agricultor')
		$('#cooperativa').on('change', function(){
			$.get('<?php echo site_url('relatirio/PorCooperativa/') ?>' + $(this).val(), function(agricultores){
				agricultor.html('');
				$.each(agricultores, function(count, vivente){

					$('<option/>').attr('value',vivente.id).text(vivente.nome).appendTo(agricultor)

				})
			})
		})
	})()
</script>
