<?php

    

    class Usuario{

        //Se asignan los campos correspondientes a la base de datos
        private $id;
        private $nombre;
        private $apellidos;
        private $email;
        private $password;
        private $rol;
        private $imagen;

        //GET Y SET PARA EL ID
        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }

        //GET Y SET PARA EL NOMBRE
        public function getNombre(){
            return $this->nombre;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        //GET Y SET PARA EL APELLIDOS
        public function getapellidos(){
            return $this->apellidos;
        }

        public function setapellidos($apellidos){
            $this->apellidos = $apellidos;
        }

        //GET Y SET PARA EL EMAIL
        public function getEmail(){
            return $this->email;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        //GET Y SET PARA EL PASSWORD
        public function getPassword(){
            return $this->password;
        }

        public function setPassword($password){
            $this->password = $password;
        }

        //GET Y SET PARA EL ROL
        public function getRol(){
            return $this->rol;
        }

        public function setRol($rol){
            $this->rol = $rol;
        }

        //GET Y SET PARA EL IMAGE
        public function getImage(){
            return $this->image;
        }

        public function setImage($image){
            $this->image = $image;
        }
        
        public function save(){

            // $register = $db->

        }

    }