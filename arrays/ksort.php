<?php 
	
	/*a função ksort() faz a ordenação do conteúdo do array através dos seus índices*/
	$fruta = array('banana', 'abacaxi', 'damasco', 'caju');

	print_r($fruta);

	echo "<br>";

	ksort($fruta);

	print_r($fruta);
	



?>