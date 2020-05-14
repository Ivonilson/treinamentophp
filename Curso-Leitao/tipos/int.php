<div class="titulo">Tipo Inteiro</div>

<?php
echo 11;
echo "<br>";


var_dump(11);
echo "<br>";

//constante interna do PHP que mostra o inteiro máximo suportado pela máquina onde está sendo executado o php
echo PHP_INT_MAX, '<br>'; //no PHP existe apenas um tipo geral de inteiro.

//constante interna do PHP que mostra o inteiro mínimo executado pela máquina.
echo PHP_INT_MIN, '<br>';

//quando se coloca o valor zero na frente do inteiro, conforme no exemplo abaixo, é o mesmo que se dizer que o número abaixo está na base octal. A base octal vai de 0 a 7
echo 017; //número em base octal
echo "<br>";
echo 0b11; //número em base binária - apenas 0 e 1 com letras
echo "<br>";
echo 0x11; //número em base hexadecimal - Regra: de 0 a f