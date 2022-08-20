<?php

    /*Cookie: Es un fichero que se almacena en el ordenador del
    Usuario que visita la web, con el fin de recordar datos
    o rastrear el comportamiento del mismo en la web. */

    // setcookie("nombre", "valor que solo puede ser texto",
    // caducidad, ruta, dominio);

    //Cookie basica
    setcookie("MiGalleta", "Valor de mi galleta");

    //Cookie con expiracion
    setcookie("oneyear","Valor de 365 dias",time()+(60*60*24*365));

    header("Location:ver_cookies.php");

?>