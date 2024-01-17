<?php
$output = null;

$ids = [10, 22, 15, 45, 67, 33];
$users = ['user2', 'user1', 'user3'];

// count - return the amount of numbers in the array
$output = count($ids);

// sort - manipulates the array, sort the array in order (the values are sorted)
sort($ids);
sort($users);

// rsort - sorts the array in a reverse order
rsort($ids);
rsort($users);

// array_push - add on a value to the end of the array
array_push($ids, 100);
array_push($users, 'user4');

// array_pop - removes 1 item from the end of the array
array_pop($ids);
array_pop($users);

// array_shift - remove the first item in the array
array_shift($ids);
array_shift($users);

// array_unshift - prepend - add to the beginning of the array
array_unshift($ids, 100);
array_unshift($users, 'user3');

// array_slice - return part of the array into a **new array***
$ids2 = array_slice($ids, 2, 3);
var_dump($ids2);

// array_splice - manipulate of the arr-  return portion of the array and return something else 
array_splice($ids, 1, 1, 'New ID');
array_splice($users, 0, 1, 'New User');

// array_sum - sums the array
$output = 'Sum of IDs: ' . array_sum($ids);

// array_search - search the array to a given value
$output = 'User 2 is at index: ' . array_search('user2', $users);

// in_array - check if the value exist in an array (return 1 or -1)
$output = 'User 3 Exists: ' . in_array('user3', $users);

// explode - turn the a string into an array (split)
$tags = 'tech,code,programming';
$tagsArr = explode(',', $tags);
// var_dump($tagsArr);

// implode - turn the an arr into a string (join)
$output = implode(', ', $users);

// PHP documentation](https://www.php.net/manual/en/ref.array.php).
?>