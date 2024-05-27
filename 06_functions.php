<?php
/* ------------ Functions ----------- */

/*
  Functions are reusable blocks of code that we can call to perform a specific task.
  We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope


/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
*/

// function registerUser($email) {
//   echo $email . ' registered';
// }

// registerUser('John');

function sum($n1, $n2) {
  return $n1 + $n2;
}

$add_num = sum(1, 2);
echo $add_num;

