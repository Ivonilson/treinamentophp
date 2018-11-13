<?php 

/*as lambdas functions ou funções anônimas são funções que não tem nome definido. Abaixo o exemplo de uma função anônima que remove os acentos dos caracteres definidos dentro de um array.*/

//declarando uma função anônima e guardando a mesma dentro de uma variável
$remove_acento = function($str){
	$a = array('Â', 'Ã', 'â', 'ã');
	$b = array('A', 'A', 'a', 'a');

	/*retorno da função com outra função, a replace que substitui o conteúdo de uma variável por outra (no caso, $a por $b, tendo como base o parâmetro passado na variável $str)*/
	return str_replace($a, $b, $str);
};

//chamando a função armazenada na variável $remove_acento para teste

print $remove_acento('mamão');

?>