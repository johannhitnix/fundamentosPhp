<?php
namespace PanelAdministrador;
// Note: A namespace declaration must be the first thing in the PHP file.
//      los namespace de php son como los package de java
//      Constants, classes and functions declared in this file will belong to the namespace:
class Usuario{
    public $nombre;
    public $email;

    public function __construct(){
        $this->nombre = "Juanita Kremer";
        $this->email = "juanita@kre.mer";
    }

    public function ctes(){
        echo __NAMESPACE__;
    }
}