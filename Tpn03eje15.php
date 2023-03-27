<?php
//Escribir un programa que lea números enteros de teclado hasta que encuentre uno que cumpla las 
//siguientes condiciones:  
//• Múltiplo de 2.  
//• No múltiplo de 5.  
//• Mayor que 100.  
//• Menor que 10.000.



// Inicializamos variable para guardar el número
$num = null;

// Leemos números enteros de teclado hasta que encontramos uno que cumpla las condiciones
while (true) {
  $num = (int)readline("Introduce un número entero: ");
  if ($num % 2 == 0 && $num % 5 != 0 && $num > 100 && $num < 10000) {
    break;
  }
}

// Mostramos el número que cumple las condiciones
echo "El número que cumple las condiciones es: " . $num . "\n";

?>


