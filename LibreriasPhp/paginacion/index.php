<?php

require_once '../vendor/autoload.php';

$cnx = new mysqli("localhost", "root", "", "notas_master", "3308");
$cnx->query("SET NAMES 'utf8'");

$consulta = $cnx->query("SELECT * FROM notas");
$n_elementos = $consulta->num_rows;
$n_elementos_x_pag = 2;

// var_dump($n_elementos);

// ***HACER PAGINACION***
$pagination = new Zebra_Pagination();

// num total de elementos a paginar
$pagination->records($n_elementos);

$pagination->records_per_page($n_elementos_x_pag);

$page = $pagination->get_page();

$begins = ($page - 1) * $n_elementos_x_pag;
$sql = "SELECT * FROM notas LIMIT $begins,$n_elementos_x_pag";
$notas = $cnx->query($sql);

echo '<link rel="stylesheet" href="../vendor/stefangabos/zebra_pagination/public/css/zebra_pagination.css" type="text/css">v';
while($nota = $notas->fetch_object()){
    echo "<h1>{$nota->titulo}</h1>";    
    echo "<h3>{$nota->descripcion}</h3>";    
    echo "</hr>";
}

$pagination->render();