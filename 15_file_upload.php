<?php
if (isset($_POST['submit'])) {
  $allowed_ext = array('png', 'jpg', 'jpeg', 'gif');
}
/* ----------- File upload ---------- */
if (isset($_POST['submit'])) {
  if (!empty($_FILES['upload']['name'])) {
    // print_r($_FILES);
    $file_name = $_FILES['upload']['name'];
    $file_size = $_FILES['upload']['size'];
    $file_tmp = $_FILES['upload']['tmp_name'];
    $target_dir = "../uploads";

    // Get file extension
    $file_ext = explode('.', $file_name);
    $file_ext = strtolower(end($file_ext));

    // Validate file extention
    if (in_array($file_ext, $allowed_ext)) {
      if ($file_size <= 1000000) {
        move_uploaded_file($file_tmp, $target_dir);
        $message = '<p style="color: green;">File uploaded.</p>';
      } else {
        $message = '<p style="color: red;">File is too large.</p>';
      }
    } else {
      $message = '<p style="color: red;">Invalid file type.</p>';
    }

    // echo $file_ext;
  } else {
    $message = '<p style="color: red;">Please choose a file.</p>';
  }
}

?>

<!DOCTYPE html>
<html>

<head>
  <title>file_upload</title>
</head>

<body>
  <?php echo $message ?? null; ?>
  <!-- To upload a file you need the encrypt attribute -->
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" method="POST">
    Select image to upload:
    <input type="file" name="upload">
    <input type="submit" value="Submit" name="submit">
  </form>
</body>

</html>