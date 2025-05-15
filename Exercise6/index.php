<html>

<head>
    <title>Sprint 1 Exercise 6. Ibai Ramirez</title>
    <!--Charlie me mordió el dedo! Charlie te morderá el dedo exactamente el 50% del tiempo.

    Escribe La función isBitten () que devuelve TRUE con un 50% de probabilidad y FALSE de lo contrario.
    -->
</head>

<body>

    <?php

    function isBitten(): bool
    {
        $randomValue = rand(1, 100);
        $result = true;
        if ($randomValue >= 50) {
            $result = true;
        } else {
            $result = false;
        }

        return $result;
    }


    //let's test the function
    for ($i = 0; $i < 5; $i++) {
        echo PHP_EOL;
        echo "The function result is :" . var_export(isBitten(), true);
    }
    echo PHP_EOL;
    ?>
</body>

</html>