<!--Sprint 1 Exercise 4. Ibai Ramirez
    Haz un programa que implemente una función en la que se cuente hasta un número determinado. 
    Si no se incluye un número determinado, el número deberá tener un valor por defecto igual a 10. 
    Además, esta función debe tener un segundo parámetro que indique de cuánto a cuánto se cuenta(De 1 en 1, de 2 en 2…). 
    La cuenta debe mostrarse por pantalla paso a paso.
-->
<?php

    function countingToNumber(int $targetNumber = 10, int $increment = 1): string
    {
        $result = "";
        $index = 1;
        while ($index <= $targetNumber) {
            $result .= $index;
            $index += $increment;
            if ($index <= $targetNumber) {
                $result .= ", ";
            } else {
                $result .= ".";
            }
        }
        return $result;
    }

    //let's test the number counting :-)
    
    echo countingToNumber(12);
    echo PHP_EOL;
    echo countingToNumber();
    echo PHP_EOL;
    echo countingToNumber(15, 4);
    echo PHP_EOL;
    echo countingToNumber(120, 10);
    echo PHP_EOL;
?>