<?php
// *************************** NIVEL 3 ***************************
//EJERCICIO 2

$arrayString = ['hoja', 'php', 'mesa', 'arbitrario', 'nucleos'];

$palabrasPares = array_filter($arrayString, fn($palabra)=>strlen($palabra)%2==0);

print_r($palabrasPares);

?>