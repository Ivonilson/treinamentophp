<div class="titulo">Desafio Equação</div>

<?php
$a = 6;
$b = 3;
$c = 2;
$d = 1;
$e = 5;
$f = 7;
$g = 10;

$primeiraParte =  $a * ($b + $c);
$primeiraParte = pow($primeiraParte, $c);
$primeiraParte = $primeiraParte / ($b * $c);

$segundaParte = (abs($d - $e) * abs($c - $f)) / $c;
$segundaParte = pow($segundaParte, $c);

$resultado = pow($primeiraParte - $segundaParte, $b) / pow($g, $b);

echo "<br>" . "O Resultado final é " . $resultado;

