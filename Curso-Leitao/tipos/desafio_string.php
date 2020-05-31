<div class="titulo">Desafio String</div>

<?php


/*
    Enunciado do desafio
    Avaliando os métodos da documentação da string,
    qual o método que utilizado na posição do texto 'abc' 
    na string '!AbcBcabc' irá retornar o valor 1
*/

// com i, ignorando case sensitive
echo stripos('!AbcBcabc', 'abc');
echo '<br>';
//ou com a função que converte tudo para minúscula
echo strpos(strtolower('!AbcBcabc'), strtolower('abc'));