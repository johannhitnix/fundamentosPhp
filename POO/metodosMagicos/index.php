<?php
// el destructor detecta el final del archivo cuando el objeto no va poder volver a llamarse
class Usuario{
    public $nombre;
    public $email;

    public function __construct(){
        $this->nombre = "bubube";
        $this->email = "bububu@bububu.com";
        echo "object created <br>";
    }

    // comportamiento del objeto cuando se le imprima o trate como string
    public function __toString(){
        return "Hola, {$this->nombre}, estas registrado con {$this->email}";
    }
    
    public function __destruct(){
        echo "pum! object destroyed"; 
    }
}

$user = new Usuario();
echo $user;
echo "<br>";
for ($i=0; $i < 201; $i++) { 
    echo "$i <br>";
}