<?php

    //Capturar excepciones, en codigo susceptible a errores
    try{

        //Validar si existe un metogo get id
        if(isset($_GET['id'])){
            echo "<h1>El parametro es {$_GET['id']}</h1>";
        }else{
            //En caso de no existir se crea una sesion que se va imprimir al momento de mostrar el error
            throw new Exception('Faltan parametros por la URL');
        }

      //Se pasa la excepcion  
    } catch(Exception $e){

        //Se imprime el mensaje
        echo "Ha habido un error: ".$e->getMessage();

    } 