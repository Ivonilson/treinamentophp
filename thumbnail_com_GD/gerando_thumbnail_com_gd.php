<?php
//header("Content-type: image/jpeg");

$file = "imageTeste.jpg";


//Nova largura e altura definidas para a imagem
$new_width = 580;
$new_height = 400;

list($old_width, $old_height) = getimagesize($file);

$new_image = imagecreatetruecolor($new_width, $new_height);
$old_image = imagecreatefromjpeg($file);

imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_height);

imagejpeg($new_image, "nova.jpg");

imagedestroy($old_image);
imagedestroy($new_image);


?>