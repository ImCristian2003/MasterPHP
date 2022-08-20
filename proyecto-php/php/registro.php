<?php
    //VALIDACION DE LOS DATOS QUE ENTRAN
    if(isset($_POST)){

        //Conexion a la base de datos
        //La sesion ya se hereda cuando se incluye la conexion
        require_once '../includes/conexion.php';

        if(!isset($_SESSION)){
            session_start();
        }
        
        //OPERADORES TERNARIOS(CONDICIONES) = > CONDICION - LO QUE SE EJECUTARÁ - LO QUE SE EJECUTARA EN OTRO CASO
        //MYSQLI_REAL_ESCA... => FUNCION QUE AYUDA
        //A ESCAPAR LOS DATOS, OSEA QUE TODO CARACTER ES TOMADO COMO STRING
        $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($conexion, $_POST['nombre']) : false;
        $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($conexion, $_POST['apellidos']) : false;
        $email = isset($_POST['email']) ? mysqli_real_escape_string($conexion, trim($_POST['email'])) : false;
        $password = isset($_POST['password']) ? mysqli_real_escape_string($conexion, trim($_POST['password'])) : false;

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

        //VALIDACION APELLIDO
        if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)){
            $apellidos_validado = true;
        }
        else{
            $apellidos_validado = false;
            $errores['apellidos'] = "El apellido no es valido";
        }

        //VALIDACION EMAIL
        if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
            $email_validado = true;
        }
        else{
            $email_validado = false;
            $errores['email'] = "El email no es valido";
        }

        //VALIDACION CONTRASEÑA
        if(!empty($password)){
            $password_validado = true;
        }
        else{
            $password_validado = false;
            $errores['password'] = "La contraseña está vacía";
        }

        $guardar_usuario = false;
        //VALIDACION DE ERRORES PARA INSERCIÓN
        if(count($errores) == 0){

            $guardar_usuario = true;
            //CIFRAR LA CONTRASEÑA
            //PARAMETROS DE PASSWORD_HASH => (Contraseña, tipo de encryptado, array y numero de veces que se va a cifrar)
            $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);
            
            // var_dump($password);
            // var_dump($password_segura);
            // //COMPARAR LA CONTRASEÑA DIGITADA CON LA ENCRYPTADA
            // var_dump(password_verify('hola',$password_segura));

            //INSERTAR USUARIO A LA BASE DE DATOS, TABLA USUARIOS
            $sql = "INSERT INTO usuarios VALUES(null, '$nombre', '$apellidos', '$email', '$password_segura', CURDATE())";
            $guardar = mysqli_query($conexion,$sql);

            if($guardar){
                $_SESSION['completado'] = "Datos insertados correctamente";
            }else{
                $_SESSION['errores']['general'] = "Error al insertar el usuario";
            }

        }
        else{

            $_SESSION['errores'] = $errores;
            header('Location:../index.php');

        }

    }
header('Location: ../index.php');