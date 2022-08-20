<?php

    if(isset($_POST)){

        //CONEXION A LA BASE DE DATOS
        require_once "includes/conexion.php";

        if(!isset($_SESSION)){
            session_start();
        }

        $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($conexion,$_POST['nombre']) : false;
        $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($conexion,$_POST['apellidos']) : false;
        $email = isset($_POST['email']) ? mysqli_real_escape_string($conexion,$_POST['email']) : false;

        //ARRAY DE ERRORES
        $errores = array();

        //VALIDACIÓN
        if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/",$nombre)){
            $nombre_validado = true;
        }else{
            $nombre_validado = false;
            $errores['nombre'] = "El nombre no es valido";
        }

        if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/",$apellidos)){
            $apellidos_validados = true;
        }else{
            $apellidos_validados = false;
            $errores['apellidos'] = "Los apellidos no son validos";
        }

        if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
            $email_validado = true;
        }else{
            $email_validado = false;
            $errores['email'] = "El email no es valido";
        }

        if(count($errores) == 0){

            $usuario = $_SESSION['usuario'];

            //COMPROBAR QUE EL EMAIL NO EXISTA
            $sql = "SELECT id,email FROM usuarios WHERE email='$email'";
            $isset_email = mysqli_query($conexion,$sql);
            $isset_user = mysqli_fetch_assoc($isset_email);

            if($isset_user['id'] == $usuario['id'] || empty($isset_user)){
                //ACTUALIZAR DATOS
                $sql = "UPDATE usuarios SET nombre='$nombre', apellidos='$apellidos', email='$email' WHERE id = ".$usuario['id'];
                $guardar = mysqli_query($conexion,$sql);

                if($guardar){
                    $_SESSION['usuario']['nombre'] = $nombre;
                    $_SESSION['usuario']['apellidos'] = $apellidos;
                    $_SESSION['usuario']['email'] = $email;
                    $_SESSION['completado'] = "Tus datos fueron actualizados con exito";
                }else{
                    $_SESSION['errores-general'] = "Ups! Hubo un error al actualizar tus datos";
                }
            }
            else{
                $_SESSION['errores-general'] = "El usuario ya existe";
            }

        }else{
            $_SESSION['errores'] = $errores;
        }

    }
header("Location: mis-datos.php");