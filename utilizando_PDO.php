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
		//declarando variável que receberá o comando SQL para inclusão de dados
		$stmt = $conn->prepare("INSERT INTO tbl_teste1 (nome, sobrenome) VALUES (?, ?)");

		/*Variáveis referências para o bindParam (que só aceita passagem de dados por referência)*/
		$nome = "vasco";
		$sobrenome = "da gama";

		/*Passando parâmetros para o bindParam - o mesmo pode receber até 03 parâmetros, sendo eles: 0 1º representa o 1º ponto de ? (1º campo) no comando SQL; O 2º é a variável de referência que representa o valor do campo a ser inserido no SQL; O 3º (não obrigatório) refere-se a declaração do tipo de dado que está sendo passado (INT, STRING, etc), o qual é passado através do método estático da classe PDO. ex: PDO::PARAM_STR para o tipo string. Abaixo nós temos uma passagem de parâmetros declarando o tipo e a outra não.*/
		$stmt->bindParam(1, $nome, PDO::PARAM_STR);
		$stmt->bindParam(2, $sobrenome);

		/*executando o objeto $stmt com o comando SQL dentro de um if para caso seja executado mostre uma mensagem informativa para o usuário informando o sucesso da execução.*/
		//if($stmt->execute()){
			//print "<br> Registro Inserido com sucesso...<br>";
			

		/*Se por algum motivo, o comando não for executado, mostre uma mensagem de insucesso na execução para o usuário*/
		//} else {
			//print "<br> Erro ao inserir o registro.<br>";
			
		//}

		/*declarando variável que receberá os resultados (resultset) da consulta (SELECT) do comando SQL*/
		$nome1 = "vasco";

		//variável utilizada para contar os registros dentro do loop (while)
		$cont = 0;

		/*preparando o comando SQL e armazenando na variável $resultado para execução*/
		$resultado = $conn->prepare("SELECT nome from tbl_teste1 WHERE nome = ?");

		/*passando a variável de referência e demais parâmetros para o bindParam*/
		$resultado->bindParam(1, $nome1);

		/*executando o comando SQL*/
		$resultado->execute();

		/*utilizando um loop (while) para pegar os resultados obtidos e armazená-los na variável/objeto auxiliar $row (linha) para consulta posterior*/
		while($row = $resultado->fetch(PDO::FETCH_OBJ)){
			$cont;

			/*acessando a propriedade "nome" (a mesma referência para o campo de mesmo nome da tabela) do objeto $row para pegar a informar e apresentá-la com o comando echo*/
			echo $row->nome."<br>";
			$cont++;
		}

		echo "<br>Registros encontrados: " .$cont;


		/*A lógica de exclusão é a mesma conforme o padrão de código acima, portanto, não serão realizados novos comentários para esta ação do CRUD*/

		$excluir = $conn->prepare("DELETE from tbl_teste1 WHERE nome = ?");

		$nome2 = "vasco";
		$nome3 = "SICRANO";

		$excluir->bindParam(1, $nome2);
		//$excluir->bindParam(2, $nome3);

		if(@$row->nome = $nome2){
			$excluir->execute();
			echo "<br><br>REGISTROS DELETADOS COM SUCESSO.";
		} else {
			echo "<br><br>ERRO AO DELETAR REGISTROS. NENHUM REGISTRO FOI DELETADO.";
		}

?>