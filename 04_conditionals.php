<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/


/* -------- Switch Statements ------- */
$age = 28;

// if ($age == 28) {
//   echo ' Happy Birthday';
// }

$t = date('H');
// echo $t;

// if ($t <= 12) {
//   echo 'Good Morning';
// } elseif ($t <= 17) {
//   echo 'Good Afternoon';
// } else {
//   echo 'Good Evening';
// }

$posts = ['First post'];

// if(!empty($posts)) {
//   echo $posts[0];
// } else {
//   echo 'No Posts';
// }

// Ternary operator

// echo !empty($posts) ? $posts[0] : 'No Posts';

// $first_post = !empty($posts) ? $posts[0] : 'No Posts';
// echo $first_post;

// Coalesing operation

$first_post = $posts[0] ?? null;
// echo $first_post;

// Switches
$fav_color = 'purple';

switch($fav_color) {
  case 'red':
    echo 'Your favorite color is red.';

  case 'green':
    echo 'Your favorite color is green.';
  
  default:
    echo 'Your favorite color is neither red nor green.';
}