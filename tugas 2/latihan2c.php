<?php
function tumpukanBola($tumpukan)
{
  for ($i = 0; $i < $tumpukan; $i++) {
    for ($j = 0; $j <= $i; $j++) {
      echo "<div class='bola'>$tumpukan</div>";
    }

    echo "<br>";
  }
}
?>

<!doctype html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <title>latihan 2c</title>
  <style>
    .bola {
      width: 50px;
      height: 50px;
      display: table-cell;
      text-align: center;
      vertical-align: middle;
      border: 1px solid black;
      border-radius: 50%;
      background: salmon;
    }
  </style>
</head>

<body>
  <?php tumpukanBola(5) ?>
</body>

</html>