<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke</title>
    </head>
    <body>
        <?php
        require './Disciplina.php';

        $disciplina = new Disciplina("Ivonilson", 6.5, 7.5);
        echo $disciplina->situacao();
        
        echo $disciplina->situacaoAluno();
        
        ?>
    </body>
</html>
