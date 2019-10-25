<?php 

/*No exemplo abaixo é realizada a chamada de função recursiva
**para realizar o cálculo do fatorial de um número. A função recursiva funciona como um laço de repetição.
**
**O fatorial de um número natural n, representado por n!, é o produto de todos os inteiros positivos ** menores ou iguais a n.
*/



function Fatorial($numero)
{
	if($numero == 1){
		return $numero;
	} else {
		return $numero * Fatorial($numero - 1);
	}
	
}

echo Fatorial(5) . "<br>";
echo Fatorial(5) . "<br>";