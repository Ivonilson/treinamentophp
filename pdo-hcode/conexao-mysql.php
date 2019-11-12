<?php
//CONEXÃO PDO COM MYSQL

try {
	$conn = new PDO("mysql:dbname=db_pdotestes;host=localhost", "root", "");
		echo "conectou ao SGBD<br>";

	} catch (PDOException $erro){
		echo "Erro: ".$erro->getMessage();
	}
?>