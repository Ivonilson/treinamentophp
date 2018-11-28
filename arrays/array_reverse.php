<?php 
	
	/*a funcção array_reverse() inverte a ordem dos elementos*/
	$fruta = array('abacaxi', 'banana', 'caju', 'damasco');

	$fruta_ordem_reversa = array_reverse($fruta, true);

	print_r($fruta);
	print_r($fruta_ordem_reversa);


?>