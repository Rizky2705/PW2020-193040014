<?php

// menghubungkan dengan file php lainnya
require 'php/functions.php';

// melakukan query
$alat = query("SELECT * FROM tubes_193040014")

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/style.css">
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    table {
      border-collapse: collapse;
    }

    table,
    th,
    td {
      border: 2px solid black;
      text-align: center;
      margin: 5px 5px 5px 5px;
    }

    img {
      height: 200px;
      width: 200px;
      margin: 5px 5px 5px 5px;
    }
  </style>
  <title>193040014</title>
</head>

<body>
  <div class="container">
    <?php foreach ($alat as $musik) : ?>
      <p class="nama">
        <a href="php/detail.php?id=<?= $musik['Gambar'] ?>">
          <?= $musik["Nama_alat_musik"] ?>
        </a>
      </p>
    <?php endforeach; ?>
  </div>
</body>

</html>