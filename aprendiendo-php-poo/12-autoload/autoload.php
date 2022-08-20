<?php

    //Función que se crea para cargar las clases de forma automatica
    function app_autoloader($class){

        //"url" a la que se va dirigir la función
        require 'clases/'.$class.".php";

    }

    //Metodo de php que carga de forma automatica la url que retorna la función "app_autoloader"
    spl_autoload_register('app_autoloader');