<?php
//9. Imprimir los números de 1 a N (siendo N un número que se lee) cada uno con su respectivo factorial

$N = readline("Ingrese el valor de N: ");

for ($i = 1; $i <= $N; $i++) {
    $factorial = 1;

  // calcular el factorial de $i
    for ($j = 1; $j <= $i; $j++) {
    $factorial *= $j;
    }

    echo "$i! = $factorial".PHP_EOL;
}
?>
