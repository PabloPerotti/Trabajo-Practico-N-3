<?php 

//22.  Calcular la nota promedio de un salón de clase y la nota mayor y el código del estudiante 
//     que la obtuvo, validar que las notas ingresadas se encuentren en el intervalo [0,10]. El 
//     ingreso de notas finaliza a pedido del operador.



// Inicializar las variables para la nota promedio, la nota mayor y el código del estudiante que la obtuvo
$nota_promedio = 0;
$nota_mayor = 0;
$codigo_mayor = '';

// Pedir al usuario que ingrese las notas de los estudiantes hasta que el usuario lo indique
while (true) {
    $codigo_estudiante = readline("Ingrese el código del estudiante (o escriba 'fin' para terminar): ");

  // Verificar si el usuario ha terminado de ingresar las notas de los estudiantes
    if ($codigo_estudiante === "fin") {
    break;
}

    $nota_estudiante = floatval(readline("Ingrese la nota del estudiante: "));

  // Verificar si la nota ingresada está en el intervalo [0, 10]
    if ($nota_estudiante >= 0 && $nota_estudiante <= 10) {
    // Sumar la nota del estudiante a la nota promedio
    $nota_promedio += $nota_estudiante;
    
    // Verificar si la nota del estudiante es la mayor hasta ahora
    if ($nota_estudiante > $nota_mayor) {
    $nota_mayor = $nota_estudiante;
    $codigo_mayor = $codigo_estudiante;
    }
} else {
    echo "La nota debe estar en el intervalo [0, 10].\n";
}
}

// Calcular la nota promedio dividiendo la suma de las notas por la cantidad de estudiantes
$num_estudiantes = count($notas_estudiantes);
$nota_promedio /= $num_estudiantes;

// Mostrar la nota promedio, la nota mayor y el código del estudiante que la obtuvo
echo "Nota promedio: " . number_format($nota_promedio, 2) . "\n";
echo "Nota mayor: " . number_format($nota_mayor, 2) . " (estudiante " . $codigo_mayor . ")\n";

?>
