<?php
//11.  Calcular el factorial de 10 números diferentes cuyos valores se leen.


$numeros = array(5, 10, 15, 20, 25, 30, 35, 40, 45, 50);

foreach ($numeros as $numero) {
    $factorial = gmp_fact($numero);
    echo "El factorial de $numero es: $factorial\n";
}
?>
