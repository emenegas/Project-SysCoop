<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Menu');
?>

<div class="container">
   <div class="row">
      <div class="col-md-6  col-md-offset-3 "style="margin: 0 auto; flex: 0 0 100%;
      max-width: 100%;">

      <div id='table'>
         <table class= 'table table-hover'>
            <thead>
               <tr id="title"><th style="border: none;" colspan=3>Funcionários <a style="width: 100px;" href="<?php echo site_url('funcionario/novo') ?>" class="btn btn-outline-info">Novo</a> 

                  <a style="width: 100px;" href="<?php echo site_url('funcionario?status=inativo') ?>" t" class="btn btn-outline-danger">Inativos</a> 

               </th></tr>
            </thead>

            <tbody>
               <tr style="width: 80px;">
                  <th style="border: 1px solid #dee2e6 ;">Código</th>
                  <th style="border: 1px solid #dee2e6 ;">Nome</th>
                  <th style="border: 1px solid #dee2e6 ;">CPF</th>
                  <tr>
                     <tr>
                        <?php foreach ($funcionarios as $item): ?>
                           <tr>
                              <td style="border: 1px solid #dee2e6 ;">  <?php echo $item->id ?></td>
                              <td style="border: 1px solid #dee2e6;">  <?php echo $item->nome ?></td>
                              <td style="border: 1px solid #dee2e6;">  <?php echo $item->cpf ?></td>
                              <td style="border: 1px solid #dee2e6;">
                                 <a href="<?php echo site_url('/funcionario/'.$item->id.'/editar') ?>" class="btn btn-outline-warning">Editar</a>  
                              </td> 
                           </tr>

                        <?php endforeach ?>
                     </tr>
                  </tr>
               </tbody>
            </table>
         </div>
         <?php if(isset($formerror)): ?>
            <div class="alert alert-danger" role="alert"><?php echo $formerror ?></div>
         <?php endif; ?>
      </div>
   </div>

