<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('menu')?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	
	<title>SysCoop</title>
	<meta charset="utf-8">
</head>
	<body>
	
		<?php foreach ($relatorio as $relatorio): ?>
			<p><strong>Id:</strong> <?php echo $relatorio->id ?></p>
			<p><strong>Nome Fantasia:</strong> <?php echo $relatorio->nomeFantasia ?></p>
            <p><strong>Endereço:</strong> <?php echo $relatorio->endereco ?></p>
            <p><strong>Presidente:</strong> <?php echo $relatorio->presidente ?></p>
            <p><strong>Responsável:</strong> <?php echo $relatorio->responsavel ?></p>
            <p><strong>E-mail:</strong> <?php echo $relatorio->email ?></p>
            <p><strong>CNPJ:</strong> <?php echo $relatorio->cnpj ?></p>
            <p><strong>Telefone:</strong> <?php echo $relatorio->telefone ?></p>
            <p><strong>Cooperativa:</strong> <?php echo $relatorio->cooperativa ?></p>
            <p><strong>Dap Jurídica:</strong> <?php echo $relatorio->dapJuridica ?></p>
            <p><strong>UF:</strong> <?php echo $relatorio->uf ?></p>  
            <p><strong>Banco:</strong> <?php echo $relatorio->banco ?></p>  
            <p><strong>Agência:</strong> <?php echo $relatorio->agencia ?></p>
            <p><strong>Numero CC:</strong> <?php echo $relatorio->numeroContaCorrente ?></p>
        <?php endforeach ?>
    	

    	<?php foreach ($produto as $produto): ?>
    		<p><strong>Id:</strong> <?php echo $produto->id ?></p>
			<p><strong>Nome Produto:</strong> <?php echo $produto->nome ?></p>
    	<?php endforeach ?>
	</body>
</html>