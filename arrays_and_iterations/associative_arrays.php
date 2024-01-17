<?php
$output = null;

$user = [
    'name' => 'John',
    'email' => 'john@gmail.com',
    'password' => 'secret',
    'hobbies' => ['Tennis', 'Video Games']
];


// Accessing elements
$output = $user['name'];
$output = $user['email'];

// Element that does not exist
// $output = $user['gender']; // Throws an error

// Accessing nested elements
$output = $user['hobbies'][0];

// Adding a new element
$user['address'] = '123 Main Street';

// Removing element
unset($user['address']);
?>