<!DOCTYPE html>
<html>
    <head>
        <title>SYSCOOP</title>
    </head>
    <body background="assets/campo.jpg">

        <h1>Sistema SYSCOOP</h1>
        <div id="form_login">
            <?php echo validation_errors(); ?>
            <?php
            echo form_open();

            echo form_label('CPF', 'CPF');
            echo form_input('cpf', '');

            echo form_label('Senha', 'Senha');
            echo form_password('senha', '');

            echo form_submit('submit', 'Entrar no sistema');
            ?>
            <?php form_close(); ?>
        </div>
    </body>
</html>