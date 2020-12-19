<?php

class NotaController{

    public function listar(){
        // model
        require_once 'models/nota.php';

        // Logica accion del controlador
        $nota = new Nota();
        $notas = $nota->getAll('notas');
        // view
        require_once 'views/nota/listar.php';
    }
    public function crear(){
         // model
        require_once 'models/nota.php';

        $nota = new Nota();
        $nota->setUsuario_id(1);
        $nota->setTitulo('Cien años de soledad');
        $nota->setDescripcion('Este es un libro de Gabriel Garcia Marquez');
        $guardar = $nota->save();

        // echo $nota->db->error;
        // die();

        header("Location: index.php?controller=Nota&action=listar");
    }
    public function borrar(){}

}