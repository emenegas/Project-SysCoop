<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Menu');
?>

<?php echo form_open('projetopnae/' .$projeto->id. '/alterar', 'id="form-projeto"'); ?> 

<div class="container">
  <table class="table table-bordered">
    <thead class="thead-dark">
      <tr>
        <th><?php echo $projeto->coopNomeFantasia ?></th>


        <th> <?php echo $projeto->coopEndereco ?> <?php echo $projeto->coopCidade?>/<?php echo $projeto->coopUf ?></th>
        <th>
         <?php echo $projeto->coopEmail?>
       </th>
     </tr>
     <tr>
      <th>
        <?php echo $projeto->coopCnpj?>
      </th>
      <th>
        Fone: <?php echo $projeto->coopTelefone?>
      </th>
      <th> 
       <input type="submit" name="alterar" value="Alterar" />
     </th>
   </tr>
 </thead>
</table>
<table class="table table">
  <thead >
   <tr class="thead-light">
    <th style="width: 30%"> Situação:
      <select name="status" class="form-control" value="<?php echo $projeto->status; ?>">
       <option <?php echo $projeto->status == 'ativo'?'selected':''; ?> value="ativo">Em andamento</option>   <option <?php echo $projeto->status == 'inativo'?'selected':''; ?> value="inativo">Concluído</option>
     </select>
   </th>
   <th>Ref. Chamada Pública n° <?php echo $projeto->nomeEdital ?> Encerramento às:
     <input  type="date" name="dataEncerramento" id="dataEncerramento" class="form-control" value="<?php echo $projeto->dataEncerramento; ?>"> 
   </th>
   <th >Homologação n°
     <input type="text" name="dataEncerramento" id="dataEncerramento" class="form-control" value="<?php echo $projeto->homologacaoCodigo; ?>"> 
   </th>
 </tr>
</table>
<table class="table table-bordered">
  <thead class="thead-light">
   <tr> 
    <th>PROJETO DE VENDA DE GÊNEROS ALIMENTÍCIOS DA AGRICULTURA FAMILIAR PARA ALIMENTAÇÃO ESCOLAR</th>
  </tr>
  <tr> 
    <th>Identificação da proposta de atendimento ao edital/chamada pública n°<?php echo $projeto->nomeEdital?></th>
  </tr>
</thead>
</table>
</table>
<table class="table table-bordered">
  <thead class="thead-light"><h4>I - IDENTIFICAÇÃO DOS FORNECEDORES</h4>
    <tr>
      <th>Código</th>
      <th>Nome do Proponente</th>
      <th>CNPJ</th>
    </tr>
  </thead>
  <tbody>
    <tr >
      <td>  <?php echo $projeto->id ?></td>
      <td>  <?php echo $projeto->coopNomeFantasia ?></td>
      <td>  <?php echo $projeto->coopCnpj ?></td>
    </tr>
    <thead class="thead-light">
      <tr>
       <th>Endereço do Proponente</th>
       <th>Município</th>
       <th>UF</th>
     </tr> 
     <tr>
       <td>  <?php echo $projeto->coopEndereco ?></td>
       <td>  <?php echo $projeto->coopCidade ?></td>
       <td>  <?php echo $projeto->coopUf ?></td>
     </tr>
   </thead>
   <thead class="thead-light">
     <tr>
      <th>Email</th>
      <th>Telefone</th>
      <th>CEP</th>
    </tr>
    <tr>
     <td>  <?php echo $projeto->coopEmail ?></td>
     <td>  <?php echo $projeto->coopTelefone ?></td>
     <td>  <?php echo $projeto->coopCep ?></td>
   </tr>
 </thead>
</table>
<table class="table table-bordered">
 <thead class="thead-light">
   <tr>
    <th>N. DAP Jurídica</th>
    <th >Banco</th>
    <th >N. Agência</th>
    <th >N. Conta Corrente</th>
  </tr>
  <tr>
   <td>  <?php echo $projeto->coopDapJuridica ?></td>
   <td>  <?php echo $projeto->coopBanco ?></td>
   <td>  <?php echo $projeto->coopAgencia ?></td>
   <td>  <?php echo $projeto->coopNumeroContaCorrente ?></td>
 </tr>
</thead>
</table>
<table class="table table-bordered">
 <thead class="thead-light">
  <tr>
   <th>Nome Representante legal</th>
   <th>CPF Representante</th>
   <th>Telefone</th>
 </tr>
 <tr>
   <td>  <?php echo $projeto->coopNomeRepresentante ?></td>
   <td>  <?php echo $projeto->coopCpfRepresentante ?></td>
   <td>  <?php echo $projeto->coopTelefoneRepresentante ?></td>
 </tr>
 <tr>
  <th>Endereço</th>
  <th>Município</th>
  <th>UF</th>
</tr>
<tr>
  <td>  <?php echo $projeto->coopEnderecoRepresentante ?></td>
  <td>  <?php echo $projeto->coopCidadeRepresentante ?></td>
  <td>  <?php echo $projeto->coopUfRepresentante ?></td>
</tr>
</thead>
</table>
<table class="table table-bordered">
 <thead class="thead-light"><h4>II - IDENTIFICAÇÃO DA ENTIDADE EXECUTORA</h4>
   <tr>
     <th>Nome da Entidade</th>
     <th>CNPJ</th>
     <th>Município</th>
     <th>UF</th>
   </tr>
   <tr>
    <tr>
      <td>  <?php echo $projeto->entNomeFantasia ?></td>
      <td>  <?php echo $projeto->entCnpj ?></td>
      <td>  <?php echo $projeto->entCidade ?></td>
      <td>  <?php echo $projeto->entUf ?></td>
    </tr>
  </tr>
  <tr>
   <th>Endereço</th>
   <th>Telefone</th>
   <th>Nome do Representante</th>
   <th>CPF</th>
 </tr>
 <tr>
  <td>  <?php echo $projeto->entEndereco ?></td>
  <td>  <?php echo $projeto->entTelefone ?></td>
  <td>  <?php echo $projeto->entRepresentante ?></td>
  <td>  <?php echo $projeto->entCpfRepresentante ?></td>
</tr>
</thead>
</table>

<table class="table table-bordered">
  <thead class="thead-light"><h4>III - RELAÇÃO AGRICULTORES</h4>
    <tr>
      <th>Numero DAP</th>
      <th>Nome agricultor</th>
      <th>CPF</th>
      <th>Produto</th>
      <th>Unidade</th>
      <th>Quantidade</th>
      <th>Preço Unidade</th>
      <th>Valor Total</th>
    </tr>
  </thead>
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

</table>
<table class="table table-bordered">
  <thead class="thead-light"><h4>IV- TOTALIZAÇÃO POR PRODUTO</h4>
   <tr>
    <th>Produto</th>
    <th>Unidade</th>
    <th>Quantidade</th>
    <th>Preço Unitário</th>
    <th>Total</th>
    <th>Cronograma de Entrega</th>
  </tr>
</thead>
<tr>
  <td> <?php echo $item->descricaoProd ?></td>
  <td>  <?php echo $item->unidadeMedida ?></td>
  <td>  <?php echo $item->quantidade ?></td>
  <td>  <?php echo $item->precoUnidade ?></td>
  <td>  <?php echo $item->totalItem ?></td>
  <td style="width: 20%">  <?php echo $item->cronogramaEntregaProd ?></td>
</tr> 
<tbody>
</table>

<table>
  <thead>
    <th>
      
    </th>
  </thead>
</table>


</div>



<script type="text/javascript">
  var input = document.getElementById('dataEncerramento');
  input.addEventListener('change', function() {
    var agora = new Date();
    var escolhida = new Date(this.value);
    if (escolhida < agora) this.value = [agora.getFullYear(), agora.getMonth() + 1, agora.getDate()].map(v => v < 10 ? '0' + v : v).join('-');
  });
</script>