<?php 
	
	/*a função krsort() faz a ordenação do conteúdo do array através dos seus índices considerando a ordem inversa dos mesmos*/
	$fruta = array('banana', 'abacaxi', 'damasco', 'caju');

	print_r($fruta);

	echo "<br>";

	krsort($fruta);

	print_r($fruta);
	



?>