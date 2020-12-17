<?php
//  captura ecxepciones en codigo susceptible a errores

try{
    if(isset($_GET['id'])){
        echo "<h1>El parametro es: {$_GET['id']}</h1>";
    }else{
        throw new Exception('ERROOOOOOOORRRRR!');
    }
    
}catch(Exception $e){
    echo "ha habido un error: " . $e->getMessage() . "<br>";
}finally{
    echo "igual meh";
}

echo "<br>";
$great = 'magnifico';
echo "this is {$great}s";

