<?php
	/*declarando variável e passando o nome que será dado ao diretório*/
	$nome = "images";

	/*Verifica se o diretório já existe, caso não exista, o mesmo é criado*/
	if(!is_dir($nome)){
		//comando utilizando para criar um diretório
		if(mkdir($nome)){
			echo "diretório criado com sucesso.";
		} else {
			echo "falha ao criar diretório.";
		}
	} else {
		echo "O diretório já existe.";
	}

?>