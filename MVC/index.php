<h1>Index de mi MVC :)</h1>
<?php
require_once 'autoload.php';

if (isset($_GET['controller'])) {
    $ctrl_name = $_GET['controller'].'Controller';  
    var_dump($ctrl_name);
}else{
    echo "sorry la pagina que buscas no existe";
    exit();
}

if (class_exists($ctrl_name)) {    
    $controlador = new $ctrl_name();
    
    if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
        $action = $_GET['action'];
        $controlador->$action();
    }else{
        echo "sorry el metodo que buscas no existe";
    }
}else{
    echo "sorry la clase que buscas no existe";
}