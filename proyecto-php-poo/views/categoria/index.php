<div id="central">

    <h1>Gestionar Categorias</h1>
    
    <a href="<?=base_url; ?>categoria/crear" class="button button-small">
        Crear Categoria
    </a>

    <table style="border: 1px solid #000; padding: 7px;">
            <tr>
                <th>Id</td>
                <th>Nombre</td>
            </tr>
            <?php while($cat = $categorias->fetch_object()): ?>
                <tr>
                    <td><?=$cat->id;?></td>
                    <td><?=$cat->nombre;?></td>
                    
                </tr>
            <?php endwhile; ?>
    </table>
</div>