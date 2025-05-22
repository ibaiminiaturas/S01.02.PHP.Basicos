<!--Sprint 1. Chapter 2. Level 2. Exercise 1

Escribe una función que determine la cantidad total a pagar por una llamada telefónica según las siguientes premisas:

Toda llamada que dure menos de 3 minutos tiene un coste de 10 céntimos.
Cada minuto adicional a partir de los 3 primeros es un paso de contador y cuesta 5 céntimos.-->

<?php

function callPrice(int $duration): float
{
    $callPrice = 0.10;
    $extra = ($duration - 3) * 0.05 > 0 ? ($duration - 3) * 0.05 : 0;
    $callPrice += $extra;

    return $callPrice;
}


echo "El precio de una llama de 68 minutos es: " . CallPrice(68) . "€." . PHP_EOL;
echo "El precio de una llama de 4 minutos es: " . CallPrice(5) . "€." . PHP_EOL;
echo "El precio de una llama de 2 minutos es: " . CallPrice(2) . "€." . PHP_EOL;
echo "El precio de una llama de 165 minutos es: " . CallPrice(165) . "€." . PHP_EOL;
?>