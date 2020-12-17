<?php

require_once 'configuracion.php';

// uso de la clase estatica sin instanciar
Configuracion::setColor('Blue');
Configuracion::setEntorno('SuperSaiyan');
Configuracion::setNewsletter(true);

echo Configuracion::getEntorno() . " " . Configuracion::getColor();

echo "<br>";

// aunque tambien se pueden crear instancias
// y usar el operador :: para acceder a los metodos y atributos
$conf = new Configuracion();
$conf::$color = 'Golden';
$conf::$entorno = 'Frieza';
echo $conf::$color . " " . $conf::$entorno;
var_dump($conf);