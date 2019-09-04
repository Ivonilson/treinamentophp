<?php
//exemplo de utilizada da biblioteca instalada: kevinlebrun

require 'vendor/autoload.php';

$slugifier = new \Slug\slugifier();

$titulo = 'Produto Incrível com Várias Cores Disponíveis';

$slug = $slugifier->slugify($titulo);

echo '<p>Titulo Original: '.$titulo . '</p>';

echo '<p> URL do produto (slug): '.$slug.'</p>';


?>