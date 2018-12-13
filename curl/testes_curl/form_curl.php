<?php
 include "model_curl.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title>TESTES COM CURL</title>
	 <script type="text/javascript" src="../bootstrap/js/jquery-1.11.1.min.js"></script>
</head>
<body>

	<script src="../bootstrap/js/jquery.mask.js"></script>

	<script>
		$(document).ready(function(){

			var $cep = $("#cep");
			$cep.mask('99999-999', {reverse : false});

		});

	</script>

	<form method="get">
		<label>CIDADE: </label><input type="text" name="ipt_cidade" value="<?=strtoupper(@$dados->localidade)?>">
		<br><br>
		<label>UF: </label><input type="text" name="ipt_uf" value="<?=strtoupper(@$dados->uf)?>">
		<br><br>
		<label>LOGRADOURO: </label><input type="text" name="ipt_logradouro" value="<?=strtoupper(@$dados->logradouro)?>">
		<br><br>
		<label>BAIRRO: </label><input type="text" name="ipt_bairro" value="<?=strtoupper(@$dados->bairro)?>">
		<br><br>
		<label>CEP: </label><input type="text" id="cep" name="ipt_cep" maxlength="9" placeholder="Digite o CEP" value="<?=@$cep?>">
		<br><br>
		<button type="submit">Enviar</button><input type="reset" value="Limpar" onclick="<?=limpar()?>"">
	</form>

<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../bootstrap/js/js.main"></script>
</body>
</html>