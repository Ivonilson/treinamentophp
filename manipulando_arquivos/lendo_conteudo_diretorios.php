<?php
	/*Declarando variável que irá receber o resultado do scaneamento do direitório*/
	/*"scandir"Função que scaneia o diretório*/
	$images = scandir("images");

	$dados = array();

	//verificando o resultando do scaneamento com var_dump
	//var_dump($images);	

	/*O scandir retorna uma coleção de dados (array), sendo assim, podemos utilizando o foreach para recuperar informações dessa coleção*/
	foreach ($images as $img) {
		/*a função in_array faz a busca dentro de um array. No código se for TRUE para os parâmetros passados no in_array, executa o código entre chaves do if (isto está sendo feito para que o .(ponto) e o .. (ponto ponto) sejam desconsiderados no retorno dos dados, pois são parâmetros de navegação dentro de diretórios.*/
		if(!in_array($img, array(".", ".."))){
			/*montando o nome do arquivo*/
			$filename = "images".DIRECTORY_SEPARATOR.$img;
			$info = pathinfo($filename);
			$info["size"] = filesize($filename);
			$info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
			$info["url"] = "http:".DIRECTORY_SEPARATOR."localhost".DIRECTORY_SEPARATOR."treinamentophp".DIRECTORY_SEPARATOR."manipulando_arquivos".DIRECTORY_SEPARATOR.$filename;

			array_push($dados, $info);

			/*verificando o conteúdo retornado pela função pathinfo()*/
			//var_dump($info);
		}
	}

	//transformando o array no formato json
	echo json_encode($dados);

?>