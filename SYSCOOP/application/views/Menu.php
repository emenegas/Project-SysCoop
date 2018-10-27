<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>

<html lang="pt-br">

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item dropdown">
       <a class="navbar-brand" href="<?php echo site_url('projetopnae')?>">Projeto</a>       
     </li>

     <li class="nav-item dropdown">
       <a class="navbar-brand" href="<?php echo site_url('entidade')?>">Entidade Executora</a>       
     </li>

     <li class="nav-item dropdown">
       <a class="navbar-brand" href="<?php echo site_url('agricultor')?>">Agricultor</a>       
     </li>
     <li class="nav-item dropdown">
       <a class="navbar-brand" href="<?php echo site_url('produto')?>">Produto</a>       
     </li>
     <li class="nav-item dropdown">
       <a class="navbar-brand" href="<?php echo site_url('cooperativa')?>">Cooperativa</a>       
     </li>

     <li class="nav-item dropdown">
       <a class="navbar-brand" href="<?php echo site_url('funcionario')?>">Funcionário</a>       
     </li>

     <li class="nav-item">
      <a class="navbar-brand" href="<?php echo site_url('relatorio')?>">Relatório</a>
    </li>
    <li class="nav-item dropdown">
     <a class="navbar-brand" href="<?php echo site_url('ajuda')?>">Ajuda</a>       
   </li>
   <li class="nav-item dropdown">
     <a class="navbar-brand" href="<?php echo site_url('login/logout')?>">Sair</a>       
   </li>
 </ul>
</div>
</nav>
