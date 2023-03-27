<?php
// 16.  En 1994 el país A tiene una población de 25 millones de habitantes y el país B de 19.9 millones. Las 
//      tasas de crecimiento de la población son de 2% y 3% respectivamente. Desarrollar un algoritmo para 
//      informar en que año la población del país B supera a la de A.

// Inicializamos las poblaciones y las tasas de crecimiento
$poblacion_a = 25; // en millones
$tasa_a = 0.02; // 2%
$poblacion_b = 19.9; // en millones
$tasa_b = 0.03; // 3%

// Calculamos el año en que la población del país B supera a la de A
$anio = 1994;
while ($poblacion_b <= $poblacion_a) {
  $poblacion_a += $poblacion_a * $tasa_a;
  $poblacion_b += $poblacion_b * $tasa_b;
    $anio++;
}

// Mostramos el resultado por pantalla
echo "La población del país B supera a la de A en el año " . $anio . "\n";

?>

