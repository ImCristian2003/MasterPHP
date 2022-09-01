<h1>Gestionar Categorias</h1>
<table border="1">
        <tr>
            <th>Id</td>
            <th>Nombre</td>
        </tr>
    <?php while($cat = $categorias->fetch_object()): ?>
        <tr>
            <td><?=$cat->id; ?></td>
            <td><?=$cat->nombre; ?></td>
        </tr>
    <?php endwhile; ?>
</table>