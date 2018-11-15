<?php 

/*Declaração de string literal com várias linhas. Para tanto é utilizado a marcação <<< mara abrir o delimitador que poderá ter qualquer nome... foi usado DELIMITADOR para um melhor entendimento didático.*/
$texto = <<<DELIMITADOR
	Aqui nesta área. 
	você poderá escrever
	textos com múltiplas linhas	
DELIMITADOR;

echo $texto;