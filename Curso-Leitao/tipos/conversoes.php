<div class="titulo">Conversões</div>

<?php

echo '<br>' . is_int(PHP_INT_MAX);
echo '<br>';
var_dump(PHP_INT_MAX + 1);
echo '<br>';
var_dump(1+1.0);
echo '<br>';
var_dump((float) 3 );
echo '<br>';
var_dump((int) 2.8);
echo '<br>';
//truncando número considerando apenas o inteiro... o segundo parâmetro diz respeito a base númerica utilizada (decimal, binária, etc)
var_dump(intval(2.8, 10));
echo '<br>';
var_dump(intval('1000010001', 2)); // mesmo o primeiro parãmetro sendo string, fará a conversão.
echo '<br>';
var_dump(intval(1.8)); // no intval, por padrão, o segundo parâmetro é a base decimal.. então é facultativo o uso do segundo parâmetro
echo '<br>';
var_dump((int) round(2.8));
echo '<br>';
//operações com string
var_dump (3 + "2"); // o PHP vai converter a string para inteiro, pois o sinal de "+" não serve para concatenar no PHP.