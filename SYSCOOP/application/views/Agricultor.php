<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Menu');
?>

<div class="container">
	<div class="row">
		<div style="width:50%; float:left;">
			<form action="<?php echo site_url('agricultor/cadastrar')?>" method="post">
				<div>
					<label form="nome">Nome</label>
					<input type="text" name="nome" id="nome" class="form-control"  autocomplete="off" value="<?php echo set_value('nome')?>">
				</div>
				<div>
					<label form="cpf">CPF</label>
					<input type="text" name="cpf" id="cpf" class="form-control cpf-mask" placeholder="Ex.: 000.000.000-00" autocomplete="off" value="<?php echo set_value('cpf')?>">
				</div>
				<div>
					<label form="telefone">Telefone</label>
					<input type="text" name="telefone" id="telefone" class="form-control cel-sp-mask" placeholder="Ex.: (00) 00000-0000"  autocomplete="off" value="<?php echo set_value('telefone')?>">
				</div>
				<div>
					<label form="email">Email</label>
					<input type="email" name="email" id="email" class="form-control"  autocomplete="off" value="<?php echo set_value('email')?>">
				</div>

				<div>
					<label form="uf">Uf</label>
					<input type="text" name="uf" id="uf" class="form-control" autocomplete="off" value="<?php echo set_value('uf')?>">
				</div>
				<div>
					<label form="cep">CEP</label>
					<input type="text" name="cep" id="cep" class="form-control cep-mask" placeholder="Ex.: 00000-000"	  autocomplete="off" value="<?php echo set_value('cep')?>">
				</div>
			</div>
			<div style="width:50%; float:right;">
				<div>
					<label form="cidade">Cidade</label>
					<input type="text" name="cidade" id="cidade" class="form-control"  autocomplete="off" value="<?php echo set_value('cidade')?>">
				</div>

				<div>
					<label form="endereco">Endereço</label>
					<input type="text" name="endereco" id="endereco" class="form-control"  autocomplete="off" value="<?php echo set_value('endereco')?>">
				</div>
				<div>
					<label form="dapNumero">Numero da DAP</label>
					<input type="text" name="dapNumero" id="dapNumero" class="form-control"  autocomplete="off" value="<?php echo set_value('dapNumero')?>">
				</div>
				<div>
					<label form="dapValidade">Validade da DAP</label>
					<input type="date" name="dapValidade" id="dapValidade" class="form-control" value="<?php echo set_value('dapValidade')?>">
				</div>
				<div>
					<label for="cooperativa">Cooperativa:</label>
					<select name="cooperativa" class="form-control">
						
						<?php foreach ($cooperativas as $cooperativa)
						{
							echo'<option value="' . $cooperativa->id . '">' . $cooperativa->nomeFantasia . '</option>';
						}?>
					</select>
				</div>
				<div>
					<label for="produtos">Produtos:</label>
					<?php foreach ($produtos as $produto)
					{
						echo '<input type="checkbox" name="produtos[]" value="' .$produto->id.'">' .$produto->nome;
					}?>
				</div>
				
				<div class="button">

					<button type="submit" class="btn btn-outline-info">Cadastrar</button>
					<a style="width: 100px;" href="<?php echo site_url('agricultor') ?>" class="btn btn-outline-danger">Cancelar</a>
				</div>

				<?php if(isset($formerror)): ?>
					<div class="alert alert-danger" role="alert"><?php echo $formerror ?></div>
				<?php endif; ?>
			</form>
		</div>
	</div>

</div>
