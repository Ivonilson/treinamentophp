<?php

	/*Variáveis estáticas mantém o mesmo valor que lhes foi atribuído na última execução*/
	
	function percorre($quilometros){
		static $total = 0;
		$total += $quilometros;
		echo "percorreu mais $quilometros do total de $total</br>";
	}

	percorre(100);
	percorre(200);
	percorre(50);

	//fonte: PHP - Programando com Orientação a Objetos - Pablo Dall'Oglio.