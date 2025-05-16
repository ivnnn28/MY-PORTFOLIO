<?php

function calculateVat($price, $vat) {
    return $price + ($price * $vat);
}
$price = 100;
$vat = 0.15;
$calculatedPrice = calculateVat($price, $vat);
echo "Exercise 1:<br>";
echo "Price is: $price, Vat is: $vat, Total price is: $calculatedPrice<br><br>";

?>