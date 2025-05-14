<html>

<head>
    <title>Sprint 1 Exercise 2. Ibai Ramirez</title>
</head>

<body>

    <?php
    $hello_world = "Hello World!";

    echo nl2br("\n" . $hello_world . "");

    echo nl2br("\n" . strtoupper($hello_world) . "");

    echo nl2br("\n" . strlen($hello_world) . "");

    echo nl2br("\n" . strrev($hello_world) . "");

    $message = "Este es el curso de PHP";

    echo nl2br("\n" . strrev($hello_world) . $message);
    echo nl2br("\n----------------------------------");
    ?>

</body>

</html>