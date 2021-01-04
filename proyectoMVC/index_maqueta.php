<!-- corte1 -->
<!-- header.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test-Shirt Store</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- <link rel="stylesheet" href="assets/css/styles.css"> -->
</head>
<body>
    <div id="container">
        <!-- HEADER -->
        <header id="header">  
            <div id="logo">
                <img src="assets/img/camiseta.png" alt="Camiseta_logo">
                <a href="index.php">Test-Shirt Store</a> 
            </div>
        </header>
    
        <!-- MENU -->
        <nav id="menu">
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Categoria-1</a></li>
                <li><a href="#">Categoria-2</a></li>
                <li><a href="#">Categoria-3</a></li>
                <li><a href="#">Categoria-4</a></li>
                <li><a href="#">Categoria-5</a></li>
            </ul>
        </nav>
    
        <div id="content">
<!-- corte1 -->

<!-- corte2 -->
<!-- sidebar.php -->
            <!-- BARRA LATERAL -->
            <aside id="lateral">
                <div id="login" class="block_aside">
                    <h3>Entrar a la web</h3>
                    <form action="#" method="POST">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email">
                        <label for="password">password</label>
                        <input type="password" name="password" id="password">
                        <input type="submit" value="Enviar">
                    </form>

                    <ul>
                        <li><a href="#">Mis Pedidos</a></li>
                        <li><a href="#">Gestionar Pedidos</a></li>
                        <li><a href="#">Gestionar Categorias</a></li>
                    </ul>                    
                </div>
            </aside>
    
            <!-- CONTENIDO CENTRAL -->
            <div id="central">
<!-- corte2 --> 

<!-- corte4 -->    
<!-- destacados.php -->
                <h1>Productos Destacados</h1>
                <div class="product">
                    <img src="assets/img/camiseta.png" alt="product1">
                    <h2>Camiseta Azul Ancha</h2>
                    <p>$90.000</p>
                    <a href="#" class="button">Comprar</a>
                </div>
                <div class="product">
                    <img src="assets/img/camiseta.png" alt="product1">
                    <h2>Camiseta Azul Ancha</h2>
                    <p>$90.000</p>
                    <a href="#" class="button">Comprar</a>
                </div>
                <div class="product">
                    <img src="assets/img/camiseta.png" alt="product1">
                    <h2>Camiseta Azul Ancha</h2>
                    <p>$90.000</p>
                    <a href="#" class="button">Comprar</a>
                </div>
<!-- corte4 --> 
           
<!-- corte3 -->
<!-- footer.php -->
            </div>
        </div>
    
        <!-- FOOTER -->
        <footer id="footer">
            <!-- <p>Desarrolado por Belicos&copy; <?=date('Y');?></p> -->
            <p>Desarrolado por Milo&copy; <?=date('Y');?></p>
        </footer>
    </div>
</body>
</html>
<!-- corte3 -->