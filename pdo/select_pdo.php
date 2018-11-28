<?php  

		include('conexao_pdo.php');

		/*declarando variável que receberá os resultados (resultset) da consulta (SELECT) do comando SQL*/
		$nome1 = "vasco";

		//variável utilizada para contar os registros dentro do loop (while)
		$cont = 0;

		/*preparando o comando SQL e armazenando na variável $resultado para execução*/
		$select = $conn->prepare("SELECT nome from tbl_teste WHERE nome = ?");

		/*passando a variável de referência e demais parâmetros para o bindParam*/
		$select->bindParam(1, $nome1);

		/*executando o comando SQL*/
		$select->execute();

		/*utilizando um loop (while) para pegar os resultados obtidos e armazená-los na variável/objeto auxiliar $row (linha) para consulta posterior*/
		while($row = $select->fetch(PDO::FETCH_OBJ)){
			$cont;

			/*acessando a propriedade "nome" (a mesma referência para o campo de mesmo nome da tabela) do objeto $row para pegar a informar e apresentá-la com o comando echo*/
			echo $row->nome."<br>";
			$cont++;
		}
		
		echo "<br>Registros encontrados: " .$cont;

?>