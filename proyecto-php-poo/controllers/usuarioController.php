 <?php

    require_once 'models/usuario.php';
    class UsuarioController{

        public function index(){

            echo "Controlador de usuario funcionando";

        }

        public function registro(){

            require_once 'views/usuario/registro.php';

        }

        public function save(){

            if(isset($_POST)){

                $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
                $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
                $email = isset($_POST['email']) ? $_POST['email'] : false;
                $password = isset($_POST['password']) ? $_POST['password'] : false;

                $errores = array();

                //Validacion para el nombre
                if(!is_int($nombre) && !empty($nombre) && !preg_match("/[0-9]+/",$nombre)){
                    $nombre_validado = true;
                }else{
                    $nombre_validado = false;
                    $errores['nombre'] = "El nombre no es valido";
                }

                //Validacion para los apellidos
                if(!is_int($apellidos) && !empty($apellidos) && !preg_match("/[0-9]+/",$apellidos)){
                    $apellidos_validado = true;
                }else{
                    $apellidos_validado = false;
                    $errores['apellidos'] = "El apellido no es valido";
                }

                //Validacion para el email
                if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $email_validado = true;
                }else{
                    $email_validado = false;
                    $errores['email'] = "El email no es valido";
                }

                //Validacion para la contraseña
                if(!empty($password)){
                    $password_validado = true;
                }else{
                    $password_validado = false;
                    $errores['password'] = "La contraseña no es valida";
                }

                if(count($errores) == 0){

                    //Instancia del nuevo usuario
                    $usuario = new Usuario();

                    //Actualizar los datos en la clase usuario
                    $usuario->setNombre($nombre);
                    $usuario->setApellidos($apellidos);
                    $usuario->setEmail($email);
                    $usuario->setPassword($password);

                    //Ejecución del metodo para guardar los datos
                    $save = $usuario->save();

                    //Validacion en caso de algún error
                    if($save){
                        $_SESSION['register'] = "Registro completado";
                    }else{
                        $_SESSION['register'] = "Registro fallido";
                    }

                }else{
                    $_SESSION['errores'] = $errores;
                    header("Location:".base_url.'usuario/registro');
                }

            }else{
                $_SESSION['register'] = "Registro fallidisimo";
            }
            header("Location:".base_url.'usuario/registro');

        }

        public function login(){

            if(isset($_POST)){

                //Identificar usuario
                //Consulta a la base de datos
                $usuario = new Usuario();
                $usuario->setEmail($_POST['email']);
                $usuario->setPassword($_POST['password']);

                $identity = $usuario->login();
                
                if($identity && is_object($identity)){
                    $_SESSION['identity'] = $identity;

                    if($identity->rol == 'admin'){
                        $_SESSION['admin'] = true;
                    }

                }else{
                    $_SESSION['error_login'] = "Identificación fallida";
                }
                // var_dump($_SESSION['error_login']);
                // var_dump($_SESSION['admin']);
                // die();

            }
            header("Location:".base_url);

        }

        public function logout(){

            if(isset($_SESSION['identity'])){
                unset($_SESSION['identity']);

            }
            if(isset($_SESSION['admin'])){
                unset($_SESSION['admin']);
                
            }

            header("Location: ".base_url);

        }

    }// Fin Clase