<?php

// Main 8 types in php

// String
$name = 'Moses Atia';
$name2 = "John Doe";
var_dum($name) ;
echo '<br />';

// Integer
$age = 35;
var_dump($age);
echo '<br />';

// Float
$rating = 4.5;
var_dum($rating);
echo '<br />';

// Boolean
$isLoaded = true;
var_dum($isLoaded);
echo '<br />';

// Array
$friends = ['Jon', 'Jack', 'Jane'];
var_dump($friends);
echo '<br />';

// Object
$person = new stdClass();
var_dump($person);
echo '<br />';

// Null
$car = null;
var_dump($car);
echo '<br />';

// Resource
$file = fopen('sample.txt', 'r');
var_dump($file);
echo '<br />';
