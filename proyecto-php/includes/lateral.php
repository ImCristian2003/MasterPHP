<!-------------------------BARRA LATERAL------------------->
<aside id="sidebar">

            <div class="buscador" class="bloque">
                <h3>Buscar</h3>
                <form action="buscar.php" method="post">
                    <input type="text" name="busqueda">
                    <input type="submit" value="Buscar">
                </form>
            </div>

            <div id="login" class="bloque">

                <?php if(isset($_SESSION['usuario'])): ?>
                    <div class="bloque" id="usuario_logeado">
                        <h3>Bienvenido <?=$_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellidos'] ?></h3>
                        <!-- botones -->
                        <a href="crear-entradas.php" class="boton boton-verde">Crear Entrada</a>
                        <a href="crear-categoria.php" class="boton">Crear Categoria</a>
                        <a href="mis-datos.php" class="boton boton-naranja">Mis Datos</a>
                        <a href="logout.php" class="boton boton-rojo">Cerrar Sesion</a>
                    </div>
                <?php endif; ?>

                <?php if(!isset($_SESSION['usuario'])): ?>
                <h3>Identificate</h3>

                <?php if(isset($_SESSION['error_login'])): ?>
                    <div class="alerta alerta-error">
                        <h3><?=$_SESSION['error_login']; unset($_SESSION['usuario'])?></h3>
                    </div>
                <?php endif; ?>

                <form action="login.php" method="post">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" id="">
                    <input type="submit" value="Entrar">
                </form>
            </div>
            <div id="register" class="bloque">
                <h3>Registrate</h3>
                <!--MOSTRAR RESULTADO DE LA INSERCION DE DATOS-->
                <?php if(isset($_SESSION['completado'])): ?>

                    <div class="alerta alerta-exito">
                        <?= $_SESSION['completado']; ?>
                    </div>

                <?php elseif(isset($_SESSION['errores']['general'])): ?>

                    <div class="alerta alerta-error">
                        <?= $_SESSION['errores']['general']; ?>
                    </div>

                <?php endif; ?>

                <form action="registro.php" method="post">

                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="">
                    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>

                    <label for="apellidos">Apellidos</label>
                    <input type="text" name="apellidos" id="">
                    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : ''; ?>

                    <label for="email">Email</label>
                    <input type="text" name="email" id="">
                    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>

                    <label for="password">Contraseña</label>
                    <input type="password" name="password" id="">
                    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : ''; ?>

                    <input type="submit" value="Registrarse" name="submit">

                </form>
                <?php borrarErrores(); ?>
            </div>
            <?php endif; ?>
        </aside>