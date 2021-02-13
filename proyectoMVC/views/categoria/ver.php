<?php  if(isset($categoria)){ ?>
    <h1>Categoría <?=$categoria->nombre?></h1>
    <?php  if($productos->num_rows == 0){ ?>
        <p>No hay productos para mostrar Sorry</p>
    <?php } else{ ?>
        <?php while($pro = $productos->fetch_object()){ ?>
            <div class="product">
                <a href="<?=base_url?>producto/ver&id=<?=$pro->id?>">
                    <?php if($pro->imagen != null){ ?>    
                        <img src="<?=base_url?>uploads/images/<?=$pro->imagen?>" alt="<?=$pro->nombre?>">
                    <?php } else{ ?>
                        <img src="<?=base_url?>assets/img/camiseta.png" alt="imagen default">
                    <?php } ?>
                    <h2><?=$pro->nombre?></h2>
                </a>
                <p>$<?=$pro->precio?></p>
                <a href="#" class="button">Comprar</a>
            </div>
        <?php } ?>
    <?php } ?>
<?php }else{ ?>
    <h1>La categoría no existe</h1>    
<?php } ?>