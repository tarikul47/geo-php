<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="card text-center">
        <div class="card-header">
          Featured
        </div>
        <div class="card-body min-vh-100" style="text-align:left">
          <?php

          include_once "app.php";

          foreach ($error_autoload_files as $file) {
            include_once $file;
          }

          foreach ($type_autoload_files as $file) {
            include_once $file;
          }

          foreach ($array_autoload_files as $file) {
            include_once $file;
          }
          foreach ($operators_autoload_files as $file) {
            // echo $file;
            include_once $file;
          }

          foreach ($controls_autoload_files as $file) {
            // echo $file;
            include_once $file;
          }

          foreach ($statement_autoload_files as $file) {
            // echo $file;
            include_once $file;
          }
          foreach ($include_autoload_files as $file) {
            // echo $file;
            include_once $file;
          }

          foreach ($functions_autoload_files as $file) {
            // echo $file;
            include_once $file;
          }

          foreach ($variable_autoload_files as $file) {
            // echo $file;
            include_once $file;
          }
          foreach ($dateTimeZone_autoload_files as $file) {
            // echo $file;
            include_once $file;
          }
          foreach ($autoload_files as $file) {
            // echo $file;
            include_once $file;
          } 
          foreach ($autoload_oop as $file) {
            // echo $file;
            include_once $file;
          }
          ?>
        </div>
        <div class="card-footer text-muted">
          2 days ago
        </div>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>