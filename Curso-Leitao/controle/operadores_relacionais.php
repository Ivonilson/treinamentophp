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
//diferente
var_dump(1 != 1);
echo '<br>';
//diferente
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

/*Operador spaceship - Mais utilizado para ordenação - Se o primeiro número for maior que o segundo retorna 1, se forem iguais retorna 0,
se o segundo número for maior, retorna -1*/
echo '<hr>';
var_dump(5 <=> 8);
echo '<hr>';
//Para verificar o retorno booleano de um caractere basta adicionar um duplo sinal de exclamação a frente !!.
var_dump(!!0);



