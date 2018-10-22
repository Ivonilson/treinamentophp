<?php

	/*A função abaixo faz o carregamento automático das classes existentes e diretórios diferentes*/

	//funcão de inclusão de classes existenntes dentro do diretório padrão
	function incluirClasses($nomeClasse){
		if(file_exists($nomeClasse.".php") === true){
			require_once($nomeClasse.".php");
		}
	}
	//spl_autoload de uma classe dentro do diretório raiz (padrão)
	spl_autoload_register("incluirClasses");

	//spl_autoload de uma classe em outro diretório
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