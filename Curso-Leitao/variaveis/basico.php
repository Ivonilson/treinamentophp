<div class="titulo">Variáveis</div>

<?php 
$numeroA = 13;

echo $numeroA;
echo '<br>';
var_dump($numeroA);

echo '<br>';
$a = 3;
$b = 16;
$soma = $a + $b;
echo $soma;
echo '<br>';
ECHO $soma; // o echo em PHP não é case sensitive... pode ser usado dessa forma que foi apresentado aqui, no entanto o nome das variáveis
//são case sensitive.
echo '<br>';

echo isset($soma); //essa função verifica se uma variável está setada, retornando 1 se estiver setada;
echo '<br>';
var_dump(isset($soma));
echo '<br>';
$qualquer;
var_dump(isset($qualquer));

echo '<br>';

$variavel =10;
echo '<br>';
echo $variavel;

echo '<br>';

$variavel = "Agora sou uma string";
echo '<br>';
echo $variavel;

