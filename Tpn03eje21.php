<?php



// Pedir al usuario que ingrese el número de semanas
$n = readline("Ingrese el número de semanas: ");

// Inicializar las variables para el salario por semana y el salario total pagado hasta la fecha
$salario_semana = 0.01;
$salario_total = 0;

// Mostrar el salario por semana y el salario total pagado hasta la fecha para cada semana
for ($i = 1; $i < $n; $i++) {
    if ($i == 1) {
        $salario_semana = $salario_semana;
        # code...
    }

  // Calcular el salario por semana para la semana actual
  $salario_semana = (2 * $salario_semana);
    
  // Sumar el salario por semana al salario total pagado hasta la fecha
  $salario_total += $salario_semana;
  
  // Mostrar el salario por semana y el salario total pagado hasta la fecha para la semana actual
  echo "Semana " . $i . ": salario $" . number_format($salario_semana, 2) . ", salario total pagado hasta la fecha $" . 
  number_format($salario_total, 2) . "\n";
}

?>
