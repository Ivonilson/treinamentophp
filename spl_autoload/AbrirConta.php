<?php

	/*A função abaixo faz o carregamento automático das classes existentes e diretórios diferentes*/

	spl_autoload_register(function($nomeClasse){
		if (file_exists("interfaces".DIRECTORY_SEPARATOR.$nomeClasse.".php") === true){
			require_once("interfaces".DIRECTORY_SEPARATOR.$nomeClasse.".php");
		}
	});

	$conta1 = new Conta();

	$conta1->verSaldo();
	$conta1->depositar(200);
	$conta1->sacar(400);

?>