<div class="titulo">Tipo String</div>

<?php

echo 'Eu uma string';
echo '<br>';
var_dump("Eu também"); // com essa codificação com acentos, o acento conta como um caracter
echo '<br>';

//concatenação em PHP
//é utilizado o ponto (.)
echo "Nós tambem". ' somos';

//funções para strings
echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MINIMIZADO');
echo '<br>' . ucfirst('só a primeira letra');
echo '<br>' . ucwords('primeira letra de todas as palavras');
echo '<br>' . strlen('Quantos caracteres?');
echo '<br>' . mb_strlen('eu também'); // conta os caracteres sem considerar os acentos --- também aceita como argumento o tipo da codificação
echo '<br>' . substr('Só uma parte do texto', 7, 6); // inicia a leitura a partir do indice 7. A partir do 6 avança mais 6 posições, não lendo a 6ª.
echo '<br>' . substr('Só uma parte do texto', 7); // Se o segundo parâmetro não for definido, a leitura inicia no 7 e vai até o final.
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso'); /* substitui a palavra alvo repassada no primeiro argumento pela palavra no 
segundo argumento, na frase terceiro argumento.*/
