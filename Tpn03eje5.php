
<?php
/* Imprimir los números pares desde N (siendo N un número par que se lee) en forma descendente 
hasta 2 */

$n = readline("Ingrese un Numero par: ");

for ($i=$n; $i >=2 ; $i -= 2) { 
    if ($i % 2 == 0) {
        echo $i. " ".PHP_EOL;
        # code...
    }# code...
}
