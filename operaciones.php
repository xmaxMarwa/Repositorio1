<?php

$numero1 = 26;
$numero2 = 6;

// Operaciones
echo "Suma: " . ($numero1 + $numero2) . "<br>";
echo "Resta: " . ($numero1 - $numero2) . "<br>";
echo "Multiplicación: " . ($numero1 * $numero2) . "<br>";
echo "División: " . ($numero1 / $numero2) . "<br>";
echo "Resto: " . ($numero1 % $numero2) . "<br><br>";

// Comparaciones
echo "¿Número1 es mayor que número2? ";
echo ($numero1 > $numero2) ? "Sí" : "No";
echo "<br>";

echo "¿Número1 es igual a número2? ";
echo ($numero1 == $numero2) ? "Sí" : "No";
echo "<br>";

echo "¿Ambos números son mayores que 5? ";
echo ($numero1 > 5 && $numero2 > 5) ? "Sí" : "No";
echo "<br>";

echo "¿Alguno de los dos números es menor que 5? ";
echo ($numero1 < 5 || $numero2 < 5) ? "Sí" : "No";
echo "<br>";

?>