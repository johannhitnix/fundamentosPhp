<?php
// 1 entidad es una clase que representa a un registro
// repositorio: librerias de metodos sobre una entidad
class Usuario{
    private $id;
    private $nombre;
    private $apellidos;
    private $email;
    private $password;
    private $rol;
    private $imagen;
    private $db;

    // practica recomendada: hacer la conexion en el constructor de cada modelo
    public function __construct(){
        $this->db = Database::connect();
    }

    // GETTERS
    function getId(){
        return $this->id;
    }
    function getNombre(){
        return $this->nombre;
    }
    function getApellidos(){
        return $this->apellidos;
    }
    function getEmail(){
        return $this->email;
    }
    function getPassword(){
        return password_hash($this->db->real_escape_string($this->password), PASSWORD_BCRYPT, ['cost' => 4]);
    }
    function getRol(){
        return $this->rol;
    }
    function getImagen(){
        return $this->imagen;
    }

    // SETTERS
    function setId($id){
        $this->id = $id;
    }
    function setNombre($nombre){
        $this->nombre = $this->db->real_escape_string($nombre);
    }
    function setApellidos($apellidos){
        $this->apellidos = $this->db->real_escape_string($apellidos);
    }
    function setEmail($email){
        $this->email = $this->db->real_escape_string($email);
    }
    function setPassword($password){
        $this->password = $password;
    }
    function setRol($rol){
        $this->rol = $rol;
    }
    function setImagen($imagen){
        $this->imagen = $imagen;
    }

    // STUFF
    public function save(){
        $sql = "INSERT INTO usuarios (nombre, apellidos, email, password, rol, imagen) VALUES 
                ('{$this->getNombre()}', '{$this->getApellidos()}', '{$this->getEmail()}', '{$this->getPassword()}', 'user', NULL)";
        $save = $this->db->query($sql);

        $result = ($save) ? true : false ;
        return $result;
    }
    public function login(){
        $result = false;

        $email = $this->email;
        $password = $this->password;

        $sql = "SELECT * FROM usuarios WHERE email = '$email'";
        $login = $this->db->query($sql);

        if($login && $login->num_rows == 1){
            $user = $login->fetch_object();
            
            // verificación de password
            $verify = password_verify($password, $user->password);    
            if($verify){
                $result = $user;
            }
        }
        return $result;
    }
}