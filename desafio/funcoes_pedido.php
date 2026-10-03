<?php

function calcularSubtotalProduto($produto){
    return $produto["quantidade"] * $produto["valor_unitario"];
}

function calcularSubtotais($produtos){

    $produtosComSubtotal = [];

    foreach ($produtos as $produto){

        $produto["subtotal"] = calcularSubtotalProduto($produto);
        $produtosComSubtotal[] = $produto;
    }

    return $produtosComSubtotal;

}

function calcularValorTotal($produtosComSubtotal){

    $valorTotal = 0;

    foreach ($produtosComSubtotal as $produto){
        $valorTotal += $produto["subtotal"];
    }

    return $valorTotal;

}

function calcularDesconto($valorTotal){

    if ($valorTotal > 1000){
        return $valorTotal * 0.15;
    } elseif ($valorTotal > 500){
        return $valorTotal * 0.10;
    }

    return 0;

}

function calcularFrete($valorComDesconto){

    if ($valorComDesconto > 800){
        return 0;
    } elseif ($valorComDesconto > 300){
        return 20;
    }

    return 35;

}

function buscarProdutoMaisCaro($produtos){

    $maisCaro = $produtos[0];

    foreach ($produtos as $produto){
        if ($produto["valor_unitario"] > $maisCaro["valor_unitario"]){
            $maisCaro = $produto;
        }
    }

    return $maisCaro;

}

function buscarMaiorSubtotal($produtosComSubtotal){

    $maiorSubtotal = $produtosComSubtotal[0];

    foreach ($produtosComSubtotal as $produto){
        if ($produto["subtotal"] > $maiorSubtotal["subtotal"]){
            $maiorSubtotal = $produto;
        }
    }

    return $maiorSubtotal;

}

function processarPedido($produtos){

    $produtosComSubtotal = calcularSubtotais($produtos);

    $valorTotal = calcularValorTotal($produtosComSubtotal);

    $valorDesconto = calcularDesconto($valorTotal);
    $valorComDesconto = $valorTotal - $valorDesconto;

    $valorFrete = calcularFrete($valorComDesconto);

    $valorFinal = $valorComDesconto + $valorFrete;

    $quantidadeTotalItens = 0;
    foreach ($produtosComSubtotal as $produto){
        $quantidadeTotalItens += $produto["quantidade"];
    }

    return [
        "produtos" => $produtosComSubtotal,
        "quantidade_produtos_diferentes" => count($produtosComSubtotal),
        "quantidade_total_itens" => $quantidadeTotalItens,
        "produto_mais_caro" => buscarProdutoMaisCaro($produtosComSubtotal),
        "produto_maior_subtotal" => buscarMaiorSubtotal($produtosComSubtotal),
        "valor_total" => $valorTotal,
        "valor_desconto" => $valorDesconto,
        "valor_frete" => $valorFrete,
        "valor_final" => $valorFinal
    ];

}

?>