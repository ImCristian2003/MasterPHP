<?php

    require_once 'ModeloBase.php';

    class Usuario extends ModeloBase{

        public $nombre;
        public $apellidos;
        public $email;
        public $password;

        public function __construct(){
            parent::__construct();
        }

        //GET Y SET PARA NOMBRE
        public function getNombre(){
            return $this->nombre;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        //GET Y SET PARA APELLIDOS
        public function getApellidos(){
            return $this->apellidos;
        }

        public function setApellidos($apellidos){
            $this->apellidos = $apellidos;
        }

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