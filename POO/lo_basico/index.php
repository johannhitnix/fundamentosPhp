<?php
    include_once 'coche.php';

    $carroItaliano = new Coche("Rojo", "Lamborghini", "Aventador", 300, 2);

    echo "<br>";
    echo "El " . $carroItaliano->getMarca() . " " . $carroItaliano->getModelo() . " color " . $carroItaliano->getColor() . " tiene una velocidad de " . $carroItaliano->getVelocidad() . " Km/h";
    echo "<br>";

    $carroItaliano->accel();
    $carroItaliano->accel();
    $carroItaliano->accel();
    $carroItaliano->accel();
    $carroItaliano->frenar();
    echo "El " . $carroItaliano->getMarca() . " " . $carroItaliano->getModelo() . " color " . $carroItaliano->getColor() . " ahora tiene una velocidad de " . $carroItaliano->getVelocidad() . " Km/h";
    echo "<br>";


    $carroJapones = new Coche("Plateado", "Honda", "Civic", 211, 1);

    echo "<br>";
    echo "El " . $carroJapones->getMarca() . " " . $carroJapones->getModelo() . " color " . $carroJapones->getColor() . " tiene una velocidad de " . $carroJapones->getVelocidad() . " Km/h";
    echo "<br>";

    $carroJapones->accel();
    $carroJapones->accel();
    $carroJapones->accel();
    $carroJapones->accel();
    $carroJapones->frenar();
    echo "El " . $carroJapones->getMarca() . " " . $carroJapones->getModelo() . " color " . $carroJapones->getColor() . " ahora tiene una velocidad de " . $carroJapones->getVelocidad() . " Km/h";
    echo "<br>";

    $carroGringo = new Coche("Amarillo", "Ford", "Fiesta", 137, 1);

    echo "<br>";
    echo "El " . $carroGringo->getMarca() . " " . $carroGringo->getModelo() . " color " . $carroGringo->getColor() . " tiene una velocidad de " . $carroGringo->getVelocidad() . " Km/h";
    echo "<br>";

    $carroGringo->accel();
    $carroGringo->accel();
    $carroGringo->accel();
    $carroGringo->accel();
    $carroGringo->frenar();
    echo "El " . $carroGringo->getMarca() . " " . $carroGringo->getModelo() . " color " . $carroGringo->getColor() . " ahora tiene una velocidad de " . $carroGringo->getVelocidad() . " Km/h";

    echo "<br>";
    echo $carroGringo->showInfo($carroGringo);
    echo "<br>";
    echo $carroJapones->showInfo("hola mundo cruel e injusto");
