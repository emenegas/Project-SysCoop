<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Menu');
?>

<?php echo form_open('projetopnae/' .$projeto->id. '/alterar', 'id="form-projeto"'); ?> 
<div>
  <label for="status">Situação:</label>
  <select name="status" class="form-control" value="<?php echo $projeto->status; ?>">
   <option <?php echo $projeto->status == 'ativo'?'selected':''; ?> value="ativo">Em andamento</option>           
   <option <?php echo $projeto->status == 'inativo'?'selected':''; ?> value="inativo">Concluído</option>           
 </select>
</div>
<div class="error"><?php echo form_error('status'); ?></div>  
<div>
  <label form="dataEncerramento">Data Encerramento:</label>
  <?php echo form_error('dataEncerramento'); ?>
  <input type="date" name="dataEncerramento" id="dataEncerramento" class="form-control" value="<?php echo $projeto->dataEncerramento; ?>">
</div>
<input type="submit" name="alterar" value="Alterar" />
<?php echo form_close(); ?>

<div class="container">
 <div class="row">
  <div id='table'>
   <table class= 'table table-hover' border="1" width="100%">
    <thead>
     <tr id="title"><th colspan=3>Ref. Chamada Pública n° <?php echo $projeto->nomeEdital ?> Encerramento às: <?php echo $projeto->dataEncerramento ?> </th></tr>
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

 <th>Nome Representante legal</th>
 <th>CPF Representante</th>
 <th>Telefone</th>
 <tr>
  <tr>
   <tr>
     <td>  <?php echo $projeto->coopNomeRepresentante ?></td>
     <td>  <?php echo $projeto->coopCpfRepresentante ?></td>
     <td>  <?php echo $projeto->coopTelefoneRepresentante ?></td>
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
      <td>  <?php echo $projeto->coopEnderecoRepresentante ?></td>
      <td>  <?php echo $projeto->coopCidadeRepresentante ?></td>
      <td>  <?php echo $projeto->coopUfRepresentante ?></td>
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
        <?php foreach ($itens as $item): ?>
          <tr>
            <td> <?php echo $item->dapAgricultor ?></td>
            <td>  <?php echo $item->nomeAgricultor ?></td>
            <td>  <?php echo $item->cpf ?></td>
            <td>  <?php echo $item->nomeProduto ?></td>
            <td>  <?php echo $item->unidadeMedida ?></td>
            <td>  <?php echo $item->quantidade ?></td>
            <td>  <?php echo $item->precoUnidade ?></td>
            <td>  <?php echo $item->totalItem ?></td>
          </tr>
        <?php endforeach ?>
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
     <tr id="title"><th colspan=3>IV- TOTALIZAÇÃO POR PRODUTO</th></tr>
   </thead>

   <tbody>

     <tr style="width: 80px;">
      <th>Produto</th>
      <th>Unidade</th>
      <th>Quantidade</th>
      <th>Preço Unitário</th>
      <th>Total</th>
      <th>Cronograma de Entrega</th>
      <tr>
       <tr>
        <tr>
          <td> <?php echo $item->descricaoProd ?></td>
          <td>  <?php echo $item->unidadeMedida ?></td>
          <td>  <?php echo $item->quantidade ?></td>
          <td>  <?php echo $item->precoUnidade ?></td>
          <td>  <?php echo $item->totalItem ?></td>
          <td>  <?php echo $item->cronogramaEntregaProd ?></td>

        </tr>
      </tr>
    </tr>
  </tr>
</tbody>
</table>
</div>
</div>
</div>
