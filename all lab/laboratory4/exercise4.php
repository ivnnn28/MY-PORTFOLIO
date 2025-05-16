<?php
$longText = "This Is A Long Piece Of Text With Mixed Case.";

function lowercaseCheck($text) {
    return strtolower($text);
}

$lowercaseText = lowercaseCheck($longText);
echo $lowercaseText . "\n";
?>