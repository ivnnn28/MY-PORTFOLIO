<?php

function addNumbers($a, $b) {
    return $a + $b;
}
function subtractNumbers($a, $b) {
    return $a - $b;
}
function multiplyNumbers($a, $b) {
    return $a * $b;
}
function divideNumbers($a, $b) {
    return $b != 0 ? $a / $b : "Undefined (division by zero)";
}
$num1 = 20;
$num2 = 5;
echo "Exercise 3:<br>";
echo "Addition of $num1 and $num2 is " . addNumbers($num1, $num2) . "<br>";
echo "Subtraction of $num1 and $num2 is " . subtractNumbers($num1, $num2) . "<br>";
echo "Multiplication of $num1 and $num2 is " . multiplyNumbers($num1, $num2) . "<br>";
echo "Division of $num1 and $num2 is " . divideNumbers($num1, $num2) . "<br><br>";

?>