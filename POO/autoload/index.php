<?php
// carga todas las clases en una sola linea!
require_once 'autoload.php';

$usr = new Usuario();
echo $usr->nombre;
echo "<br>";
echo $usr->email;

$ctg = new Categoria();
echo "<br>";
echo $ctg->nombre;
echo "<br>";
echo $ctg->descripcion;