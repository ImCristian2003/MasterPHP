<?php

    //INTERFACE:
    interface Ordenador{

        //FUNCIONES
        public function encender();
        public function apagar();
        public function reiniciar();
        public function desfragmentar();
        public function detectarUSB();

    }

    class iMac implements Ordenador{

        private $modelo;

        function getModelo(){
            return $this->modelo;
        }

        function setModelo($modelo){
            $this->modelo = $modelo;
        }

        public function encender(){

        }

        public function apagar(){
            
        }

        public function reiniciar(){
            
        }

        public function desfragmentar(){
            
        }

        public function detectarUSB(){
            
        }

    }

$maquintos = new iMac();
$maquintos->setModelo("Mac Book pro 2019");
echo $maquintos->getModelo();
