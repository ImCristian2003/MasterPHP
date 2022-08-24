<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Camisetas</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>

    <!------------------------------------------CABECERA------------------------------------------->
    <header id="header">
        <div id="logo">
            <img src="assets/img/camiseta.png" alt="Camiseta logo">
            <a href="index.php">
                Tienda de Camisetas
            </a>
        </div>
    </header>

    <!------------------------------------------MENÚ------------------------------------------->

    <nav id="menu">
        <ul>
            <li>
                <a href="">Inicio</a>
            </li>
            <li>
                <a href="">Categoria 1</a>
            </li>
            <li>
                <a href="">Categoria 2</a>
            </li>
            <li>
                <a href="">Categoria 3</a>
            </li>
            <li>
                <a href="">Categoria 4</a>
            </li>
            <li>
                <a href="">Categoria 5</a>
            </li>
        </ul>
    </nav>

    <!------------------------------------------BARRA LATERAL------------------------------------------->

    <div class="content">
        <aside id="lateral">

            <div id="login" class="block-aside">
                <form action="" method="post">

                    <label for="email">Email</label>
                    <input type="email" name="email">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password">
                    <input type="submit" value="Enviar">

                </form>
                <a href="#">Mis pedidos</a>
                <a href="#">Gestionar pedidos</a>
                <a href="#">Getionar categorias</a>
            </div>

        </aside>
    </div>

    <!------------------------------------------CONTENIDO CENTRAL------------------------------------------->

    <div id="central">
        <h1>Productos Destacados</h1>
        <div class="product">
            <img src="assets/img/camiseta.png" alt="">
            <h2>Camiseta Azul Olgada</h2>
            <p>30 euros</p>
            <a href="">Comprar</a>
        </div>

    </div>

    <!------------------------------------------PIE DE PAGINA------------------------------------------->
    
    <footer id="footer">

        <p>Desarrollado por Cristian Cardona &copy; <?=date('Y');?></p>

    </footer>

</body>
</html>