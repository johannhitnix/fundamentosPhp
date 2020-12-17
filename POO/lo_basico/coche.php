<?php
    class Coche{
        // Niveles de acceso:
        // public:    se puede acceder desde cualquier parte fuera de la clase
        // protected: se puede acceder solo desde la clase que lo contiene y clases herederas
        // private:   se puede acceder solo desde la clase que lo contiene

        // ***ATRIBUTOS***
        private $color;
        private $marca;
        private $modelo;
        private $velocidad;
        private $caballaje;
        private $plazas;

        // ***METODOS***

        // CONSTRUCTOR
        public function __construct($color, $marca, $modelo, $velocidad, $plazas){
            $this->color = $color;
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->velocidad = $velocidad;
            $this->plazas = $plazas;
        }

        // GETTERS
        public function getColor(){
            // operador $this
            return $this->color;
        }
        public function getMarca(){
            return $this->marca;
        }
        public function getModelo(){
            return $this->modelo;
        }
        public function getVelocidad(){
            return $this->velocidad;
        }
        public function getCaballaje(){
            return $this->caballaje;
        }
        public function getPlazas(){
            return $this->plazas;
        }

        // SETTERS
        public function setColor($color){
            $this->color = $color;
        }

        // STUFF
        public function accel(){
            $this->velocidad++;
        }
        public function frenar(){
            $this->velocidad--;
        }    
        
        // TIPADO en parametros
        // se puede especificar el tipo de dato
        // Argument 1 passed to Coche::showInfo() must be an instance of Coche
        public function showInfo(Coche $obj){

            if(is_object($obj)){
                $info  = "<h1>Informacion del coche:</h1>";
                $info .= "Color: " . $obj->color;
                $info .= "<br>";
                $info .= "Marca: " . $obj->marca;
                $info .= "<br>";
                $info .= "Modelo: " . $obj->modelo;
                $info .= "<br>";
                $info .= "Velocidad: " . $obj->velocidad;
                $info .= "<br>";    
            } else{
                $info  = "Tu dato es este: $obj";
            }

            return $info;
        }
    }