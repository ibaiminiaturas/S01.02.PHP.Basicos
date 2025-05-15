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

    echo "<br/>X value: " . $X
        . "<br/>Y value: " . $Y
        . "<br/> Addtition: " . $X + $Y
        . "<br/> Multiplication: " . $X * $Y
        . "<br/> Remainder : " . $X % $Y;
    echo "<br/>----------------------------------";


    echo "<br/>M value: " . $M
        . "<br/>N value: " . $N
        . "<br/> Addtition: " . $M + $N
        . "<br/> Multiplication: " . $M * $N
        . "<br/> Remainder : " . $M % $N;
    echo "<br/>----------------------------------";


    echo "<br/>X doubled: " . $X * 2
        . "<br/>Y doubled: " . $Y * 2
        . "<br/>M doubled: " . $M * 2
        . "<br/>N doubled: " . $N * 2
        . "<br/> Summation: " . $X + $Y + $M + $N
        . "<br/> Multiplication: " . $X * $Y * $M * $N;
    echo "<br/>----------------------------------";

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
    
    echo "<br/>Addition result = " . calculator(1, 2, 'A');
    echo "<br/>Substraction result = " . calculator(4, 6, 'S');
    echo "<br/>Multiplication result = " . calculator(8.56, 2, 'M');
    echo "<br/>Division result = " . calculator(41, 2.5, 'D');
    ?>




</body>

</html>