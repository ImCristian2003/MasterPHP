<div id="central">

    <?php if(isset($prod)): ?>
        <h1><?=$prod->nombre?></h1>

        <div class="product">

                <?php if($prod->imagen != null): ?>
                    <img src="<?=base_url;?>uploads/images/<?=$prod->imagen?>" alt="">
                <?php else: ?>
                    <img src="<?=base_url;?>assets/img/camiseta.png<?=$prod->imagen?>" alt="">
                <?php endif; ?>
                    <h2><?=$prod->nombre?></h2>
                
                <p><?=$prod->descripcion?></p>
                <p><?=$prod->precio?></p>
                <a href="<?=base_url?>carrito/add&id=<?=$prod->id?>" class="button">Comprar</a>
        </div>

    <?php else: ?>
        <h1>El producto no existe</h1>

    <?php endif; ?>

</div>