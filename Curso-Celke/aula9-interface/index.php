<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke</title>
    </head>
    <body>
        <?php
        require './ICurso.php';
        require './CursoGraduacao.php';
        require './CursoPosGraduacao.php';

        $curso = new CursoGraduacao();
        echo $curso->disciplina("Matemática");
        echo $curso->professor("Carlos Augusto");

        $cursoPosGraduacao = new CursoPosGraduacao();
        echo $cursoPosGraduacao->disciplina("Estatística");
        echo $cursoPosGraduacao->professor("Paulo José");
        ?>
    </body>
</html>
