
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    table {
      border-collapse: collapse;
    }
    td {
      border: solid 1px black;
      padding: 3px;
    }
  </style>
</head>

<body>
  <table>
    <?php for($i=1; $i<=9; $i++){ ?>
      <tr>
        <?php for($j=1; $j<=9; $j++){ ?>
          <td><?php echo $i*$j ?></td>
        <?php } ?>
      </tr>
    <?php } ?>
  </table>
</body>
</html>