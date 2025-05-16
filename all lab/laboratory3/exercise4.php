<?php

function swapNumbers($a, $b) {
    echo "Before swapping: num1 = $a, num2 = $b<br>";
    $temp = $a;
    $a = $b;
    $b = $temp;
    echo "After swapping: num1 = $a, num2 = $b<br><br>";
}
echo "Exercise 4:<br>";
swapNumbers(4, 8);

?>