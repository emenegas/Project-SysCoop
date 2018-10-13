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
               <tr id="title"><th colspan=3>Projeto <?php echo $projeto->nomeEdital ?></th></tr>
            </thead>

            <tbody>
               <!--Create rows here -->
               <tr style="width: 80px;">
                  <th>Código</th>
                  <th>Edital</th>
                  <th>Entidade</th>
                  <th>Data</th>
                  <tr>
                     <tr>

                        <tr>
                           <td>  <?php echo $projeto->id ?></td>
                           <td>  <?php echo $projeto->coopNomeFantasia ?></td>
                           <td>  <?php echo $projeto->entNomeFantasia ?></td>
                        </tr>

                     </tr>

                     <?php echo form_open('projetopnae/' .$projeto->id. '/alterar', 'id="form-projeto"'); ?> 

                     <label for="status">Situação:</label>
                     <select name="status" class="form-control">
                        <option <?php echo $projeto->status == 'ativo'?'selected':''; ?> value="ativo">Em andamento</option>           
                        <option <?php echo $projeto->status == 'inativo'?'selected':''; ?> value="inativo">Concluído</option>           
                     </select>
                     <div class="error"><?php echo form_error('status'); ?></div>  

                   <input type="submit" name="alterar" value="Alterar" />
   <?php echo form_close(); ?>
   

                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </div>

