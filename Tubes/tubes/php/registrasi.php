<?php
require 'functions.php';

if (isset($_POST["register"])) {

  if (registrasi($_POST) > 0) {
    echo "<script>
                alert('Registrasi Berhasil');
                document.location.href = 'login.php';
            </script>";
  } else {
    echo "<script>
                alert('Registrasi Gagal');
            </script>";
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>My Store</title>
</head>

<body>
  <nav class="navbar navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand fs-md-5 fw-bold" href="#">ULUM Store</a>
    </div>
  </nav>
  <div class="container" class="registrasi">
    <br>
    <form action="" method="post">
      <?php if (isset($error)) : ?>
        <p style="color: red; font-style: italic;">Username atau Password salah</p>
      <?php endif; ?>

      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" aria-describedby="username" name="username">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
      </div>
      <button type="submit" name="register">REGISTER</button>
    </form>

  </div>

  <!-- footer -->
  <footer class="bg-dark fixed-bottom text-white">
    <div class="container">
      <div class="row">
        <div class="col p-3 text-center">
          <small>Copyright &copy; 2020 - Bahrul Ulum.</small>

        </div>
      </div>
    </div>
  </footer>
  <!-- akhir footer -->


  <script src="js/jquery-3.5.1.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>

</body>