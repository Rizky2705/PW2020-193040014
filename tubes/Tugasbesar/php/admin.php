<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}

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
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <style>
    table {
      margin: 50px 15px 50px 15px;
    }

    img {
      width: 140px;
      height: 240px;
    }
  </style>

  <title>193040014</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Kyzan27</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active" href="logout.php">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link active" href="tambah.php">Tambah data</a>
        <form class=" form-inline" method="GET">
          <input class="form-control mr-sm-2" type="text" name="keyword" autofocus placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="cari">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <table border="1" cellpadding="13" cellspacing="0">

    <tr align="center">
      <th>No</th>
      <th colspan="2">Opsi</th>
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
            <a href="ubah.php?Nomor=<?= $musik['Nomor']; ?>"><button>Ubah</button></a>
          </td>
          <td>
            <a href="hapus.php?Nomor=<? $musik['Nomor']; ?> onlick " return confirm('Hapus Data??')"><button>Hapus</button></a>
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
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>