<?php

require_once "funcoes.php";

echo "1) Calcular IMC (peso 70kg, altura 1.75m): ";
echo number_format(calcularImc(70, 1.75), 2) . "<br>";

echo "2) Validar e-mail 'teste@exemplo.com': ";
echo validarEmail("teste@exemplo.com") ? "Válido" : "Inválido";
echo "<br>";

echo "3) Gerar senha aleatória (10 caracteres): ";
echo gerarSenhaAleatoria(10) . "<br>";

echo "4) Contar vogais em 'Programação em PHP': ";
echo contarVogais("Programação em PHP") . "<br>";

echo "5) Inverter texto 'Biblioteca de Funções': ";
echo inverterTexto("Biblioteca de Funções") . "<br>";

echo "6) Calcular idade (nascido em 2000-05-10): ";
echo calcularIdade("2000-05-10") . " anos<br>";

echo "7) Converter R$ 100,00 para dólar (cotação 5.20): ";
echo "$ " . number_format(converterMoeda(100, 5.20), 2) . "<br>";

echo "8) Formatar telefone '11987654321': ";
echo formatarTelefone("11987654321") . "<br>";

echo "9) Gerar saudação conforme o horário atual: ";
echo gerarSaudacao() . "<br>";

echo "10) Validar senha forte 'Senha@123': ";
echo validarSenhaForte("Senha@123") ? "Senha forte" : "Senha fraca";
echo "<br>";

?>