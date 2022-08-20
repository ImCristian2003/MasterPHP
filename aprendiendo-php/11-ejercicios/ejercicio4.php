<?php

    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    echo "La suma de $numero1 y $numero2 es: ".($numero1+$numero2);
    echo '<br>';
    echo "La resta de $numero1 y $numero2 es: ".($numero1-$numero2);
    echo '<br>';
    echo "La multiplicacion de $numero1 y $numero2 es: ".($numero1*$numero2);
    echo '<br>';
    echo "La division de $numero1 y $numero2 es: ".($numero1/$numero2);

?>