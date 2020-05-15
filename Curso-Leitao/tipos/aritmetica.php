<div class="titulo">Operações Aritméticas</div>

<?php

echo 1 + 1,'<br>';
var_dump(1+1);
echo "<br>";
var_dump(1+1.0);
echo "<br>";
echo 1 + 2.5;
echo "<br>";
echo 10 * 2;
echo "<br>";
echo 10-2;
echo "<br>";
echo 7/4;
echo "<br>";
echo intdiv(7,4); //o valor será truncado.. vai retornar o valor inteiro.
echo "<br>";
echo round(7/4); // arredondando o resultado
echo "<br>";
echo 7 % 4; // resto da divisão
echo "<br>";
echo 7 / 0; // dá um número infinito INF
echo "<br>";
//echo intdiv(7/0); //gera um erro

//Precedência de operadores
// () ** / * % + -

echo "<br>";
echo 2 + 3 * 4; //primeiro realiza a multiplicação
echo "<br>";
echo (2 + 3) * 4; // faz primeiro o que está nos parênteses
echo "<br>";
echo 2 + 3 * 4 ** 2; // primeiro realiza a potenciação, depois a multiplicação e por fim a soma.
echo "<br>";
echo ((2+3)*4) **2; // primeiro realiza os parênteses mais internos.
