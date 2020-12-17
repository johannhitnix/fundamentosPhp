<?php

class Persona{
    protected $nombre;
    protected $apellidos;
    protected $altura;
    protected $edad;

    // GETTERS
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellidos(){
        return $this->apellidos;
    }
    public function getAltura(){
        return $this->altura;
    }
    public function getEdad(){
        return $this->edad;
    }
    // SETTERS
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function setApellidos($apellidos){
        $this->apellidos = $apellidos;
    }
    public function setAltura($altura){
        $this->altura = $altura;
    }
    public function setEdad($edad){
        $this->edad = $edad;
    }

    // STUFF
    public function hablar(){
        return "Estoy hablando";
    }    
    public function caminar(){
        return "Estoy caminando";
    }    
}

class Informatico extends Persona{
    protected $lenguajes;
    public $expProgramando;

    public function __construct($lenguajes = 'HTML, CSS', $exp = 0){
        $this->lenguajes = $lenguajes;
        $this->expProgramando = $exp;
    }

    public function sabeLenguajes($lenguajes){
        $this->lenguajes = $lenguajes;

        return $this->lenguajes;
    }
    public function programar(){
        return "soy programador";
    }
    public function repararOrdenador(){
        return "Reparar ordenadorres";
    }
    public function ofimatica(){
        return "Estoy escribiendo en word";
    }
}

class TecnicoRedes extends Informatico{
    public $auditarRedes;
    public $expRedes;

    public function __construct(){
        // Operador de Resolucion de Ambito: llama al constructor padre de manera estatica
        parent::__construct();
        $this->auditarRedes = 'experto';
        $this->experienciaRedes = 5;
    }

    public function auditoria(){
        return "estoy auditando una red";
    }
}