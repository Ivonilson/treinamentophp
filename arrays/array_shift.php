<?php 
	
	/*a funcção array_shift() remove um elemento do início do array*/
	$fruta = array('abacaxi', 'banana', 'caju', 'damasco');

	print_r($fruta[0]);

	array_shift($fruta);

	echo "<br>";

	print_r($fruta[0]);
	



?>