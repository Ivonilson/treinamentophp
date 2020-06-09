<div class="titulo">If Else</div>

<?php

/*com a sintaxe abaixo (sem uso de chaves), se a condicional atender ao critério, só executará ou deixará de executar 
a primeira sentença de código*/
if(false)
    echo "<br>Serei impresso.";
    echo "<br>Serei impresso novamente.";
/*Já na condicional abaixo (delimitado por chaves), caso atenda ao critério, será executado ou não tudo que estiver no escopo das
chaves*/
if(true) {
    echo "<br>Serei impresso";
    echo "<br>Serei impresso novamente.";
}

if(false){
    echo "<br>Verdadeiro";
} else {
    echo "<br>Falso";
}

if(false){
    echo "<br>Verdadeiro IF";
} else if(false){
    echo "<br>Verdadeiro ELSE IF";
} else {
    echo "<br>False ELSE";
}