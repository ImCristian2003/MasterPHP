<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Subir archivos con PHP</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">

        <input type="file" name="archivo" id="">
        <input type="submit" value="Enviar">

    </form>

    <h1>Lista de imagenes</h1>
    <?php
    
        $gestor = opendir('./images');
        if ($gestor):
            while(($image = readdir($gestor)) !== false):
                if($image != '.' && $image != '..'):
                    echo "<img src='images/$image' width='200px'><br>";
                endif;
            endwhile;
        endif;
        /*CUANDO SE UTILICE PHP PARA LA VISTA, LO MAS
        RECOMENDABLE ES USAR EL END PARA CICLOS Y CONDICIONES*/

    ?>

</body>
</html>