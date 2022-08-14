<?php

require_once 'index.php';

class Lol extends Index{

    public function __construct(){
        parent::__construct();
    }

    public function asd(){
        $this->conexion->query('SELECT * FROM asd');
    }
}

$lol = new Lol();

$lol->asd();

?>