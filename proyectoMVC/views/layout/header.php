<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test-Shirt Store</title>
    <link rel="stylesheet" href="<?=base_url?>assets/css/main.css">
    <!-- <link rel="stylesheet" href="assets/css/styles.css"> -->
</head>
<body>
    <div id="container">
        <!-- HEADER -->
        <header id="header">  
            <div id="logo">
                <img src="<?=base_url?>assets/img/camiseta.png" alt="Camiseta_logo">
                <a href="index.php">Test-Shirt Store</a> 
            </div>
        </header>
    
        <!-- MENU -->
        <?php $cats = Utils::showCategorias(); ?>
        <nav id="menu">
            <ul>
                <li><a href="#">Inicio</a></li>
                <?php while($cat = $cats->fetch_object()){ ?>
                    <li><a href="#"><?=$cat->nombre?></a></li>
                <?php } ?>
            </ul>
        </nav>
    
    <div id="content">