<?php

    //Programación orientada a objetos en PHP (POO)

    //Definir una clase coche que se puede identificar como un molde para crear
    //mas objetos de tipo coche con caracteristicas parecidas
    class Coche{

        //Atributos o propiedades (variables)
        //PUBLIC -> podemos acceder desde cualquier lugar dentro de la clase actual
        // dentro de clases que hereden esta clase o fuera de la clase
        public $color;

        //PROTECTED -> podemos acceder desde la clase que los define y desde clases 
        //que hereden esta clase
        protected $marca;

        //PRIVATE -> solo se puede acceder de esta clase
        private $modelo;

        public $velocidad;
        public $caballaje;
        public $plazas;

        //Constructor
        public function __construct($color,$marca,$modelo,$velocidad,$caballaje,$plaza)
        {
            $this-> color = $color;
            $this-> marca = $marca;
            $this-> modelo = $modelo;
            $this-> velocidad = $velocidad;
            $this-> caballaje = $caballaje;
            $this-> plaza = $plaza;
        }
        
        //Metodos, son acciones que hace el objeto (funciones)
        public function getColor(){
            return $this->color;
        }

        public function setColor($color){
            $this->color = $color;
        }

        //Se debe hacer una funcion de set marca para acceder desde otra clase, ya
        //que esta está protegida
        public function setMarca($marca){
            $this->marca = $marca;
        }

        //Funcion para poder acceder al modelo desde otra clase
        public function getModelo(){
            return $this->modelo;
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

        //SE LE PASA COMO TIPO DE DATO, EL NOMBRE DE LA CLASE
        public function mostrarInformacion(Coche $miObjeto){
            
            //VALIDAR QUE EL DATO QUE SE PASA POR PARAMETRO SEA UN OBJETO
            if(is_object($miObjeto)){
                $informacion = "<h1>Información del coche</h1>";
                $informacion .= "Color: ".$miObjeto->color." | ";
                $informacion .= "Modelo: ".$miObjeto->modelo." | ";
                $informacion .= "Velocidad: ".$miObjeto->velocidad;
            }else{
                $informacion = "Tu datos es este: ".$miObjeto;
            }

            return $informacion;
        }

    }//Fin deifinición de la clase

// //Crear un objeto o instanciar la clase
// $coche = new Coche("Amarillo","Renault","Clio",150,200,5);

// //usar los metodos
// $coche->setColor("amarillo");
// echo "El color del coche es: ".$coche->getColor();
// echo "<br>";

// $coche->acelerar();
// $coche->acelerar();
// $coche->acelerar();
// $coche->acelerar();
// $coche->frenar();

// echo "La velocidad del coches es de: ".$coche->getVelocidad()." kms/h";