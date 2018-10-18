<?php
	
	/*Verificando quais drivers de SGBD o PDO da versão atual do PHP dá suporte no servidor
	* instalado na máquina atualmente.
	*/
	foreach (PDO::getAvailableDrivers() as $drivers) {
		echo $drivers."<br>";
	}


?>