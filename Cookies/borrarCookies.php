<?php
    if(isset($_COOKIE['mycookie'])){
        unset($_COOKIE['mycookie']);
        // nota: para borrar una cookie primero hay que caducarla al restarle 100 a time
        setcookie('mycookie', '', time()-100);
        echo "<h1>Se borró esa mondá</h1>";
    }

    // redireccion
    header('Location: verCookies.php');