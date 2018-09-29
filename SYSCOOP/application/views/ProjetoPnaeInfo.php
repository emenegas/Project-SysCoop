<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Menu');
?>
<body>


	<?php foreach ($projeto as $item): ?>
		<tr>
			<td style="width: 15%"><?php echo $item->nomeProduto ?></td>
			<td>	<?php echo $item->nomeAgricultor ?></td>
			<td>	<?php echo $item->quantidade ?></td>
			<td>	<?php echo $item->precoUnidade ?></td>
		</tr>
	<?php endforeach ?>


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


							<!--Create rows here -->
							<tr style="width: 80px;">
								<th>Produto</th>
								<th>Agricultor</th>
								<th>Quantidade</th>
								<th>Preço Unitário</th>
							</tr>
							<tr>

								<tr  >
									<?php foreach ($itens_do_projeto as $item): ?>
										<tr>
											<td style="width: 15%"><?php echo $item->nomeProduto ?></td>
											<td>	<?php echo $item->nomeAgricultor ?></td>
											<td>	<?php echo $item->quantidade ?></td>
											<td>	<?php echo $item->precoUnidade ?></td>
			
											<a href="<?php echo site_url('/projetopnae/'.$item->id.'/itens') ?>" class="btn btn-outline-warning" >Alterar</a>
										</tr>
									<?php endforeach ?>
								</tr>

							</tr>

						</tbody>
					</table>
				</div>


			</form>