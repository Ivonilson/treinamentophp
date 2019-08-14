<?php

//header('Content-type:image/jpg');

if(! extension_loaded('imagick')){
	echo "Extensão não habilitada<br>";
} else {
	echo "Extensão Imagick habilitada para uso<br>";
}

$upload = $_SERVER['DOCUMENT_ROOT'].'/img1.jpg';

$imagem = new Imagick($upload);

$imagem->thumbnailImage(100, 100, true);

$imagem->writeImage('C:\xampp\htdocs\Treinamentos\TreinamentoPHP\imagemagick\thumb100.jpg');

?>