<?php
namespace MisClases;
// Note: A namespace declaration must be the first thing in the PHP file.
//      los namespace de php son como los package de java
class Categoria{
    public $nombre;
    public $descripcion;

    public function __construct(){
        $this->nombre = "accion";
        $this->descripcion = "categoria enfocada a bla bala bla blablablalbaalbalh";
    }
}