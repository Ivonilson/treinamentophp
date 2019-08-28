<?php
//Fone: https://celke.com.br/artigo/como-fazer-upload-multiplo-com-php

$diretorio = "imagens";
$imgAlvo = array();
$newWidth = 580;
$newHeight = 360;



if(!is_dir($diretorio)){
	mkdir($diretorio);
} 

$arquivo = isset($_FILES['files']) ? $_FILES['files'] : FALSE;

for ($controle = 0; $controle < count($arquivo['name']); $controle++ ){
	$destino = $diretorio.DIRECTORY_SEPARATOR."0".$controle."-".$arquivo['name'][$controle];

	if(move_uploaded_file($arquivo['tmp_name'][$controle], $destino)){
		echo "<br>Arquivo $controle salvo com sucesso.";
	} else {
			echo "Erro ao realizar upload.";
	}

	$contador = 0;

	while ($contador < count($arquivo)) {
		list($newWidthOriginal, $newHeightOriginal) = getimagesize("imagens".DIRECTORY_SEPARATOR."00-1.jpg");

		$ratioOriginal = $newWidthOriginal/$newHeightOriginal;

		if($newWidth/$newHeight > $ratioOriginal){
			$newWidth = $newHeight*$ratioOriginal;
		} else {
			$newHeight = $newWidth/$ratioOriginal;
		}

		$imgRedimensionada = imagecreatetruecolor($newWidth, $newHeight);
		$image = imagecreatefromjpeg($diretorio.DIRECTORY_SEPARATOR."0".$controle."-".$arquivo['name'][$controle]);
		$imgPronta = imagecopyresampled($imgRedimensionada, $image, 0, 0, 0, 0, $newWidth, $newHeight, $newWidthOriginal, $newHeightOriginal);

		imagedestroy($image);

		$contador++;

	}

}



?>