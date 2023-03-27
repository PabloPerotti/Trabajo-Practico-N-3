<?php
$contador = 0;
$acumulador = 0;

do {
    $nota = readline("Ingrese la Nota: ");
    if ($nota > 0) {
        $acumulador+= $nota;
        $contador++;# code...
    }# code...
} while ($nota > 0);
$promedio = $acumulador / $contador;
echo "El promedio de notas es: $promedio". PHP_EOL;

?>
