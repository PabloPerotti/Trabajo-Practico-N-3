<?php
/* Leer 10 valores desde teclado y mostrar la media de los pares y la media de los impares. Hacer tres ;
versiones, con un bucle: para, mientras y repetir. Repetir el ejercicio considerando que el número de 
valores se le solicita al usuario.*/

$AcuPar=0;
$ConPar=0;
$AcuImpar=0;
$ConImpar=0;

for ($i=0; $i < 10; $i++) { 
    $numero = readline("Ingrese un valor: ");
    if ($numero %2 ==0) {
        $AcuPar+=$numero;
        $ConPar++;
        } else {
            $AcuImpar+=$numero;
            $ConImpar++;
    }
    }
echo " El promedio de valores pares es: ".$AcuPar/$ConPar .PHP_EOL;
echo " El promedio de valores impares es: ".$AcuImpar/$ConImpar .PHP_EOL;
