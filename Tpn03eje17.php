<?php
/* Un ciclista recorre diariamente 200 kilómetros en su práctica competitiva. El atleta solicita un 
algoritmo que le permita registrar el tiempo empleado en cada recorrido, al final del proceso el 
algoritmo debería mostrar el promedio de los tiempos empleados. También necesita saber cuántas 
veces su tiempo fue menor a valor dado y cuál fue su mejor tiempo realizado */



$RecordAnterior = readline("Ingrese el valor de su record anterior: ");
$ContadorRompRecord=0;
$acumulador=0;
$contador=0;
$min=PHP_INT_MAX;
do {
    $tiempo = readline("Ingrese el tiempo de esta vuelta: ");
    if ($tiempo < $RecordAnterior) {
        $ContadorRompRecord++;
    }
    if ($tiempo<$min) {
        $menorTiempo=$tiempo;# code...
    }
    $acumulador += $tiempo;
    $contador++;
    $respuesta= readline("Desea Ingresar mas datos? (S/N)");# code...
} while ($respuesta="S");
$promedio = $acumulador / $contador;
echo "El record anterior ha sido superado $ContadorRompRecord veces".PHP_EOL;
echo  "el promedio de tiempo realizados fue : $promedio".PHP_EOL;
echo "el minimo de tiempo realizado fue: $menorTiempo".PHP_EOL;