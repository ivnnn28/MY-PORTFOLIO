<?php

function isPrime($num) {
    if ($num <= 1) return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}
$num = 17;
echo "Exercise 6:<br>";
echo $num . (isPrime($num) ? " is a prime number" : " is not a prime number") . "<br>";

?>