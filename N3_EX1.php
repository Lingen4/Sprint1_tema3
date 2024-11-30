<?php

// *************************** NIVEL 3 ***************************
//EJERCICIO 1

$arrayEnteros = [2,4,8,16];

$cubos = array_map(fn($numeroEntero) => $numeroEntero ** 3, $arrayEnteros);

print_r($cubos);

?>
