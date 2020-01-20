<?php

// --fx variables--
function buenasDias(){
    return '<h1>Hola buenos Dias :)</h1>';
}
function buenasTardes(){
    return '<h1>Hey como estuvo el almuerzo?</h1>';
}
function buenasNoches(){
    return '<h1>Te vas a dormir ya? hasta mañana</h1>';
}

$hora = 'Noches';
$myfx = 'buenas' . $hora;

echo $myfx();