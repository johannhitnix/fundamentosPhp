<?php

require_once 'clases.php';

$man = new Persona();

$man->setNombre('Joaquin');
$man->setApellidos('Mendez');
$man->setAltura(1.50);
$man->setEdad(65);

var_dump($man);

$programmer = new Informatico('Php, JavaScript, Java, SQL', '2 años');

// echo $programmer->sabeLenguajes('Php, JavaScript, Java, SQL');
$programmer->setAltura(1.67);

var_dump($programmer);

$tecnico = new TecnicoRedes('VHDL, CISCO', '7 años');
var_dump($tecnico);