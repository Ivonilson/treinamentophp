<?php 
	
	/*a função array_intersect() retorna os valores dos dos indices dos primeiros arrays que contém chaves idênticas com outros arrays passados como parâmetro*/
	$frutas = array("1"=>"abacaxi", "2"=>"banana");
	$legumes = array("1"=>"cenoura", "2"=>"beterraba");

	$numeros = array('1', '2');
	$letras = array('a', 'b');

	$insercaoLetras = array_intersect_key($numeros, $letras);

	$intersecao = array_intersect_key($frutas, $legumes);

	echo "<br>";

	print_r($intersecao);
	print_r($insercaoLetras);
	

?>