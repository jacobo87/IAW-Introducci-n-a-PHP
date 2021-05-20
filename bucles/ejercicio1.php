<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 1</title>
  </head>
  <body>
    <h1>Tabla</h1>
    <table border="1">
    <?php
/* 1. Escribe un script PHP que muestre los números del 1 al 10 en una tabla de una fila y 10 columnas.
Utiliza un bucle for.

td= Table data
tr= Table row

*/
                for ($i = 1; $i <= 10; $i++){
                    echo "<td>$i</td>";
                }
            ?>

  </body>
</html>

