<aside id="lateral">

    <div id="login" class="block-aside">

        <?php if(!isset($_SESSION['identity'])): ?>

            <h3>Entrar a la Web</h3>
            <form action="<?=base_url?>usuario/login" method="post">

                <label for="email">Email</label>
                <input type="email" name="email">
                <label for="password">Contraseña</label>
                <input type="password" name="password">
                <input type="submit" value="Enviar">

            </form>
            <a href="<?=base_url?>usuario/registro">Registrate aquí</a>
        <?php else: ?>

            <h3><?=$_SESSION['identity']->nombre?></h3>

        <?php endif; ?>
        
        <ul>
            <?php if(isset($_SESSION['admin'])): ?>
                <li><a href="<?=base_url;?>categoria/index">Gestionar categorias</a></li>
                <li><a href="<?=base_url;?>producto/gestion">Gestionar productos</a></li>
                <li><a href="#">Gestionar pedidos</a></li>
            <?php endif; ?>

            <?php if(isset($_SESSION['identity'])): ?>
                <li><a href="#">Mis pedidos</a></li>
                <li><a href="<?=base_url?>usuario/logout">Cerrar Sesion</a></li>
            <?php endif; ?>
        </ul>
    </div>

</aside>