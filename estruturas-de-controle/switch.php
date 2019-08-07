<?php 

$valor = '3';

switch ($valor) {
	case '1':
		echo "O valor é: ".$valor;
		break;

	case '2':
		echo "O valor é: ". $valor;
		break;
	
	default:
		echo "Nenhuma das anteriores...";
		break;
}