<?php
/* Escribe un script que simule el comportamiento de lanzar una moneda al aire y muestre una imagen con la cara o la cruz de la moneda. */
$moneda=rand(0.1)
if ($moneda==1){
    echo "<img src="./images/moneda1.png">";
} else {
    echo "<img src="./images/moneda2.png">";
}
?>