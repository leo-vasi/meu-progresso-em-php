<?php

$produtos = [
    ["nome" => "Notebook", "preco" => 3500, "quantidade" => 5],
    ["nome" => "Smartphone", "preco" => 1200, "quantidade" => 8],
    ["nome" => "Tablet", "preco" => 900, "quantidade" => 0], 
    ["nome" => "Monitor", "preco" => 750, "quantidade" => 3],
    ["nome" => "Teclado", "preco" => 150, "quantidade" => 10]
];


$produtos_disponiveis = array_filter($produtos, function($produto) {
    return $produto["quantidade"] > 0;
});


usort($produtos_disponiveis, function($a, $b) {
    return $b["preco"] <=> $a["preco"];
});


foreach ($produtos_disponiveis as &$produto) {
    if ($produto["preco"] > 100) {
        $produto["preco"] *= 0.9;
    }
}
unset($produto);


$total_estoque = array_reduce($produtos_disponiveis, function($total, $produto) {
    return $total + ($produto["preco"] * $produto["quantidade"]);
}, 0);


echo "<h3>Produtos Disponíveis (ordenados por preço decrescente e com desconto aplicado)</h3>";
foreach ($produtos_disponiveis as $produto) {
    echo "Nome: {$produto['nome']} | Preço: R$ " . number_format($produto['preco'], 2, ',', '.') . " | Quantidade: {$produto['quantidade']} <br>";
}

echo "<h3>Total do estoque: R$ " . number_format($total_estoque, 2, ',', '.') . "</h3>";
?>
