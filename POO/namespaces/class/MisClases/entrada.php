<?php
namespace MisClases;
// Note: A namespace declaration must be the first thing in the PHP file.
//      los namespace de php son como los package de java
class Entrada{
    public $titulo;
    public $fecha;

    public function __construct(){
        $this->titulo = "review mediocre";
        $this->fecha = "5 abril 2022";
    }
}