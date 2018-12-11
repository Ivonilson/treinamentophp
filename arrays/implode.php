<?php 
	
	/*a função implode converte um array em uma string, utilizando para isso uma glue (cola)*/
	$colecao = array('hoje', 'Está', 'Fazendo', 'Sol');

	print_r($colecao);

	$frase = implode(" ", $colecao);

	echo "<br>$frase";
	

?>