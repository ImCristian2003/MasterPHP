<?php

    //CLASES ESTATICAS: Puedo acceder a ella de forma mas sencilla
    class Configuracion{

        public static $color;
        public static $newsletter;
        public static $entorno;

        //GETTER Y SETTER PARA COLOR
        public static function getColor(){
            return self::$color;
        }

        public static function setColor($color){
            self::$color = $color;
        }

        //GETTER Y SETTER PARA NEWSLETTER
        public static function getNewsletter(){
            return self::$newsletter;
        }

        public static function setNewsletter($newsletter){
            self::$newsletter = $newsletter;
        }

        //GETTER Y SETTER PARA ENTORNO
        public static function getEntorno(){
            return self::$entorno;
        }

        public static function setEntorno($entorno){
            self::$entorno = $entorno;
        }

    }