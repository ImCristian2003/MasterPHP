<?php

    class NotaController{

        public function listar(){
            //Modelo
            require_once 'models/nota.php';

            //Logica del controlador
            $nota = new Nota();
            $nota->setContenido("Hola mundo");
            $nota->setNombre("Hola");

            $notas = $nota->conseguirTodos('notas');

            //Llamado a la vista
            require_once 'views/notas/listar.php';
        }

        public function crear(){

        }

        public function borrar(){
            
        }

    }