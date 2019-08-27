<?php 
	
	require '../conexao_db/conecta.php';


	try {
		$codigo = filter_input(INPUT_GET, 'id');
		$querySelecionaPorCodigo = $conexao->prepare("SELECT codigo, imagem, descricao FROM tbl_imagem WHERE codigo = $codigo");
		$querySelecionaPorCodigo->execute();
		$imagem = $querySelecionaPorCodigo->fetch(PDO::FETCH_OBJ);

		//header('Content-Type:image/jpeg'); 
		//header('Content-Length: '.strlen($imagem));
		echo "<img src='data:image/jpeg;base64,".base64_encode($imagem->imagem)."'/>";
		echo "<br>".$imagem->descricao;


	} catch (PDOException $erro){
		echo "Erro ao carregar a imagem...".$erro->getMessage();
	}

	echo "<br><br><a href='pg_resultados.php'>VOLTAR</a>";
	


?>