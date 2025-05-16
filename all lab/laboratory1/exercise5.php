<?php

$cm = 100;
$inch = $cm * 0.39;
echo "Exercise 5: $cm centimeters is $inch inches<br><br>";

// Exercise 6: Expenses
$expenses = array(3000, 4500, 1200, 2800, 5000);
$totalAmount = 0;
foreach ($expenses as $expense) {
    $totalAmount += $expense;
}
$amountOfExpenses = count($expenses);
echo "Exercise 6:<br>";
echo "My $amountOfExpenses biggest expenses were $totalAmount<br>";

?>