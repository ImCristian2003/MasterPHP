<?php

    //COMPROBAR SI EL PARAMETRO GET EXISTE
    if(isset($_GET['email'])){
        //ALMACENAR EL VALOR EN UNA VARIABLE
        $email = $_GET['email'];
        //CREACION DE LA FUNCION CON EL PARAMETRO CORRESPONDIENTE
        function validar($email){

            //CONDICION PARA SABER SI EL PARAMETRO ES VALIDO
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo "Email validado correctamente";
            }
            else{
                echo "Formato de email incorrecto";
            }
            //RETORNO DEL VALOR
            return $email;

        }

        //IMPRESION DE LA FUNCIÓN
        echo "<br>".validar($email);

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="email" id="">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>