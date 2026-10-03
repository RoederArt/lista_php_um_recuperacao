<?php

function converterTemperatura($valor, $origem, $destino){

    switch ($origem){

        case "celsius":
            $emCelsius = $valor;
            break;

        case "fahrenheit":
            $emCelsius = ($valor - 32) * 5 / 9;
            break;

        case "kelvin":
            $emCelsius = $valor - 273.15;
            break;

        default:
            return "Escala de origem inválida!";

    }

    switch ($destino){

        case "celsius":
            $resultado = $emCelsius;
            break;

        case "fahrenheit":
            $resultado = ($emCelsius * 9 / 5) + 32;
            break;

        case "kelvin":
            $resultado = $emCelsius + 273.15;
            break;

        default:
            return "Escala de destino inválida!";

    }

    return $resultado;

}

$valor_usuario = 100;
$origem_usuario = "celsius";
$destino_usuario = "fahrenheit";

echo "$valor_usuario graus $origem_usuario equivalem a: ";
echo converterTemperatura($valor_usuario, $origem_usuario, $destino_usuario);
echo " graus $destino_usuario <br>";

?>