<?php
// Clase Abstracta: clase de la que no se crean objetos pero le puede heredar a otras
//  define estructura y funcionalidad de la clase heredera
//  cada metodo abstracto va a tener que ser definido en la clase hija por obligacion
//  es una clase que se utiliza como referencia para heredar

// clase abstracta
abstract class Computador{

    // Properties cannot be declared abstract
    public $encendido;

    // Abstract function Computador::encender() cannot contain body
    abstract public function encender();

    public function apagar(){
        $this->encendido = false;
    }
}

// clase normal
class PcAsus extends Computador{
    public $software;

    public function arrancarSoftware(){
        $this->software = true;
    }
    // Class PcAsus contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (Computador::encender)
    public function encender(){
        $this->encendido = true;
    }
}

$pc = new PcAsus();
$pc->arrancarSoftware(); 
$pc->encender();
$pc->apagar();
var_dump($pc);