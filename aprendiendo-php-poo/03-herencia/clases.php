<?php

    //HERENCIA: La posibilidad de compartir atributos  y metodos entre clases

    class Persona{
        public $nombre;
        public $apellidos;
        public $altura;
        public $edad;

        //GETTER Y SETTER PARA NOMBRE
        public function getNombre(){
            return $this->nombre;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        //GETTER Y SETTER PARA APELLIDOS
        public function getApellidos(){
            return $this->apellidos;
        }

        public function setApellidos($apellidos){
            $this->apellidos = $apellidos;
        }

        //GETTER Y SETTER PARA ALTURA
        public function getAltura(){
            return $this->altura;
        }

        public function setAltura($altura){
            $this->altura = $altura;
        }

        //GETTER Y SETTER PARA EDAD
        public function getEdad(){
            return $this->edad;
        }

        public function setEdad($edad){
            $this->edad = $edad;
        }

        //FUNCIONES VARIAS DE UNA PERSONA
        public function hablar(){
            return "Estoy hablando";
        }

        public function caminar(){
            return "Estoy caminando";
        }

    }

    //HERENCIA
    class Informatico extends Persona{

        public $lenguajes;
        public $experienciaProgramador;

        public function __construct(){
            $this->lenguajes = "HTML, CSS, JS";
            $this->experienciaProgramador = 10;
        }

        public function sabeLenguajes($lenguajes){
            $this->lenguajes = $lenguajes;
        }

        //FUNCIONES DE UN PROGRAMADOR
        public function programar(){
            return "Soy programador";
        }

        public function repararOrdenador(){
            return "Reparar ordenadores";
        }

        public function hacerInformatica(){
            return "Estoy escribiendo en word";
        }

    }

    class TecnicoRedes extends Informatico{

        public $auditarRedes;
        public $experienciaRedes;

        public function __construct(){
            //CUANDO SE HEREDA DE UNA CLASE QUE CONTIENE UN CONSTRUCTOR, SE PUEDEN HEREDAR LOS DATOS SETEADOS EN LA CLASE PADRE PARA TENERLOS IGUAL EN ESTA CLASE, SINO LOS DATOS NO SE HEREDARÁN EN CASO DE QUE ESTA CLASE CONTENGA UN CONSTRUCTOR
            parent:: __construct();

            $this->auditarRedes = "Experto";
            $this->experienciaRedes = 5;
        }

        public function auditoria(){
            return "Estoy auditando una red";
        }

    }