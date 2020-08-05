<?php

    if(isset($_COOKIE['mycookie'])){
        echo "<h1>".$_COOKIE['mycookie']."</h1>";
    } else{
        echo "no existen cookies";
    }

    if(isset($_COOKIE['cualquiera'])){
        echo "<h1>".$_COOKIE['cualquiera']."</h1>";
    } else{
        echo "no existen cookies";
    }

?>

<a href="creaCookie.php">crear galletas</a>
<br>
<a href="borrarCookies.php">borrar galletas</a>