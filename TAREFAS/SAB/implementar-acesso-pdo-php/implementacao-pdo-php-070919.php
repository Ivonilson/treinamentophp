<?php 
	
	//Tarefa de Acesso ao Banco de Dados implementado utilizado PDO PHP
	//Recuperar um registro da tabela e mostrar na tela

	//Criando as variáveis para guardar as propriedades do construtor da classe PDO
	$dbname = 'db_pdotestes';
	$user = 'root';
	$pass = '';

	//instanciando um objeto da classe PDO
	$pdo = new PDO('mysql:host=localhost:3306;dbname='.$dbname, $user, $pass);

	/*setando ao objeto os atributos de erros que poderão ocorrer durante a tentativa de conexão ao banco e 
	fazendo com que os mesmos seja reportados como exceções*/
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	/*setando o codificação dos caracteres para utf-8, no caso de sua tabela esteja com esta mesma 
	codificação*/
	$pdo->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf-8'");

	//criando um statament para fazer uma consulta na tabela armazenada no banco de dados
	$pdoStatement = $pdo->query("SELECT id, descricao FROM tbl_pdotestes");

	//armazenando os resultados da consulta em um array associativo
	while ($row = $pdoStatement->fetch(PDO::FETCH_ASSOC)) {
		//mostrando os resultados na tela enquanto houver registro no laço while
		echo "<p>{$row['id']} {$row['descricao']}</p>";
	}


	/*TAREFA CONCLUÍDA COM EXITO, PORÉM NAS PRÓXIMAS DEVERÁ SER REALIZADA TRATAMENTO DE POSSÍVEIS ERROS NA EXECUÇÃO DA CHAMADA AO BANCO*/


?>