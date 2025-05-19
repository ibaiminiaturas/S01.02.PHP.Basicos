<!--Sprint 1 Exercise 5. Ibai Ramirez
    Escribir una función para verificar el grado de un/a estudiante de acuerdo con la nota.

    Condiciones:

    Si la nota es 60% o más, el grado debería ser Primera División.
    Si la nota está entre el 45% y el 59%, el grado debería ser Segunda División.
    Si la nota está entre 33% a 44%, el grado debería ser Tercera División.
    Si la nota es menor a 33%, el estudiante reprobará.
-->

<?php

    function verifyGrade(float|int $grade): string
    {
        $result = "";

        if ($grade > 60) {
            $result = "Primera División";
        } else if ($grade >= 45) {
            $result = "Segunda División";
        } else if ($grade >= 33) {
            $result = "Tercera División";
        } else {
            $result = "El estudiante reprobará.";
        }

        return $result;
    }


    //let's test the number counting :-)
    echo PHP_EOL;
    echo verifyGrade(75);
    echo PHP_EOL;
    echo verifyGrade(55);
    echo PHP_EOL;
    echo verifyGrade(34);
    echo PHP_EOL;
    echo verifyGrade(13);
    echo PHP_EOL;

?>