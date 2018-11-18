<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Menu')
?>
<body>

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
		<div class="col-md-4 mb-3">
			<label>Relatório de Agricultores por Produto</label>
			<select name="produto" class="form-control" id="produto" >
				<option>Selecione um Produto</option>
				<?php foreach ($produtos as $produto): ?>

					<option value="<?php echo $produto->id ?>"><?php echo $produto->nome ?></option>

				<?php endforeach ?>
			</select>
		</div>
		<table class="table">
			<td>
				<table id="agricultor" style="border: 1px solid #dee2e6;"></table>		
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
				console.log(agricultores);
				$.each(agricultores, function(count, vivente){
					tr = $('<tr/>');
					$('<td/>').text(vivente.nome).appendTo(tr);
					$('<td/>').text(vivente.cpf).appendTo(tr);
					$('<td/>').text(vivente.dapLimite).appendTo(tr);
					$('<td/>').text(vivente.dapNumero).appendTo(tr);
					$('<td/>').text(vivente.telefone).appendTo(tr);
					$('<td/>').text(vivente.email).appendTo(tr);
					$('<td/>').text(vivente.cidade).appendTo(tr);
					$('<td/>').text(vivente.status).appendTo(tr);
					tr.appendTo(agricultor);
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
