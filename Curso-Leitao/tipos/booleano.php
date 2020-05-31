<div class="titulo">Tipo Booleano</div>
<?php

echo TRUE;
echo '<br>';
echo FALSE;

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(False);
echo '<br>' . var_dump('False');// neste caso não é boolean e sim string.
echo '<br>' . is_bool(false);
echo '<br>' . is_bool('true');
echo '<br>' . var_dump((bool)0); // dos números, apenas o zero pode ser convertido para falso booleano. Qualquer outro número será verdadeiro
echo '<br>' . var_dump((float)0);
echo '<br>' . var_dump((bool)""); // string vazia gera um booleano falso
echo '<br>' . var_dump((bool)" "); // string que tenha qualquer caractere, mesmo sendo um espaço, converte para boolean verdadeiro
echo '<br>' . var_dump((bool)"0"); // este e o "" são os únicos cenários em que uma string é convertido para um false boolean


