<?php

//Una funcion es un conjunto de instrucciones bajo un nombre el cual puede ser reutilizado
//cuantas veces sea necesario y esto solo invocandola

    //CREAR UNA FUNCION
    /*function mostrar(){//INSTRUCCIONES A EJECUTAR
        echo 'Hola ';
        echo 'sapo ';
        echo 'care ';
        echo 'pepino ';
    }*/

    //INVOCARLA
    //mostrar();

    function tabla($numero){

        for ($i=1; $i <= 10; $i++) { 
            
            echo "$numero * $i = ".($numero*$i)."<br>";

        }

    }

    tabla(10);

    //Funciones con varios parametros y parametro opcionales

    function calculadora($num1, $num2, $h1 = false){

        if ($h1) {
            echo "<h1>";
        }

        echo "$num1 _ $num2";

        if ($h1) {
            echo "</h1>";
        }

    }

    calculadora(5,6);
    calculadora(7,18,true);
    calculadora(10,27);

    //FUNCIONES DENTRO DE OTRAS-----------------------------------------------
    //SE UTILIZAN CUANDO LA FUNCION QUE HARA TODA LA EJECUCION REQUIERE DE MUCHAS
    //OPERACIONES, POR LO CUAL SE SEPARA EN VARIAS PARA QUE SU MANTENIMIENTO
    //SEA MAS SENCILLO
    function getNombre($nombre){
        $texto = "El nombre es $nombre";
        return $texto;
    }

    function getApellido($apellido){
        $texto = "El apellido es $apellido";
        return $texto;
    }

    function nombreCompleto($nombre,$apellido){
        $texto = getNombre($nombre)."<br>".getApellido($apellido);
        return $texto;
    }

    echo nombreCompleto("Cristian","Cardona");

?>