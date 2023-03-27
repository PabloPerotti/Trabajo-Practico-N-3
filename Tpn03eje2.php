<?php

$A = readline("Ingrese el valor de A: ");
$B = readline("Ingrese el valor de B: ");
$acumulador = 0;

for ($i=0; $i < $A; $i++) { 
    $acumulador += $B;# code...
}
echo "$A x $B = $acumulador". PHP_EOL;
