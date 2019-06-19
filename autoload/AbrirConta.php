<?php
	
	/*A função abaixo faz o carregamento automatico das classes existentes no mesmo diretório*/
	/*function __autoload($nomeClasse){
		require_once("$nomeClasse.php");
	}*/

	$conta1 = new Conta();

	$conta1->verSaldo();
	$conta1->depositar(200);
	$conta1->sacar(400);

?>