<div class="titulo">Desafio Indice</div>

<?php
$lista = array (
    1,
    4 => 2,
    3 => 3,
    'a' => 4,
    5,
    '9' => 6,
    '06' => 7,
    0 => 8
);

//Qual será a saida?
print_r($lista);
/**
 * 0 =8
 * 4 = 2
 * 3 = 3
 * 'a' = 4
 * 5 = 5
 * '9' = 6
 * '06' = 7
 */