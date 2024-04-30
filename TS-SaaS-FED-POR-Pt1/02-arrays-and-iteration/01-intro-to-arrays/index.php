<?php

$names = array("John", "Jack", "Jill");
$numbers = [1,2,3,4,5,6];


function inspect($value) {
    echo "<pre>";
    var_dump($value);
    echo "<pre>";
}

inspect($numbers);

print_r($names);

echo $names[2];

$numbers[] = 100;
inspect($numbers);

$numbers[3] = 200;
unset($numbers[3]);
$numbers = array_values($numbers);
inspect($numbers);
