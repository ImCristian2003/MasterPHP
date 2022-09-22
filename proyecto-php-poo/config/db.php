<?php

    //Clase para la conexión a la base de datos
    class Database{

        //Funcion estatica para conectar
        public static function connect(){
            
            //Mysqli para generar la conexion
            $db = new mysqli("localhost","root","","tienda_master");
            //Consulta para que los campos lleguen con tildes y ñ
            $db->query("SET NAMES 'utf8'");
            //Retornar la conexion a la bd
            return $db;

        }

    }