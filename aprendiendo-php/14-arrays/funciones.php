<?php

    $cantantes = ["2pac","ice cube","eminem","50cent"];
    $numeros =  [15,46,100,60,87];

    //ORDENA ALFABETICAMENTE EL ARRAY
    asort($cantantes);
    var_dump($cantantes);

    echo "<br>";

    //ORDENA ALFABETICAMENTE, PERO, AL REVES
    arsort($cantantes);
    var_dump($cantantes);

    echo "<br>";

    //ORDENA NUMERICOS DE MANERA ASCENDENTE
    sort($numeros);
    var_dump($numeros);

    echo "<br>";

    //AÑADIR ELEMENTOS A UN ARRAY
    $cantantes[] = "Paulo";
    //MAS RECOMENDABLE
    array_push($cantantes, "Don Omar");
    echo "<br>";
    var_dump($cantantes);

    echo "<br>";

    //QUITAR EL ULTIMO ELEMENTO DE UN ARRAY
    array_pop($cantantes);
    var_dump($cantantes);
    
    echo "<br>";

    //QUITAR UN ELEMENTO EN CONCRETO
    unset($cantantes[2]);
    var_dump($cantantes);
    
    echo "<br>";

    //SACAR UN ELEMENTO ALEATORIO DE UN ARRAY
    echo $ind = array_rand($cantantes);
    echo " ";
    echo $cantantes[$ind];
    
    echo "<br>";

    //DAR LA VUELTA A UN ARRAY
    var_dump(array_reverse($numeros));

    echo "<br>";

    //BUSCAR DENTRO DE UN ARRAY
    echo $result = array_search("ice cube",$cantantes);
    echo " ";
    echo $cantantes[$result];

    echo "<br>";

    //CONTAR
    echo count($cantantes);

?>