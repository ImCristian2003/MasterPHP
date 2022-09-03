<div id="central">

    <h1>Gestión de Productos</h1>
    <?php if(isset($_SESSION['producto']) && $_SESSION['producto'] == "Complete"): ?>
        <strong class="alert_green">Producto añadido exitosamente</strong>
    <?php endif; ?>
    <?php if(isset($_SESSION['delete']) && $_SESSION['delete'] == "Complete"): ?>
        <strong class="alert_green">Producto borrado exitosamente</strong>
    <?php elseif(isset($_SESSION['delete']) && $_SESSION['delete'] == "Failed"): ?>
        <strong class="alert_red">Fallo al borrar el producto</strong>
    <?php endif; ?>
    <?php Utils::deleteSession('producto');?>
    <?php Utils::deleteSession('delete');?>
    <a href="<?=base_url; ?>producto/crear" class="button button-small">
        Crear Producto
    </a>

    <table>
        <tr>
            <th>Id</th>
            <th>Codigo Categoria</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Oferta</th>
            <th>Fecha</th>
            <th>Imagen</th>
            <th>Acciones</th>
        </tr>
        <?php while($prod = $productos->fetch_object()): ?>
            <tr>
                <td><?=$prod->id?></td>
                <td><?=$prod->categoria_id?></td>
                <td><?=$prod->nombre?></td>
                <td><?=$prod->descripcion?></td>
                <td><?=$prod->precio?></td>
                <td><?=$prod->stock?></td>
                <td><?=$prod->oferta?></td>
                <td><?=$prod->fecha?></td>
                <td><?=$prod->imagen?></td>
                <td><a href="<?=base_url; ?>producto/editar&id=<?=$prod->id;?>" class="button button-gestion">Editar</a></td>
                <td><a href="<?=base_url; ?>producto/eliminar&id=<?=$prod->id;?>" class="button button-gestion button-red">Eliminar</a></td>
            </tr>
        <?php endwhile; ?>
    </table>

</div>