<?php 

/*
	O foreach é um laço de repetição para iteração em arrays ou matrizes.
*/

$nomes = array('Carlos', 'Antonio', 'Marcos', 'Paulo');

echo "NOMES ENCONTRADOS: ";

foreach ($nomes as $valor){
	echo $valor." - ";
}