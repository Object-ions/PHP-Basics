<?php
// Two methods to create an array
$names = array('John', 'Jack', 'Jill');
$numbers = [1, 2, 3, 4, 5, 6];

// Reg way to display
var_dump($names);

// echo will print a WARNING - it fits single output - not an array
// var_dum will work here, as well as print_r()
// for ex: print_r($names)

// his is a yes: inspect($numbers);

// This will format nice and neat
function inspect($value)
{
  echo '<pre>';
  var_dump($value);
  echo '</pre>';
}

inspect($names);
inspect($numbers);

print_r($names);

echo $names[2];
echo $numbers[3];

// Add element to array
$numbers[] = 100; // add to the end of the array
$numbers[] = 101;

$numbers[3] = 200; // change value at the 3rd position

unset($numbers[3]); // delete item from the array. note it will remove the index number itself.
// to solve this we can re-index, like this :
$numbers = array_values($numbers);

inspect($numbers);
