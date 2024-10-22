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
        private $db;

        public function __construct()
        {
            $this->db = Database::connect();
        }

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
            $this->nombre = $this->db->real_escape_string($nombre);
        }

        //GET Y SET PARA EL APELLIDOS
        public function getapellidos(){
            return $this->apellidos;
        }

        public function setapellidos($apellidos){
            $this->apellidos = $this->db->real_escape_string($apellidos);
        }

        //GET Y SET PARA EL EMAIL
        public function getEmail(){
            return $this->email;
        }

        public function setEmail($email){
            $this->email = $this->db->real_escape_string($email);
        }

        //GET Y SET PARA EL PASSWORD
        public function getPassword(){
            return password_hash($this->db->real_escape_string($this->password), PASSWORD_BCRYPT, ['cost'=>4]);
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
        
        //METODOS PARA CONSULTAR A LA BD
        public function save(){

            $sql = "INSERT INTO usuarios VALUES(null,'{$this->getNombre()}','{$this->getApellidos()}','{$this->getEmail()}','{$this->getPassword()}','user',null)";
            $save = $this->db->query($sql);

            $result = false;
            if($save){
                $result = true;
            }
            
            return $result;

        }

        //Metodo para el login
        public function login(){

            $result = false;
            $email = $this->email;
            $password = $this->password;

            //Comprobar si existe el usuario
            $sql = "SELECT * FROM usuarios WHERE email='$email'";
            $login = $this->db->query($sql);

            if($login && $login->num_rows == 1){
                $usuario = $login->fetch_object();

                //Verificacion de la contraseña
                $verify = password_verify($password, $usuario->password);
                var_dump($verify);
                var_dump($password);
                var_dump($usuario->password);
                die();
                if($verify){
                    $result = $usuario;
                }

            }

            return $result;

        }

    }