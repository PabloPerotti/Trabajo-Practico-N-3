<?php

// inicializamos un array vacío para guardar los valores introducidos por el usuario
$valores = array();

// bucle para pedir valores enteros al usuario hasta que introduzca un valor negativo
while (true) {
    echo "Introduce un valor entero (introduce un número negativo para salir): ";
    $valor = intval(trim(fgets(STDIN))); // leemos el valor introducido por el usuario desde la entrada estándar (STDIN)

    if ($valor < 0) {
        break; // si el valor es negativo, salimos del bucle
    }

    // si el valor es positivo o cero, lo añadimos al array de valores
    $valores[] = $valor;
}

// ordenamos los valores de forma descendente
rsort($valores);

// inicializamos un array vacío para guardar los tres valores mayores
$mayores = array();

// iteramos por los valores introducidos por el usuario
foreach ($valores as $valor) {
    // si el valor actual no está ya en el array de mayores, lo añadimos
    if (!in_array($valor, $mayores)) {
        $mayores[] = $valor;
    }
    // si ya tenemos tres valores en el array de mayores, salimos del bucle
    if (count($mayores) >= 3) {
        break;
    }
}

// imprimimos los tres valores mayores
echo "Los tres valores mayores son: " . implode(", ", $mayores) . "\n";

?>
