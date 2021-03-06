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
    public static function isAdmin(){
        if(!isset($_SESSION['admin'])){
            header("Location:".base_url);
        }else{
            return true;
        }
    }
    public static function showCategorias(){
        require_once 'models/categoria.php';
        $categoria = new Categoria();
        $categorias = $categoria->getAll();
        return $categorias;
    }
    public static function statsCarrito(){
        $stats = Array(
            'count' => 0,
            'total' => 0
        );

        if(isset($_SESSION['carrito'])){
            $stats['count'] = count($_SESSION['carrito']);

            foreach($_SESSION['carrito'] as $index => $producto){
                $stats['total'] += $producto['precio']*$producto['unidades'];
            }
        }
        return $stats;
    }
}