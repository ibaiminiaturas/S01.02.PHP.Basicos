<!--     <title>Sprint 1 Exercise 2. Ibai Ramirez
 Imprime por pantalla " Hello, World! " utilizando una variable.

Transforma todos los caracteres del string a mayúsculas e imprime en pantalla.
Imprime por pantalla el tamaño (longitud) de la variable.
Imprime por pantalla el string en orden inverso de caracteres.
Crea una nueva variable con el contenido “ Este es el curso de PHP ” e imprime por pantalla la concatenación de ambos strings.
-->


<?php
    $hello_world = "Hello World!";

    echo PHP_EOL . $hello_world . "";

    echo PHP_EOL . strtoupper($hello_world) . "";

    echo PHP_EOL . strlen($hello_world) . "";

    echo PHP_EOL . strrev($hello_world) . "";

    $message = "Este es el curso de PHP";

    echo PHP_EOL . strrev($hello_world) . $message;
    echo PHP_EOL . "----------------------------------";
?>