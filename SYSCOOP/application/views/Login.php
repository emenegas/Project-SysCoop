<!DOCTYPE html>

<body>
    <div class="container">
        <div class="row">
            <form action="<?php echo site_url('Login')?>" method="post">
                <div>
                    <label form="cpf">CPF</label>
                    <?php echo form_error('cpf'); ?>
                    <input type="text" name="cpf" id="cpf" class="form-control" value="<?php echo set_value('cpf')?>">
                </div>
                <div>
                    <label form="senha">Senha</label>
                    <?php echo form_error('senha'); ?>
                    <input type="senha" name="senha" id="senha" class="form-control" value="<?php echo set_value('senha')?>">
                </div>
                <div class="button">
                    <button type="submit">Entrar</button>
                </div>

            </form>
        </div>

        <?php if(isset($formerror)):
            echo '<p>' .$formerror. '</p';
        endif;
        ?>  

    </div>