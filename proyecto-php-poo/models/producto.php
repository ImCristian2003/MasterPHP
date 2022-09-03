<?php

    class Producto{

        //Se asignan los campos correspondientes a la base de datos
        private $id;
        private $nombre;
        private $categoria_id;
        private $descripcion;
        private $precio;
        private $stock;
        private $oferta;
        private $fecha;
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

        //GET Y SET PARA EL ID DE LA CATEGORIA
        public function getCategoriaId(){
            return $this->categoria_id;
        }

        public function setCategoriaId($categoria_id){
            $this->categoria_id = $this->db->real_escape_string($categoria_id);
        }

        //GET Y SET PARA LA DESCRIPCION
        public function getDescripcion(){
            return $this->descripcion;
        }

        public function setDescripcion($descripcion){
            $this->descripcion = $this->db->real_escape_string($descripcion);
        }

        //GET Y SET PARA EL PRECIO
        public function getPrecio(){
            return $this->precio;
        }

        public function setPrecio($precio){
            $this->precio = $this->db->real_escape_string($precio);
        }

        //GET Y SET PARA EL STOCK
        public function getStock(){
            return $this->stock;
        }

        public function setStock($stock){
            $this->stock = $this->db->real_escape_string($stock);
        }

        //GET Y SET PARA LA OFERTA
        public function getOferta(){
            return $this->oferta;
        }

        public function setOferta($oferta){
            $this->oferta = $this->db->real_escape_string($oferta);
        }

        //GET Y SET PARA LA FECHA
        public function getfecha(){
            return $this->fecha;
        }

        public function setfecha($fecha){
            $this->fecha = $fecha;
        }

        //GET Y SET PARA LA IMAGEN
        public function getImagen(){
            return $this->imagen;
        }

        public function setImagen($imagen){
            $this->imagen = $imagen;
        }

        //METODOS PARA LA BD
        public function getAll(){
            $productos = $this->db->query("SELECT * FROM productos ORDER BY id DESC;");
            return $productos;
        }

        public function save(){

            $sql = "INSERT INTO productos VALUES(null,{$this->getCategoriaId()},'{$this->getNombre()}','{$this->getDescripcion()}',{$this->getPrecio()},{$this->getStock()},null,CURDATE(),'{$this->getImagen()}')";
            $save = $this->db->query($sql);

            //Imprimir error de sql
            // echo $this->db->error;

            $result = false;
            if($save){
                $result = true;
            }

            return $result;

        }

        public function delete(){

            $sql = "DELETE FROM productos WHERE id='{$this->getId()}'";
            $delete = $this->db->query($sql);

            $result = false;
            if($delete){
                $result = true;
            }

            return $result;


        }

    }