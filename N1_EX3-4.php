<?php
// *************************** NIVEL 1 ***************************
//EJERCICIO 3

$palabras = array('hola', 'arbol', 'rama');

$caracter = readline("Que caracter quieres introducir: ")[0];

function comprobarLetra($palabras, $caracter){

foreach($palabras as $palabra){
    if (stripos($palabra,$caracter)===false){
        return false;
    }
}
return true;
}

$bolean = comprobarLetra($palabras, $caracter);
var_dump($bolean);

//EJERCICIO 4
echo "\n";
$misDatos = array("nombre"=> "Luciano", "edad"=> 29, "email" => "lucrfb@gmail.com", "comida favorita" => "pizza");

var_dump($misDatos);

?>