<?php

	/*A classe PDO é nativa do PHP, portanto, não é necessário chamar a mesma. Basta fazer a instanciação de um objeto da classe e passar os parâmetros de conexão.*/

	//declando as variáveis que receberão as strings parâmetros do PDO.
	 $host = "mysql:host=localhost; dbname=db_teste";
	 $user = "root";
	 $pass = "";

	// instanciando um objeto PDO e utilizando o bloco try catch para verificação de erros.
	try {
		$conn = new PDO($host, $user, $pass);
		print "CONECTOU...";	

	} catch(PDOException $e){
		print "NÃO CONECTOU: ".$e->getMessage();
	}

		$stmtInserir = $conn->prepare("INSERT INTO tb_cidades (nome_cidade, uf) VALUES (?, ?)");
		$stmtInserir->bindParam(1, "PLANALTINA");
		$stmtInserir->bindParam(2, "GO");

		if($stmtInserir->execute()){
			print "<br> Registro Inserido com sucesso...<br>";
			var_dump($stmtInserir);

		} else {
			print "<br> Erro ao inserir o registro.<br>";
			var_dump($stmtInserir);
		}
	




?>