<?php

// es una como un contrato que define los metodos y el orden que debe haber en la clase que implementa

interface Pc{
    public function encender();
    public function apagar();
    public function reiniciar();
    public function desfragmentar();
    public function detectarUSB();
}

class iMac implements Pc{
    public $model;

     public function getModel(){
         return $this->model;
     }
     public function setModel($model){
         $this->model = $model;
     }

     public function encender(){
         ;
     }
     public function apagar(){
         ;
     }
     public function reiniciar(){
         ;
     }
     public function desfragmentar(){
         ;
     }
     public function detectarUSB(){
         ;
     }
}

$mac = new iMac();
$mac->setModel('Macbook_PRO_2020');
// Fatal error: Class iMac contains 5 abstract methods and must therefore be declared abstract or implement the remaining methods (Pc::encender, Pc::apagar, Pc::reiniciar, ...) in C:\wamp64\www\masterPhp\POO\interface.php on line 13
// var_dump($mac); 

echo $mac->getModel();