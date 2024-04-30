<?php
$number1 = 1;
$number2 = 10;
$number3 = "20";
$bool1 = true;
$bool2 = false;
$null = null;

$sum = $number1 + $number2;
$sum = $number1 + $number3;
$result = $number1 + $bool2;
$result = $number1 + $null;

// Explicit convesion
$result = (string)$number1;
$result = (bool)$number1;



var_dump($result);


?>

