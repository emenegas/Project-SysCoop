<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Menu');
?>

   <div class="container">
      <div class="row">
         <div class="col-md-6  col-md-offset-3 "style="margin: 0 auto; flex: 0 0 80%;
         max-width: 100%;">

         <div id='table'>
            <table class= 'table table-hover'>
               <thead>
                  <tr id="title"><th colspan=3>Funcionários <a style="width: 100px;" href="<?php echo site_url('funcionario/novo') ?>" class="btn btn-outline-info">NOVO</a> 

                  </th></tr>
               </thead>

               <tbody>
                  <!--Create rows here -->
                  <tr style="width: 80px;">
                     <th>Código</th>
                     <th>Nome</th>
                     <th>CPF</th>
                     <th>Data</th>
                     <tr>
                        <tr>
                           <?php foreach ($funcionarios as $item): ?>
                              <tr>
                                 <td><?php echo $item->id ?></td>
                                 <td>  <?php echo $item->nome ?></td>
                                 <td>  <?php echo $item->cpf ?></td>
                                <!--  <td>  <?php echo $item->data ?></td>   --> 
                                <td>
                                    <a href="<?php echo site_url('/funcionario/'.$item->id.'/editar') ?>" class="btn btn-outline-warning">Alterar</a>
                                    <a href="<?php echo site_url('/funcionario/'.$item->id.'/removerLista') ?>" class="btn btn-outline-danger" >Remover</a>
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
   </body>
   </html>
