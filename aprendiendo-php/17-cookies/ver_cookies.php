<?php

    //SI EXISTE LA COOKIE
    if(isset($_COOKIE["MiGalleta"])){

        //IMPRIMIR LA COOKIE
        echo "<h1>".$_COOKIE["MiGalleta"]."</h1>";

    }else{

        echo "Chupelo";

    }

    if(isset($_COOKIE["oneyear"])){

        echo "<h1>".$_COOKIE["oneyear"]."</h1>";

    }
    else{
        
        echo "Petro presidente";

    }

?>

<a href="crearcookies.php">Crear Cookies</a>
<a href="borrar_cookies.php">Borrar Cookies</a>