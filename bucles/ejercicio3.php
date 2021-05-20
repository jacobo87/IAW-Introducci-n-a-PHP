<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 3</title>
  </head>
  <body>
    <h1>Tabla</h1>
    <table border="1">
    <?php
/* 3. Escribe un script PHP que muestre en una tabla los números pares que existen entre 1 y 100.
Utiliza un bucle for. 

td= Table data
tr= Table row

*/
            for ($i=2; $i <= 100 ; $i=$i+2) { 
    
                echo "<td>$i</td>";
            }

            ?>

  </body>
</html>