<?php
$str = "This text has 'punctuation' punctuation.";

function searchText($str, $punctuation) {
    $count = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if (strpos($punctuation, $str[$i]) !== false) {
            $count++;
        }
    }
    return $count;
}

$punctuationChars = "'.,!";
$punctuationCount = searchText($str, $punctuationChars);
echo "(The text has '" . $punctuationCount . "' punctuation.)\n";
?>