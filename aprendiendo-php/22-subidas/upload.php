<?php

    //RECIBIR EL ARCHIVO DESDE HTML
    $archivo = $_FILES['archivo'];
    //SACAR EL NOMBRE Y TIPO DE LA IMAGEN
    $nombre = $archivo['name'];
    $tipo = $archivo['type'];

    //COMPROBAR FORMATO DE LOS ARCHIVOS
    if($tipo == "image/jpg" || $tipo == "image/jpeg" || 
    $tipo == "image/png" || $tipo == "image/git"){

        //COMPROBAR SI LA CARPETA EXISTE O SINO, QUE LA CREE
        if(!is_dir('images')){
            mkdir('images', 0777);
        }

        //MOVER EL ARCHIVO A LA CARPETA DESTINATARIA
        move_uploaded_file($archivo['tmp_name'], 'images/'.$nombre);
        //tmp_name ES EL NOMBRE TEMPORAL QUE LE DA EL SERVIDOR
        //AL ARCHIVO

        header("refresh: 3; url=index.php");
        echo "Imagen subida con exito";

    }
    else{
        header("refresh: 3; url=index.php");
        //EL REFRESH EN EL HEADER SE USA PARA LA OCASION EN LA QUE EL
        //USUARIO SUBA UN ARCHIVO NO VALIDO, DESPUES DE 3 SEGUNDOS
        //LO ENVIE DE NUEVO A LA URL DESTINADA
        echo "Archivo no disponible";
    }