<?php  
require '../conexao_db/conecta.php';

$codigo = filter_input(INPUT_GET, 'id');

$buscaArquivoEditar = $conexao->prepare("SELECT codigo, evento, descricao, nome_imagem FROM tbl_imagem WHERE codigo = $codigo");
$buscaArquivoEditar->execute();
$arquivo = $buscaArquivoEditar->fetch(PDO::FETCH_OBJ);

?>


<!DOCTYPE html>
<html>
<head>
	<title>EDITAR IMAGEM</title>
</head>
<body>
	<form method="post" action="atualiza.php" enctype="multipart/form-data">
		<input type="hidden" name="codigo_imagem" value="<?=$arquivo->codigo?>">
		<input type="text" name="titulo_imagem" value="<?=$arquivo->evento?>">&nbspEDITAR TÍTULO
		<br><br>
		<input type="text" name="descricao_imagem" value="<?=$arquivo->descricao?>">&nbspEDITAR DESCRIÇÃO
		<br><br>
		<input type="hidden" name="MAX_FILE_SIZE" value="99999999">
		<br><br>
		TROCAR IMAGEM&nbsp<input type="file" name="imagem">
		<br><br>
		<input type="submit" value="GRAVAR">
	</form>
</body>
</html>