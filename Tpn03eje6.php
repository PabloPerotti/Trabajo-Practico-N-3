<?php
// Realizar la división entera a/b de dos valores enteros positivos mediante restas.
$A = readline("Ingrese el valor del Dividendo: ");
$B = readline("Ingrese el valor del Divisor: ");
$C = 0;

while($A>$B) {
    $A-=$B;
    $C++;
}
echo "El resto de la division es : $A" .PHP_EOL;
echo "el resultado de la division es: $C".PHP_EOL ;

?>
