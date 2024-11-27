<?php
// *************************** NIVEL 1 ***************************
//EJERCICIO 1 Y 2

/*
$primerArray = array (10,20,30,40,50);

foreach ($primerArray as $n){
    echo $n, "\n";
}


echo "Longitud de array: ", count($primerArray),"\n";

unset($primerArray[2]);

$primerArray= array_values($primerArray);

//var_dump($primerArray);

echo "Longitud de array luego de unset: ", count($primerArray),"\n";

*/

/*
// Ejercicio 2 --> segunda manera de reordenar el array:

foreach ($primerArray as $posicion => $numero){
    $segundoArray[] = $numero;
}

var_dump($segundoArray);
echo "Longitud de array: ", count($segundoArray);*/



//EJERCICIO 3

$palabras = array('hola', 'arbol');

$caracter = readline("Que caracter quieres introducir: ");
$caracter = $caracter[0];

function comprobarLetra($palabras, $caracter){

    $existe = in_array($caracter, $palabras);

    return $existe;
}

$bolean = comprobarLetra($palabras, $caracter);
echo $bolean;
?>