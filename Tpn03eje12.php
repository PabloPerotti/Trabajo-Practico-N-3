<?php
//12-  Leer 20 números y encontrar el mayor y el menor valor leídos.

$menor = null;
$mayor = null;

for ($i=0; $i < 20; $i++) { 
    $num = (int)readline("Ingrese un número: ");
    $mayor = $i == 0 ? $num : ($num > $mayor ? $num : $mayor);
    $menor = $i == 0 ? $num : ($num < $menor ? $num : $menor);
}
echo "EL Numero Menor es= $menor".PHP_EOL;
echo "El Numero Mayor es= $mayor". PHP_EOL;
