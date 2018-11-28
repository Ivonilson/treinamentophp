<?php 
	
	/*a função array_merge() mescla dois ou mais arrays*/
	$frutas = array('abacaxi', 'banana', 'caju', 'damasco');
	$legumes = array('tomate', 'cenoura', 'beterraba', 'batata');

	$cesta = array_merge($frutas, $legumes);

	echo "<br>";

	print_r($cesta);
	



?>