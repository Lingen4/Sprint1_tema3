<?php declare( strict_types = 1 );

// *************************** NIVEL 1 ***************************/
//EJERCICIO 1 Y 2

$primerArray = array (10,20,30,40,50);

foreach ($primerArray as $posicion=> $n){
    echo $posicion,"--> ", $n, "\n";
}


echo "Longitud de array: ", count($primerArray),"\n\n";

unset($primerArray[2]);

$primerArray= array_values($primerArray);

foreach ($primerArray as $posicion=> $n){
    echo $posicion,"--> ", $n, "\n";
}

//var_dump($primerArray);

echo "Longitud de array luego de unset: ", count($primerArray),"\n";


/*
// Ejercicio 2 --> segunda manera de reordenar el array:

foreach ($primerArray as $posicion => $numero){
    $segundoArray[] = $numero;
}

var_dump($segundoArray);
echo "Longitud de array: ", count($segundoArray);*/

?>