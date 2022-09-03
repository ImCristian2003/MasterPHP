
<div id="central">

    <?php if(isset($edit)): ?>
        <h1>Editar producto</h1>
    <?php else: ?>
        <h1>Crear nuevos productos</h1>
    <?php endif; ?>

    <?php if(isset($_SESSION['producto']) && $_SESSION['producto'] == "Failed"): ?>
        <strong class="alert_red"><?=$_SESSION['producto']?></strong>

    <?php endif; ?>

    <?php
        $url_action = base_url."producto/save";
    ?>

    <form action="<?=base_url;?>producto/save" method="post" enctype="multipart/form-data">

        <label for="nombre">Nombre</label>
        <input type="text" name ="nombre">

        <label for="descripcion">Descripcion</label>
        <textarea name="descripcion"></textarea>

        <label for="precio">Precio</label>
        <input type="text" name ="precio">

        <label for="stock">Stock</label>
        <input type="number" name ="stock">

        <label for="categoria">Categoria</label>
        <?php $categorias = Utils::showCategorias(); ?>
        <select name="categoria" id="">
            
            <?php while($cat = $categorias->fetch_object()): ?>

                <option value="<?=$cat->id; ?>"><?=$cat->nombre; ?></option>

            <?php endwhile ?>

        </select>

        <label for="imagen">Imagen</label>
        <input type="file" name ="imagen">

        <input type="submit" value="Guardar">

    </form>
    <?php Utils::deleteSession('producto'); ?>

</div>