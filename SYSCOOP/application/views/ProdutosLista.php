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
                  <tr id="title"><th colspan=3 style="border: none;">Produtos <a style="width: 100px;" href="<?php echo site_url('produto/novo') ?>" class="btn btn-outline-info">NOVO</a> 

                  </th></tr>
               </thead>

               <tbody>
                  <!--Create rows here -->
                  <tr style="width: 80px;">
                     <th style="border: 1px solid #dee2e6;">Código</th>
                     <th style="border: 1px solid #dee2e6;">Nome</th>
                     <th style="border: 1px solid #dee2e6;">Unidade de Medida</th>
                     <th style="border: 1px solid #dee2e6;">Tipo</th>
                     <th style="border: 1px solid #dee2e6;">Epoca</th>
                     <tr>
                        <tr>
                           <?php foreach ($produtos as $item): ?>
                              <tr>
                                 
                                 <td style="border: 1px solid #dee2e6;">  <?php echo $item->id ?></td>
                                 <td style="border: 1px solid #dee2e6;">  <?php echo $item->nome ?></td>
                                 <td style="border: 1px solid #dee2e6;">  <?php echo $item->unidadeMedida ?></td>
                                 <td style="border: 1px solid #dee2e6;">  <?php echo $item->tipo ?></td>
                                 <td style="border: 1px solid #dee2e6;">  <?php echo $item->epoca ?></td>
                                 <td style="border: 1px solid #dee2e6;">
                                   
                                    <a href="<?php echo site_url('/produto/'.$item->id.'/editar') ?>" class="btn btn-outline-info" >Editar</a>
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
