<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>SYSCOOP</title>

  <style> 
  .formBox{
    margin-top: 90px;
    padding: 50px;
  }
  .formBox  h2{
    margin: 0;
    padding: 0;
    text-align: center;
    margin-bottom: 50px;
    text-transform: uppercase;
    font-size: 48px;
  }
  .inputBox{
    position: relative;
    box-sizing: border-box;
    margin-bottom: 50px;
  }
  .inputBox .inputText{
    position: absolute;
    font-size: 24px;
    line-height: 50px;
    transition: .5s;
    opacity: .5;
  }
  .inputBox .input{
    position: relative;
    width: 100%;
    height: 50px;
    background: transparent;
    border: none;
    outline: none;
    font-size: 24px;
    border-bottom: 1px solid rgba(0,0,0,.5);
  }
  .focus .inputText{
    transform: translateY(-30px);
    font-size: 18px;
    opacity: 1;
    color: #000;
  }

  
  body{

  } 

</style>
</head>
<body >
  <div class="container-fluid">
    <div class="container">
      <div class="formBox">
        <form method="post" action="<?php echo base_url('login')?>" id="form_login">
          
          <?php if(isset($formerror)): ?>
            <div class="alert alert-danger" role="alert"><?php echo $formerror ?></div>
          <?php endif; ?>

        
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
</body>
<script>
  setTimeout(function(){
    $('button.close').click()
  },2000)
  

  $(".input").focus(function() {
    $(this).parent().addClass("focus");
  })
</script>

</html>

