<?php
//chamando o arquivo que contém a conexão ao banco de dados.
include 'conexao-mysql.php';

//insert com PDO
try {
	//statement com utilização de bind params nos valores repassados para os campos das tabelas
	$stmt = $conn->prepare("INSERT INTO tbl_pdotestes (id, descricao) values (:id, :descricao)");

	//definição dos bind params
	$id = 4;
	$descricao = "Registro 4";

	//ligando as variáveis bind param com os campos da tabela
	$stmt->bindParam(":id", $id);
	$stmt->bindParam(":descricao", $descricao);

	//executando o statement que contém a query
	if($stmt->execute()){
		//mensagem para o usuário
		echo "dado inserido.";
	} else {
		//mensagem para o usuário
		echo "dado não inserido.";
	}

	} catch (PDOException $erro){
		echo "Erro: ".$erro->getMessage();
	}
?>