<?php
require_once 'models/usuario.php';

class UsuarioController{
    public function index(){
        echo "Controlador Usuarios, Accion index";
    }
    public function registro(){
        require_once 'views/usuario/registro.php';
    }
    public function save(){
        if (isset($_POST)) {
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
            $email = isset($_POST['email']) ? $_POST['email'] : false;
            $password = isset($_POST['password']) ? $_POST['password'] : false;

            // TODO: adaptar la validacion compleja del proyecto anterior en este
            $errors = Array();
            // validacion nombre
            if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
                $val_nombre = true;
            }else{
                $val_nombre = false;
                $errors['nombre'] = "nombre no válido";
            }
            // validacion apellidos
            if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)){
                $val_apellidos = true;
            }else{
                $val_apellidos = false;
                $errors['apellidos'] = "apellidos no válidos";
            }
            // validacion email
            if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
                $val_email = true;
            }else{
                $val_email = false;
                $errors['email'] = "email no válido";
            }
            // validacion password
            if(!empty($password)){
                $val_password = true;
            }else{
                $val_password = false;
                $errors['password'] = "no hay password!";
            }

            if (count($errors) == 0) {
                $usuario = new Usuario();
                $usuario->setNombre($nombre);
                $usuario->setApellidos($apellidos);
                $usuario->setEmail($email);
                $usuario->setPassword($password);
    
                // var_dump($usuario);
                $save = $usuario->save();
                if ($save) {
                    $_SESSION['register'] = "complete";
                } else {
                    $_SESSION['register'] = "failed";
                }    
            }else{
                // $_SESSION['register'] = "failed";
                $_SESSION['errors'] = $errors;
            }
        }else{
            $_SESSION['register'] = "failed";
        }
        header('Location:'.base_url.'usuario/registro');
    }
}