<?php
function randNumber($min, $max) {
    return $min + (mt_rand() / mt_getrandmax()) * ($max - $min);
}

// Generate a random float between 0 and 1
$randomNumber = randNumber(0, 1);
echo $randomNumber . "\n";

// Generate a random float between 10 and 20
$anotherRandomNumber = randNumber(10, 20);
echo $anotherRandomNumber . "\n";
?>