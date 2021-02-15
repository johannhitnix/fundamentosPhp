<?php  if(isset($pro)){ ?>
    <h1><?=$pro->nombre?></h1>    
    <div class="detail-product">
        <div class="image">
            <?php if($pro->imagen != null){ ?>    
                <img src="<?=base_url?>uploads/images/<?=$pro->imagen?>" alt="<?=$pro->nombre?>">
            <?php } else{ ?>
                <img src="<?=base_url?>assets/img/camiseta.png" alt="imagen default">
            <?php } ?>            
        </div>

        <div class="data">
            <p class="price">$<?=$pro->precio?></p>
            <p class="desc"><?=$pro->descripcion?></p>
            <a href="<?=base_url?>carrito/add&id=<?=$pro->id?>" class="button">Comprar</a>
        </div>            
        
    </div>
    
<?php }else{ ?>
    <h1>El producto no existe</h1>    
<?php } ?>