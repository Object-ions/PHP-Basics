<?php
/*
  Challenge 2: Print names in uppercase
  Create a function called `printNamesToUpperCase` that takes an array of names as an argument. The function should loop through the array and print each name to the screen in uppercase letters.
*/

$arrNames = ['Moses', 'Jon', 'Bob', 'Cameron'];

function printNamesToUpperCase ($arrOfNames) {
  foreach ($arrOfNames as $name) {
    $newName = strtoupper($name);
    echo $newName . '<br>';
  }
}

printNamesToUpperCase($arrNames);