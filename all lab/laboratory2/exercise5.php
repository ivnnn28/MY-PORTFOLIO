<?php

$year = 2024;
echo "Exercise 5:<br>";
if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
    echo "$year is a leap year<br><br>";
} else {
    echo "$year is not a leap year<br><br>";
}

?>