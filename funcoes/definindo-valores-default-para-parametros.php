<?php 
	
	/*No exemplo abaixo a variável $valor teve seu valor default definido.
	Portanto, caso não seja passando nenhum valor para a mesma no momento da chamada da função, o valor definido como default será considerado.*/
	function Incrementa(&$variavel, $valor = 40){
		$variavel += $valor;
	}

	$a = 10;

	Incrementa($a);

	echo $a;


