<?php
require_once 'config/database.php';

class ModeloBase{
    public $db;

    public function __construct (){
        $this->db = database::conectar();
    }

    public function getAll($tabla){
        // echo "<strong>atributo db de ModeloBase: </strong><br>";
        // var_dump($this->db);

        
        $query = $this->db->query("SELECT * FROM $tabla ORDER BY id DESC");
        return $query;
    }
}