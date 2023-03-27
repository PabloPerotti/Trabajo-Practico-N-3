<?php

//mprimir los 100 primeros números de Fibonacci. Recuerde que un número de Fibonacci se calcula 
/* como la suma de los dos anteriores así: 0, 1, 1, 2, 3, 5, 8,13...*/

$num1 = 0;
$num2 = 1;

echo "$num1, $num2, ";

for ($i = 3; $i <= 100; $i++) {
    $fib = $num1 + $num2;
    echo "$fib, ".PHP_EOL;
    $num1 = $num2;
    $num2 = $fib;
}
?>
