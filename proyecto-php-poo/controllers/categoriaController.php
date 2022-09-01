<?php

    require_once 'models/categoria.php';

    class CategoriaController{

        public function index(){

            $categoria = new Categoria();
            $categorias = $categoria->getAll();
            
            require_once 'views/categoria/index.php';

        }

    }