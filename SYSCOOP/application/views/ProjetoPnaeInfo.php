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
                  <tr id="title"><th colspan=3>Projeto <?php echo $projeto->id ?></th></tr>
               </thead>

               <tbody>
                  <!--Create rows here -->
                  <tr style="width: 80px;">
                     <th>ID</th>
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
                        <td>
                           <div class="btn-group" role="group" aria-label="Basic example">

                              <button type="submit" class="btn btn-outline-primary"></button> 

                           </div>
                        </td>
                     </tr>
                  </tbody>
               </table>
            </div>
           <!--  <?php if(isset($formerror)): ?>
               <div class="alert alert-danger" role="alert"><?php echo $formerror ?></div>
            <?php endif; ?> -->
         </div>
      </div>
 
