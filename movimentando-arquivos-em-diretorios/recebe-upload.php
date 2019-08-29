<?php
//Fone: https://celke.com.br/artigo/como-fazer-upload-multiplo-com-php

$diretorio = "imagens";
$pastaMov = "img-r";
$newWidth = 500;
$newHeight = 360;



if(!is_dir($diretorio)){
	mkdir($diretorio);
} 

$arquivo = isset($_FILES['files']) ? $_FILES['files'] : FALSE;

for ($controle = 0; $controle < count($arquivo['name']); $controle++ ){
	$destino = $diretorio.DIRECTORY_SEPARATOR.$controle.$arquivo['name'][$controle];

	if(move_uploaded_file($arquivo['tmp_name'][$controle], $destino)){
		echo "<br>Arquivo $controle salvo com sucesso.";
	} else {
			echo "Erro ao realizar upload.";
	}

	list($newWidthOriginal, $newHeightOriginal) = getimagesize("imagens/".$controle.$arquivo['name'][$controle]);

	$ratioOriginal = $newWidthOriginal/$newHeightOriginal;

		if($newWidth/$newHeight > $ratioOriginal){
			$newWidth = $newHeight*$ratioOriginal;
		} else {
			$newHeight = $newWidth/$ratioOriginal;
		}

		$imgRedimensionada = imagecreatetruecolor($newWidth, $newHeight);
		$image = imagecreatefromjpeg($diretorio.DIRECTORY_SEPARATOR.$controle.$arquivo['name'][$controle]);
		imagecopyresampled($imgRedimensionada, $image, 0, 0, 0, 0, $newWidth, $newHeight, $newWidthOriginal, $newHeightOriginal);

		imagejpeg($imgRedimensionada, $controle.'r'.'.jpeg', 75);

		imagedestroy($image);
		imagedestroy($imgRedimensionada);

		if(copy($controle.'r.jpeg', $pastaMov.DIRECTORY_SEPARATOR.$controle.'r.jpeg')){
			echo "Copiado com sucesso.";
		} else {
			echo "Não copiou.";
		}

		unlink($controle.'r'.'.jpeg');
		//unlink("imagens/".$controle.$arquivo['name'][$controle]);

}


?>