<?php

function gerarSenha($tamanho){

    $letrasMaiusculas = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $letrasMinusculas = "abcdefghijklmnopqrstuvwxyz";
    $numeros = "0123456789";
    $especiais = "!@#$%&*-+";

    $todosCaracteres = $letrasMaiusculas . $letrasMinusculas . $numeros . $especiais;

    $quantidadeDisponivel = strlen($todosCaracteres) - 1;

    $senha = "";

    for ($i = 0; $i < $tamanho; $i++){
        $posicaoAleatoria = rand(0, $quantidadeDisponivel);
        $senha .= $todosCaracteres[$posicaoAleatoria];
    }

    return $senha;

}

$tamanho_usuario = 10;

echo "Senha gerada com $tamanho_usuario caracteres: " . gerarSenha($tamanho_usuario) . "<br>";

?>