<?php 
	
	/*a função array_values() retorna apenas o conteúdo dos elementos do array ignorando o índice*/
	$frutas = array('abacaxi', 'banana', 'caju', 'damasco');

	echo "<br>";

	/*Tem que rever, pois o comando não está comportando como esperado, ou seja, não está trazendo apenas o conteúdo do elemento... tá trazendo a chave também.*/
	print_r(array_values($frutas)); 

?>