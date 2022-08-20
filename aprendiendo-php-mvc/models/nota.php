<?php

    require_once 'ModeloBase.php';
    
    class Nota extends ModeloBase{

        public $nombre;
        public $contenido;

        //GET Y SET PARA NOMBRE
        public function getNombre(){
            return $this->nombre;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        //GET Y SET PARA CONTENIDO
        public function getContenido(){
            return $this->contenido;
        }

        public function setContenido($contenido){
            $this->contenido = $contenido;
        }

    }