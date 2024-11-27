<?php
// *************************** NIVEL 2 ***************************
//EJERCICIO 1
$arrayEnteros=array(10,20,35,40,50);

$arrayFloat=array(10.2,20.0,35.35,40.0, 50.7777);

$lista= array_intersect($arrayEnteros,$arrayFloat);
echo "Intersect: \n";

foreach($lista as $n){
    echo $n, ",";
}

$lista2 = array_merge($arrayEnteros,$arrayFloat);

echo "\n\nMerge:\n";
foreach($lista2 as $n){
    echo $n, ",";
}