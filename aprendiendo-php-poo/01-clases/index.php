<?php

    //Programación orientada a objetos en PHP (POO)

    //Definir una clase coche que se puede identificar como un molde para crear
    //mas objetos de tipo coche con caracteristicas parecidas
    class Coche{

        //Atributos o propiedades (variables)
        public $color = "rojo";
        public $marca = "ferrari";
        public $modelo = "Aventador";
        public $velocidad = 300;
        public $caballaje = 500;
        public $plazas = 2 ;
        
        //Metodos, son acciones que hace el objeto (funciones)
        public function getColor(){
            return $this->color;
        }

        public function setColor($color){
            $this->color = $color;
        }

        public function acelerar(){
            $this->velocidad++;
        }

        public function frenar(){
            $this->velocidad--;
        }

        public function getVelocidad(){
            return $this->velocidad;
        }

    }//Fin deifinición de la clase

//Crear un objeto o instanciar la clase
$coche = new Coche();

//usar los metodos
$coche->setColor("amarillo");
echo "El color del coche es: ".$coche->getColor();
echo "<br>";

$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->frenar();

echo "La velocidad del coches es de: ".$coche->getVelocidad()." kms/h";