<?php

    if($_COOKIE['MiGalleta']){

        //BORRAR LA COOKIE
        unset($_COOKIE['MiGalleta']);
        //CADUCAR LA COOKIE, SE COGE LA FUNCION TIME QUE DA LA FECHA
        //DE HOY Y SE LE RESTA 100 O CUALQUIER NUMERO, ESTO HARA
        //QUE DEJE DE EXISTIR ESA COOKIE
        setcookie('MiGalleta','',time()-100);

    }

    //MODIFICAR LA DIRECCION A LA QUE LLEVARA ESTA PAGINA
    header("Location:ver_cookies.php");

?>