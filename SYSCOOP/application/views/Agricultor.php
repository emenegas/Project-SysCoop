<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Menu'); 
?>
<script language=javascript>
	<!--
		function fone(obj,prox) {
			switch (obj.value.length) {
				case 1:
				obj.value = "(" + obj.value;
				break;
				case 3:
				obj.value = obj.value + ")";
				break;	
				case 8:
				obj.value = obj.value + "-";
				break;	
				case 13:
				prox.focus();
				break;
			}
		}
		function formata_data(obj,prox) {
			switch (obj.value.length) {
				case 2:
				obj.value = obj.value + "/";
				break;
				case 5:
				obj.value = obj.value + "/";
				break;
				case 9:
				prox.focus();
				break;
			}
		}
		function Apenas_Numeros(caracter)
		{
			var nTecla = 0;
			if (document.all) {
				nTecla = caracter.keyCode;
			} else {
				nTecla = caracter.which;
			}
			if ((nTecla> 47 && nTecla <58)
				|| nTecla == 8 || nTecla == 127
  || nTecla == 0 || nTecla == 9  // 0 == Tab
  || nTecla == 13) { // 13 == Enter
				return true;
		} else {
			return false;
		}
	}
	function validaCPF(cpf) 
	{
		erro = new String;

		if (cpf.value.length == 11)
		{	
			cpf.value = cpf.value.replace('.', '');
			cpf.value = cpf.value.replace('.', '');
			cpf.value = cpf.value.replace('-', '');

			var nonNumbers = /\D/;

			if (nonNumbers.test(cpf.value)) 
			{
				erro = "A verificacao de CPF suporta apenas números!"; 
			}
			else
			{
				if (cpf.value == "00000000000" || 
					cpf.value == "11111111111" || 
					cpf.value == "22222222222" || 
					cpf.value == "33333333333" || 
					cpf.value == "44444444444" || 
					cpf.value == "55555555555" || 
					cpf.value == "66666666666" || 
					cpf.value == "77777777777" || 
					cpf.value == "88888888888" || 
					cpf.value == "99999999999") {

					erro = "Número de CPF inválido!"
			}

			var a = [];
			var b = new Number;
			var c = 11;

			for (i=0; i<11; i++){
				a[i] = cpf.value.charAt(i);
				if (i < 9) b += (a[i] * --c);
			}

			if ((x = b % 11) < 2) { a[9] = 0 } else { a[9] = 11-x }
				b = 0;
			c = 11;

			for (y=0; y<10; y++) b += (a[y] * c--); 

				if ((x = b % 11) < 2) { a[10] = 0; } else { a[10] = 11-x; }

			if ((cpf.value.charAt(9) != a[9]) || (cpf.value.charAt(10) != a[10])) {
				erro = "Número de CPF inválido.";

			}
		}
	}
	else
	{
		if(cpf.value.length == 0)
			return false
		else
			erro = "Número de CPF inválido.";
	}
	if (erro.length > 0) {
		alert(erro).click(erro);
		cpf.focus();
		return false;
	} 	
	return true;	
}

 //envento onkeyup
 function maskCPF(CPF) {
 	var evt = window.event;
 	kcode=evt.keyCode;
 	if (kcode == 8) return;
 	if (CPF.value.length == 3) { CPF.value = CPF.value + '.'; }
 	if (CPF.value.length == 7) { CPF.value = CPF.value + '.'; }
 	if (CPF.value.length == 11) { CPF.value = CPF.value + '-'; }
 }
 
 // evento onBlur
 function formataCPF(CPF)
 {
 	with (CPF)
 	{
 		value = value.substr(0, 3) + '.' + 
 		value.substr(3, 3) + '.' + 
 		value.substr(6, 3) + '-' +
 		value.substr(9, 2);
 	}
 }
 function retiraFormatacao(CPF)
 {
 	with (CPF)
 	{
 		value = value.replace (".","");
 		value = value.replace (".","");
 		value = value.replace ("-","");
 		value = value.replace ("/","");
 	}
 }
//-->
</script>

<body>


	<div class="container-fluid">
		<form class="needs-validation" action="<?php echo site_url('agricultor/cadastrar')?>" method="post"  novalidate>
			<div class="form-row">
				<div class="col-md-4 mb-3">
					<label for="nome">Nome</label>
					<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome Completo" value="<?php echo set_value('nome')?>" required>
					<div class="invalid-feedback">
						Campo obrigatório! Digite o seu nome completo.
					</div>
				</div>
				<div class="col-md-4 mb-3">
					<label for="cpf">CPF</label>
					<input type="text" class="form-control" name="cpf" id="cpf" placeholder="000.000.000-00" onKeyPress="return Apenas_Numeros(event);" onBlur="validaCPF(this);" maxlength="11">
					<div class="invalid-feedback">
						Campo obrigatório! Digite o numero do seu CPF sem pontos e traços.
					</div>
				</div>
				<div class="col-md-4 mb-3">
					<label for="telefone">Telefone</label>
					<input type="text" class="form-control" name="telefone" id="telefone" placeholder="(00)000000000" value="<?php echo set_value('telefone')?>" required>
					<div class="invalid-feedback">
						Campo obrigatório! Digite o seu telefone com DDD.
					</div>
				</div>
				<div class="col-md-4 mb-3">
					<label for="email">Email</label>
					<input type="email" class="form-control" name="email" id="email" placeholder="email@exemplo.com" value="<?php echo set_value('email')?>" required>
					<div class="invalid-feedback">
						Campo obrigatório! Digite o seu Email, exemplo: exemplo@email.com!
					</div>
				</div>
				<div class="col-md-4 mb-3">
					<label for="cep">CEP</label>
					<input type="text" class="form-control" name="cep" id="cep" placeholder="00000-000" value="<?php echo set_value('cep')?>" required>
					<div class="invalid-feedback">
						Campo obrigatório! Digite o CEP da sua residência com 8 digitos!
					</div>
				</div>
				<div class="col-md-4 mb-3">
					<label for="uf">UF</label>
					<input type="text" class="form-control" name="uf" id="uf" placeholder="Estado" value="<?php echo set_value('uf')?>" required>
					<div class="invalid-feedback">
						Campo obrigatório! Digite aqui o Estado!
					</div>
				</div>
				<div class="col-md-4 mb-3">
					<label for="cidade">Cidade</label>
					<input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade" value="<?php echo set_value('cidade')?>" required>
					<div class="invalid-feedback">
						Campo obrigatório! Digite a sua cidade de moradia!
					</div>
				</div>
				<div class="col-md-4 mb-3">
					<label for="endereco">Endereço</label>
					<input type="text" class="form-control" name="endereco" id="endereco" placeholder="Rua - 000, centro" value="<?php echo set_value('endereco')?>" required>
					<div class="invalid-feedback">
						Campo obrigatório! Exemplo: Rua exemplo-142, centro!
					</div>
				</div>
				<div class="col-md-4 mb-3">
					<label for="dapNumero">Numero da DAP</label>
					<input type="text" class="form-control" name="dapNumero" id="dapNumero" placeholder="Numero" value="<?php echo set_value('dapNumero')?>" required>
					<div class="invalid-feedback">
						Campo obrigatório! Digite a Declaração de Aptidão ao Pronaf!
					</div>
				</div>
				<div class="col-md-4 mb-3">
					<label for="dapValidade">Validade da DAP</label>
					<input type="date" class="form-control" name="dapValidade" id="dapValidade" required>
				</div>
				<div class="col-md-8 mb-3">
					<label for="cooperativa">Cooperativa</label>
					<select name="cooperativa" class="custom-select custom-select mb-3">
						<option value=""></option>
						<?php foreach ($cooperativas as $cooperativa)
						{
							echo'<option value="' . $cooperativa->id . '">' . $cooperativa->nomeFantasia . '</option>';
						}?>
					</select>
				</div>
				<div class="form-check form-check-inline">
					<label for="produtos">Produtos:</label>
					<?php foreach ($produtos as $produto)
					{
						echo '<input type="checkbox" class="form-check-input" name="produtos[]" value="' .$produto->id.'">' .$produto->nome;
					}?>

				</div>
			</div>
			<div class="button" style="margin-top: 30px;float: right;">
				<button type="submit" data-toggle="tooltip" title="Clique para finalizar o Cadastro!" class="btn btn-outline-success">Cadastrar</button>
				<a href="<?php echo site_url('agricultor') ?>" class="btn btn-outline-danger">Cancelar</a>
			</div>	
			<!-- --------------------------------------------------- -->
			
		</form>

	</div>
		<?php if(isset($formerror)): ?>
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Aviso!</strong>
			<div><?php echo $formerror ?></div>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span> 
			</button>
		</div>
	<?php endif; ?>

</body>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
	'use strict';
	window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
    	form.addEventListener('submit', function(event) {
    		if (form.checkValidity() === false) {
    			event.preventDefault();
    			event.stopPropagation();
    		}
    		form.classList.add('was-validated');
    	}, false);
    });
}, false);
})();
</script>

<script type="text/javascript">var input = document.getElementById('dapValidade');
input.addEventListener('change', function() {
	var agora = new Date();
	var escolhida = new Date(this.value);
	if (escolhida < agora) {
		this.value = [agora.getFullYear(), agora.getMonth() + 1, agora.getDate()].map(v => v < 10 ? '0' + v : v).join('-');
		alert("Não é permitida data retroativa!");
	}
});
</script>

<script type="text/javascript">
	setTimeout(function(){
		$('button.close').click()
	},5000);
</script>
