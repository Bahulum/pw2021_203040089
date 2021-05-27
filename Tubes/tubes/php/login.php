<?php
session_start();
require 'functions.php';

if (isset($_SESSION['username'])) {
  header("location: admin.php");
  exit;
}

if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
  $username = $_COOKIE['username'];
  $hash = $_COOKIE['hash'];

  $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE esername = '$username'");
  $row = mysqli_fetch_assoc($result);

  if ($hash === hash('sha256', $row['id'], false)) {
    $_SESSION['username'] = $row['username'];
    header("location: admin.php");
    exit;
  }
}

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");

  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = hash('sha256', $row['id'], false);

      if (isset($_POST['remember'])) {
        setcookie('username', $row['username'], time() + 60 * 60 * 24);
        $hash = hash('sha256', $row['id']);
        setcookie('hash', $hash, time() + 60 * 60 * 24);
      }

      if (hash('sha256', $row['id']) == $_SESSION['hash']) {
        header("location: admin.php");
        die;
      }
      header("location: ../index.php");
      die;
    }
  }
  $error = true;
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
  <div class="container" class="login">
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
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="remember">
        <label class="form-check-label" for="remember">Remember me</label>
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>

      <div class="registrasi">
        <br>
        <p>Belum punya akun ? Registrasi <a href="registrasi.php">Disini</a></p>
      </div>
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