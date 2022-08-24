<div id="central">
    <h1>Registrarse</h1>

    <form action="index.php?controller=Usuario&action=save" method="post">

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" required>

        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" required>

        <label for="email">Email</label>
        <input type="email" name="email" required>

        <label for="password">Contraseña</label>
        <input type="password" name="password" required>

        <input type="submit" value="Enviar">

    </form>
</div>