<?php
//chamando o arquivo que contém a conexão ao banco de dados.
include 'conexao-mysql.php';

//update com PDO
try {
	
	

	} catch (PDOException $erro){
		echo "Erro: ".$erro->getMessage();
	}
?>