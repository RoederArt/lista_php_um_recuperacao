<?php

function analisarTexto($texto){

    $quantidadePalavras = str_word_count($texto);

    $quantidadeCaracteres = strlen($texto);

    $textoMinusculo = strtolower($texto);

    $quantidadeVogais = 0;
    $quantidadeConsoantes = 0;
    $vogais = ["a", "e", "i", "o", "u"];

    for ($i = 0; $i < strlen($textoMinusculo); $i++){

        $caractere = $textoMinusculo[$i];

        if (ctype_alpha($caractere)){

            if (in_array($caractere, $vogais)){
                $quantidadeVogais++;
            } else {
                $quantidadeConsoantes++;
            }

        }

    }

    return [
        "palavras" => $quantidadePalavras,
        "caracteres" => $quantidadeCaracteres,
        "vogais" => $quantidadeVogais,
        "consoantes" => $quantidadeConsoantes
    ];

}

$texto_usuario = "Estudar PHP todos os dias é o caminho para o sucesso";

$resultado = analisarTexto($texto_usuario);

echo "Texto: $texto_usuario <br>";
echo "Quantidade de palavras: " . $resultado["palavras"] . "<br>";
echo "Quantidade de caracteres: " . $resultado["caracteres"] . "<br>";
echo "Quantidade de vogais: " . $resultado["vogais"] . "<br>";
echo "Quantidade de consoantes: " . $resultado["consoantes"] . "<br>";

?>