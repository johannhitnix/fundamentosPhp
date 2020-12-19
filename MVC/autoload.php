<?php
 
function autoloader($classname){
    include 'controllers/'.$classname.'.php';     
}
spl_autoload_register('autoloader');