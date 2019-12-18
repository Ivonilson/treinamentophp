<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke</title>
    </head>
    <body>
        <?php
        require './Nota.php';
        $notas = new Nota();
        
        $notas->setNota('Ivonilson', 'Programação', 10, 7);
       //echo $notas->getNota();
        
        //clonando o objeto $notas e atribuindo ao objeto $notas2
        $notas2 = clone $notas;
        $notas2->setProva(6);
        $notas2->setTrabalho(4);
        $notas2->setDisciplina('PHP');
        echo $notas2->getNota();
        ?>
    </body>
</html>
