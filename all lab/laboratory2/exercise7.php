<?php

echo "Exercise 7:<br>";
$fib1 = 0;
$fib2 = 1;
echo "$fib1, $fib2";
while (true) {
    $fibNext = $fib1 + $fib2;
    if ($fibNext > 50) break;
    echo ", $fibNext";
    $fib1 = $fib2;
    $fib2 = $fibNext;
}
echo "<br>";

?>