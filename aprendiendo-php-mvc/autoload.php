<?php

    function autocargar($class_name){

        include 'controllers/' . $class_name . '.php';

    }

    spl_autoload_register('autocargar');