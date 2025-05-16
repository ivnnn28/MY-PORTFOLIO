<?php

$score = 85;
echo "Exercise 3:<br>";
if ($score >= 90 && $score <= 100) {
    $grade = "A";
} elseif ($score >= 80) {
    $grade = "B";
} elseif ($score >= 70) {
    $grade = "C";
} elseif ($score >= 60) {
    $grade = "D";
} else {
    $grade = "F";
}
$passStatus = ($grade == "A" || $grade == "B" || $grade == "C") ? "Passed" : "Failed";
echo "Score: $score - Grade: $grade - Status: $passStatus<br><br>";


?>