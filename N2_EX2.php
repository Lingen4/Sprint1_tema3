<?php
// *************************** NIVEL 2 ***************************
//EJERCICIO 2

$alumnos = [

    "Pedro" => ["notas" => [2, 6, 7, 8, 6]],
    "Maria" => ["notas" => [3, 5, 6, 9, 8]],
    "Miguel" => ["notas" => [4, 7, 6, 5, 10]]

];

/*var_dump($alumnos);
$sum = array_reduce($alumnos,$);*/


function notas($alumnos)
{

    foreach ($alumnos as $persona) {
        $notas = $persona["notas"];

        echo $notas;
    }
}
