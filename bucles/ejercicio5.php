<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 5</title>
  </head>
  <body>
    <h1>Tabla</h1>
    <table border="1">
    <?php
/* 5. Escribe un script PHP que muestre las tablas de multiplicar del 1 al 10. 
*/
    for ($numero=1; $numero <= 10 ; $numero++) { 
        echo "<tr>";
        for ($i=0; $i <=10 ; $i++) { 
          $resultado = $numero*$i;
        
           echo "<td>$numero*$i = $resultado</td>";       
    }
    echo "</tr>";
    
}
?>
  </body>
</html>