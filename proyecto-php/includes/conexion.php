<?php

    $servidor = "localhost";//Servidor
    $usuario = "root";//Usuario
    $password = "";//Contraseña
    $basededatos = "blog_master";//Nombre de la Base de Datos

    //Conexion
    $conexion = mysqli_connect($servidor,$usuario,$password,$basededatos)
    or die("Problemas para conectar a la base de datos ( ".$basededatos." )");

    mysqli_query($conexion,"SET NAMES 'Utf8'");

    //Iniciar la Sesion
    if(!isset($_SESSION)){
        session_start();
    }