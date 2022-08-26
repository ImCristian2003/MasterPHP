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
                $usuario = new Usuario();
                $usuario->setNombre($_POST['nombre']);
                $usuario->setApellidos($_POST['apellidos']);
                $usuario->setEmail($_POST['email']);
                $usuario->setPassword($_POST['password']);

                $save = $usuario->save();
                if($save){
                    $_SESSION['register'] = "Registro completado";
                }else{
                    $_SESSION['register'] = "Registro fallido";
                }
            }else{
                $_SESSION['register'] = "Registro fallido";
            }
            header("Location:".base_url.'usuario/registro');

        }

    }