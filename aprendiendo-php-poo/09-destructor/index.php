<?php

    class Usuario{

        public $nombre;
        public $email;

        public function __construct(){
            $this->nombre = "Cristian Pijalarga";
            $this->email = "Cristian@gmail.com";
            echo "Creando el objeto"."<hr>";
        }

        //ESTA FUNCIÓN AYUDA A QUE AL MOMENTO DE TRATAR DE IMPRIMIR
        //LA CLASE COMO SI FUERA UN STRING, NO LANCE ERROR SINO
        //LO QUE ESTE METODO CONTIENE
        public function __toString(){
            return "Hola, {$this->nombre}, estás registrado con {$this->email}";
        }

        //DESTRUCTOR: Se ejecuta cuando la pagina detecta que no va 
        //haber mas ejecución del programa
        public function __destruct(){
            echo "Destruyendo el objeto";
        }

    }

$usuario = new Usuario();

//Imprimir la clase como si fuera un String
echo $usuario;