    <h1>Algunos de nuestros Productos</h1>
    <?php while($pro = $productos->fetch_object()){ ?>
    <div class="product">
        <?php if($pro->imagen != null){ ?>    
            <img src="<?=base_url?>uploads/images/<?=$pro->imagen?>" alt="<?=$pro->nombre?>">
        <?php } else{ ?>
            <img src="assets/img/camiseta.png" alt="imagen default">
        <?php } ?>
        <h2><?=$pro->nombre?></h2>
        <p>$<?=$pro->precio?></p>
        <a href="#" class="button">Comprar</a>
    </div>
    <?php } ?>