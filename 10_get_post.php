<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/
if (isset($_POST['submit'])) {
  echo $_POST['name'] . ' | ';
  echo $_POST['age'];
}
?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=John&age=28">Click</a>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>server</title>
</head>

<body>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
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