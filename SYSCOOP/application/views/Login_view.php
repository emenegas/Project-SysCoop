<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>SYSCOOP</title>
  <base href="<?php echo base_url(); ?>">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="shortcut icon" href="assets/planta1.ico" >
  <link rel="stylesheet" type="text/css" href="assets/style.css">
</head>
<body >
  <?php if(isset($formerror)): ?>
   <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Aviso!</strong>
    <div><?php echo $formerror ?></div>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span> 
    </button>
  </div>
  <?php endif; ?>

<div class="container">

  <div class="d-flex justify-content-center h-100">

    <div class="card">

      <div class="card-header">
        <h3>SYSCOOP</h3>  
      </div>
      <div class="card-body">
        <form method="post" action="<?php echo base_url('login/entrar')?>" id="form_login">  
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="tel" id="cpf" name="cpf" class="form-control" placeholder="CPF 000.000.000-00">

          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha">
          </div>

          <div class="form-group">
            <input type="submit" value="Acessar" class="btn float-right login_btn">
          </div>
        </form>
      </div>

    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
<style type="text/css">

html,body{
  background-image: url('assets/campo.jpg');
  background-size: cover;
  background-repeat: no-repeat;
  height: 100%;
}

.container{
  height: 100%;
  align-content: center;
}

.card{
  height: 300px;
  margin-top: auto;
  margin-bottom: auto;
  width: 400px;
  background-color: rgba(0,0,0,0.5) !important;
}

.social_icon span{
  font-size: 60px;
  margin-left: 10px;
  color: #FFC312;
}

.social_icon span:hover{
  color: white;
  cursor: pointer;
}

.card-header h3{
  color: white;
}

.social_icon{
  position: absolute;
  right: 20px;
  top: -45px;
}

.input-group-prepend span{
  width: 50px;
  background-color: #FFC312;
  color: black;
  border:0 !important;
}

input:focus{
  outline: 0 0 0 0  !important;
  box-shadow: 0 0 0 0 !important;

}

.remember{
  color: white;
}

.remember input
{
  width: 20px;
  height: 20px;
  margin-left: 15px;
  margin-right: 5px;
}

.login_btn{
  color: black;
  background-color: #FFC312;
  width: 100px;
}

.login_btn:hover{
  color: black;
  background-color: white;
}

.links{
  color: white;
}

.links a{
  margin-left: 4px;
}
</style>
<script type="text/javascript">
  setTimeout(function(){
    $('button.close').click()
  },5000);
</script>