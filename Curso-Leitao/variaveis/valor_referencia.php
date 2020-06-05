<div class="titulo">Valor vs Referência</div>

<?php

$variavel = 'valor ALTERADO';
echo $variavel;

$variavelValor = $variavel;
echo '<br>' . $variavelValor;

$variavelPorReferencia = &$variavel;
$variavelPorReferencia = 123;
echo "<br>$variavelPorReferencia";
echo "<br>$variavel";