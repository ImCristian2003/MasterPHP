<?php

//Inclusión del autoload (Archivo que cargará automaticamente los controladores)
require_once 'autoload.php';

//Condición para saber si existe el parametro que indicará el controlador
if(isset($_GET['controller'])){
    //Nombre del controlador + la palabra reservada 'Controller'
	$nombre_controlador = $_GET['controller'].'Controller';
}else{
	echo "La pagina que buscas no existe";
	exit();
}

//Condición para saber si existe la clase con el nombre del controlador
//(La clase y el nombre del archivo siempre deben llamarsen de manera igual (Recomendable))
if(class_exists($nombre_controlador)){	

    //Creación de la instancia del controlador
	$controlador = new $nombre_controlador();
	
    //Se evalua que exista el parametro 'action' que indicará el metodo a ejecutar
    //y a su vez que el metodo exista
	if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){

        //Nombre de la acción
		$action = $_GET['action'];

        //Ejecución del metodo
		$controlador->$action();
	}else{
		echo "La pagina que buscas no existe";
	}
}else{
	echo "La pagina que buscas no existe";
}
