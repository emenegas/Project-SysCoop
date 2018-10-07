<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Menu');
?>
<body>
   <div class="container">
      <div class="row">
         <div class="col-md-6  col-md-offset-3 "style="margin: 0 auto; flex: 0 0 80%;
         max-width: 100%;">

         <div id='table'>
            <table class= 'table table-hover'>
               <thead>
                  <tr id="title"><th colspan=3>Agricultores <a style="width: 100px;" href="<?php echo site_url('agricultor/novo') ?>" class="btn btn-outline-info">NOVO</a> 

                  </th></tr>
               </thead>

               <tbody>
                  <!--Create rows here -->
                  <tr style="width: 80px;">
                     <th>ID</th>
                     <th>Nome</th>
                     <th>Dap</th>
                     <th>Data</th>
                     <tr>
                        <tr>
                           <?php foreach ($agricultores as $item): ?>
                              <tr>
                                 <td><?php echo $item->id ?></td>
                                 <td>  <?php echo $item->nome ?></td>
                                 <td>  <?php echo $item->dapNumero ?></td>
                                 <td>
                                    <a href="<?php echo site_url('/agricultor/'.$item->id.'/editar') ?>" class="btn btn-outline-warning">Alterar</a>
                                    <a href="<?php echo site_url('/agricultor/'.$item->id.'/remover') ?>" class="btn btn-outline-danger" >Excluir</a>
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