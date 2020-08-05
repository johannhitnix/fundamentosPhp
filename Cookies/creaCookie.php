<?php
    $nombre = "mycookie";
    $valor = "valorx";
    // Crear cookie
    // setcookie($nombre, $valor, $caducidad, $ruta, $dominio);

    // cookie basica
    setcookie($nombre, $valor);

    // cookie que expira en un año, con formato time_stamp, time() es la fecha actual
    setcookie("cualquiera", "cualquiera", time()+(60*60*24*365));

?>

<a href="verCookies.php">Cookies and cream bb</a>