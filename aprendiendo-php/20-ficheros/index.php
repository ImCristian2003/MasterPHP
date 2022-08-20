<?php

    // //ABRIR UN FICHERO
    // //FOPEN -> SIRVE PARA ABRIR EL FICHERO
    // //"fichero_texto.txt" -> ES EL ARCHIVO QUE SE VA ABRIR"
    // //"r" -> SIRVE PARA SOLO LEER, PERO SI SE PONE A+, SE PODRA
    // //LEER Y ESCRIBIR, TODOS ESTOS PERMISOS ESTAN EN LA DOCUMENTACION
    // //DE PHP (TODO ESTO HACE PARTE DEL 2 PARAMETRO DE fopen())
    // $archivo = fopen("fichero_texto.txt", "a+");

    // //LEER CONTENIDO
    // //EL WHILE SE UTILIZA CUANDO EL FICHERO TIENE 2 O MAS LINEAS
    // while(!feof($archivo)){
    //     $contenido = fgets($archivo);
    //     echo "<p>".$contenido."</p>";
    // }

    // //ESCRIBIR DENTRO
    // fwrite($archivo, "SIUUUUUUUUUUUU");

    // //CERRAR ARCHIVO
    // fclose($archivo);

    //COPIAR UN FICHERO
    //copy("fichero_texto.txt","fichero_copiado.txt") or die("Error al copiar");

    //RENOMBRAR UN FICHERO
    //rename("archivo,recopiado.txt", "archivo_recopiado.txt");

    //ELIMINAR UN FICHERO
    //unlink("archivo_recopiado.txt") or die("Fallo al eliminar");    

    //COMPROBAR SI UN ARCHIVO EXISTE
    if(file_exists("fichero_texto.txt")){
        echo "El archivo si existe";
    }
    else{
        echo "El archivo no existe";
    }

?>