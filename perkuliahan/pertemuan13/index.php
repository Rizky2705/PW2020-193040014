<?php

session_start();
if (!isset($_SESSION['login'])) {
  header('Location: login.php');
  exit;
}


require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");

//ketika tombol cari di klik
if (isset($_POST['cari'])) {
  $mahasiswa = cari($_POST['keyword']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h3>Daftar Mahasiswa</h3>

  <a href="tambah.php">Tambah Data Mahasiswa</a>
  <br>
  <br>

  <form action="" method="POST">
    <input type="text" name="keyword" size="50" placeholder="Masukkan Keyword Di Pencarian..." autocomplete="off" autofocus class="keyword">
    <button type="submit" name="cari" class="tombol-cari">Cari!</button>
  </form>

  <br>

  <button><a href="logout.php">Logout</a></button>


  <br>

  <div class="container">

    <table border="1" cellspacing="0" cellpadding="10">
      <tr>
        <th>#</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>aksi</th>
      </tr>

      <?php if (empty($mahasiswa)) : ?>
        <tr>
          <td colspan="4">
            <p><i><b>Data Mahasiswa Tidak Ditemukan</b></i></p>
          </td>
        </tr>
      <?php endif; ?>

      <?php $i = 1;
      foreach ($mahasiswa as $m) : ?>
        <tr>
          <td><?= $i++; ?></td>
          <td><img src="img/<?= $m['gambar']; ?>" width="60"></td>
          <td><?= $m['nama']; ?></td>
          <td>
            <a href="detail.php?id=<?= $m['id']; ?>">Lihat Detil</a>
          </td>
        </tr>
      <?php endforeach; ?>

    </table>
  </div>
  <script src="js/script.js"></script>

</body>

</html>