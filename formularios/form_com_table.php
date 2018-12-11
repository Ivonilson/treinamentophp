<?php 
//formulário organizado com table

?>
<!DOCTYPE html>
<html>
<head>
	<title>FORMULÁRIO ORGANIZADO COM TABELA</title>
</head>
<body>
	<form name="meu_formulario" method="post" action="form_gravar.php" enctype="multpart/form-data">
		<table border="1" width="400" bgcolor="whitesmoke" style="border-collapse: collapse">
			
			<tr>
				<td valign=top width="140px"><b><font face="Arial">Nome</font></b></td>
				<td><input type="text" name="nome" maxlength="40" size="14"></td>
			</tr>
			<tr>
				<td valign=top width="140px"><b><font face="Arial">Senha</font></b></td>
				<td><input type="password" name="senha" maxlength="40" size="14"></td>
			</tr>
			<tr>
				<td valign=top width="140px"><b><font face="Arial">Sexo</font></b></td>
				<td>
					<input type="radio" name="sexo" value="M" checked="1">Masculino<br>
					<input type="radio" name="sexo" value="F">Feminino<br>
				</td>
			</tr>
			<tr>
				<td valign=top width="140px"><b><font face="Arial">Religião</font></b></td>
				<td>
					<select name="religiao">
						<option value="0">Selecione</option>
						<option value="C">Católica</option>
						<option value="E">Evangélica</option>
						<option value="U">Universal</option>
					</select>
				</td>				
			</tr>
			<tr>
				<td valign=top width="140px"><b><font face="Arial">Idiomas</font></b>
				</td>
				<td>
					<input type="checkbox" name="idiomas[]" value="E">Inglês<br>
					<input type="checkbox" name="idiomas[]" value="S">Espanhol<br>
					<input type="checkbox" name="idiomas[]" value="I">Italiano<br>
					<input type="checkbox" name="idiomas[]" value="F">Francês<br>
				</td>					
			</tr>
			<tr>
				<td valign=top width="140px"><b><font face="Arial">Estilo</font></b>
				</td>
				<td>
					<select name="estilo[]" multiple>
						<option value="C">Clássico</option>
						<option value="T">Contemporâneo</option>
						<option value="A">Alternativo</option>
						<option value="E">Elegante</option>
					</select>
				</td>					
			</tr>
			<tr>
				<td valign=top width="140px"><b><font face="Arial">Fotografia</font></b>
				</td>
				<td>
					<input type="file" name="fotografia">
				</td>					
			</tr>
			<tr>
				<td valign=top width="140px"><b><font face="Arial">Currículo</font></b>
				</td>
				<td>
					<textarea name="curriculo" rows="4" cols="40">Digite o currículo aqui...</textarea>
				</td>					
			</tr>
		</table>
		<input type="submit" value="Gravar">
		<input type="reset" value="Limpar">
		<input type="button" value="botao" onclick="alert('teste 123')">
	</form>
</body>
</html>