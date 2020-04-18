<?php

// melakukan konseksi ke database
$conn = mysqli_connect("localhost", "root", "") or die("konseksi ke DB gagal");

// memilih database
mysqli_select_db($conn, "pw_193040014") or die("database salah!");

// query mengambil objek dari tabel didalam database
$result = mysqli_query($conn, "SELECT * FROM tubes_193040014");

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
    <table cellpadding="10" cellspacing="0" border="1">
      <tr>
        <th>Nomor</th>
        <th>Gambar</th>
        <th>Nama alat musik</th>
        <th>Asal Daerah</th>
        <th>Cara main</th>
        <th>Bahan pembuatan</th>

      </tr>
      <?php $i = 1 ?>
      <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
          <td><?= $i ?></td>
          <td><img src="assets/img/<?= $row["Gambar"]; ?>"></td>
          <td><?= $row["Nama_alat_musik"] ?></td>
          <td><?= $row["Asal_daerah"] ?></td>
          <td><?= $row["Cara_main"] ?></td>
          <td><?= $row["bahan_pembuatan"] ?></td>

        </tr>
        <?php $i++ ?>
      <?php endwhile; ?>
    </table>
  </div>
</body>

</html>