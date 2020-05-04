<?php
//Melakukan koneksi ke database
$conn = mysqli_connect("localhost", "root", "") or die("Koneksi ke DB gagal");
//  Memilih database
mysqli_select_db($conn, "pw_193040014") or die("Database Salah!");
// query mengambil objek dari tabel dalam database
$result = mysqli_query($conn, "SELECT * FROM tubes_193040014");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>193040014</title>
</head>

<body>
  <table border="1" cellspacing="0" cellpadding="5" width="90%">

    <tr class="title_table">
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
</body>

</html>