<?php

    //DECLARACION DE ARRAYS
    $peliculas = array("Hola","gran","hpta");
    $cantantes = ["2pac","ice cube","eminem"];

    echo $cantantes[0];
    echo "<br>";
    echo "<br>";

    //RECORRER ARRAYS
    for($i=0;$i<=count($cantantes)-1;$i++){

        echo $cantantes[$i];
        echo "<br>";

    }

    echo "<br>";

    foreach ($peliculas as $pelicula) {
        echo $pelicula;
        echo "<br>";
    }

    echo "<br>";

    //ARRAY ALFANUMERICO/ASOCIATIVO
    $personas = array(
        "nombre" => "Cristian",
        "apellido" => "Cardona",
        "edad" => "18"
    );

    var_dump($personas["apellido"]);

    echo "<br>";

    //ARRAYS MULTIDIMENSIONALES
    $contactos = array(
        array(
            "nombre" => "Cristian",
            "apellido" => "Cardona",
            "edad" => "18"
        ),
        array(
            "nombre" => "Luis",
            "apellido" => "Lopez",
            "edad" => "23"
        ),
        array(
            "nombre" => "Juan",
            "apellido" => "Iniesta",
            "edad" => "15"
        )
        );

    //var_dump($contactos);
    echo $contactos[1]["nombre"];

    echo "<br>";
    echo "<br>";

    foreach ($contactos as $key => $contacto) {
        echo $contacto['nombre'];
        echo "<br>";
    }

?>