<?php 

require '../conexao_db/conecta.php';

$codigo = filter_input(INPUT_POST, 'codigo_imagem');
$titulo = filter_input(INPUT_POST, 'titulo_imagem');
$descricao = filter_input(INPUT_POST, 'descricao_imagem');
$imagem = $_FILES['imagem']['tmp_name'];
$tamanho = $_FILES['imagem']['size'];
$tipo = $_FILES['imagem']['type'];
$nome = $_FILES['imagem']['name'];

if($imagem != ""){
	$fp = fopen($imagem, "rb");
	$conteudo = fread($fp, $tamanho);
	$conteudo = addslashes($conteudo);
	fclose($fp);

	//echo "<script>alert('TO FAZENDO O SE...')</script>";

	try {
		$queryAtualizacao = $conexao->prepare("UPDATE tbl_imagem SET evento = '$titulo', descricao = '$descricao', nome_imagem = '$nome', tamanho_imagem = '$tamanho', tipo_imagem = '$tipo', imagem = '$conteudo' WHERE codigo = $codigo");
			
		$queryAtualizacao->execute();
			echo "<script>window.location.href='form_resultados.php' </script>";

		} catch (SQLException $e){
			echo "<script>alert('ERRO AO ATUALIZAR, VERIFIQUE OS DADOS...'); window.location.href='editar_imagem.php' </script>";
		}

} else {

	//echo "<script>alert('TO FAZENDO O SENÃO...')</script>";

	try {
		$queryAtualizacao = $conexao->prepare("UPDATE tbl_imagem SET evento = '$titulo', descricao = '$descricao' WHERE codigo = $codigo");
			
		$queryAtualizacao->execute();
			echo "<script>window.location.href='pg_resultados.php' </script>";

		} catch (SQLException $e){
			echo "<script>alert('ERRO AO ATUALIZAR, VERIFIQUE OS DADOS...'); window.location.href='_form_editar_imagem.php' </script>";
		}

}





?>