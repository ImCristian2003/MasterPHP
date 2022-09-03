<?php

    class Utils{

        public static function deleteSession($name){

            if(isset($_SESSION[$name])){
                unset($_SESSION[$name]);
            }

        }

        public static function printErrors($sesion,$campo){

            $alerta = "";

            if(isset($sesion[$campo]) && !empty($campo)){

                $alerta = "<div class='alert alert-danger'>$sesion[$campo]</div>";

            }

            return $alerta;

        }

        public static function isAdmin(){
            if(!isset($_SESSION['admin'])){
                header("Location:".base_url);
            }else{
                return true;
            }
        }

        public static function showCategorias(){

            require_once "models/categoria.php";
            $categoria = new Categoria();
            $categorias = $categoria->getAll();
            return $categorias;

        }

    }