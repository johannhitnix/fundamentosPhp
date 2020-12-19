<?php

class database{
    public static function conectar(){
        $cnx = new mysqli("localhost", "root", "", "notas_master", "3308");
        $cnx->query("SET NAMES 'utf8'");

        return $cnx;
    }
}