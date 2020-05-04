<?php
// menghubungkan dengan file php lainnya 
require 'functions.php';

// melakukan query
$alat = query("SELECT * FROM tubes_193040014");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>193040014</title>
</head>

<body>

  <table border="1" cellpadding="13" cellspacing="0">

    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>Nama alat musik</th>
      <th>Asal Daerah</th>
      <th>Cara main</th>
      <th>Bahan pembuatan</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($alat as $musik) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td>
          <a href=""><button>Ubah</button></a>
          <a href=""><button>Hapus</button></a>
        </td>
        <td><img src="../assets/img/<?= $musik['Gambar']; ?> "></td>
        <td><?= $musik['Nama_alat_musik']; ?></td>
        <td><?= $musik['Asal_daerah']; ?></td>
        <td><?= $musik['Cara_main']; ?></td>
        <td><?= $musik['Bahan_pembuatan']; ?></td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>

  </table>



</body>

</html>