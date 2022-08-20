<?php

    //DEBUGGEAR(DATOS DE LA VARIABLE)
    $nombre = "Hola Mundo";
    var_dump($nombre);

    //FECHAS 
    echo date('d-m-y');
    echo '<br>';
    echo time();

    //MATEMATICAS
    echo '<br>';
    echo "Raiz cuadrada de 64: ".sqrt(64);
    echo '<br>';
    echo "Numero aleatorio: ".rand(10,100);
    echo '<br>';
    echo "Numero pi: ".pi();
    echo '<br>';
    echo "Redondear un numero: ".round(pi(),5);

    //MAS FUNCIONES GENERALES
    echo '<br>';
    echo '<br>';
    //OBTENER EL TIPO DE DATO DE UNA VARIABLE
    echo gettype($nombre);
    echo '<br>';
    $codigo = 123456;
    //DETECTAR EL TIPO DE UNA VARIABLE
    if(is_integer($codigo)){
        echo "Codigo registrado correctamente";
    }else{
        echo "La variable no es un numero"; 
    }
    echo '<br>';
    //SABER SI UNA VARIABLE EXISTE O NO
    if(isset($edad)){
        echo "La variable existe";
    }else{
        echo "La variable no existe";
    }
    echo '<br>';
    //TRIM SIRVE PARA ELIMINAR LOS ESPACIOS DELANTEROS Y TRASEROS(SANEAR)
    $espacios = "   hola      mundo     ";
    var_dump(trim($espacios));
    //ELIMINAR VARIABLES / INDICES
    $anho = 2003;
    unset($anho);
    //var_dump($anho);

    //COMPROBAR VARIABLE VACIA
    echo '<br>';
    $texto = "       ";
    if(empty(trim($texto))){
        echo "La variable no tiene contenido";
    }else{
        echo "La variable tiene contenido";
    }  

    //CONTAR CARACTERES DE UN STRING
    echo '<br>';
    $cadena = " 12345 ";
    echo strlen(trim($cadena));

    //ENCONTRAR CARACTER
    echo '<br>';
    $frase = "Uribe Paraco";
    echo strpos($frase,"a")+1;

    //REEMPLAZAR CONTENIDO DE UN STRING
    echo '<br>';
    $frase = str_replace("Paraco"/*PALABRA A CAMBIAR*/,"Hpta"/*REEMPLAZO */, $frase/*VARIABLE*/);
    echo $frase;

    //CONVERTIR UNA CADENA A MAYUS O MINUS
    echo '<br>';
    echo strtoupper($frase);
    echo '<br>';
    echo strtolower($frase);

?>