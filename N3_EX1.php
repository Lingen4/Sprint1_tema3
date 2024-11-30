<?php declare( strict_types = 1 );


// *************************** NIVEL 3 ***************************
//EJERCICIO 1

$arrayEnteros = [2,4,8,16];

$cubos = array_map(fn(int $numeroEntero) => $numeroEntero ** 3, $arrayEnteros);

print_r($cubos);

?>
