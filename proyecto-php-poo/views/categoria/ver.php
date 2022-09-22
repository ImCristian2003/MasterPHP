<div id="central">
    <?php if(isset($categorias->id)): ?>
        <h1><?=$categorias->nombre?></h1>
    <?php else: ?>
        <h1>La categoria no existe</h1>
    <?php endif; ?>
    <!----PRODUCTOS------->
    <?php if($productos->num_rows == 0): ?>
        <p>No hay productos para mostrar</p>
    <?php else: ?>
        
        <?php while($product = $productos->fetch_object()): ?>
        <div class="product">
            <a href="<?=base_url?>producto/ver&id=<?=$product->id?>">
                <?php if($product->imagen != null): ?>
                    <img src="<?=base_url;?>uploads/images/<?=$product->imagen?>" alt="">
                <?php else: ?>
                    <img src="<?=base_url;?>assets/img/camiseta.png<?=$product->imagen?>" alt="">
                <?php endif; ?>
                    <h2><?=$product->nombre?></h2>
            </a>
                <p><?=$product->precio?></p>
                <a href="" class="button">Comprar</a>
        </div>
        <?php endwhile; ?>
        
    <?php endif; ?>
</div>