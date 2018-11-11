<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
  <title>SYSCOOP</title>


</head>
<body >
  <div class="container-fluid">
    <div class="container">
      <div class="formBox">

        <form method="post" action="<?php echo base_url('login')?>" id="form_login">
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
              <div class="inputBox">
                <input type="text" class="input" id="cpf" placeholder="CPF" autocomplete="off" name="cpf" autofocus>
              </div>

              <div class="inputBox">
                <input type="password" class="input" id="senha" name="senha" placeholder="Senha" autofocus>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-sm-offset-3">
            <button type="submit"  id="cadastrar" class="btn btn-lg btn-success btn-block"> 
              <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>
              Acessar
            </button>
          </div>

        </form>
        
      </div>
    </div>
  </div>

  <script>
    setTimeout(function(){
      $('button.close').click()
    },2000)

    $(".input").focus(function() {
      $(this).parent().addClass("focus");
    })
  </script>

  <?php $this->load->view('Footer');?>

