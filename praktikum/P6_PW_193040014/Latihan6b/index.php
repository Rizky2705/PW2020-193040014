<?php
// menghubungkan dengan file php lainnya
require 'php/functions.php';

// melakukan querry
$alat = query("SELECT * FROM tubes_193040014")
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <style>
    body {
      min-height: 500px;
    }

    .container {
      width: 40%;
      margin: 100px auto 150px;
      background-color: #dfe8e7;
      text-align: center;
    }

    h1 {
      background-color: #8cffee;
      margin: 0 auto;
      border-bottom: 2px solid red;
    }
  </style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>193040014</title>
</head>

<body>
  <div class="container">
    <?php foreach ($alat as $musik) : ?>
      <p>
        <a href="php/detail.php?Nomor=<?= $musik['Nomor'] ?>">
          <?= $musik['Nama_alat_musik'] ?>
        </a>
      </p>

    <?php endforeach; ?>
  </div>
</body>

</html>