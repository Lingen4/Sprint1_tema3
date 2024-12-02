<?php

declare(strict_types=1);

// *************************** NIVEL 3 ***************************/
//EJERCICIO 3


$arrayEnteros = [0, 1, 2, 3, 4, 1, 0, 5, 6, 7, 11, 13, 15, 16, 18, 19, 23, 1, 0];


function cribaPrimos($arrayEnteros):array
{
    $indice = 0;

    sort($arrayEnteros);
    $arrayEnteros = array_filter($arrayEnteros, fn($numero) => $numero > 1);
    $arrayEnteros = array_values($arrayEnteros);

    while ($indice < count($arrayEnteros) && $arrayEnteros[$indice] ** 2 <= end($arrayEnteros)) {
        $primerNumero = $arrayEnteros[$indice];
        foreach ($arrayEnteros as $key => $n) {
            if ($n != $primerNumero && $n % $primerNumero == 0) {
                unset($arrayEnteros[$key]);
            }
        }
        $arrayEnteros = array_values($arrayEnteros);
        $indice++;
    }
    return $arrayEnteros;
}

$arrayPrimos = cribaPrimos($arrayEnteros);

print_r($arrayPrimos);


$sumaPrimos = function ($total, $numero) {

    $total += $numero;

    return $total;
};


$resultado = array_reduce($arrayPrimos, $sumaPrimos);

echo "Total suma primos: ",($resultado);

?>