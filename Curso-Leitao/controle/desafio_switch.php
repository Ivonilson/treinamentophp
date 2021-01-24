<div class="titulo">Desafio SWITCH</div>
<!--
    O exemplo abaixo trata-se de um conversor de KM para milha e vice-versa.
 -->
<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">km > Milha</option>
        <option value="milha-km">Milha > km</option>
        <option value="metro-km">Metros > Km</option>
        <option value="km-metro">Km > Metros</option>
        <option value="cel-fah">Celsius > Fahreinheit</option>
        <option value="fah-cel">Fahreintheit > Celsius</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php
    const FATOR_KM_MILHA = 0.621371;
    const FATOR_METRO_KM = 1000;
    const FATOR_CEL_FAH = 1.8;

    $param = $_POST['param'] ?? 0;
    switch($_POST['conversao'] ?? '-') {
        case 'km-milha':
            $distancia = $param * FATOR_KM_MILHA;
            $mensagem = "$param Km = $distancia Milhas";
            break;
        case 'milha-km':
            $distancia = $param / FATOR_KM_MILHA;
            $mensagem = "$param Milhas = $distancia km";
            break;
        case 'metro-km':
            $distancia = $param / FATOR_METRO_KM;
            $mensagem = "$param Metros = $distancia km";
            break;
        case 'km-metro':
            $distancia = $param * FATOR_METRO_KM;
            $mensagem = "$param km = $distancia metros";
            break;
        case 'cel-fah':
            $conversao = $param * FATOR_CEL_FAH + 32;
            $mensagem = "{$param}° Celsius = {$conversao}° Fahrenheit";
            break;
        case 'fah-cel':
            $conversao = ($param - 32) * (1 / FATOR_CEL_FAH);
            $mensagem = "{$param}° Fahrenheit = {$conversao}° Celsius";
            break;
        default: 
            $mensagem = "Nenhum valor calculado!";
    };

    echo "<p>$mensagem</p>";