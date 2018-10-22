<?php  

		include('conexao_pdo.php');

		/*A lógica de exclusão é a mesma conforme o padrão de código acima, portanto, não serão realizados novos comentários para esta ação do CRUD*/

		$delete = $conn->prepare("DELETE from tbl_teste WHERE nome = ?");

		$nome2 = "agnes";
		$nome3 = "SICRANO";

		$delete->bindParam(1, $nome2);
		//$excluir->bindParam(2, $nome3);

		$searchDelete = $conn->prepare("SELECT nome FROM tbl_teste WHERE nome = ? ");
		$searchDelete->bindParam(1, $nome2);
		$searchDelete->execute();

		if($searchDelete->rowCount() > 2) {
			$delete->execute();
			echo "<br><br>REGISTROS DELETADOS COM SUCESSO.";
		} else {	
			echo "<br><br>QUANTIDADE DE REGISTROS INSUFICIENTES PARA DELEÇÃO.";
		}

?>