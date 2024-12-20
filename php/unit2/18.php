<?php
$associativeArray = [
    "apple" => 10,
    "banana" => 5,
    "cherry" => 15,
    "date" => 7
];

$shuffledArray = $associativeArray;
ksort($shuffledArray); 
shuffle($shuffledArray);
echo "Shuffled associative array: ";
print_r($shuffledArray);
?>
