<h1>Bienvenido a mi web con MVC</h1>

<?php

    require_once 'autoload.php';

    if(isset($_GET['controller']) && class_exists($_GET['controller'].'Controller')){

        $nombre_controlador = $_GET['controller'].'Controller';
        $controlador = new $nombre_controlador();

        if(isset($_GET['action']) && method_exists($controlador,$_GET['action'])){

            $action = $_GET['action'];
            $controlador->$_GET['action']();
    
        }else{
    
            echo "La pagina que buscas no existe";
    
        }

    }else{

        echo "La pagina que buscas no existe";

    }

    