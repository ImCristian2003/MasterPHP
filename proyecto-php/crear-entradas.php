<?php require_once 'includes/redireccion.php' ?>

<?php require_once 'includes/cabecera.php' ?>

<?php require_once 'includes/lateral.php' ?>

<div id="principal">
    <h1>Crear entradas</h1>
    <p>Añade nuevas entradas al blog para que los usuarios puedan leerlas y disfrutar de su contenido</p>
    <br>
    <hr>
    <br>
    <form action="guardar-entrada.php" method="post">

        <label for="titulo">Titulo</label>
        <input type="text" name="titulo">

        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'titulo') : ''; ?>

        <label for="descripcion">Descripcion</label>
        <textarea name="descripcion"></textarea>

        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'descripcion') : ''; ?>

        <label for="categoria">Categoria</label>
        <select name="categoria" id="">
        <?php 
            $categorias = conseguirCategorias($conexion);
            if(!empty($categorias)):
                while($categoria = mysqli_fetch_assoc($categorias)):
        ?>

                    <option value="<?=$categoria['id']?>">
                        <?=$categoria['nombre']?>
                    </option>

        <?php 
                endwhile;
            endif;
        ?>
        </select>

        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'categoria') : ''; ?>

        <input type="submit" value="Guardar">

    </form>
    <?php borrarErrores(); ?>
</div>

<?php require_once 'includes/pie.php' ?>