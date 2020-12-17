<?php

class Persona{
    private $nombre;
    private $edad;
    private $ciudad;

    public function __construct($nombre, $edad, $ciudad){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->ciudad = $ciudad;
    }

    // Method Persona::__call() must take exactly 2 arguments
    public function __call($name, $arguments){
        // return "No existe el metodo XD";
        $prefix = substr($name, 0, 3);

        if($prefix == 'get'){
            $nombreMetodo = substr(strtolower($name), 3);

            if(!isset($this->$nombreMetodo)){
                return "el metodo invocado no existe";
            }

            // IMPORTANTE: en este caso se pone el signo $ depues del this porque $nombreMetodo no es una propiedad sino una variable que contiene el nombre de la propiedad en cuestión
            return $this->$nombreMetodo;               
        } else{
            return "el metodo invocado no existe";
        }    
    }
}

$persona = new Persona("pepe el mago", 38, "Lima");
echo $persona->getNombre();
echo "<br>";
echo $persona->getEdad();
echo "<br>";
echo $persona->getCiudad();
echo "<br>";
echo $persona->bububu();
echo "<br>";
echo $persona->getbububu();