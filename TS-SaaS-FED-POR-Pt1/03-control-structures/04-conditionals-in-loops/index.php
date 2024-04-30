<?php

$number = 1;

while($number <= 10) {
    if($number % 2 == 0) {
        echo $number . " is even number less than ten <br>";
    } else {
        echo $number . " is odd number less than ten <br>";

    }
    $number++;
}
for($i = 0; $i <= 10; $i++) {
    if($i == 5) {
        continue;
    }
    echo $i . "<br>";
}

$studentGrades = array(
    "John" => 75,
    "Jill" => 54,
    "Joan" => 75,
    "Jack" => 93,
);

foreach($studentGrades as $name => $grade) {
    if($grade >= 90) {
        echo $name . " has excellent grade <br>";
    }
}