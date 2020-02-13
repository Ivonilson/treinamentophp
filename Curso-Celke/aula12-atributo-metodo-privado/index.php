<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke</title>
    </head>
    <body>
        <?php
        require './FuncionarioPrivado.php';

        $funcionario = new FuncionarioPrivado();
        $funcionario->setNome("Carlos Augusto");
        $funcionario->setSalario(125);
        //$funcionario->validarSalario(5000);//chamada não permitida em razão do método privado

        echo $funcionario->verSalario();
        ?>
    </body>
</html>
