<?php

class UsuarioController{
    public function showAll(){
        // se hace el require tomando el punto de vista del index no este
        // model
        require_once 'models/usuario.php';

        // controller logic
        $user = new Usuario();
        $all = $user->getAll('usuarios');

        // view
        require_once 'views/usuarios/showAll.php';
    }

    public function crear(){
        require_once 'views/usuarios/crear.php';
    }
}