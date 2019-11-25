<?php 
	
	//lê o arquivo e joga as linhas para um array
	$arquivo = file('arquivos/os.txt');

	echo $arquivo[10];
	echo "<br>";
	echo $arquivo[11];
?>