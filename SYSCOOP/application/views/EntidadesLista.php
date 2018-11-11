<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Menu');
?>

<div class="container-fluid">
      <div id='table'>
         <table class= 'table table-hover'>
            <thead>
               <tr id="title"><th colspan=3 style="border: none;">Entidades Executoras <a style="width: 100px;" href="<?php echo site_url('entidade/novo') ?>" class="btn btn-outline-info">NOVA</a> 
                 <a style="width: 100px;" href="<?php echo site_url('entidade?status=inativo') ?>" class="btn btn-outline-danger">Inativas</a> 

              </th></tr>
           </thead>

           <tbody>
            <!--Create rows here -->
            <tr style="width: 80px;">
               <th style="border: 1px solid #dee2e6;">Código</th>
               <th style="border: 1px solid #dee2e6;">Nome Fantasia</th>
               <th style="border: 1px solid #dee2e6;">CNPJ</th>

               <tr>
                  <tr>
                     <?php foreach ($entidades as $item): ?>
                        <tr>
                           <td style="border: 1px solid #dee2e6;"><?php echo $item->id ?></td>
                           <td style="border: 1px solid #dee2e6;">  <?php echo $item->nomeFantasia ?></td>
                           <td style="border: 1px solid #dee2e6;">  <?php echo $item->cnpj ?></td>

                           <td style="border: 1px solid #dee2e6;">
                              <a href="<?php echo site_url('/entidade/'.$item->id.'/editar') ?>" class="btn btn-outline-warning">Alterar</a>

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
</div>
<?php $this->load->view('Footer');?>