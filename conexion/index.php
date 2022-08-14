<?php

require_once 'conexion.php';

class Index{

    public function __construct(){
        $this->conexion = Conexion::connect();
    }
}

$index = new Index();

$index->conexion->query("SELECT * FROM asd");


?>