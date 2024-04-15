<?php
function sayHello ($name = "World")
{
    return "Hello " . $name;
}

echo sayHello("Alex");

function addAll(...$numbers) {
    $sum = 0;

    foreach($numbers as $number) {
        $sum += $number;
    }

    return $sum;
}

echo addAll(1,2,3,4,5,6);