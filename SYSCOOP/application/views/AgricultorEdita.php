<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Menu');
?>

<?php echo form_open('agricultor/alterar', 'id="form-pessoas"'); ?>
<input type="hidden" name="id" value="<?php echo $dados_pessoa[0]->id; ?>"/>
<label for="nome">CPF:<?php echo $dados_pessoa[0]->cpf?></label><br/>

<label for="nome">Nome:</label><br/>
<input type="text" name="nome" value="<?php echo $dados_pessoa[0]->nome; ?>"/>
<div class="error"><?php echo form_error('nome'); ?></div>

<label for="telefone">Telefone:</label><br/>
<input type="text" name="telefone" value="<?php echo $dados_pessoa[0]->telefone; ?>"/>
<div class="error"><?php echo form_error('telefone'); ?></div>

<label for="email">Email:</label><br/>
<input type="email" name="email" value="<?php echo $dados_pessoa[0]->email; ?>"/>
<div class="error"><?php echo form_error('email'); ?></div>

<label for="uf">Uf:</label><br/>
<input type="text" name="uf" value="<?php echo $dados_pessoa[0]->uf; ?>"/>
<div class="error"><?php echo form_error('uf'); ?></div>

<label for="cep">CEP:</label><br/>
<input type="text" name="cep" value="<?php echo $dados_pessoa[0]->cep; ?>"/>
<div class="error"><?php echo form_error('cep'); ?></div>

<label for="cidade">Cidade:</label><br/>
<input type="text" name="cidade" value="<?php echo $dados_pessoa[0]->cidade; ?>"/>
<div class="error"><?php echo form_error('cidade'); ?></div>

<label for="endereco">Endereço:</label><br/>
<input type="text" name="endereco" value="<?php echo $dados_pessoa[0]->endereco; ?>"/>
<div class="error"><?php echo form_error('endereco'); ?></div>

<label for="dapNumero">DAP Numero:</label><br/>
<input type="text" name="dapNumero" value="<?php echo $dados_pessoa[0]->dapNumero; ?>"/>
<div class="error"><?php echo form_error('dapNumero'); ?></div>

<label for="dapValidade">DAP Validade:</label><br/>
<input type="date" name="dapValidade" value="<?php echo $dados_pessoa[0]->dapValidade; ?>"/>
<div class="error"><?php echo form_error('dapValidade'); ?></div>

<label for="status">Status:</label><br/>
<select name="status" class="form-control">
					<option><a for="nome"><?php echo $dados_pessoa[0]->status?></a><br/></option>				
				</select>
<div class="error"><?php echo form_error('status'); ?></div>

<input type="submit" name="alterar" value="Alterar" />
<?php echo form_close(); ?>
