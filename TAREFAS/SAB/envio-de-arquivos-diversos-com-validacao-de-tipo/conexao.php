<?php  
	$conexao = new PDO('mysql:host=localhost:3306;dbname=db_pdotestes', 'root', '');
	$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>