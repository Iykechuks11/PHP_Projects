<?php
/* ----------- Arrrays ----------- */

/*
  Arrays hold multiple values. Each value in an array is called an "element"
*/

// Simple array
$numbers = [1, 2, 4, 5];
$fruits = ['apple', 'orange', 'mango'];

// echo $numbers;
// print_r($numbers);
// var_dump($numbers);
// echo $fruits[0];

// Associative arrays

$person = [
  'first_name' => 'John',
  'last_name' => 'Chukwu'
];

// echo $person['last_name'];

// Multidimentional array

$people = [
  [
    'first_name' => 'John',
    'last_name' => 'Chukwu'
  ],
  [
    'first_name' => 'Mike',
    'last_name' => 'Plan'
  ],
];

// echo $people[0]['first_name'] . ' and ' . $people[1]['first_name'] . ' are friends.';
var_dump(json_encode($people));




