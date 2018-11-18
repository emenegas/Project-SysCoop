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
		<form action="<?php echo site_url('relatorio/PorDap')?>" method="post">
			<div class="col-md-12 mb-3"><h2>Buscar Agricultores com gasto do limite da DAP entre:</h2>
				<label>Digite o intervalo de valor da DAP</label>
				<input type="number" name="valor1">
				<input type="number" name="valor2">
				<input type="submit" name="Buscar">
			</div>
			<table class="table">
				<td>
					<table id="agricultor"></table>
				</td>
			</tbody>
		</table>
	</div>
	<script type="text/javascript">
		(function(){
			agricultor = $('#agricultor')
			$('#produto').on('change', function(){
				$.get('<?php echo site_url('relatorio/PorDAp/') ?>' + $(this).val(), function(agricultores){
					agricultor.html('');
					$.each(agricultores, function(count, vivente){
						tr = $('<tr/>');
						$('<td/>').text(vivente.nome).appendTo(tr);
						$('<td/>').text(vivente.dapLimite).appendTo(tr);
						$('<td/>').text(vivente.dapNumero).appendTo(tr);
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
