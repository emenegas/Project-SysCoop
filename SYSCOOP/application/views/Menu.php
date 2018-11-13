<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
<title>SYSCOOP</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>  
<script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 
 <!-- ---------------------------------------------------------------------------------------------------- -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!--Fontawesome CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="shortcut icon" href="assets/planta1.ico" >
  <!--Custom styles-->
  <link rel="stylesheet" type="text/css" href="styles.css">

</head>

<nav class="navbar navbar-expand-lg sticky-top navbar-light bg-dark">
  <a class="text-white navbar-brand" href="<?php echo site_url('projetopnae')?>">Projetos</a>

  <div class="collapse navbar-collapse">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="text-white nav-link" href="<?php echo site_url('agricultor')?>">Agricultores<span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="text-white nav-link" href="<?php echo site_url('entidade')?>">Entidades Executoras</a>
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
    <ul class="nav justify-content-end">

      <div class="dropdown">
        <a class="nav-item text-white nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Relatórios
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="<?php echo site_url('relatorio/indexPorProd')?>">Agricultores por Produto</a>
          <a class="dropdown-item" href="<?php echo site_url('relatorio/indexPorCooperativa')?>">Agricultores por Cooperativa</a>
          <a class="dropdown-item" href="<?php echo site_url('relatorio/indexPorProd')?>">Agricultores com DAP</a>
          <a class="dropdown-item" href="<?php echo site_url('relatorio/indexPorProd')?>">Agricultores por Limite</a>
          <a class="dropdown-item" href="<?php echo site_url('relatorio/indexPorProd')?>">Funcionários por Cooperativa</a>
        </div>
      </div>


      <li class="nav-item">
       <a class="text-white nav-link" href="<?php echo site_url('funcionario/ajuda')?>">Ajuda</a>       
     </li>
     <li class="nav-item">
       <a class="text-white nav-link" href="<?php echo site_url('funcionario/backup')?>" onclick="return confirm('Fazer Backup? Você sera redirecionando para Projetos...')">Backup</a>       
     </li>
     <li class="nav-item navbar-right">
       <a class="text-white nav-link" href="<?php echo site_url('login/logout')?>">Sair</a>       
     </li>
   </ul>
 </div>
</div>
</nav>




