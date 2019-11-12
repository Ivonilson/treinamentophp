<?php  
//declarando e setando um cookie
setcookie('nome', 'Paulo', time() + 3600, '/'); //para destruir um cookie basta acrescentar um valor negativo ao tempo.

echo $_COOKIE['nome'];

?>