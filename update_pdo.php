<?php
	
	include('conexao_pdo.php');

	/*A LÓGICA PARA A ATUALIZAÇÃO (UPDATE) DOS REGISTROS COM PDO É A MESMA QUE A UTILIZADA PARA A DEMAIS OPERAÇÕES DO CRUD, CONFORME ABAIXO*/

	$nome = "NEW NAME";
	$id = 91;

	$update = $conn->prepare("UPDATE tbl_teste SET nome = ? where id = ?");
	$update->bindParam(1, $nome);
	$update->bindParam(2, $id);

	/*SELECT para validação do ID do registro a ser modificado.*/
	$select = $conn->prepare("SELECT id FROM tbl_teste WHERE id = ?");
	$select->bindParam(1, $id);
	$select->execute();
	

	if($select->rowCount() > 0){
		$update->execute();
		echo "REGISTRO ALTERADO COM SUCESSO.<br>";
	} else {
		echo "O REGISTRO NÃO FOI ALTERADO. OCORREU ALGUM ERRO.<br>";
	}
	
?>