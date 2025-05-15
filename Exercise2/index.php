<html>

<head>
    <title>Sprint 1 Exercise 2. Ibai Ramirez</title>
    <!-- Imprime por pantalla " Hello, World! " utilizando una variable.

    Transforma todos los caracteres del string a mayúsculas e imprime en pantalla.
    Imprime por pantalla el tamaño (longitud) de la variable.
    Imprime por pantalla el string en orden inverso de caracteres.
    Crea una nueva variable con el contenido “ Este es el curso de PHP ” e imprime por pantalla la concatenación de ambos strings.
    -->
</head>

<body>

    <?php
    $hello_world = "Hello World!";

    echo "<br/>" . $hello_world . "";

    echo "<br/>" . strtoupper($hello_world) . "";

    echo "<br/>" . strlen($hello_world) . "";

    echo "<br/>" . strrev($hello_world) . "";

    $message = "Este es el curso de PHP";

    echo "<br/>" . strrev($hello_world) . $message;
    echo "<br/>----------------------------------";
    ?>

</body>

</html>