<?php

    session_start();
    $_SESSION['variable_sesion'];

    if($_GET['counter']==1){
        $_SESSION['variable_sesion']++;
    }
    else if($_GET['counter']==0){
        $_SESSION['variable_sesion']--;
    }
    else{
        echo "Parametro numerico no disponible";
    }

    

?>

<h1>El valor de la Sesion es <?=$_SESSION['variable_sesion'];?></h1>
<a href="ejercicio1.php?counter=1">Aumentar el valor</a>
<a href="ejercicio1.php?counter=0">Disminuir el valor</a>