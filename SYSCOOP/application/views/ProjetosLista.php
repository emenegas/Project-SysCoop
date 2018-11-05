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
               <tr id="title"><th colspan=3 style="border: none;">Projetos <a style="width: 100px;" href="<?php echo site_url('projetopnae/novo') ?>" class="btn btn-outline-info">NOVO</a> 
                  <a style="width: 100px;" href="<?php echo site_url('projetopnae?status=inativo') ?>" class="btn btn-outline-info">Concluídos</a> 

               </th></tr>
            </thead>

            <tbody>
               <!--Create rows here -->
               <tr style="width: 80px;">
                  <th style="border: 1px solid #dee2e6 ;">Código</th>
                  <th style="border: 1px solid #dee2e6 ;">Edital</th>
                  <th style="border: 1px solid #dee2e6 ;">Entidade Executora</th>
                  <th style="border: 1px solid #dee2e6 ;">Data</th>
                  <tr>
                     <tr>
                        <?php foreach ($projetos as $item): ?>
                           <tr>
                              <td style="border: 1px solid #dee2e6 ;"><?php echo $item->id ?></td>
                              <td style="border: 1px solid #dee2e6 ;">  <?php echo $item->nomeEdital ?></td>
                              <td style="border: 1px solid #dee2e6 ;">  <?php echo $item->entNomeFantasia ?></td>
                              <td style="border: 1px solid #dee2e6 ;"> <?php echo $item->data ?></td>
                              <td style="border: 1px solid #dee2e6 ;">
                                 <a href="<?php echo site_url('/projetopnae/'.$item->id.'/info') ?>" class="btn btn-outline-info" >Visualizar</a>
                                 <a href="<?php echo site_url('/projetopnae/'.$item->id.'/itens') ?>" class="btn btn-outline-warning">Alterar</a>
                                 <a href="<?php echo site_url('/projetopnae/'.$item->id.'/remover') ?>" class="btn btn-outline-danger" onclick="return confirm('Deseja excluir esse projeto ?')" >Excluir</a>
                              </td>
                           </tr>
                        <?php endforeach ?>
                     </tr>  
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
