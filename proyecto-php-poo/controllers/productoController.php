<?php

    require_once "models/producto.php";

    class ProductoController{

        public function index(){

            //Renderizar vista
            require_once 'views/productos/destacados.php';

        }

        public function gestion(){
            Utils::isAdmin();

            $producto = new Producto();
            $productos = $producto->getAll();

            require_once 'views/productos/gestion.php';
        }

        public function crear(){

            Utils::isAdmin();
            require_once "views/productos/crear.php";

        }

        public function save(){

            Utils::isAdmin();
            if(isset($_POST)){

                $categoria = isset($_POST['categoria']) ? $_POST['categoria'] : false;
                $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
                $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : false;
                $precio = isset($_POST['precio']) ? $_POST['precio'] : false;
                $stock = isset($_POST['stock']) ? $_POST['stock'] : false;
                //$imagen = isset($_POST['imagen']) ? $_POST['imagen'] : false;

                if($categoria && $nombre && $descripcion && $precio && $stock){

                    $producto = new Producto();
                    $producto->setCategoriaId($categoria);
                    $producto->setNombre($nombre);
                    $producto->setDescripcion($descripcion);
                    $producto->setPrecio($precio);
                    $producto->setStock($stock);

                    //Guardar la imagen
                    //Variable que almacena todo lo que trae la imagen(nombre, tipo,etc)
                    $file = $_FILES['imagen'];
                    //Guardar en una variable el nombre de la imagen
                    $filename = $file['name'];
                    //Guardar en una variable el tipo de la imagen (png, jpg, etc)
                    $mimetype = $file['type'];

                    //Validar que lo que llegue si sea una imagen
                    if($mimetype == "image/jpg" || $mimetype == "image/jpeg" ||
                    $mimetype == "image/png" || $mimetype == "image/gif"){

                        //Si no existe un directorio donde guardar
                        //Las imagenes, con esta validacion el
                        //directorio se creará por si solo
                        if(!is_dir('uploads/images')){
                            //Permisos que se concederán
                            //El true sirve para hacerle saber que es
                            //un directorio recursivo
                            mkdir('uploads/images',0777,true);
                        }

                        //Funcion para poner el archivo en la carpeta con su respectivonombre
                        move_uploaded_file($file['tmp_name'], 'uploads/images/'.$filename);
                        //Cargar el nombre de la imagen
                        $producto->setImagen($filename);

                    }

                    $save = $producto->save();

                    if($save){
                        $_SESSION['producto'] = "Complete";
                        header("Location:".base_url."producto/gestion");
                    }else{
                        $_SESSION['producto'] = "Failed";
                        header("Location:".base_url."producto/crear");
                    }

                }else{
                    $_SESSION['producto'] = "Failed";
                    header("Location:".base_url."producto/crear");
                }

            }else{
                $_SESSION['producto'] = "Failed";
                header("Location:".base_url."producto/crear");
            }

        }

        public function editar(){

            $edit = true;
            require_once 'views/productos/crear.php';

        }

        public function eliminar(){

            Utils::isAdmin();

            if(isset($_GET['id'])){

                $id = $_GET['id'];
                $producto = new Producto();
                $producto->setId($id);
                $delete = $producto->delete();

                if($delete){
                    $_SESSION['delete'] = "Complete";
                }else{
                    $_SESSION['delete'] = "Failed";
                }

            }else{
                $_SESSION['delete'] = "Failed";
            }
            header("Location:".base_url."producto/gestion");
        }

    }