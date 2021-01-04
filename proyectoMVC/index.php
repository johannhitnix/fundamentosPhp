<!-- <h1>Index del Proyecto MVC :<span style="color:red;">)</span></h1> -->
<?php
session_start();
require_once 'autoload.php';
require_once 'config/db.php';
require_once 'helpers/utils.php';
require_once 'config/parameters.php';
require_once 'views/layout/header.php';
require_once 'views/layout/sidebar.php';

function show_error($text){
    $error = new ErrorController();
    $error->index($text);
}

if(isset($_GET['controller'])) {
    $ctrl_name = $_GET['controller'].'Controller';    
}elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
    $ctrl_name = default_controller;
}else{
    // echo "sorry la pagina que buscas no existe";
    show_error("sorry la pagina que buscas no existe");
}

if (class_exists($ctrl_name)) {    
    $controlador = new $ctrl_name();
    
    if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
        $action = $_GET['action'];
        $controlador->$action();
    }elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
        $default_action = default_action;
        $controlador->$default_action();
    }
    else{
        // echo "sorry el metodo que buscas no existe";
        show_error("sorry el metodo que buscas no existe");
    }
}else{
    // echo "sorry la clase que buscas no existe";
    show_error("sorry la clase que buscas no existe");
}

require_once 'views/layout/footer.php';