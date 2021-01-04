<?php

class ErrorController{
    public function index($text){
        echo "<h1>404 NOT FOUND {$text} :<span style='color:red;'>(</span></h1>";
    }    
}