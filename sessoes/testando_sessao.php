<?php 
//dizendo ao arquivo que serão inicializado o uso de sessão
session_start();


//dando echo na sessão criado no outro arquivo
echo $_SESSION['nome'];

//unset($_SESSION['nome']);
session_destroy(); //encerra todas as sessões abertas no sistema

?>