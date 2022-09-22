<div id="central">
    <h1>Registrarse</h1>
    
    <?php   if(isset($_SESSION['register']) && $_SESSION['register'] == 'Registro completado'): ?>
                
                <strong class="alert_green">Registro completado correctamente</strong>
        
    <?php   elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'Registro fallido'):  ?>

                <strong class="alert_red">Registro fallido</strong>

    <?php   endif; ?>
    <?php Utils::deleteSession('register'); ?>

    <form action="<?=base_url?>usuario/save" method="post">

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" required>
        <?php echo isset($_SESSION['errores']) ? Utils::printErrors($_SESSION['errores'],'nombre') : ""; ?>

        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" required>
        <?php echo isset($_SESSION['errores']) ? Utils::printErrors($_SESSION['errores'],'apellidos') : ""; ?>

        <label for="email">Email</label>
        <input type="email" name="email" required>
        <?php echo isset($_SESSION['errores']) ? Utils::printErrors($_SESSION['errores'],'email') : ""; ?>

        <label for="password">Contraseña</label>
        <input type="password" name="password" required>
        <?php echo isset($_SESSION['errores']) ? Utils::printErrors($_SESSION['errores'],'password') : ""; ?>

        <input type="submit" value="Enviar">

    </form>
    <?php Utils::deleteSession('errores'); ?>
</div>