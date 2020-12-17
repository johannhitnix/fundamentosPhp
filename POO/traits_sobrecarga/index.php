<?php
// compartir un metodo  entre clases distintas sin herencia de manera facil

trait Utilidades{
    public function showName(){
        echo  "<h1>el nombre es $this->nombre</h1>";
    }
}

class Carro{
    public $nombre;
    public $marca;
    public function __construct($nombre){
        $this->nombre = $nombre;
    }
    use Utilidades;    
}

class Persona{
    public $nombre;
    public $apellidos;

    public function __construct($nombre){
        $this->nombre = $nombre;
    }
    use Utilidades;
}

class VideoJuego{
    public $nombre;
    public $anio;

    public function __construct($nombre){
        $this->nombre = $nombre;
    }
    use Utilidades;    
}


$carro = new Carro('McLaren');
$persona = new Persona('Juanita');
$videojuego = new VideoJuego('Donkey Kong');

var_dump($carro);
var_dump($persona);
var_dump($videojuego);

echo $carro->showName();
echo "<br>";
echo $persona->showName();
echo "<br>";
echo $videojuego->showName();