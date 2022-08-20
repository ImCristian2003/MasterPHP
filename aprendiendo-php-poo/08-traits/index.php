<?php

    //TRAIT: Nos permite definir una serie de metodos que se van a 
    //poder compartir entre clases
    trait Utilidades{
        
        public function mostrarNombre(){
            echo "<h1>El nombre es ".$this->nombre."</h1>";
        }

    }

    class Coche{

        public $nombre;
        public $marca;

        //USAR EL TRAIT
        use Utilidades;

    }

    class Persona{

        public $nombre;
        public $apellidos;

        use Utilidades;

    }

    class VideoJuego{
        public $nombre;
        public $anho;

        use Utilidades;

    }

$coche = new Coche();
$persona = new Persona();
$videojuego = new Videojuego();

$coche->nombre = "Mercedes";
$coche->mostrarNombre();

