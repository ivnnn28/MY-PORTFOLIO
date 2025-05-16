<?php

function isLeapYear($year) {
    return (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0));
}
$year = 2024;
echo "Exercise 2:<br>";
echo $year . (isLeapYear($year) ? " is a leap year<br><br>" : " is not a leap year<br><br>");

?>