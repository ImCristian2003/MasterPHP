<?php

    //constantes
    define('nombre','Hablalo sapo');

    echo nombre;

    //constantes predefinidas
    echo PHP_OS;

    $numero = 5;

    for ($i=0; $i < 5; $i++) { 
        
        echo "<br>".$numero += 1;
        
    }

echo "<br>";

    //GOTO
    //Sirve para saltarse ciertas cantidad de lienas en especifico
    goto marca;//Marca inicial

    echo "Hola";//
    echo "Hola";//SE SALTA LO QUE HAY
    echo "Hola";//EN MEDIO
    echo "Hola";//

    marca://Final de la marca
    echo "Me salte 4 echos";

    echo "<br>";

    //ISSET --> comprueba si algo existe, con esto no tirara error

    if(isset($_GET['numero'])){
        $numero = (int)$_GET['numero'];
    }else{
        $numero = 0;
    }

    var_dump($numero);//Comprueba lo que trae la variable numero(su tamaño, valor, direccion url)



?>