<!--Sprint 1. Chapter 2. Level 3. Exercise 1
  La criba de Eratóstenes es un algoritmo pensado para encontrar números primos dentro de un intervalo dado.
  Basándote en la información del enlace adjunto, implementa la criba de Eratóstenes dentro de una función,
  de tal forma que podamos invocar la función para un número concreto.
-->

<?php
function eratostenesNumber(int $number): array
{
  $numbers = range(2, $number);
  $dict = array_reduce(
    array_values($numbers),
    fn($carry, $i) => $carry + [$i => false],
    []
  );

  $index = 2;

  do {
    if (!$dict[$index]) {
      for ($i = $index; $i <= $number; $i++) {
        if ($i % $index == 0 && $i !== $index) {
          $dict[$i] = true;
        }
      }
      $index++;
    } else {
      $index++;
    }
  }
  while ($index * $index < $number);

  return array_keys($dict, false);
}

$data = eratostenesNumber(20);

var_dump($data);

?>