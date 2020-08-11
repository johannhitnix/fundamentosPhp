<?php
    // crear directorios
    if (!is_dir('my_folder')) {
        mkdir('my_folder', 0777) or die('Nose pudo crear la carpeta');        
    } else{
        echo 'ya existe la carpeta';
    }
    echo "<hr>";

    // borrar directorios
    // rmdir('my_folder');

    // recorrer el contenido del directorio
    if($gestor = opendir('my_folder')){ 
        while(false !== ($archivo = readdir($gestor))){
            if($archivo <> '.' && $archivo <> '..') echo "$archivo <br>";
        }
    }