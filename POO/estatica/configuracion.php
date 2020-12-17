<?php 

class Configuracion{
    // los elementos estaticos no necesitan de un objeto o clase instanciada para ser llamados
    // un  elemento estatico no necesita de una instancia para ser llamado
    public static $color;
    public static $newsletter;
    public static $entorno;
    // $this can not be used in static methods.
    // siempre para acceder a miembros estaticos usar el operador ::

    // GETTERS
    public static function getColor(){
        return self::$color;
    }
    public static function getNewsLetter(){
        return self::$newsletter;
    }
    public static function getEntorno(){
        return self::$entorno;            
    }   
    // SETTERS
    public static function setColor($color){
        self::$color = $color;
    }
    public static function setNewsLetter($newsletter){
        self::$newsletter = $newsletter;
    }
    public static function setEntorno($entorno){
        self::$entorno = $entorno;         
    }   
}