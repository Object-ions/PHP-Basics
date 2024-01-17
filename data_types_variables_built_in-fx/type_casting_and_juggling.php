<?php

$number1 = 5;
$number2 = 10;
$number3 = '20';
$fruit = 'apple';
$bool1 = true;
$bool2 = false;
$null = null;

// Implicit conversion
$result = $number1 + $number2;
var_dump($result); // get int -> int(15)

$result = $number1 + $number3;
var_dump($result); //php will convert it into an int | string to int conversion | -> int(25)

$result = $number3 + $number3;
var_dump($result); // string to int conversion | -> int(40)

$result = $number3 . $number2;
var_dump($result); // int to string conversion | -> string("510")

$result = $fruit + $number2;
var_dump($result); // ERROR

$result = $number1 + $bool1;
var_dump($result); // bool to int conversion | -> int(6) true = 1

$result = $number1 + $bool2;
var_dump($result); // bool to int conversion | -> int(5) false = 0

$result = $number1 + $null;
var_dump($result); // null to int conversion | -> int(5) null = 0

// Explicit conversion
$result = (string) $number1; // convert int to string -> string("5")

$result = (int) $number3; // convert string to int -> int(20)

$result = (bool) $number1; // give a bool of true -> bool(true)
// any number aside from 0 will convert to be 'true' , 0 will convert to 'false'



