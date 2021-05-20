<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 4</title>
  </head>
  <body>
    <h1>Tabla</h1>
    <table border="1">
    <?php
/* 4. Escribe un script PHP que muestre la tabla de multiplicar de un número aleatorio.
Utiliza un bucle for 

td= Table data
tr= Table row

*/
        $numero = rand(1, 10);
        for ($i=0; $i <= 10 ; $i++) { 
            $resultado = $numero*$i;
             echo "<tr>";
            echo "<td>$numero*$i = $resultado</td>";
            echo "</tr>";
}
?>

  </body>
</html>