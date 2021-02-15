<?php
// carga todas las clases en una sola linea!
// el autoload reconoce los namespaces
require_once 'autoload.php';

// con esto evito tener que escribir la ruta completa cuando tenga que crear objetos
// con esto se importan los namespaces
// la carpeta se debe llamar igual que el namespace para no generar conflictos con el autoload
use MisClases\Usuario, MisClases\Categoria, MisClases\Entrada;
use PanelAdministrador\Usuario as UserAdmin;

class Principal{
    public $usuario;
    public $categoria;
    public $entrada;
    
    public function __construct(){
        $this->usuario = new Usuario();
        $this->categoria = new Categoria();
        $this->entrada = new Entrada();
    }

    public function getUsuario(){
        return $this->usuario;
    }
    public function getCategoria(){
        return $this->categoria;
    }
    public function getEntrada(){
        return $this->entrada;
    }
    
    public function setUsuario(){
        ;
    }
    public function setCategoria(){
        ;
    }
    public function setEntrada(){
        ;
    }

    public function ctes(){
        echo __CLASS__;
        echo "<br>";
        echo __METHOD__;
        echo "<br>";    
        echo __FILE__;
    }

}

// **OBJETO PRINCIPAL**
$ppal = new Principal();
// var_dump($ppal->usuario);
$ppal->ctes();
echo "<br>";
$methods = get_class_methods($ppal);
$search = array_search('set', $methods);
var_dump($search);

// **OBJETO DE OTRO PAQUETE**
// Cannot use PanelAdministrador\Usuario as Usuario because the name is already in use
// Por eso cuando existen clases que se llaman igual en distintos namespaces se tienen q crear alias lin(9)
$user = new UserAdmin();
var_dump($user);
$user->ctes();
// Notas:
// namespaces son usados para mantener la organizacion de las clases separando todo en paquetes sin importar si hay clases que se llamen igual

// They allow for better organization by grouping classes that work together to perform a task
// They allow the same name to be used for more than one class
// organize the classes into different groups while also preventing the similar classes from being mixed up.
// https://www.w3schools.com/php/php_namespaces.asp

// METODOS PARA CLASES
echo "<br>";
echo "fx class_exists: ";
echo class_exists('MisClases\Usuario');

echo "<br>";
echo @class_exists('UserAdmin');

