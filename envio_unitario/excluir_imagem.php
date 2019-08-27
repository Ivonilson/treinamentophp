<?php 
	require '../conexao_db/conecta.php';

	$codigo = filter_input(INPUT_GET, 'id');

	try{
		$sqlExcluir = $conexao->prepare("DELETE FROM tbl_imagem WHERE codigo = $codigo");
		$sqlExcluir->execute();
		echo "<script>alert('ARQUIVO DELETADO COM SUCESSO'); window.location.href='pg_resultados.php'</script>";

	} catch (PDOException $erro){
		echo "<script>alert('FALHA AO DELETAR O ARQUIVO'); window.location.href='pg_resultados.php'</script>";
	}
	

?>