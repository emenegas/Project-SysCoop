<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Menu');
?>

<?php echo form_open('projetopnae/' .$projeto->id. '/alterar', 'id="form-projeto"'); ?> 

<label for="status">Situação:</label>
<select name="status" class="form-control">
   <option <?php echo $projeto->status == 'ativo'?'selected':''; ?> value="ativo">Em andamento</option>           
   <option <?php echo $projeto->status == 'inativo'?'selected':''; ?> value="inativo">Concluído</option>           
</select>
<div class="error"><?php echo form_error('status'); ?></div>  

<input type="submit" name="alterar" value="Alterar" />
<?php echo form_close(); ?>

<div class="container">
   <div class="row">
      <div id='table'>
         <table class= 'table table-hover' border="1" width="100%">
            <thead>
               <tr id="title"><th colspan=3>Ref. Chamada Pública n° <?php echo $projeto->nomeEdital ?> Encerramento às: </th></tr>
               <tr> <th colspan=3>PROJETO DE VENDA DE GÊNEROS ALIMENTÍCIOS DA AGRICULTURA FAMILIAR PARA ALIMENTAÇÃO ESCOLAR</th></tr>
               <tr> <th colspan=3>Identificação da proposta de atendimento ao edital/chamada pública n°<?php echo $projeto->nomeEdital?></th></tr>
               <tr> <th colspan=3>I - IDENTIFICAÇÃO DOS FORNECEDORES</th></tr>
            </thead>

            <tbody>
               <tr style="width: 80px;">
                  <th>Código</th>
                  <th>Nome do Proponente</th>
                  <th>CNPJ</th>
                  <tr>
                     <tr>
                        <tr>
                           <td>  <?php echo $projeto->id ?></td>
                           <td>  <?php echo $projeto->coopNomeFantasia ?></td>
                           <td>  <?php echo $projeto->coopCnpj ?></td>
                        </tr>
                     </tr>
                  </tr>
               </tr>
               <tr style="width: 80px;">
                  <th>Endereço do Proponente</th>
                  <th>Município</th>
                  <th>UF</th>
                  <tr>
                     <tr>
                        <tr>
                           <td>  <?php echo $projeto->coopEndereco ?></td>
                           <td>  <?php echo $projeto->coopCidade ?></td>
                           <td>  <?php echo $projeto->coopUf ?></td>
                        </tr>
                     </tr>
                  </tr>
               </tr>

               <tr style="width: 80px;">
                  <th>Email</th>
                  <th>Telefone</th>
                  <th>CEP</th>
                  <tr>
                     <tr>
                        <tr>
                           <td>  <?php echo $projeto->coopEmail ?></td>
                           <td>  <?php echo $projeto->coopTelefone ?></td>
                           <td>  <?php echo $projeto->coopCep ?></td>
                        </tr>
                     </tr>
                  </tr>
               </tr>
               <tr style="width: 80px;">
                  <th>N. DAP Jurídica</th>
                  <th>Banco</th>
                  <th>N. Agência</th>
                  <th>N. Conta Corrente</th>
                  <tr>
                     <tr>
                        <tr>
                           <td>  <?php echo $projeto->coopDapJuridica ?></td>
                           <td>  <?php echo $projeto->coopBanco ?></td>
                           <td>  <?php echo $projeto->coopAgencia ?></td>
                           <td>  <?php echo $projeto->coopNumeroContaCorrente ?></td>
                        </tr>
                     </tr>
                  </tr>
               </tr>
               <tr style="width: 80px;">
                  <th>N. de Associados</th>
                  <th>N. de Associados Lei n. 11.326/2006</th>
                  <th>N. de Associados com Dap Física</th>
                  <tr>
                     <tr>
                        <tr>
                              <!-- <td>  <?php echo $projeto->coopDapJuridica ?></td>
                              <td>  <?php echo $projeto->coopBanco ?></td>
                              <td>  <?php echo $projeto->coopAgencia ?></td> -->
                           </tr>
                        </tr>
                     </tr>
                  </tr>
                  
                  <tr>
                     <th>Nome Representante legal</th>
                     <th>CPF Representante</th>
                     <th>Telefone</th>
                     <tr>
                        <tr>
                           <tr>
                            <td>  <?php echo $projeto->coopNomeResponsavel ?></td>
                            <td>  <?php echo $projeto->coopCpfResponsavel ?></td>
                            <!--  <td>  <?php echo $projeto->coopTelefo ?></td> -->
                         </tr>
                      </tr>
                   </tr>
                </tr>
                <tr style="width: 80px;">
                   <th>Endereço</th>
                   <th>Município</th>
                   <th>UF</th>
                   <tr>
                     <tr>
                        <tr>

                        </tr>
                     </tr>
                  </tr>
               </tr>
            </tbody>

            <thead>
               <tr id="title"><th colspan=3>II - IDENTIFICAÇÃO DA ENTIDADE EXECUTORA</th></tr>
            </thead>

            <tbody>

               <tr style="width: 80px;">
                  <th>Nome da Entidade</th>
                  <th>CNPJ</th>
                  <th>Município</th>
                  <th>UF</th>

                  <tr>
                     <tr>
                        <tr>
                           <td>  <?php echo $projeto->entNomeFantasia ?></td>
                           <td>  <?php echo $projeto->entCnpj ?></td>
                           <td>  <?php echo $projeto->entCidade ?></td>
                           <td>  <?php echo $projeto->entUf ?></td>
                        </tr>
                     </tr>
                  </tr>
               </tr>
               <tr style="width: 80px;">
                  <th>Endereço</th>
                  <th>Telefone</th>
                  <th>Nome do Representante</th>
                  <th>CPF</th>
                  <tr>
                     <tr>
                        <tr>
                           <td>  <?php echo $projeto->entEndereco ?></td>
                           <td>  <?php echo $projeto->entTelefone ?></td>
                           <td>  <?php echo $projeto->entRepresentante ?></td>
                           <td>  <?php echo $projeto->entCpfRepresentante ?></td>
                        </tr>
                     </tr>
                  </tr>
               </tr> 

            </tbody>
         </table>
      </div>
   </div>
</div>
<div class="container">
   <div class="row">
      <div id='table'>
         <table class= 'table table-hover' border="1" width="100%">
            <thead>
               <tr id="title"><th colspan=3>III - RELAÇÃO AGRICULTORES</th></tr>
            </thead>

            <tbody>

               <tr style="width: 80px;">
                  <th>Numero DAP</th>
                  <th>Nome agricultor</th>
                  <th>CPF</th>
                  <th>Produto</th>
                  <th>Unidade</th>
                  <th>Quantidade</th>
                  <th>Preço Unidade</th>
                  <th>Valor Total</th>

                  <tr>
                     <tr>
                        <tr>
                           <td>  <?php echo $itens->dapAgricultor ?></td>
                           <td>  <?php echo $itens->nomeAgricultor ?></td>
                           <td>  <?php echo $itens->cpf ?></td>
                           <td>  <?php echo $itens->nomeProduto ?></td>
                           <td>  <?php echo $itens->unidadeMedida ?></td>
                           <td>  <?php echo $itens->quantidade ?></td>
                           <td>  <?php echo $itens->precoUnidade ?></td>
                           <td>  <?php echo $itens->totalItem ?></td>
                        </tr>
                     </tr>
                  </tr>
               </tr>
            </tbody>
         </table>
      </div>
   </div>
</div>
