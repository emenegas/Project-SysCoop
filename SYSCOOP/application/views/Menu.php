<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="text-white navbar-brand" href="<?php echo site_url('projetopnae')?>">Projetos</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="text-white nav-link" href="<?php echo site_url('agricultor')?>">Agricultores<span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="text-white nav-link" href="<?php echo site_url('entidade')?>">Entidade Executoras</a>
      </li>
      <li class="nav-item">
        <a class="text-white nav-link" href="<?php echo site_url('Cooperativa')?>">Cooperativas</a>
      </li>
       <li class="nav-item">
        <a class="text-white nav-link" href="<?php echo site_url('Produto')?>">Produtos</a>
      </li>
       <li class="nav-item">
        <a class="text-white nav-link" href="<?php echo site_url('funcionario')?>">Funcionários</a>
      </li>
    </ul>
    <button type="button" style="background: none; border: none;" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Relatórios
  </button>
  <div class="dropdown-menu" style="right: 0%; left: auto;">
    <a class="dropdown-item" href="<?php echo site_url('relatorio/indexPorProd')?>">Agricultores por Produto</a>
    <a class="dropdown-item" href="<?php echo site_url('relatorio/indexPorCooperativa')?>">Agricultores por Cooperativa</a>
    <a class="dropdown-item" href="<?php echo site_url('relatorio/indexPorProd')?>">Agricultores com DAP</a>
    <a class="dropdown-item" href="<?php echo site_url('relatorio/indexPorProd')?>">Agricultores por Limite</a>
    <a class="dropdown-item" href="<?php echo site_url('relatorio/indexPorProd')?>">Funcionários por Cooperativa</a>
  </div>
  <ul class="navbar-nav mr-auto mt-2 mt-lg-0" style="margin-right: 0px !important">
      <li class="nav-item dropdown">
   <a class="text-white nav-link" href="<?php echo site_url('funcionario/ajuda')?>">Ajuda</a>       
 </li>
 <li class="nav-item dropdown">
   <a class="text-white nav-link" href="<?php echo site_url('funcionario/backup')?>">Backup</a>       
 </li>
 <li class="nav-item dropdown">
   <a class="text-white nav-link" href="<?php echo site_url('login/logout')?>">Sair</a>       
 </li>
    </ul>
</div>
</nav>




