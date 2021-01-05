<?php

class Utils{
    public static function deleteSession($name){
        if (isset($_SESSION[$name])) {
            $_SESSION[$name] = null;
            unset($_SESSION[$name]);
        }
        return $name;
    }
    public static function showErrors($err, $field){
        $alert = '';
        if(isset($err[$field]) && !empty($field)){
            $alert = "<div class='red-label'>{$err[$field]}</div>";
        }
        return $alert;
    }
    public static function borrarErrores(){
        $borrado = false;
        if(isset($_SESSION['errors'])){
            $_SESSION['errors'] = null;
            $borrado = true;
        }
        return $borrado;
    }
}