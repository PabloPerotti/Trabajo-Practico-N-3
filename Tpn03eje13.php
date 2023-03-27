<?php
// 13.  Escribir un programa que lea valores enteros hasta que se introduzca un 0 y calcule la media de los 
//      positivos y la media de los negativos 



// Inicializamos variables
$sum_pos = 0;
$cont_pos = 0;
$sum_neg = 0;
$cont_neg = 0;

// Leemos valores enteros hasta que se introduzca un 0
while (true) {
  $num = (int)readline("Introduce un número entero (0 para salir): ");
  if ($num == 0) {
    break;
  } elseif ($num > 0) {
    // Sumamos el número a los positivos
    $sum_pos += $num;
    $cont_pos++;
  } else {
    // Sumamos el número a los negativos
    $sum_neg += $num;
    $cont_neg++;
  }
}

// Calculamos las medias
$avg_pos = ($cont_pos > 0) ? $sum_pos / $cont_pos : 0;
$avg_neg = ($cont_neg > 0) ? $sum_neg / $cont_neg : 0;

// Mostramos los resultados
echo "La media de los positivos es: " . $avg_pos . "\n";
echo "La media de los negativos es: " . $avg_neg . "\n";

?>
