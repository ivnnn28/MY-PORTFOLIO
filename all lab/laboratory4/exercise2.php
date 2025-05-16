<?php
$birthday = new DateTime('YYYY-MM-DD'); // Replace YYYY-MM-DD with your actual birthday
$today = new DateTime();

$diff = $today->diff($birthday);

if ($today > $birthday) {
    echo "Your birthday was " . $diff->format('%a days ago.') . "\n";
} else {
    echo "There are " . $diff->format('%a days until your birthday.') . "\n";
}
?>