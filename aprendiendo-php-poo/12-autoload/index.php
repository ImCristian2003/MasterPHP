<?php

    //Se carga la clase de autocarga
    require_once "autoload.php";

   

    //Espacios de nombres y paquetes

    //Un objeto aunque esté en otra clase no puede llamarse igual a otro
    use MisClases\Usuario, MisClases\Categoria, MisClases\Entrada, PanelAdministrador\Usuario as UsuarioAdmin;

   class Principal{

        public $usuario;
        public $categoria;
        public $entrada;

        public function __construct()
        {
            
            $this->usuario = new Usuario();
            $this->categoria = new Categoria();
            $this->entrada = new Entrada();
            
        }

        public function getUsuario(){
            return $this->usuario;
        }

        public function setUsuario($usuario){
            $this->usuario = $usuario;
        }

        public function informacion(){
            echo __METHOD__;
        }

   }

   //Objeto principal
   $principal = new Principal();
   $principal->informacion();
   //var_dump($principal->usuario);

   echo "<hr>";

   //Función que nos dice los metodos que hay dentro de una clase
   $metodos = get_class_methods($principal);

   //Función para buscar dentro de un array
   $busqueda = array_search('setUsuario',$metodos);
   var_dump($busqueda);

   //Objeto de otro paquete
   //$usuario = new UsuarioAdmin();
   //var_dump($usuario);

   echo "<hr><hr>";

   //Comprobar si existe una clase
   //Poniendo una @ delante de la función, los warnings se esconderán
   $clase = @class_exists('MisClases\Usuario');

   if($clase){
        echo "Si existe la clase";
   }else{
        echo "La clase no existe";
   }
   
   
   
   
   
   



    //Ahora se puede instanciar la clase sin necesidad de hacer un include por cada clase
    // $usuario = new Usuario();
    // echo $usuario->nombre;
    // echo "<br>";
    // echo $usuario->email;

    // echo "<br><br>";

    // $categoria = new Categoria();
    // echo $categoria->nombre;
    // echo "<br>";
    // echo $categoria->descripcion;

    // echo "<br><br>";

    // $entrada = new Entrada();
    // echo $entrada->titulo;
    // echo "<br>";
    // echo $entrada->fecha;