<?php
require_once 'models/producto.php';

class CarritoController{
    public function index(){
        $carritou = $_SESSION['carrito'];
        
        require_once 'views/carrito/index.php';
    }
    public function add(){
        if(isset($_GET['id'])){
            $producto_id = $_GET['id'];
        } else{
            header('Location:'.base_url);
        }
         
        if(isset($_SESSION['carrito'])){
            $count = 0;
            foreach($_SESSION['carrito'] as $indice => $elemento){
                if($elemento['id_producto'] == $producto_id){
                    $_SESSION['carrito'][$indice]['unidades']++;
                    $count++;
                }
            }
        }
        if(!isset($count) || $count == 0){
            // conseguir producto
            $producto = new Producto();
            $producto->setId($producto_id);
            $producto = $producto->getOne();

            if(is_object($producto)){
                // añade elementos al array: esto hace la misma vaina que un array_push
                $_SESSION['carrito'][] = array(
                    "id_producto" => $producto->id,
                    "precio" => $producto->precio,
                    "unidades" => 1,
                    "producto" => $producto
                );
            }
        }
        
        header("Location:".base_url."carrito/index");
    }
    public function remove(){}
    public function delete_all(){
        unset($_SESSION['carrito']);
        header("Location: ".base_url."carrito/index");
    }
}