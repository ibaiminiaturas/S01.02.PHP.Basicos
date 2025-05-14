<html>

<head>
    <title>Sprint 1 Exercise 3. Ibai Ramirez</title>
</head>

<body>

    <?php
    $X = 112;
    $Y = 10;
    $M = 6.66;
    $N = 2.001;

    echo nl2br("\nX value: " . $X
        . "\nY value: " . $Y
        . "\n Addtition: " . $X + $Y
        . "\n Multiplication: " . $X * $Y
        . "\n Remainder : " . $X % $Y);
    echo nl2br("\n----------------------------------");


    echo nl2br("\nM value: " . $M
        . "\nN value: " . $N
        . "\n Addtition: " . $M + $N
        . "\n Multiplication: " . $M * $N
        . "\n Remainder : " . $M % $N);
    echo nl2br("\n----------------------------------");


    echo nl2br("\nX doubled: " . $X * 2
        . "\nY doubled: " . $Y * 2
        . "\nM doubled: " . $M * 2
        . "\nN doubled: " . $N * 2
        . "\n Summation: " . $X + $Y + $M + $N
        . "\n Multiplication: " . $X * $Y * $M * $N);
    echo nl2br("\n----------------------------------");

    function calculator(int|float $num1, int|float $num2, string $action): void
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
        echo nl2br($result);
        echo nl2br("\n----------------------------------");
    }
    ?>

</body>

</html>