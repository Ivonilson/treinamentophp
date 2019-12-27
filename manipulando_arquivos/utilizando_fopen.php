<?php  

	

	if($arquivoAberto = fopen('arquivos/os.TXT', 'r')){
		echo "<br>Arquivo aberto com sucesso.";
		if(feof($arquivoAberto)){
			echo "<br>Ponteiro no fim do arquivo.";
		} else {
			echo "<br>Não está com o ponteiro no final do arquivo.";
		}
	} else {
		echo "<br>Erro ao abrir arquivo.";
	}

	$dadosArquivo = fgets($arquivoAberto, 500);
	echo "<br>$dadosArquivo";

?>