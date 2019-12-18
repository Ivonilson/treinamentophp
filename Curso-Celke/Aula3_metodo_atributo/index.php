<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Métodos e Atributos</title>
    </head>
    <body>
        <?php
        require './Usuario.php';
        $usuario = new Usuario();

        echo $usuario->setUsuario("Ivonilson", "cardoso@hotmail.com");
        
        echo $usuario->getUsuario();
        
        $usuario->setNota(4, 2);
        echo $usuario->getNota();
        ?>
    </body>
</html>
