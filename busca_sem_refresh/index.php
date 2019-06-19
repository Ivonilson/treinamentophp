<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="devide-width-device, initial-scale = 1, shrink-to-fit = no">
	<title>Novo Lar Imob.</title>
</head>
<body>

	<!--CEP --->
	<form method="get" id="form-envio">
		<label for="cep">CEP</label>&nbsp&nbsp
		<input type ="text" class="form-control" id="cep" name="cep" required maxlength="9" placeholder="Digite o CEP"><label class="resultado"></label>
		<br><br>
		<input type="text" class="resultado">
		<!-- BOTÃO DE SUBMIT --->
		<input type="submit" name="enviar" value="ENVIAR">

		<!--LIMPAR FORMULÁRIO   -->
		<input type="reset" value="LIMPAR">
	</form>

<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="jsabg.js"></script>
<script type="text/javascript" src="jquery.mask.js"></script>
</body>
</html>