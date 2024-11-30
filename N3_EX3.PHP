<?php declare( strict_types = 1 );

// *************************** NIVEL 3 ***************************
//EJERCICIO 3


$arrayEnteros = [1,2,3,4,5,6];

$sumaImpares = function(int $total, int $numero): int{
if ($numero %2 !=0){
    return $total + $numero;
}
    return $total;
};

$resultado = array_reduce($arrayEnteros,$sumaImpares);

print_r($resultado);

?>