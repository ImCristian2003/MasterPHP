<?php

    $error = "Faltan datos";

    //COMPROBACION DE LLEGADA DE TODOS LOS CAMPOS REQUERIDOS
    if (!empty($_POST['nombre']) && !empty($_POST['apellidos']) && 
    !empty($_POST['edad']) && !empty($_POST['email']) && !empty($_POST['pass'])) {
        
        $error = "Melo caramelo";

        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $edad = (int) $_POST['edad'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        //VALIDAR NOMBRE
        if(!is_string($nombre) || preg_match("/[0-9]+/",$nombre)){
            //PREG_MATCH SIRVE PARA INCLUIR EXPRESIONES REGULARES
            $error = "nombre";
            
        }
        //VALIDAR APELLIDOS
        if(!is_string($apellidos) || preg_match("/[0-9]+/",$apellidos)){
            $error = "apellidos";
            
        }
        //VALIDAR EDAD
        if(!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)){
            //EL FILTER VALIDATE SIRVE PARA VALIDAR Y FILTRAR
            //EL TIPO DE DATO DE UNA VARIABLE
            $error = "edad";
            
        }
        //VALIDAR EMAIL
        if(!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
            $error = "email";
            
        }
        //VALIDAR CONTRASEÑA
        if(empty($pass) || strlen($pass)<=5){
            $error = "pass";
            
        }

    }
    //EN CASO DE QUE NO HAYA ALGUN DATO
    else{

        $error = "Faltan datos";
        header("Location:index.php?error=$error");

    }

    //EN CASO DE QUE LOS DATOS ESTEN, PERO NO COMO DEBEN
    if($error!="Melo caramelo"){
        header("Location:index.php?error=$error");
    }

?>

<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Procesar Info</title>
    </head>
    <body>
        <h1>Datos ya validados</h1>
        <?php if($error=="Melo caramelo"):?>
            <p><?=$nombre?></p>
            <p><?=$apellidos?></p>
            <p><?=$edad?></p>
            <p><?=$email?></p>
            <p><?=$pass?></p>
        <?php endif; ?>

    </body>
</html>