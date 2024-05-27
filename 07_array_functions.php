<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/
$fruits = ['apple', 'orange', 'pear'];

// Get length
// echo count($fruits);

// Search array
// var_dump(in_array('apple', $fruits));

// Add to array
$fruits[] = 'grape';
array_push($fruits, 'blueberry', 'strawberry');
array_unshift($fruits, 'pear');

// print_r($fruits);

$arr_1 = [1, 2, 3];
$arr_2 = [4, 5, 6];

$arr_3 = array_merge($arr_1, $arr_2);
$arr_4 = [...$arr_1, ...$arr_2];
// print_r($arr_3);
// print_r($arr_4);

$a = ['green', 'red'];
$b = ['avacado', 'apple'];

$c = array_combine($a, $b);
// print_r($c);

$keys = array_keys($c);
// print_r($keys);

$flipped = array_flip($c);
// print_r($flipped);

$numbers = range(1, 5);
// print_r($numbers);

$new_numbers = array_map(function($number) {
  return "Number ${number}";
}, $numbers);

$less_than_20 = array_filter($numbers, fn($num) => $num <= 3);

// print_r($less_than_20);

$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
print_r($sum);