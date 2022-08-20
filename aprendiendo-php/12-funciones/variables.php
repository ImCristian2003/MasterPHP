<?php

    /*VARIABLES LOCALES*/ 
    //SON LAS QUE SE DECLARAN DENTRO DE LAS FUNCIONES Y SOLO SE PUEDEN UTILIZAR EN ESA MISMA
    //FUNCION
    function local(){
        $año = 2019;
        return $año;
    }
    local();

    /*VARIABLES GLOBALES*/
    //SON LAS QUE SE DECLARAN FUERA DE LAS FUNCIONES Y ESTAN DISPONIBLES PARA TODAS
    //LAS DEMAS FUNCIONES
    $nombre = "Roberto";

    function globales(){
        global $nombre;
        $text = "El nombre es: $nombre";
        return $text;
    }
    echo globales();

    //FUNCIONES VARIABLES
    

?>