<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio do_while</title>
  </head>
  <body>
    <h1>Tabla con do_while</h1><table border="1">

<?php
/* DO_WHILE 1. Escribe un script PHP que muestre los números del 1 al 10 en una tabla de una fila y 10 columnas. 
Utiliza un bucle while 
*/
$i = 1;
do {
    echo "<tr>
            <td>$i</td>
          </tr>";
    $i++;
} while ($i <= 10)
?>
  </body>
</html>