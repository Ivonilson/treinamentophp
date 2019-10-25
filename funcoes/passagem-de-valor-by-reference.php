<?php 

/*para efetuar a passagem de parâmetros by reference basta
cololcar o & antes da variável. Isso permitirá que as transformações
realizadas 	pela função sobre a variável sejam válidas no contexto externo
a função. Para verificar a diferença do resultado no echo, basta retirar o $ antes da variável.*/
function Incrementa(&$variavel, $valor){
	$variavel += $valor;
}

$a = 10;

Incrementa($a, 20);

echo $a;