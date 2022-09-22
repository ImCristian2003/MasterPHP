<?php

    require_once 'models/categoria.php';
    require_once 'models/producto.php';

    class CategoriaController{

        public function index(){

            Utils::isAdmin();

            $categoria = new Categoria();
            $categorias = $categoria->getAll();
            
            require_once 'views/categoria/index.php';

        }

        public function crear(){

            Utils::isAdmin();

            require_once "views/categoria/crear.php";

        }

        public function ver(){

            if(isset($_GET['id'])){
                
                $id = $_GET['id'];

                //Conseguir categoria
                $categoria = new Categoria();   
                $categoria->setId($id);

                $categorias = $categoria->getOne();

                //Conseguir producto
                $producto = new Producto();
                $producto->setCategoriaId($id);
                $productos = $producto->getAllCategory();

            }

            require_once "views/categoria/ver.php";

        }

        public function save(){

            Utils::isAdmin();

            if(isset($_POST) && isset($_POST['nombre'])){
                //Guardar la categoria en la base de datos
                $categoria = new Categoria();
                $categoria->setNombre($_POST['nombre']);
                $categoria->save();

            }
            header("Location:".base_url."categoria/index");
        }

    }