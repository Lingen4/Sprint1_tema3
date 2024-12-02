<?php declare( strict_types = 1 );

// *************************** NIVEL 2 ***************************/
//EJERCICIO 2

$alumnos = [
    "Pedro" =>  [2, 6, 7, 8, 6],
    "Maria" =>  [3, 5, 6, 9, 8],
    "Miguel" => [4, 7, 6, 5, 10]
];

 //FUNCION SI QUEREMOS AGREGAR UN ALUMNO+NOTAS
/*
function agregarAlumno (array &$alumnos): void{

$nombreNuevo=readline("Nombre del alumno: ");

$notasAlumno = [];
for ((int) $i=1; $i<=5; $i++){
$nota= (int) readline("Escriba la $i º nota--> ");
array_push((array) $notasAlumno, (int) $nota);
}

$alumnos[$nombreNuevo]=$notasAlumno;}
*/

function promedio(array $alumnos): void{

    $notaClase=0;

    foreach ($alumnos as $persona => $notas) {

        $notasTotal = array_sum($notas);

        $cantidadNotas = count($notas);       
        
        $promedioIndividual= $notasTotal/$cantidadNotas;

       echo  "\n$persona tiene un promedio de: ",  $promedioIndividual;
    
       $notaClase += $promedioIndividual;}

       echo "\nLa nota media de la clase es de: ", $notaClase/count($alumnos);
    
    }

//echo agregarAlumno($alumnos);

echo promedio($alumnos);

?>