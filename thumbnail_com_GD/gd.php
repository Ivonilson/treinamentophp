<?php

$fileName = 'imageTeste.jpg';

//echo "<img src = $fileName />";

$width = 500;
$height = 360;

list($width_origin, $height_origin) = getimagesize($fileName);

$ratio_origin = $width_origin/$height_origin;

if($width/$height > $ratio_origin){
	$width = $height*$ratio_origin;
} else {
	$height = $width/$ratio_origin;
}

$image_red = imagecreatetruecolor($width, $height);
$image = imagecreatefromjpeg($fileName);
imagecopyresampled($image_red, $image, 0, 0, 0, 0, $width, $height, $width_origin, $height_origin);

imagejpeg($image_red, 'nova9.jpg', 50);

?>