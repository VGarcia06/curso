<?php
require_once "ClassOperacion.php";
//require -> Incluye el archivo y si ocurre algun error con uno de los métodos, require detiene el proceso.
//include -> Incluye el archivo y si ocurre algun error con uno de los métodos, include NO detiene el proceso.

// Instanciando Clase
$operacion1 = new Operacion(10, 3);
$operacion2 = new Operacion(100, 2);

$totalSuma = $operacion1->getSuma();
$totalResta = $operacion1->getResta();
$totalMulti = $operacion1->getMultiplicacion();

echo "Total Suma: " . $totalSuma;
echo "<br>";
echo "Total Resta: " . $totalResta;
echo "<br>";
echo "Total Multiplicacion: " . $totalMulti;
echo "<br><br>";

$totalSuma = $operacion2->getSuma();
$totalResta = $operacion2->getResta();
$totalMulti = $operacion2->getMultiplicacion();

echo "Total Suma: " . $totalSuma;
echo "<br>";
echo "Total Resta: " . $totalResta;
echo "<br>";
echo "Total Multiplicacion: " . $totalMulti;
echo "<br><br>";
