<?php  

		include('conexao_pdo.php');

		//declarando variável que receberá o comando SQL para inclusão de dados
		$insert = $conn->prepare("INSERT INTO tbl_teste (nome, sobrenome) VALUES (?, ?)");

		/*Variáveis referências para o bindParam (que só aceita passagem de dados por referência)*/
		$nome = filter_input(INPUT_POST, "ipt_nome");
		$sobrenome = filter_input(INPUT_POST, "ipt_sobrenome");

		/*Passando parâmetros para o bindParam - o mesmo pode receber até 03 parâmetros, sendo eles: 0 1º representa o 1º ponto de ? (1º campo) no comando SQL; O 2º é a variável de referência que representa o valor do campo a ser inserido no SQL; O 3º (não obrigatório) refere-se a declaração do tipo de dado que está sendo passado (INT, STRING, etc), o qual é passado através do método estático da classe PDO. ex: PDO::PARAM_STR para o tipo string. Abaixo nós temos uma passagem de parâmetros declarando o tipo e a outra não.*/
		$insert->bindParam(1, $nome, PDO::PARAM_STR);
		$insert->bindParam(2, $sobrenome);

		/*executando o objeto $stmt com o comando SQL dentro de um if para caso seja executado mostre uma mensagem informativa para o usuário informando o sucesso da execução.*/
		if(!empty(isset($nome)) && !empty(isset($sobrenome))){
			$insert->execute();
			print "<br> Registro Inserido com sucesso...<br>";

		/*Se por algum motivo, o comando não for executado, mostre uma mensagem de insucesso na execução para o usuário*/
		} else {
			print "<br> Erro ao inserir o registro.<br>";
			
		}
?>

<!DOCTYPE html>
<html>
<head>
	<title>FORM INSERT</title>
</head>
<body>
	<form method="POST">
		<label>NOME:</label><input type="text" name="ipt_nome" placeholder="Nome">
		<br>
		<label>SOBRENOME:</label><input type="text" name="ipt_sobrenome" placeholder="sobrenome">
		<br>
		<input type="submit" value="Gravar">
	</form>
</body>
</html>