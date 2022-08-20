<?php

    require_once "coche.php";

    $coche = new coche("Amarillo","Renault","Clio",150,200,5);
    
    $coche->color = "Rosado";

    //Llamado a setMarca(Funcion de variable protegida)
    $coche->setMarca("Audi");

    //Llamado a getModelo(Funcion de variable privada)
    // var_dump($coche->getModelo());

    // var_dump($coche);

    echo $coche->mostrarInformacion($coche);