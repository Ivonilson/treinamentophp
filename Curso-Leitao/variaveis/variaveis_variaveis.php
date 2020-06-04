<div class="titulo">Variáveis Variáveis</div>

<?php 

$a = 'valorA';

//Variável variável é quando se cria uma variável com o nome do conteúdo da outra referencial, conforme abaixo. Para chamar usa o nome 
//conforme o conteúdo referenciado ou a variável que tem o conteúdo chamando com $$.
$$a = 'valorAA';

echo '<br>' . $$a;
echo '<br>' . $valorA;
//para que a variável variável seja interpretada em um contexto de interpolação, necessariamente, usa-se as chaves.
echo "<br>{$$a}";

$epa = 'opa';
$opa = 'vish';
