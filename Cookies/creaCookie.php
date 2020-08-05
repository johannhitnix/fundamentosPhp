<?php
    $nombre = "mycookie";
    $valor = "valorx";
    // Crear cookie
    // setcookie($nombre, $valor, $caducidad, $ruta, $dominio);

    // cookie basica
    setcookie($nombre, $valor);

    // cookie que expira en un año
    setcookie("cualquiera", "cualquiera", time()+(60*60*24*365));