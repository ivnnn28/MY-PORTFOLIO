<?php
$str = "Repeat";

function stringRepeat($str, $times) {
    return str_repeat($str, $times);
}

$repeatedString = stringRepeat($str, 8);
echo $repeatedString . "\n";
?>