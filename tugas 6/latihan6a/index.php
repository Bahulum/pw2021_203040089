<?php
require 'php/functions.php';

$sembako = query("SELECT * FROM sembako")
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>latihan 6</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="add" style="padding-top: 10px; padding-bottom: 15px;">
      <a href="php/login.php"><button>Masuk ke halaman admin</button></a>
    </div>
  </div>
  <div class="container">
    <?php
    $nomer = 1;
    foreach ($sembako as $smb) :
    ?>
      <p>
        <a href="php/detail.php?id=<?= $smb['id'] ?>">
          <?= $smb["Nama_barang"] ?>
        </a>
      </p>
    <?php endforeach; ?>
  </div>
</body>

</html>