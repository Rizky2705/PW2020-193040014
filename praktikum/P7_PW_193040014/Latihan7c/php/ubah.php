<?php
session_reset();
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

$id = $_GET['Nomor'];
$musik = query("SELECT * FROM tubess_193040014 WHERE Nomor = $id")[0];

if (isset($_POST['ubah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
alert ('Data Berhasil diubah!');
document.location.href = 'admin.php';
</script>";
  } else {
    echo "<script>
    alert ('Data Gagal diubah!');
    document.location.href = 'admin.php';
    </script>";
  }
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>193040014 form ubah data mahasiswa</title>
</head>

<body>
  <h3>Form Tambah Data Mahasiswa</h3>
  <form action="" method="POST">
    <input type="hidden" name="id" id="id" value="<?= $musik['Nomor']; ?>">

    <ul>
      <li>
        <label for="gambar">Gambar :</label>
        <input type="text" name="gambar" id="Gambar" required value="<?= $musik['Gambar']; ?>"><br><br>
      </li>
      <li>
        <label for="gambar">Nama alat musik :</label>
        <input type="text" name="Nama" id="Nama_alat_musik" required value="<?= $musik['Nama_alat_musik']; ?>><br><br>
    </li>
    <li>
      <label for=" gambar">Asal alat musik :</label>
        <input type="text" name="asal" id="Asal_daerah" required value="<?= $musik['Asal_daerah']; ?>><br><br>
    </li>
    <li>
      <label for=" gambar">Cara memainkan :</label>
        <input type="text" name="cara_main" id="Cara_main" required value="<?= $musik['Cara_main']; ?>><br><br>
    </li>
    <li>
      <label for=" gambar">Bahan pembuatan :</label>
        <input type="text" name="bahan" id="Bahan_pembuatan" required value="<?= $musik['Bahan_pembuatan']; ?>><br><br>
    </li>
    <br>
    <button type=" submit" name="ubah">Ubah Data!</button>
        <button type="submit">
          <a href="index.php" style="text-decoration: none; color:black">Kembali</a>
        </button>

    </ul>
  </form>

</body>

</html>