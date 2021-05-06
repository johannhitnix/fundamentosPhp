<?php

$saints = Array('oro' => Array('Leo' => 'Aioria', 'Geminis' => 'Saga', 'Virgo' => 'Shaka'), 
                'plata' => Array('Ofiuco' => 'Shina', 'Cefeo' => 'Albiore', 'Lira' => 'Orfeo'), 
                'bronce' => Array('Cygnus' => 'Hyoga', 'Fenix' => 'Ikki', 'Dragon' => 'Shiryu')
            );

foreach($saints as $rango => $grupo){
    echo "<h3>$rango:</h3>";
    foreach($grupo as $constelacion => $santo){
        echo "$santo de $constelacion<br>";
    }
}