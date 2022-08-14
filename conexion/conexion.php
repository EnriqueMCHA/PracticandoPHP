<?php

class Conexion{

    private $host;
    private $user;
    private $pass;
    private $db;
    private $charset;

    public function __construct(){
        
        $this->host = "localhost";
        $this->user = "root";
        $this->pass = "";
        $this->db = "prueba";
        $this->charset = "utf8mb4";
    }

    public function conectar(){

        try{

            $conexion = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
            
            $opciones = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ];
            
            $pdo = new PDO($conexion,$this->user,$this->pass,$opciones);

            return $pdo;

        } catch(PDOException $e){

            echo 'Error en la conexión: ' . $e->getMessage();
        }
    }

    public static function connect(){

        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "prueba";
        $charset = "utf8mb4";

        try {
            
            $conexion = "mysql:host=" . $host . ";dbname=" . $db . ";charset=" . $charset;

            $opciones = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ];
            
            $pdo = new PDO($conexion,$user,$pass,$opciones);

            return $pdo;

        } catch (PDOException $e) {
            
            echo 'Error en la conexión: ' . $e->getMessage();
        }
    }
}

?>