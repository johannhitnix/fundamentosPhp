<?php

// --asignacion de constantes--
define('dia', 'sabado');
define('nombre', 'johan');

echo '<h3>';
echo nombre;
echo '</h3>';

echo '<h3>';
echo dia;
echo '</h3>';
// nota: jamas se usa el simbolo $ con constantes

// --CONSTANTES PREDEFINIDAS--

echo '<h3>';
echo PHP_OS;
echo '</h3>';

echo '<h3>';
echo PHP_VERSION;
echo '</h3>';

echo '<h3>';
echo PHP_EXTENSION_DIR;
echo '</h3>';

echo '<h3>';
echo __LINE__;
echo '</h3>';

echo '<h3>';
echo __FILE__;
echo '</h3>';

function hiya(){
    echo '<h3>';
    echo __FUNCTION__;
    echo '</h3>';
}
hiya();

