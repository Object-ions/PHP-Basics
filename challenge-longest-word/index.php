<?php
/*
  Challenge 3: Find the longest word
  1. Create a function called `findLongestWord` that takes a sentence as an argument.
  2. The function should return the longest word in the sentence.
  3. The output should look like this:
*/

function findLongestWord ($sentence) {
  $words = explode(' ', $sentence);
  $longest = '';

  foreach ($words as $word) {
    if (strlen($word) > strlen($longest) ) {
      $longest = $word;
    }
  }

  echo $longest;
}

$test = 'I will such a nice day on Monday';
findLongestWord($test);