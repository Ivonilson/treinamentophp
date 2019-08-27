<?php 

	require("../conexao_db/conecta.php");
	@$nomeEvento = filter_input(INPUT_POST, 'nome_evento');
	@$descricaoEvento = filter_input(INPUT_POST, 'descricao_evento');
	@$imagem = $_FILES['imagem']['tmp_name'];
	@$tamanho = $_FILES['imagem']['size'];
	@$tipo = $_FILES['imagem']['type'];
	@$nome = $_FILES['imagem']['name'];


	if($imagem != "none"){
		//O PARÂMETRO 'rb' força a abertura do aquivo em modo binário.
		@$fp = fopen($imagem, "rb");
		//A FUNÇÃO fread() lê os dados de um arquivo externo e o informa de volta para o PHP.
		@$conteudo = fread($fp, $tamanho);
		@$conteudo = addslashes($conteudo);
		fclose($fp);

		try {
		$queryInsercao = $conexao->prepare("INSERT INTO tbl_imagem (evento, descricao, nome_imagem, tamanho_imagem, tipo_imagem, imagem) values ('$nomeEvento', '$descricaoEvento', '$nome', '$tamanho', '$tipo', '$conteudo')");
			
		if($queryInsercao->execute()) {
			echo "<script>alert('Dados inseridos com sucesso...'); window.location.href='form_enviar_imagem.php' </script>";

		} else {
			echo "<br>Erro ao inserir os dados.";
		}

		} catch (SQLException $e){
			echo "<br>Erro ao inserir os dados: ".$e->getMessage();
		}
	} else {
		echo "<br>Não foi possível carregar a imagem...";
	}

?>