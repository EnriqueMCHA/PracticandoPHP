<?php

//Funciones para manipular strings

$string = "Aprendiendo algo; tan ZzZzZz como PHP;";

//Obtener longitud

echo 'Número de carácteres: ' . strlen($string);

echo '<br>';

//Obtener número de palabras

echo 'Número de palabras: ' . str_word_count($string);

echo '<br>';

//Obtener el reverso

echo 'Reverso: ' . strrev($string);

echo '<br>';

//Encontrar texto

echo 'Encontrar texto: ' . strpos($string,'algo');

echo '<br>';

//Remplazar texto

echo 'Remplazar texto: '  . str_replace(';','',$string);

echo '<br>';

//Convertir a mayus

echo 'Convertir a mayus: ' . strtoupper($string);

echo '<br>';

//Convertir a minus

echo 'Convertir a minus: ' . strtolower($string);

echo '<br>';

//Substraer cadena

echo 'Substraer cadena: ' . substr($string,12,4/*opcional*/);

echo '<br>';

//Remover caracteres del texto al inicio o comienzo de la cadena

echo trim($string);

?>