<?php
/* Escriba un script PHP que realice la simulación de lanzar un dado
y muestre una imagen con un valor aleatorio enre 1 y 6.
Resuelva el ejercicio sin utilizar las estructuras de control if - else y switch.*/

$variable = rand(1,6);
echo "<h1>Tu tirada: $variable</h1>";
echo "<img src='../images/dados/$variable.png'>";
?>