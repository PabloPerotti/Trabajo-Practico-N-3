<?php
// Listado de números impares
echo "Listado de números impares desde 1 hasta 999:".PHP_EOL;
for ($i = 1; $i <= 999; $i++) {
    if ($i % 2 != 0) {
        echo $i .PHP_EOL;
    }
}

// Listado de números pares
echo "Listado de números pares desde 2 hasta 1000:".PHP_EOL;
for ($i = 2; $i <= 1000; $i++) {
    if ($i % 2 == 0) {
        echo $i . PHP_EOL;
    }
}
?>
