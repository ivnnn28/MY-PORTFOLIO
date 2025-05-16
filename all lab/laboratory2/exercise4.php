<?php

$workingHours = 12000;
$age = 8;
$failuresPerYear = 20;
echo "Exercise 4:<br>";
if ($workingHours > 10000 || $age > 7 || $failuresPerYear > 25) {
    echo "Machine needs replacement<br><br>";
} else {
    echo "Machine does not need replacement<br><br>";
}


?>