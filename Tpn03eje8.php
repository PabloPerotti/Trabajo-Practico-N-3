<?php

//8. Obtener el resto de la división entera a%b de dos números enteros positivos mediante restas.

$A = readline("Ingrese el valor de A: ");
$B = readline("Ingrese el valor de B: ");

$resto = $A;

while ($resto >= $B) {
    $resto -= $B;
}

echo "El resto de la división entera de $A entre $B es: $resto".PHP_EOL;
?>


