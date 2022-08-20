<?php

    if(isset($_POST)){

        require_once "includes/conexion.php";
        $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($conexion, $_POST['nombre']) : false;

        //Array de errores
        $errores = array();

        //VALIDACION DE LAS VARIABLES
        //PREG_MATCH -> expresiones regulares
        //VALIDACION NOMBRE
        if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
            $nombre_validado = true;
        }
        else{
            $nombre_validado = false;
            $errores['nombre'] = "El nombre no es valido";
        }

        if(count($errores) == 0){

            //INSERTAR CATEGORIA A LA BASE DE DATOS, TABLA CATEGORIAS
            $sql = "INSERT INTO categorias VALUES (null, '$nombre')";
            $guardar = mysqli_query($conexion,$sql);

        }

    }

    header("Location: index.php");