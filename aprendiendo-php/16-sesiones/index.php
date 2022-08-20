<?php

    //Sesion: Almacena y persiste datos del usuario mientras que
    //navega en un sitio web hasta que cierra sesion o el
    //navegador

    //Inicio de Sesion
    session_start();

    //Variable normal
    $variable_normal = "Soy un texto";

    //Variable de Sesion
    $_SESSION['variable_sesion'] = "Que se dice";

    echo $variable_normal."<br>";
    echo $_SESSION['variable_sesion'];

?>