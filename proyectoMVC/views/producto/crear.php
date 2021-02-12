<?php if(isset($edit) && isset($pro) && is_object($pro)){ 
    $url_action = base_url.'producto/save&id='.$pro->id;?>
    <h1>Editar producto <?=$pro->nombre?></h1>
<?php }else{ 
    $url_action = base_url.'producto/save';?>
    <h1>Crear nuevos productos</h1>
<?php } ?>

<!-- <?php var_dump($pro); ?> -->

<div class="form-container">
    <form action="<?=$url_action?>" method="post" enctype="multipart/form-data">
        <label for="nombre">nombre</label>
        <input type="text" name="nombre" id="nombre" value="<?=isset($pro) && is_object($pro) ? $pro->nombre : '' ?>">
        
        <label for="descripcion">descripcion</label>    
        <textarea name="descripcion" id="descripcion" cols="30" rows="10"><?=isset($pro) && is_object($pro) ? $pro->descripcion : '' ?></textarea>
    
        <label for="precio">precio</label>
        <input type="text" name="precio" id="precio" value="<?=isset($pro) && is_object($pro) ? $pro->precio : '' ?>">
    
        <label for="stock">stock</label>
        <input type="number" name="stock" id="stock" value="<?=isset($pro) && is_object($pro) ? $pro->stock : '' ?>">
    
        <label for="categoria">categoria</label>    
        <?php $cats = Utils::showCategorias(); ?>    
        <select name="categoria" id="categoria">
            <?php while($cat = $cats->fetch_object()){ ?>
                <option value="<?=$cat->id?>" <?=isset($pro) && is_object($pro) && $cat->id == $pro->categoria_id ? 'selected' : '' ?>><?=$cat->nombre?></option>
            <?php } ?>
        </select>
    
        <label for="imagen">imagen</label>

        <?php if(isset($pro) && is_object($pro) && !empty($pro->imagen)){ ?>
                <img src="<?=base_url?>uploads/images/<?=$pro->imagen?>" class="thumb">
        <?php } ?>

        <input type="file" name="imagen" id="imagen">

        <input type="submit" value="Guardar">
    </form>
</div>