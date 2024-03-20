<?php

// String
$name = "Taehyun Sung";
$name2 = "Alex Sung";

var_dump($name);
echo "<br/>";

$age = 35;
var_dump($age);
echo "<br/>";

// Float
$rating = 9.5;
var_dump($rating);
echo "<br/>";

// Boolean
$isLoaded = true;
var_dump($isLoaded);
echo "<br/>";

// Array
$friends = ["John", "Jack"];
var_dump($friends);
echo "<br/>";


// Object
$person = new stdClass();
var_dump($person);
echo "<br/>";


// Null
$car = null;
var_dump($car);
echo "<br/>";

// Resource
$file = fopen("sample.txt", "r");
var_dump($file);