<!-- <h1>Index del Proyecto MVC :<span style="color:red;">)</span></h1> -->
<h1>Mis recuerdos de un Array :<span style="color:red;">)</span></h1>    

<?php
$tituloV1 = strtoupper('mercadito_v1:');
echo "<h4>$tituloV1</h4>";
$mercadito = Array('Frutas' => 'Naranja', 'Verduras' => 'Brocoli', 'Carnes' => 'Res');

foreach ($mercadito as $key => $value) {
    echo "$key : $value <br>";
}

$mercadito_v2 = Array('Frutas' => Array('Naranja', 'Kiwi', 'Papaya'),
                      'Verduras' => Array('Brocoli', 'Espinaca', 'Apio'),
                      'Carnes' => Array('Res', 'Cerdo', 'Pollo'));
echo "<hr>";
$tituloV2 = strtoupper('mercadito_v2:');
echo "<h4>$tituloV2</h4>";
foreach ($mercadito_v2 as $key => $value) {
    echo "<strong>$key:</strong><br>";
    echo "<ul>";
    foreach($value as $v){
        echo "<li>$v</li>";
    }
    echo "</ul>";
}

echo "<hr>";
$tituloV3 = strtoupper('mercadito_v3:');
echo "<h4>$tituloV3</h4>";

$mercadito_v3 = Array('Frutas' => Array('Citricos' => 'Naranja', 'Actinida' => 'Kiwi', 'Carica' => 'Papaya'), 
                      'Verduras' => Array('Arbolito' => 'Brocoli', 'Redondo' => 'Lechuga', 'Naranja' => 'Auyama'), 
                      'Carnes' => Array('Bovino' => 'Res', 'Porcino' => 'Cerdo', 'Aviar' => 'Pollo'));

foreach($mercadito_v3 as $seccion => $productos){
    echo "<strong>$seccion</strong><br>";
    echo "<ul>";
    foreach($productos as $clave => $valor){
        echo "<li>$clave : $valor</li>";
    }
    echo "</ul>";
}

echo "<hr>";
$tituloV4 = strtoupper('saints:');
echo "<h4>$tituloV4</h4>";

$saints = Array('Oro' => Array('Geminis' => 'Saga/Kanon', 'Virgo' => 'Shaka', 'Escorpio' => 'Milo'), 
                'Plata' => Array('Cefeo' => 'Albiore', 'Ofiuco' => 'Sheena', 'Lira' => 'Orfeo'), 
                'Bronce' => Array('Fenix' => 'Ikki', 'Dragon' => 'Shiryu', 'Cisne' => 'Hyoga'));

foreach($saints as $rango => $grupo){
    echo "<strong>$rango: </strong><br>";
    echo "<ul>";
    foreach($grupo as $signo => $santo){
        echo "<li>$santo de $signo</li>";
    }    
    echo "</ul>";
}