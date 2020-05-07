<?php
// menghubungkan dengan file php lainnya 
require 'functions.php';

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $alat = query("SELECT * FROM tubes_193040014 WHERE
            Nama_alat_musik LIKE '%$keyword' OR
            Asal_daerah LIKE '%$keyword' OR
            Cara_main LIKE '%$keyword' OR
            Bahan_pembuatan LIKE '%$keyword' ");
} else {
  $alat = query("SELECT * FROM tubes_193040014");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>193040014</title>
</head>

<body>
  <h2>Selamat Datang Admin Kita Tercinta</h2>
  <div>
    <button class="button button1"><a href="tambah.php">Tambah data</a></button>
  </div>

  <button class="button button2">
    <form action="" method="GET">
      <input type="text" name="keyword" autofocus placeholder="Search">
      <button type="submit" name="cari">Cari!!</button>
    </form>
  </button>

  </form>

  <table border="1" cellpadding="13" cellspacing="0">

    <tr>
      <th>#</th>
      <th>Opsi</th>
      <th>Gambar</th>
      <th>Nama alat musik</th>
      <th>Asal Daerah</th>
      <th>Cara main</th>
      <th>Bahan pembuatan</th>
    </tr>

    <?php if (empty($alat)) : ?>
      <tr>
        <td colspan="7">
          <h1>Data tidak ditemukan</h1>
        </td>
      </tr>
    <?php else : ?>

      <?php $i = 1; ?>
      <?php foreach ($alat as $musik) : ?>
        <tr>
          <td><?= $i; ?></td>
          <td>
            <a href="ubah.php?Nomor=<?= $musik['Nommor'] ?>"><button>Ubah</button></a>
            <a href="hapus.php?Nomor=<? $musik['Nomor'] ?> onlick " return confirm('Hapus Data??')"><button>Hapus</button></a>
          </td>
          <td><img src="../assets/img/<?= $musik['Gambar']; ?> "></td>
          <td><?= $musik['Nama_alat_musik']; ?></td>
          <td><?= $musik['Asal_daerah']; ?></td>
          <td><?= $musik['Cara_main']; ?></td>
          <td><?= $musik['bahan_pembuatan']; ?></td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
    <?php endif;  ?>

  </table>
</body>

</html>