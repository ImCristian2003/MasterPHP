<?php

    if(!isset($_POST['busqueda'])){
        header("Location: index.php");
    } 

?>

<?php require_once 'includes/cabecera.php'; ?>

    <?php require_once 'includes/lateral.php'; ?>

        <!-------------------------CAJA PRINCIPAL------------------->
        <div id="principal">
            
            <h1>Busqueda: <?=$_POST['busqueda']?></h1>
            <?php 
                $entradas = conseguirEntradas($conexion,null,null,$_POST['busqueda']);

                if(!empty($entradas) && mysqli_num_rows($entradas) >= 1):
                    while($entrada = mysqli_fetch_assoc($entradas)):
            ?>
                        <article class="entrada">
                            <a href="entrada.php?id=<?=$entrada['id']?>">
                                <h2><?=$entrada['titulo'];?></h2>
                                <span class="fecha"><?=$entrada['categoria']." | ".$entrada['fecha'] ?></span>
                                <p><?=substr($entrada['descripcion'], 0, 180)."...";?></p>
                            </a>
                        </article>
            <?php 
                    endwhile;
                else:
            ?>
                <div class="alerta alerta-secondary">
                    No hay entradas en esta categoria
                </div>
            <?php
                endif;
            ?>
            <div id="ver-todas">
                <a href="">Entradas</a>
            </div>
        </div>
        
    

    <?php require_once 'includes/pie.php'; ?>
</body>
</html>