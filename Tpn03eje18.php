<?php
// 18.  Un censista recopila ciertos datos aplicando encuestas para el último Censo Nacional de Población y 
//      Vivienda. Desea procesar los datos de todas las personas que alcance a encuestar en un día y 
//      obtener los porcentajes de estudios de niveles primario, secundario, superior no universitario, 
//      universitario y de postgrado.



// Inicializamos las variables para contar los diferentes niveles de estudios
$primario = 0;
$secundario = 0;
$sup_no_univ = 0;
$universitario = 0;
$postgrado = 0;

// Leemos los datos de las personas encuestadas
while (true) {
  // Leemos el nivel de estudios de la persona
  $nivel = (int)readline("Nivel de estudios (1-5): ");
  if ($nivel == 0) {
    // Si se introduce un 0, salimos del bucle
    break;
  } elseif ($nivel == 1) {
    // Nivel primario
    $primario++;
  } elseif ($nivel == 2) {
    // Nivel secundario
    $secundario++;
  } elseif ($nivel == 3) {
    // Nivel superior no universitario
    $sup_no_univ++;
  } elseif ($nivel == 4) {
    // Nivel universitario
    $universitario++;
  } elseif ($nivel == 5) {
    // Nivel de postgrado
    $postgrado++;
  } else {
    // Si se introduce un valor fuera del rango, se vuelve a pedir el nivel de estudios
    continue;
  }
}

// Calculamos los porcentajes de cada nivel de estudios
$total = $primario + $secundario + $sup_no_univ + $universitario + $postgrado;
$porc_primario = $primario / $total * 100;
$porc_secundario = $secundario / $total * 100;
$porc_sup_no_univ = $sup_no_univ / $total * 100;
$porc_universitario = $universitario / $total * 100;
$porc_postgrado = $postgrado / $total * 100;

// Mostramos los resultados por pantalla
echo "Porcentaje de personas con nivel de estudios primario: " . $porc_primario . "%\n";
echo "Porcentaje de personas con nivel de estudios secundario: " . $porc_secundario . "%\n";
echo "Porcentaje de personas con nivel de estudios superior no universitario: " . $porc_sup_no_univ . "%\n";
echo "Porcentaje de personas con nivel de estudios universitario: " . $porc_universitario . "%\n";
echo "Porcentaje de personas con nivel de estudios de postgrado: " . $porc_postgrado . "%\n";

?>
