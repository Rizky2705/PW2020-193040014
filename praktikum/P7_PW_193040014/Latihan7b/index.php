<?php
// menghubungkan dengan file php lainnya
require 'php/functions.php';

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $alat = query("SELECT * FROM tubes_193040014 WHERE
            Nama_alat_musik LIKE '%$keyword'");
} else {
  $alat = query("SELECT * FROM tubes_193040014");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>193040014</title>
</head>

<body background="assets/img/bg.jpg">
  <a href="php/login.php">
    <button type="">Masuk ke halaman admin</button>
  </a>

  <h3>Selamat Datang ke Website Alat Musik Tradisional</h3>

  <div class="container">
    <table>
      <button class="button button2">
        <form action="" method="GET">
          <input type="text" name="keyword" autofocus placeholder="Search">
          <button type="submit" name="cari">Cari!!</button>
        </form>
      </button>
      <?php if (empty($alat)) : ?>
        <tr>
          <td colspan="7">
            <h1>Data tidak ditemukan</h1>
          </td>
        </tr>
      <?php else : ?>
        <?php foreach ($alat as $musik) : ?>
          <tr>
            <td>
              <a href="php/detail.php?Nomor=<?= $musik['Nomor'] ?>">
                <?= $musik['Nama_alat_musik'] ?>
              </a>
            </td>
          </tr>

        <?php endforeach; ?>
      <?php endif; ?>
    </table>
  </div>
</body>

</html>