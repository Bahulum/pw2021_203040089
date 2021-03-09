<?php
function hitungDeterminan($a, $b, $c, $d)
{
  $hasil = (($a * $d) - ($b * $c));
  echo "<table style='border-left: 2px solid black; border-right: 2px solid black;' cellspacing='5' cellpadding='5'>
    <tr>
      <td>$a</td>
      <td>$b</td>
    </tr>
    <tr>
      <td>$c</td>
      <td>$d</td>
    </tr>
  </table>";
  echo "<br>";
  echo "Determinan dari matriks tersebut adalah $hasil";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>latihan 2d</title>
</head>

<body>
  <?php hitungDeterminan(1, 2, 3, 4) ?>
</body>

</html>