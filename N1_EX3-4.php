<?php

declare(strict_types=1);
// *************************** NIVEL 1 ***************************/
//EJERCICIO 3

$palabras = array('hola', 'arbol', 'rama', 'lana');

$caracter = readline("Que caracter quieres introducir: ")[0];


function comprobarLetraPalabras(array $palabras, string $caracter): void
{

    $contador = 0;
    
    foreach ($palabras as $palabra) {
        $encontrado = false;
        $i = 0;
        while ($i < strlen($palabra) && !$encontrado) {
            if ($palabra[$i] == $caracter) {
                $contador+=1;
                $encontrado = true;
            }$i++;
        }
    }

    if ($contador == count($palabras)) {
        echo "El caracter está en todas las palabras del array";
    } else {
        echo "El caracter no se encuentra en todas las palabras del array";
    }
}

$comprobarCoincidencia = comprobarLetraPalabras($palabras, $caracter);

//EJERCICIO 4

echo "\n";
$misDatos = array("nombre"=> "Luciano", "edad"=> 29, "email" => "lucrfb@gmail.com", "comida favorita" => "pizza");

var_dump($misDatos);

?>
