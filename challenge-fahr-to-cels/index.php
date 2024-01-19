<?php
/*
  Challenge 1: Fahrenheit to Celsius
  Create a function called `fahrenheitToCelsius` that takes a Fahrenheit temperature as an argument. Return the temperature converted to Celsius.

  Start with a regular named function and then refactor to an anonymous arrow function.

  The formula to convert Fahrenheit to Celsius is: Celsius = (Fahrenheit - 32) * 5/9
*/

function fahrenheitToCelsius($f) {
  $c = ($f - 32) * 5/9;
  return $c;
}

$degToConvert = 68;

echo $degToConvert . '&deg;F ' . fahrenheitToCelsius($degToConvert) . '&deg;C';