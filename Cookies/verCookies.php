<?php

    if(isset($_COOKIE['mycookie'])){
        echo "<h1>".$_COOKIE['mycookie']."</h1>";
    } else{
        echo "no existen cookies";
    }