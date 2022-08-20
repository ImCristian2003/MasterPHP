<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Validacion</title>
    </head>
    <body>
        <?php
        
            if(isset($_GET['error'])){
                $error = $_GET["error"];
                if($error!="Melo caramelo"){

                    echo "<strong style='color:red;'>Meta todos los".
                    " datos, sapo</strong>";

                }
            }
        
        ?>
        <h1>Validar Formularios en PHP</h1>
        <form action="procesar_form.php" method="post">

            <label for="nombre">Nombre</label>
            <p><input type="text" name="nombre" required pattern="[A-Za-z ]+"></p>

            <label for="apellidos">Apellidos</label>
            <p><input type="text" name="apellidos" required pattern="[A-Za-z ]+"></p>

            <label for="edad">Edad</label>
            <p><input type="text" name="edad" pattern="[0-9]+" required></p>

            <label for="email">Email</label>
            <p><input type="email" name="email" required></p>

            <label for="pass">Contraseña</label>
            <p><input type="password" name="pass" required></p>

            <input type="submit" value="Enviar">

        </form>
    </body>
</html>