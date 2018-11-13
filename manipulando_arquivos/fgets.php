<?php
	/*a função fgets lê uma linha de arquivo aberta pela fopen. a utilização da constante mágica __FILE__ faz com que seja retornado o próprio código fonte da página.*/
	$fd = fopen(__FILE__, "r");
	$linha = 1;
	while(!feof($fd)){
		$buffer = fgets($fd, 4096); //lê uma linha do arquivo
		if($linha > 1){
			echo $buffer;
		}

		$linha ++;
	}

	fclose($fd); //fecha o arquivo

	?>