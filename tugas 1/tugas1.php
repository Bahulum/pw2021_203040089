<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas 1</title>
  <style>
    .salmon {
      background-color: salmon;
    }

    .lightblue {
      background-color: lightblue;
    }
  </style>
</head>

<body>

  <table border="1" cellpadding="10" cellspacing="3">
    <?php for ($i = 1; $i <= 6; $i++) : ?>
      <tr>
        <?php for ($j = 1; $j <= 6; $j++) : ?>
          <?php $all = $i + $j; ?>
          <?php if ($all % 2 == 1) : ?>
            <td class="salmon"></td>
          <?php else : ?>
            <td class="lightblue"></td>
          <?php endif; ?>
        <?php endfor; ?>
      </tr>
    <?php endfor; ?>
  </table>
</body>

</html>