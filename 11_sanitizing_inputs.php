<?php
/* --- Sanitizing Inputs -- */

/*
  Data submitted through a form is not sanitized by default. We have methods to sanitize data manually.
*/

if (isset($_POST['submit'])) {
  // One way
  // $name = htmlspecialchars($_POST['name']);
  // $age = htmlspecialchars($_POST['age']);

  // Another better way
  // $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
  // $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);

  // Or we can use this method
  $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);

  echo $name;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>server</title>
</head>

<body>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <div>
      <label for="name">Name: </label>
      <input type="text" name="name">
    </div>

    <div>
      <label for="age">Age: </label>
      <input type="text" name="age">
    </div>

    <input type="submit" value="Submit" name="submit">
  </form>
</body>

</html>