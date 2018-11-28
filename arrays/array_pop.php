<?php 
	
	/*a função array_pop() remove um elemento do fim do array*/
	$fruta = array('abacaxi', 'banana', 'caju', 'damasco');

	print_r($fruta[0]);

	/*se a linha abaixo for comentada a valor da posição 3 do array será apresentada*/
	array_pop($fruta);

	echo "<br>";

	print_r($fruta[3]);
	



?>