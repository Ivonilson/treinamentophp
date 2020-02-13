<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke</title>
    </head>
    <body>
        <?php
        require './Funcionario.php';

        $funcionario = new Funcionario();
        $funcionario->setNome("Carlos Augusto");
        $funcionario->setSalario(125);

        echo $funcionario->verSalario();
        ?>
    </body>
</html>
