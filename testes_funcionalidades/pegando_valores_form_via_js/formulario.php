<?php 
	include "teste_curl.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title>FORMULÁRIO TESTE</title>
</head>
<body>
	<form method="post" name="form">
		
		Logradouro: <input type="text" name="ipt_logradouro">
		<br><br>
		Bairro: <input type="text" name="ipt_bairro">
		<br><br>
		Localidade: <input type="text" name="ipt_localidade">
		<br><br>
		UF: <input type="text" name="ipt_uf">
		<br><br>
		CEP: <input type="text" name="ipt_cep" id="cep">&nbsp<input type = "submit" value="Enviar">

	</form>
</body>
</html>