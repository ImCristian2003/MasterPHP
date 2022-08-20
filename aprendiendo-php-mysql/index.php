<?php

    #Conectar a la base de datos
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "phpmysql";

    $conexion = mysqli_connect($host,$user,$pass,$db)
    or die("Problemas en la conexion a la base de datos".$db);

    //Consulta para configurar la codificacion de caracteres
    mysqli_query($conexion, "SET NAMES 'utf8'");

    //Consulta SELECT desde PHP
    $query = mysqli_query($conexion, "SELECT * FROM notas");
    
    while($nota = mysqli_fetch_assoc($query)){
        echo $nota['descripcion']."<br>";
    }

    //Insertar en la base de datos desde php
    $consulta = "INSERT INTO notas VALUES(null,'Nota desde PHP','Esto es una nota desde PHP','green')";
    $insert = mysqli_query($conexion,$consulta);

    if($insert){
        echo "Datos ingresados correctamente";
    }else{
        echo "Error: ".mysqli_error($conexion);
    }

?>