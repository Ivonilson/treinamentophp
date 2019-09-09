<?php  
	namespace models;

	use PDO;

	class Conexao {

		public $user;
		public $pass;
		public $database;

		 function __construct()
			{	
				try {
					$conexao = new PDO('mysql:host=localhost:3306;dbname=db_pdotestes', 'root', '');
						echo "Conectado com sucesso";
					} catch(PDOException $e){
						echo "Não conectado ao BD.";
				}
			}
	}

?>