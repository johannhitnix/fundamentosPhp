<?php while($one = $all->fetch_object()): ?>
    <?=$one->nombre?> - <?=$one->apellidos?> - <?=$one->fecha?> <br>
<?php endwhile;?>