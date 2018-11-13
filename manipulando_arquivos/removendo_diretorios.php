<?php
	/*declarando variável e passando o nome que será dado ao diretório*/
	$nome = "images";

	/*Verifica se o diretório já existe, caso não exista, o mesmo é removido*/
	if(is_dir($nome)){
		//comando utilizando para criar um diretório
		if(rmdir($nome)){
			echo "diretório removido com sucesso.";
		} else {
			echo "falha ao remover diretório.";
		}
	} else {
		echo "O diretório não existe.";
	}

?>