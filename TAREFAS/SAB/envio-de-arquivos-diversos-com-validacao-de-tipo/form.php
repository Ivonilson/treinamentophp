<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Formulário de envio de imagens</title>
	<meta charset="utf-8">
</head>
<body>
	<form method="post" enctype="multipart/form-data" action="upload.php">
		<label>Imagens</label>
		<input type="hidden" name="MAX_FILE_SIZE" value="9999999999999"/>
		<input type="file" name="ipt_img">
		<input type="submit" value="Enviar">
	</form>
</body>
</html>

<?php  
	require 'upload.php';

?>