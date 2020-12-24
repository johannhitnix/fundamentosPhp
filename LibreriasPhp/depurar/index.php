<?php
require_once '../vendor/autoload.php';

$frutas = array('manzanas', 'limones', 'peras');

// clase estatica de Fire-php FireBug
\FB::log($frutas);

$nombres = array('ejecutivo' => 'Antonio', 'empleado' => 'juan');
\FB::log($nombres);

echo "hi there " . $nombres['ejecutivo'];

\FB::log("mostrame en consola"); 