<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios PHP/HTML</title>
</head>
<body>
    
    <h1>Formulario</h1>
    <form action="" method="POST" enctype="multipart/form-data">
    <!--EL ENCTYPR FUNCIONA PARA SUBIR ARCHIVOS DEL SERVIDOR-->

        <label for="nombre">Nombre:</label> 
        <p><input type="text" name="nombre" autofocus="autofocus"></p>

        <label for="apellido">Apellido:</label>
        <p><input type="text" name="apellido"></p>

        <label for="boton">Boton:</label>
        <p><input type="button" name="boton" value="Click On Me"></p>

        <label for="sexo">Sexo:</label>
        <p>
            Hombre:<input type="checkbox" name="sexo" value="Hombre">
            Mujer:<input type="checkbox" name="sexo" value="Mujer">
        </p>

        <label for="color">Color:</label>
        <p><input type="color" name="color"></p>

        <label for="fecha">Fecha:</label>
        <p><input type="date" name="fecha"></p>

        <label for="correo">Correo:</label>
        <p><input type="email" name="correo"></p>

        <label for="archivo">Archivo:</label>
        <p><input type="file" name="archivo" multiple></p>
        <!--MULTIPLE PERMITE SUBIR VARIOS ARCHIVOS-->

        <label for="continente">Continente:</label>
        <p>
            America: <input type="radio" name="continente" value="America">
            Asia: <input type="radio" name="continente" value="Asia">
            Europa: <input type="radio" name="continente" value="Europa">
        </p>
        
        <p><textarea name="" id=""></textarea></p>

        <label for="">Peliculas</label>
        <p>
            <select name="peliculas" id="">
                <option value="spiderman">Spiderman</option>
                <option value="batman">Batman</option>
                <option value="superman">Superman</option>
            </select>
        </p>

        <input type="submit" value="Enviar">

    </form>

</body>
</html>