<?php

function estatisticasNumericas($numeros){

    $soma = array_sum($numeros);
    $quantidade = count($numeros);
    $media = $soma / $quantidade;
    $maiorValor = max($numeros);
    $menorValor = min($numeros);

    $numerosOrdenados = $numeros;
    sort($numerosOrdenados);

    $posicaoCentral = floor($quantidade / 2);

    if ($quantidade % 2 == 0){

        $mediana = ($numerosOrdenados[$posicaoCentral - 1] + $numerosOrdenados[$posicaoCentral]) / 2;
    } else {

        $mediana = $numerosOrdenados[$posicaoCentral];
    }

    $quantidadePares = 0;
    $quantidadeImpares = 0;

    foreach ($numeros as $numero){
        if ($numero % 2 == 0){
            $quantidadePares++;
        } else {
            $quantidadeImpares++;
        }
    }

    return [
        "soma" => $soma,
        "media" => $media,
        "maior" => $maiorValor,
        "menor" => $menorValor,
        "mediana" => $mediana,
        "pares" => $quantidadePares,
        "impares" => $quantidadeImpares
    ];

}

$numeros_usuario = [10, 5, 8, 3, 12, 7];

$resultado = estatisticasNumericas($numeros_usuario);

echo "Números: " . implode(", ", $numeros_usuario) . "<br>";
echo "Soma: " . $resultado["soma"] . "<br>";
echo "Média: " . $resultado["media"] . "<br>";
echo "Maior valor: " . $resultado["maior"] . "<br>";
echo "Menor valor: " . $resultado["menor"] . "<br>";
echo "Mediana: " . $resultado["mediana"] . "<br>";
echo "Quantidade de pares: " . $resultado["pares"] . "<br>";
echo "Quantidade de ímpares: " . $resultado["impares"] . "<br>";

?>