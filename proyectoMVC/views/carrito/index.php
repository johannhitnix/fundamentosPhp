<h1>Carrito de compra</h1>
<table>
    <tr>
        <th>Imagen</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Unidades</th>
    </tr>
    <?php
    foreach($carritou as $index => $elemento){
        $producto = $elemento['producto'];
    ?>
        <tr>
            <td>
                <?php if($producto->imagen != null){ ?>
                    <img src="<?=base_url?>uploads/images/<?=$producto->imagen?>" class="img-carritou">
                <?php } else{ ?>
                    <img src="<?=base_url?>assets/img/camiseta.png" alt="imagen default" class="img-carritou">
                <?php } ?>
            </td>
            <td><a href="<?=base_url?>producto/ver&id=<?=$producto->id?>"><?=$producto->nombre?></a></td>
            <td><?=$elemento['precio']?></td>
            <td><?=$elemento['unidades']?></td>
        </tr>
    <?php }?>
</table>
<br>

<div class="total-carrito">
    <?php $stats = Utils::statsCarrito(); ?>
    <h3>Total Acumulado: $<?=$stats['total']?></h3>
    <a href="#" class="button button-pedido">Hacer pedido</a>
</div>