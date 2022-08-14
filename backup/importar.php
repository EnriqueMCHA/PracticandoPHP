<?php

//move_uploaded_file();

$host = 'localhost';
$usuario = 'root';
$password = '';
$nombre_bd = 'POST';

//Creamos la bd primero
$createDatabase = "c:\\xampp\\mysql\\bin\\mysqldump.exe mysql -u$usuario -p$password prueba1 < htdocs/aprendiendomvc/peliculas.sql";

exec($createDatabase,$salida,$codigo);

//mysql -u root -p 'nombre_bd' < /ubicacion/archivo.sql

// $createDatabasee = "c:\\xampp\\mysql\\bin\\mysqldump.exe CREATE DATABASE $nombre_bd";

// system($createDatabasee,$resultado);


session_start();

$_SESSION['mensaje'] = $codigo;

var_dump($salida);

echo  ' ' . $codigo;

echo $createDatabase;

?>