  <!--Sprint 1 Exercise 1. Ibai Ramirez
   Define una variable de cada tipo: integer ,  double ,  string y boolean . Imprímelas por pantalla.

    Después crea una constante que incluya tu nombre y muéstralo en formato título por pantalla.
    -->

    <?php
    define("MY_NAME", "Ibai");
    $integer = 6;
    $double = 134.323;
    $string = "I am a string";
    $boolean = true;

    echo PHP_EOL . "Integer value: " . $integer . PHP_EOL . "Double value: " .  $double . PHP_EOL . "String value: " . $string . PHP_EOL .  "Boolean value: " . $boolean;
    echo PHP_EOL . "<h1>" . MY_NAME . "</h1>";

    ?>