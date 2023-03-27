<?php

//  Realizar la operación de potenciación (ab), de dos valores enteros positivos, con multiplicaciones.

$A = readline("Ingrese el valor de A: ");
$B = readline("Ingrese el valor de B: ");

$resultado =1;

for ($i=1; $i <= $B ; $i++) { 
    $resultado *= $A;# code...
}
echo "la potencia es: $resultado".PHP_EOL;
