<!-- Sprint 1. Chapter 2. Level 2. Exercise 2

Imagina que estamos en una tienda donde se vende:

Chocolate: 1 euro
Chiclos: 0,50 euros
Caramelos: 1,50 euros
Implementa un programa que permita añadir cálculos a un total de compras de ese tipo. Por ejemplo, que si compramos:

2 chocolates, 1 de chicles y 1 de caramelos, tengamos un programa que permita ir añadiendo los subtotales a un total, tal que así:

función(2 chocolates) + función(1 de chicles) + función(1 de carmelos) = 2 + 0.5 + 1.5

Siendo, por tanto, el total, 4.
-->

<?php


function addToShoppingCart(string $product, int $amount): float
{
    $result = 0;

    switch (strtolower($product)) {
        case "chocolate":
            $result = $amount * 1;
            break;
        case "chiclos":
            $result = $amount * 0.5;
            break;
        case "caramelos":
            $result = $amount * 1.5;
            break;
    }

    return $result;
}

$totalExpense = addToShoppingCart("chocOLATE", 4) + addToShoppingCart("CHICLOS", 1) + addToShoppingCart("caramelos", 3);

echo "El gasto total en azucares de los malos es: " . $totalExpense . "€." . PHP_EOL;


?>