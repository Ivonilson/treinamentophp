<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke</title>
    </head>
    <body>
        <?php
            require './Usuario.php';
            $usuario = new Usuario();
            echo $usuario->getDadosUser("Ivonilson de Cardoso", "cardoso@hotmail.com");
        ?>
    </body>
</html>
