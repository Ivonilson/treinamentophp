<?php 

//declaração básica de uma função
//exemplo: calculo IMG

function calculaIMC($peso, $altura){
	$imc = $peso / ($altura * $altura);

	if($imc < 18.5) {
		echo "Você está abaixo do peso.";
	} elseif ($imc >= 18.5 && $imc < 24.99) {
		echo "Seu peso está normal.";
	} elseif ($imc >= 25 && $imc < 29.99 ) {
		echo  "Você está com sobrepeso.";
	} elseif ($imc >= 30 && $imc < 34.99) {
		echo "Você está com obesidade grau I.";
	} elseif ($imc >= 35 && $imc < 39.99) {
		echo "Você está com obesidade grau II.";
	} elseif($imc >= 40) {
		echo "Você está com obesidade grau III.";
	} else {
		echo "Dados de entrada inválidos. Tente novamente.";
	}

}

//chamando a função

calculaIMC(95, 1.95);

?>