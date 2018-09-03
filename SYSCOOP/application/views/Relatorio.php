<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Menu')
?>
<div>
	<h2>Cooperativas</h2>
  <?php foreach ($cooperativas as $cooperativa): ?>
   <p><strong>Id:</strong> <?php echo $cooperativa->id ?></p>
   <p><strong>Nome Fantasia:</strong> <?php echo $cooperativa->nomeFantasia ?></p>
   <p><strong>Endereço:</strong> <?php echo $cooperativa->endereco ?></p>
   <p><strong>Presidente:</strong> <?php echo $cooperativa->presidente ?></p>
   <p><strong>Responsável:</strong> <?php echo $cooperativa->responsavel ?></p>
   <p><strong>E-mail:</strong> <?php echo $cooperativa->email ?></p>
   <p><strong>CNPJ:</strong> <?php echo $cooperativa->cnpj ?></p>
   <p><strong>Telefone:</strong> <?php echo $cooperativa->telefone ?></p>
   <p><strong>Cooperativa Associada:</strong> <?php echo $cooperativa->cooperativa ?></p>
   <p><strong>UF:</strong> <?php echo $cooperativa->uf ?></p>  
   <p><strong>Banco:</strong> <?php echo $cooperativa->banco ?></p>  
   <p><strong>Agência:</strong> <?php echo $cooperativa->agencia ?></p>
   <p><strong>Numero CC:</strong> <?php echo $cooperativa->numeroContaCorrente ?></p>
<?php endforeach ?>
</div>
<h2> Produtos</h2>
<div>
    <?php foreach ($produtos as $produto): ?>
      <p><strong>Id:</strong> <?php echo $produto->id ?></p>
      <p><strong>Nome Produto:</strong> <?php echo $produto->nome ?></p>
  <?php endforeach ?>
</div>