<?php
    // a+ permite leer y escirbir
    $archivo = fopen('file.txt', 'a+');

    while(!feof($archivo)){
        $contents = fgets($archivo);
        echo "<h4>$contents</h4>";
    }

    fwrite($archivo, PHP_EOL . 'pero que canción tan imbécil jjajajajaja');
     
    fclose($archivo);