<?php  
	$dbname = 'db_pdoTestes';
	$user = 'root';
	$pass = '';
	$driver = 'mysql';
	$host = 'localhost';

	try {
		$conexao = new PDO($driver.':host='.$host.';'.'dbname='.$dbname, $user, $pass);
		$conexao->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf-8'");
		$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Conectado com sucesso.";
	} catch(PDOException $erro){
		echo "Erro ao conectar: ".utf8_encode($erro->getMessage());
	}
	
?>