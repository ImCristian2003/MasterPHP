<?php

    require_once "configuracion.php";

    Configuracion::setColor("Blue");
    Configuracion::setEntorno("Localhost");
    Configuracion::setNewsletter(true);

    echo Configuracion::$color."<hr>";
    echo Configuracion::$entorno."<hr>";
    echo Configuracion::$newsletter."<hr>";