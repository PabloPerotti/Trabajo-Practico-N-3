<?php
//19.  Ingrese un valor numérico correspondiente a un mes y a continuación muestre todos los meses en 
//     letras que restan para llegar a diciembre del mismo año (por ejemplo, si ingresa 10 debe mostrar 
//     octubre, noviembre y diciembre). Validar que se ingrese un número de mes válido y el proceso 
//     finaliza cuando el operador ingresa el valor cero. Muestre también los valores correctos e 
//     incorrectos ingresados por el usuario. 



$meses = array(
    1 => "enero", 2 => "febrero", 3 => "marzo", 4 => "abril", 
    5 => "mayo", 6 => "junio", 7 => "julio", 8 => "agosto", 
    9 => "septiembre", 10 => "octubre", 11 => "noviembre", 12 => "diciembre"
);

$valores_correctos = array();
$valores_incorrectos = array();

do {
    $mes = (int)readline("Ingrese un valor numérico correspondiente a un mes (1-12): ");
    if ($mes >= 1 && $mes <= 12) {
        $valores_correctos[] = $mes;
        for ($i = $mes; $i <= 12; $i++) {
            echo $meses[$i] . "\n";
        }
    } elseif ($mes != 0) {
        $valores_incorrectos[] = $mes;
        echo "Valor incorrecto ingresado.\n";
    }
} while ($mes != 0);

echo "Valores correctos ingresados: " . implode(", ", $valores_correctos) . "\n";
echo "Valores incorrectos ingresados: " . implode(", ", $valores_incorrectos) . "\n";

?>

