<?php

class User{
    // las constantes se acceden y se tratan como variables estaticas
    // si se define una constante es  a nivel de clase
    const URL_COMPLETA = "http://localhost";
    public $email;
    public $password;

    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this->password;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setPassword($password){
        $this->password = $password;
    }
}

$usr = new User();
echo "constante con instanciacion: <br>";
echo $usr::URL_COMPLETA;
var_dump($usr);

echo "constante sin instanciacion: <br>";
echo User::URL_COMPLETA;

// Recuerda:
// self:: es a nivel de clase
// $this es a nivel de objeto