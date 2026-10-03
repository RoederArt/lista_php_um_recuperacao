<?php

require_once "funcoes_pedido.php";

$pedido_usuario = [
    ["nome" => "Notebook", "quantidade" => 1, "valor_unitario" => 700],
    ["nome" => "Mouse", "quantidade" => 2, "valor_unitario" => 50],
    ["nome" => "Teclado", "quantidade" => 1, "valor_unitario" => 150],
];

$relatorio = processarPedido($pedido_usuario);

echo "<h3>Relatório do Pedido</h3>";

echo "Subtotal de cada produto:<br>";
foreach ($relatorio["produtos"] as $produto){
    echo "- " . $produto["nome"] . " (qtd: " . $produto["quantidade"] . " x R$ " .
        number_format($produto["valor_unitario"], 2, ",", ".") . ") = R$ " .
        number_format($produto["subtotal"], 2, ",", ".") . "<br>";
}

echo "<br>Quantidade de produtos diferentes: " . $relatorio["quantidade_produtos_diferentes"] . "<br>";
echo "Quantidade total de itens comprados: " . $relatorio["quantidade_total_itens"] . "<br>";
echo "Produto mais caro (valor unitário): " . $relatorio["produto_mais_caro"]["nome"] . "<br>";
echo "Produto com maior subtotal: " . $relatorio["produto_maior_subtotal"]["nome"] . "<br>";
echo "Valor total da compra: R$ " . number_format($relatorio["valor_total"], 2, ",", ".") . "<br>";
echo "Valor do desconto aplicado: R$ " . number_format($relatorio["valor_desconto"], 2, ",", ".") . "<br>";
echo "Valor do frete: R$ " . number_format($relatorio["valor_frete"], 2, ",", ".") . "<br>";
echo "Valor final da compra: R$ " . number_format($relatorio["valor_final"], 2, ",", ".") . "<br>";

?>