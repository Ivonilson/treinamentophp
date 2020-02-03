<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke</title>
    </head>
    <body>
        <?php
         require './Cliente.php';  
         require './ClientePessoaFisica.php';
         
         $cliente = new Cliente();
         $cliente->setEndereco('Av. das Palmeiras, nº 99');
         $cliente->setBairro('Setor Sul');
         echo $cliente->verEndereco();
         
         $clientePf = new ClientePessoaFisica();
         $clientePf->setCpf(47859698754);
         $clientePf->setNome('Carlos');
         $clientePf->setEndereco('Rua Carlos Magno, 25');
         $clientePf->setBairro('Baixada');
         $clientePf->
         
        ?>
    </body>
</html>
