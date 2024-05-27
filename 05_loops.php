<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/
// for ($x = 0; $x <= 10; $x++) {
//   // echo $x;
//   print_r('Number ' . $x . '<br>');
// }


/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/
// $x = 10;
// while ($x > 0) {
//   echo 'Number ' . $x . '<br>';
//   $x--;
// }


/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/

// $x = 1;
// do {
//   echo 'Number ' . $x . '<br>';
//   $x++;
// } while ($x <= 10);


/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/
$posts = ['First post', 'Second post', 'Third post'];

// for ($x = 0; $x < count($posts); $x++) {
//   echo $posts[$x] . '<br>';
// }

// foreach($posts as $post) {
//   echo $post . '<br>';
// }

// foreach ($posts as $index => $post) {
//   echo $index . ' - ' . $post . '<br>';
// }


$person = [
  "first_name" => "Ikechukwu",
  "last_name" => "Chukwu",
];

foreach ($person as $key => $value) {
  echo "$key - $value<br>";
}