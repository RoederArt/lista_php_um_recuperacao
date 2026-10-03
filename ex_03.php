<?php


function mascararCpf($cpf){

    $somenteNumeros = preg_replace("/[^0-9]/", "", $cpf);

    $ultimosQuatro = substr($somenteNumeros, -4);

    $quantidadeOculta = strlen($somenteNumeros) - 4;

    $mascara = str_repeat("*", $quantidadeOculta);

    $cpfMascarado = $mascara . $ultimosQuatro;

    return $cpfMascarado;

}

$cpf_usuario = "123.456.789-10";

echo "CPF original: $cpf_usuario <br>";
echo "CPF mascarado: " . mascararCpf($cpf_usuario) . "<br>";

?>