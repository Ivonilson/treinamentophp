<div class="titulo">Operadores Relacionais</div>

<?php

//operador relacional de comparação
var_dump(1 == 1);
echo '<br>';
var_dump(1 > 1);
echo '<br>';
var_dump(1 < 1);
echo '<br>';
var_dump(1 >= 1);
echo '<br>';
var_dump(4 <= 23);
echo '<br>';
var_dump(1 != 1);
echo '<br>';
var_dump(1 <> 1);
echo '<br>';

//operador relacional de igualdade estrita
var_dump('1' === 1);
echo '<br>';
var_dump('1' !== 1);
echo '<hr>';

//Usando relacionais no IF ELSE
$idade = 12;
if($idade < 18){
    echo "Menor de idade = $idade anos<br>";
} elseif($idade <= 59){
    echo "Adulto = $idade anos<br>";
} else {
    echo "Terceira idade = $idade anos<br>";
}



