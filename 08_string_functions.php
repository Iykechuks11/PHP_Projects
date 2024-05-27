<?php
/* ---------- String Functions -------- */

/*
  Functions to work with strings
  https://www.php.net/manual/en/ref.strings.php
  https://www.w3schools.com/php/php_string.asp
*/
$string = 'Hello World!';

// Get the length of a string
echo strlen($string) . '<br>';

// Count the number of words in a string
echo str_word_count($string) . '<br>';

// Starts with
if (str_starts_with($string, 'Hello')) {
  echo 'YES' . '<br>';
}

// This code is prone to XSS attack (Cross-site scripting injection)
$string_2 = '<script>alert(1)</script>';
// echo $string_2;

// However, you can use `htmlspecialchar()` to avert this attacks
echo htmlspecialchars($string_2) . '<br>'; // Instead of executing the script, it converts it into ordinary characters.

printf('%s likes to %s', 'John', 'code');