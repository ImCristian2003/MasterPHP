<?php

    class Usuario{

        const URL_COMPLETA = "http://localhost";
        public $email;
        public $password;

        //GET Y SET PARA EMAIL
        public function getEmail(){
            return $this->email;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        //GET Y SET PARA PASSWORD
        public function getPassword(){
            return $this->password;
        }

        public function setPassword($password){
            $this->password = $password;
        }

    }

$usuario = new Usuario();
echo $usuario::URL_COMPLETA;
var_dump($usuario);