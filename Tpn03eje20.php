<?php

//   20.  Suponga que tiene usted una tienda y desea registrar las ventas en su computadora. Diseñe un 
//        algoritmo que lea por cada cliente, el monto total de su compra. Al final del día que escriba la 
//        cantidad total de ventas y el número de clientes atendidos. 



// Inicializar las variables para la cantidad total de ventas y el número de clientes atendidos
$total_ventas = 0;
$num_clientes = 0;

// Pedir al usuario que ingrese el monto total de la compra por cada cliente
while (true) {
  $monto_compra = readline("Ingrese el monto total de la compra (o escriba 'fin' para terminar): ");
  
  // Verificar si el usuario ha terminado de ingresar las ventas del día
  if ($monto_compra === "fin") {
    break;
  }
  
  // Convertir el monto de compra a un número decimal y sumarlo a la cantidad total de ventas
  $monto_compra = floatval($monto_compra);
  $total_ventas += $monto_compra;
  
  // Incrementar el número de clientes atendidos
  $num_clientes++;
}

// Mostrar la cantidad total de ventas y el número de clientes atendidos
echo "Cantidad total de ventas: $" . number_format($total_ventas, 2) . "\n";
echo "Número de clientes atendidos: " . $num_clientes . "\n";

?>
