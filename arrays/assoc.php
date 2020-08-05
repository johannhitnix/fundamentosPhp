<?php
    echo "<h1>ARRAYS ASOCIATIVOS :)</h1>";
    $mercado = array('Fruta' => array('amarillo' => 'banano', 'rojo' => 'fresa', 'verde' => 'limon'),
                    'Leche' => array('animal' => 'vaca', 'vegetal' => 'soja'),
                    'Carne' => array('vacuno' => 'murillo', 'porcino' => 'lomo'));

    echo "<h3>Array de mercado</h3>";
    foreach($mercado as $clave_alim => $alim){
        echo "<strong>$clave_alim</strong> <br>";
        
        foreach($alim as $clave => $valor){
            echo "$clave = $valor <br>";
        }
    }

    echo "<br>";
    $deportes = array('Aqcuaticos' => array('con_motor' => 'ski_aqcuatico', 'sin_motor' => 'canotaje'), 
                    'Aire_libre' => array('con_balon' => 'volleyball', 'balon_irregular' => 'rugby', 'sin_balon' => 'sprint'), 
                    'Encerrados' => array('con_raqueta' => 'tennis', 'con_disco' => 'hockey', 'sobre_mesa' => 'ping_pong'));
    
    echo "<h3>Array de Deportes</h3>";
    foreach($deportes as $categoria => $subcategorias){
        echo "<strong>$categoria</strong><br>";

        foreach($subcategorias as $subcategoria => $deporte){
            echo "$subcategoria = $deporte <br>";
        }
    }

    echo "<br>";
    $santos = array('Bronce' => array('Pegaso' => 'Seiya', 'Dragon' => 'Shiryu', 'Fenix' => 'Ikki', 'Cisne' => 'Hyoga', 'Andromeda' => 'Shun')
                    ,'Plata' => array('Cefeo' => 'Albiore', 'Orfeo' => 'Lira', 'Aguila' => 'Marin', 'Ofiuco' => 'Shina')
                    ,'Oro' => array('Aries' => 'Mu', 'Tauro' => 'Aldebaran', 'Geminis' => 'Saga', 'Cancer' => 'Death_Mask',
                            'Leo' => 'Aiolia', 'Virgo' => 'Shaka', 'Libra' => 'Dokho', 'Escorpio' => 'Milo',
                            'Sagitario' => 'Aioros', 'Capricornio' => 'Shura', 'Aqcuario' => 'Kamus', 'Piscis' => 'Afrodita'));

    echo "<h3>Array de Santos de Athena</h3>";
    foreach($santos as $rango => $grupo){        
        echo "<strong>$rango</strong><br>";
        foreach($grupo as $constelacion => $santo){
            echo "$santo es el santo de $constelacion <br>";
        }
    }    

    echo "<br>";
    $DeportesExtended = array('Aqcuaticos' => array('con_motor' => array('ski_aqcuatico', 'carrera_de_lanchas'), 
                                                    'sin_motor' => array('natacion', 'canotaje'))
                            , 'Aire_Libre' => array('con_balon' => array('futbol', 'volleyball', 'rugby'), 
                                                    'sin_balon' => array('senderisomo', 'maraton', 'sprint'))
                            , 'Cubiertos' => array('con_raquetas' => array('tennis', 'ping_pong', 'badminton'), 
                                                    'sobre_hielo' => array('hockey', 'patinaje_artistico')));

    echo "<h2>Array de Deportes Extendido</h2>";
    foreach($DeportesExtended as $categoria => $subcategorias){
        echo "<h3>$categoria</h3>";
        foreach($subcategorias as $subcategoria => $deportesEx){
            echo "<strong>$subcategoria</strong><br>";
            foreach($deportesEx as $deporteEx){
                echo "$deporteEx<br>";
            }
        }
    }