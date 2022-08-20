<?php
    
    //FUNCION PARA MOSTRAR LOS ERRORES
    function mostrarError($errores, $campo){

        //VARIABLE PARA IMPRIMIR EL ERROR
        $alerta = "";
        
        //EVALUACION DE LA EXISTENCIA DE UN ERROR
        if(isset($errores[$campo]) && !empty($campo)){

            $alerta = "<div class='alerta alerta-error'>".$errores[$campo]."</div>";

        }

        //RETORNO DE EL MENSAJE
        return $alerta;
    }

    //FUNCION PARA BORRAR VARIABLES O ERRORES
    function borrarErrores(){

        //BORRAR LA VARIABLE DE SESION "ERRORES"
        if(isset($_SESSION['errores'])){

            //FUNCION PARA BORRAR LA VARIABLE "SESSION['ERRORES']"
            unset($_SESSION['errores']);

        }

        //BORRAR LA VARIABLE DE SESION "COMPLETADO"
        if(isset($_SESSION['completado'])){

            //FUNCION PARA BORRAR LA VARIABLE "SESSION["COMPLETADO"]
            unset($_SESSION['completado']);

        }

        //BORRAR LOS ERRORES DE LAS ENTRADAS
        if(isset($_SESSION['errores_entrada'])){

            unset($_SESSION['errores_entrada']);

        }

        //BORRAR ERROR DE ACTUALIZACION DE USUARIO
        if(isset($_SESSION['errores-general'])){

            unset($_SESSION['errores-general']);

        }

    }

    function conseguirCategorias($conexion){

        $sql = "SELECT * FROM categorias ORDER BY id ASC";
        $categorias = mysqli_query($conexion,$sql);

        $resultado = array();
        if($categorias && mysqli_num_rows($categorias) >= 1){

            $resultado = $categorias;

        }

        return $resultado;

    }

    function conseguirCategoria($conexion,$id){

        $sql = "SELECT * FROM categorias WHERE id ='$id'";
        $categorias = mysqli_query($conexion,$sql);

        $resultado = array();
        if($categorias && mysqli_num_rows($categorias) >= 1){

            $resultado = mysqli_fetch_assoc($categorias);

        }

        return $resultado;

    }

    function conseguirEntrada($conexion,$id){

        $sql = " SELECT en.*, ca.nombre, CONCAT(us.nombre, ' ', us.apellidos) as 'usuario' FROM entradas as en ".
        "INNER JOIN categorias as ca ON en.categoria_id = ca.id ".
        "INNER JOIN usuarios as us ON en.usuario_id = us.id ".
        " WHERE en.id = '$id'";
        $entrada = mysqli_query($conexion,$sql);

        $resultado = array();

        if($entrada && mysqli_num_rows($entrada) >= 1){

            $resultado = mysqli_fetch_assoc($entrada);

        }

        return $resultado;

    }

    function conseguirEntradas($conexion, $limit = false, $categoria = null, $busqueda = null){

        $sql = "SELECT en.*, ca.nombre as 'categoria' FROM entradas en ".
        "INNER JOIN categorias ca ON en.categoria_id = ca.id ";

        if(!empty($categoria)){

            $sql .= "WHERE en.categoria_id = $categoria ";

        }

        if(!empty($busqueda)){

            $sql .= "WHERE en.titulo LIKE '%$busqueda%' ";

        }

        $sql .= " ORDER BY en.id DESC ";

        if($limit){
            $sql .= " LIMIT 4 ";
        }

        $entradas = mysqli_query($conexion, $sql);

        $resultado = array();
        if($entradas && mysqli_num_rows($entradas) >= 1){

            $resultado = $entradas;

        }

        return $resultado;

    }

    function buscarentradas($conexion, $limit = false, $categoria = null){

        $sql = "SELECT en.*, ca.nombre as 'categoria' FROM entradas en ".
        "INNER JOIN categorias ca ON en.categoria_id = ca.id ";

        if(!empty($categoria)){

            $sql .= "WHERE en.categoria_id = $categoria ";

        }

        $sql .= " ORDER BY en.id DESC ";

        if($limit){
            $sql .= " LIMIT 4 ";
        }

        $entradas = mysqli_query($conexion, $sql);

        $resultado = array();
        if($entradas && mysqli_num_rows($entradas) >= 1){

            $resultado = $entradas;

        }

        return $resultado;

    }
