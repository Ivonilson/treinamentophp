<div class="titulo">Atribuições</div>

<?php

$title = 'Atribuições';

$numero = 10;
echo '<br>' . $numero;

$numero = $numero  - 1;
echo '<br>' . $numero;

$numero = $numero + 1.5;
echo '<br>' . $numero;

//pós incremento
$numero++;
echo '<br>' . $numero;

//pré incremento
++$numero;
echo '<br>' . $numero;

//atribuição subtrativa
$numero -= 5;
echo '<br>' . $numero;

//atribuição aditiva
$numero += 15;
echo '<br>' . $numero;

//atribuição multiplicativa
$numero *= 10;
echo '<br>' . $numero;

//atribuição divisiva
$numero /= 10;
echo '<br>' . $numero;

//atribuição modulo
$numero %= 5;
echo '<br>' . $numero;

$texto = 'Este é um texto';
$texto = $texto . ' Acrescimo de texto';
echo '<br>' . $texto;

$texto .= ' colocando mais texto concatenado';
echo '<br>' . $texto;

//$variavelInexistente = 'valor inexistente';
//echo '<br>' . $variavelInexistente;

//definindo um valor default para uma variável
$valor = $variavelInexistente ?? 'valor default';
echo '<br>' . $valor;
















