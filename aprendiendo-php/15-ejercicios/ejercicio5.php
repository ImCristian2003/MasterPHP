<?php

    $matriz = 
        array(
            "ACCION" => array("GTA", "COD", "PUBG"),
            "AVENTURA" => array("ASSASINS", "CRASH", "PRINCE OF PERSIA"),
            "DEPORTES" => array("FIFA 19", "PES 19", "MOTO GP 19")
        );

    $categorias = array_keys($matriz);

    foreach ($categorias as $categoria) {
        echo $categoria;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    
        <table>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>

</body>
</html>