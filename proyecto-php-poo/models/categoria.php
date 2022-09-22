<?php

    class Categoria{

        //Se asignan los campos correspondientes a la base de datos
        private $id;
        private $nombre;
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

        //Metodos para acceder a la base de datos
        public function getAll(){
            
            $categorias = $this->db->query("SELECT * FROM categorias ORDER BY id DESC;");
            return $categorias;

        }

        public function getOne(){

            $categorias = $this->db->query("SELECT * FROM categorias WHERE id = {$this->getId()}");
            return $categorias->fetch_object();

        }

        public function save(){
            
            $sql = "INSERT INTO categorias VALUES(null,'{$this->getNombre()}')";
            $save = $this->db->query($sql);

            $result = false;
            if($save){
                $result = true;
            }
            
            return $result;

        }

    }