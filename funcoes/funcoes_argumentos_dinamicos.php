<?php 

/*O PHP permite definir uma função com número de argumentos variáveis, passados dinamicamente, conforme o exemplo abaixo:*/
function ola(){
	//a função func_get_args() pega os parâmetros e armazena numa variável.
	$argumentos = func_get_args();
	// a função func_num_args() pega a quantidade de argumentos passados.
	$quantidade = func_num_args();

	//estrutura de controle criando o laço para receber as informações e repassá-las para as variáveis.
	for($n = 0; $n < $quantidade; $n++){
		echo 'Olá '.$argumentos[$n].', ';
	}
}

//chamando a função para teste e passando quantos argumentos se desejar.
ola('Paulo', 'Maria', 'João', 'Pedro');