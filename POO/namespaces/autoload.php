<?php
// busca todas las clases en el directorio indicado
function app_autoLoader($class){
    require_once 'class/' . $class . '.php';
}
spl_autoload_register('app_autoLoader'); 