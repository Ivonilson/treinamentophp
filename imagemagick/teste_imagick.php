<?php

if(! extension_loaded('imagick')){
	echo "Extensão não habilitada";
} else {
	echo "Extensão Imagick habilitada para uso";
}

echo phpinfo();

$imagemOriginal = $_SERVER['DOCUMENT_ROOT'].'/img1.jpg';

$imagemRedimensionada = new Imagick();

$imagemRedimensionada->pingImage($imagemOriginal);

$imagemRedimensionada->readImage($image);

$imagemRedimensionada->thumbnailImage(200, 200, true);

$imagemRedimensionada->writeImage($_SERVER['DOCUMENT_ROOT'].'/THUMB_imagem.jpg');

$imagemOriginal->destroy();
?>