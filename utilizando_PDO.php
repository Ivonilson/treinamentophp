<?php

	/*A classe PDO é nativa do PHP, portanto, não é necessário chamar a mesma. Basta fazer a instanciação de um objeto da classe e passar os parâmetros de conexão.*/

	//declando as variáveis que receberão as strings parâmetros do PDO.
	 $host = "mysql:host=localhost; dbname=db_musicabrasil";
	 $user = "root";
	 $pass = "";

	// instanciando um objeto PDO e utilizando o bloco try catch para verificação de erros.
	try {
		$conn = new PDO($host, $user, $pass);
		print "CONECTOU...";	
	} catch(PDOException $e){
		print "NÃO CONECTOU: ".$e->getMessage();
	}
	




?>