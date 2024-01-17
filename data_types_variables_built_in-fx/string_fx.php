<?php
$output = null;
$string = 'Hello World';

// strlen
$output = strlen($string);

//str_word_count
$output = str_word_count($string);

// strpos
$output = strpos($string, 'World');

// Get specific char by index
$output = $string[4];

// substr
$output = substr($string, 6, 5);

// str_replace
$output = str_replace('World', 'Universe', $string);

// strtolower
$output = strtolower($string);

// strtoupper
$output = strtoupper($string);

// ucwords
$output = ucwords($string);

$output = trim('   Hello World    ');

// https://www.php.net/manual/en/ref.strings.php
?>