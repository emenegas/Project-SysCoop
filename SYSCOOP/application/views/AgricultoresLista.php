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
               <tr id="title"><th colspan=3 style="border: none;">Agricultores <a style="width: 100px;" href="<?php echo site_url('agricultor/novo') ?>" class="btn btn-outline-info">NOVO</a> 

                  <a style="width: 100px;" href="<?php echo site_url('agricultor?status=inativo') ?>" class="btn btn-outline-danger">Inativos</a> 

               </th></tr>
            </thead>

            <tbody>
               <!--Create rows here -->
               <tr style="width: 80px;">
                  <th style="border: 1px solid #dee2e6 ;">Código</th>
                  <th style="border: 1px solid #dee2e6 ;">Nome</th>
                  <th style="border: 1px solid #dee2e6 ;">DAP</th>
                  <th style="border: 1px solid #dee2e6 ;">Validade</th>
                  <tr>
                     <tr>
                        <?php foreach ($agricultores as $item): ?>
                           <tr>
                              <td style="border: 1px solid #dee2e6 ;"> <?php echo $item->id ?></td>
                              <td style="border: 1px solid #dee2e6 ;">  <?php echo $item->nome ?></td>
                              <td style="border: 1px solid #dee2e6 ;">  <?php echo $item->dapNumero ?></td>
                              <td style="border: 1px solid #dee2e6 ;"> <?php echo $item->dapValidade ?></td>
                              <td style="border: 1px solid #dee2e6 ;">
                                 <a href="<?php echo site_url('/agricultor/'.$item->id.'/editar') ?>" class="btn btn-outline-warning">Alterar</a>
                                 
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
