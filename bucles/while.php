<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio while</title>
  </head>
  <body>
    <h1>Tabla con while</h1><table border="1">
<?php
/* WHILE_1. Escribe un script PHP que muestre los números del 1 al 10 en una tabla de una fila y 10 columnas.
 Utiliza un bucle while
*/
$i = 1;
while ($i <= 10){
    echo "<tr>
            <td>$i</td>
          </tr>";
    $i++;
}
?>
  </body>
</html>