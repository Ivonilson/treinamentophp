<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke</title>
    </head>
    <body>
        <?php
        require './Cheque.php';
        require './ChequeComum.php';
        require './ChequeEspecial.php';

        $cheque1 = new ChequeComum(115.30, "Comum");
        $cheque1->calcularJuros();
        echo $cheque1->verValor();

        $cheque2 = new ChequeEspecial('100000', 'Especial');
        $cheque2->calcularJuros();
        echo $cheque2->verValor();
        ?>
    </body>
</html>
