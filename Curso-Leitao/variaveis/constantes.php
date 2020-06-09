<div class="titulo">Constantes</div>

<?php

//uma das formas de definir um constante
define('TAXA_DE_JUROS', 5.9);
echo TAXA_DE_JUROS;

//outra forma de definir uma constante
const NOVA_TAXA = 2.5;
echo '<br>' . NOVA_TAXA;

$valorVariavel = 2.8;
//a forma de definição de constantes abaixo não aceita atribuir uma variável para valoração da constante
//const NOVISSIMA_TAXA = $valorVariavel;

//a forma de definição de constantes abaixo aceita atribuir uma variável para valoração da constante
define('NOVISSIMA_TAXA', $valorVariavel);
echo '<br>' . NOVISSIMA_TAXA;

//constantes prédefinidas do PHP
echo '<br>' . PHP_VERSION;
echo '<br>' . PHP_INT_MAX;
echo '<br>' . __LINE__;
echo '<br>' . __FILE__;
echo '<br>' . __DIR__;