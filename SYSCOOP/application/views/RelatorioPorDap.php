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

	<form action="<?php echo site_url('relatorio/PorDap')?>" method="post">
		<div class="container-fluid">
			<div class="form-row">
				<div class="col-md-4 mb-3">
					<label>Digite o intervalo de valor da DAP</label>
					<div class="col-md-5 mb-3">
						<input type="number" name="valor1" placeholder="Valor Inicial" class="form-control">
					</div>
					<div class="col-md-5 mb-3">
						<input type="number" name="valor2" placeholder="Valor Final" class="form-control">
					</div>		
					<input type="submit" name="Buscar" value="Buscar" class="btn btn-outline-info">
				</div>
			</div>
		</div>
	</form>
		<table class="table">
			<td>
				<table id="agricultor"></table>
			</td>
			
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
