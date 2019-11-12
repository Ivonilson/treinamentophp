<?php 
	
	/*a função array_map(), no exemplo abaixo, serve para que seja possível passar a função strip_tags que remove todas as marcações HTML que estão nos valores dos índices dos arrays e aplica os índices default*/
	
	$arr = ["<p>Paulo</p>", "<h1>JOÃO</h1>"];

	$semHTML = array_map('strip_tags', $arr);

	print_r($semHTML);

	

?>