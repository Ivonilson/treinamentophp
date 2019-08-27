<?php
//https://celke.com.br/artigo/como-fazer-upload-multiplo-com-php

//verificando se existe algo sendo enviado por POST
if($_SERVER['REQUEST_METHOD'] === "POST"){

	$files = $_FILES['files'];

	$quant = count($files['name']);

	while ($quant > 0) {

		if($files['error']){
			throw new Exception("Error: ".$files['error']);
			
		}

		$pasta = "uploads";

		if(!is_dir($pasta)){
		mkdir($pasta);
		}


		/*

		if(move_uploaded_file($files['tmp_name'], $pasta.DIRECTORY_SEPARATOR.$files['name'])){
			echo "Arquivo(s) enviado(s) com sucesso.";
		} else {
			throw new Exception("Não foi possível realizar o upload.");
		
		}

		*/

		$cont--;

		}
	}

?>