<?php 
    //Iniciar la sesion y la conexion a la bd
    require_once '../includes/conexion.php';

    //Recoger datos del formulario
    if(isset($_POST)){

        //EN CASO DE QUE EXISTA LA SESION ERROR Y SE HALLA
        //LOGEADO CORRECTAMENTE, LA BORRA (ERROR ANTIGUO) 
        if(isset($_SESSION['error_login'])){
            unset($_SESSION['error_login']);
        }

        //ALMACENAR LOS DATOS ENVIADOS
        $email = trim($_POST['email']);
        $password = $_POST['password'];

        //Consulta para comprobar las credenciales del usuario
        $sql = "SELECT * FROM usuarios WHERE email='$email' LIMIT 1";
        $login = mysqli_query($conexion,$sql);

        //CONDICION PARA CUANDO IMPRIMA UN SOLO RESULTADO O FILA
        if($login && mysqli_num_rows($login)==1){
            
            //USAR LA FUNCION PARA GENERAR UN ARRAY ASOCIATIVO
            //Y SACAR TODOS LOS DATOS DE LA BD
            $usuario = mysqli_fetch_assoc($login);
            
            //Comprobar la contraseña
            $verify = password_verify($password, $usuario['password']);

            if($verify){

                //Utilizar una sesion para guardar los datos del usuario logeado
                $_SESSION['usuario'] = $usuario; 

            }else{

                //Si algo fálla, enviar una sesion con el fallo
                $_SESSION['error_login'] = "Login incorrecto";

            }

        }else{
            //Si algo falla, enviar una sesion con el fallo
            $_SESSION['error_login'] = "Login incorrecto";

        }
        
    }
    //REDIRECCIONAR A LA PAGINA
    header("Location: ../index.php");

    

    

    

    

    //Redirigir al index