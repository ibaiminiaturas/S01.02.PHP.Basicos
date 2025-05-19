
<!--Sprint 1 Exercise 3. Ibai Ramirez

a) Declara dues variables X i Y de tipus int, dues variables N i M de tipus double i assigna a cadascuna un valor. A continuació, mostra per pantalla per a X i Y:

    El valor de cada variable.
    La suma.
    La resta.
    El producte.
    El mòdul.

Per N i M realitzaràs el mateix.

Per a totes les variables (X, Y, N, M):

    El doble de cada variable.
    La suma de totes les variables.
    El producte de totes les variables.

b) Crea una funció Calculadora que entri dos nombres per paràmetre, i en un tercer paràmetre et permeti fer la suma, la resta, la multiplicació o la divisió dels dos nombres.
-->
<?php
    $X = 112;
    $Y = 10;
    $M = 6.66;
    $N = 2.001;

    echo PHP_EOL . " X value: " . $X
        . PHP_EOL . " Y value: " . $Y
        . PHP_EOL . "  Addtition: " . $X + $Y
        . PHP_EOL . "  Multiplication: " . $X * $Y
        . PHP_EOL . "  Remainder : " . $X % $Y;
    echo PHP_EOL . " ----------------------------------";


    echo PHP_EOL . " M value: " . $M
        . PHP_EOL . " N value: " . $N
        . PHP_EOL . "  Addtition: " . $M + $N
        . PHP_EOL . "  Multiplication: " . $M * $N
        . PHP_EOL . "  Remainder : " . $M % $N;
    echo PHP_EOL . " ----------------------------------";


    echo PHP_EOL . " X doubled: " . $X * 2
        . PHP_EOL . " Y doubled: " . $Y * 2
        . PHP_EOL . " M doubled: " . $M * 2
        . PHP_EOL . " N doubled: " . $N * 2
        . PHP_EOL . "  Summation: " . $X + $Y + $M + $N
        . PHP_EOL . "  Multiplication: " . $X * $Y * $M * $N;
    echo PHP_EOL . " ----------------------------------";

    function calculator(int|float $num1, int|float $num2, string $action): string
    {
        $result = 0;
        switch ($action) {
            case "A": //addition
                $result = $num1 + $num2;
                break;
            case "S": //substraction
                $result = $num1 - $num2;
                break;
            case "M": //Multiplication
                $result = $num1 * $num2;
                break;
            case "D": //Division
                $result = $num1 / $num2;
                break;
            default:
                $result = "Invalid operation";
        }
        return $result;
    }

    //let's test the calculator
    
    echo PHP_EOL . " Addition result = " . calculator(1, 2, 'A');
    echo PHP_EOL . " Substraction result = " . calculator(4, 6, 'S');
    echo PHP_EOL . " Multiplication result = " . calculator(8.56, 2, 'M');
    echo PHP_EOL . " Division result = " . calculator(41, 2.5, 'D');
?>
