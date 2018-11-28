<?php 
	
	/*a função rsort() faz a ordenação do conteúdo do array em orde decrescente sem levar em consideração o índice de cada elemento*/
	$fruta = array('banana', 'abacaxi', 'damasco', 'caju');

	print_r($fruta);

	echo "<br>";

	rsort($fruta);

	print_r($fruta);
	



?>