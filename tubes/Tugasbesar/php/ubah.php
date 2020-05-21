<?php
session_start();

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
  <title>193040014 form ubah data Alat Musik</title>
  <style>
    h3 {
      font-family: algerian;
    }

    .container {
      margin-top: 20px;
      width: auto;
      height: 40%;
    }

    .container table {

      border: 2px solid darkgoldenrod;

    }

    tr,
    td {
      border-bottom: 3px solid black;
    }
  </style>
</head>

<body>
  <h3>Form Tambah Data Alat Musik</h3>


  <div class="container">
    <form action="" method="POST">
      <input type="hidden" name="id" id="id" value="<?= $musik['Nomor']; ?>">

      <table>

        <tr>
          <td><label for="gambar">Gambar</label></td>
          <td>:</td>
          <td><input type="text" name="gambar" id="Gambar" required value="<?= $musik['Gambar']; ?>"><br><br></td>
        </tr>
        <tr>
          <td><label for="gambar">Nama alat musik</label></td>
          <td>:</td>
          <td><input type="text" name="Nama" id="Nama_alat_musik" required value="<?= $musik['Nama_alat_musik']; ?>"><br><br></td>
        </tr>
        <tr>
          <td><label for=" gambar">Asal alat musik</label></td>
          <td>:</td>
          <td><input type="text" name="asal" id="Asal_daerah" required value="<?= $musik['Asal_daerah']; ?>"><br><br></td>
        </tr>
        <tr>
          <td><label for=" gambar">Cara memainkan</label></td>
          <td>:</td>
          <td><input type="text" name="cara_main" id="Cara_main" required value="<?= $musik['Cara_main']; ?>"><br><br></td>
        </tr>
        <tr>
          <td><label for=" gambar">Bahan pembuatan</label></td>
          <td>:</td>
          <td><input type="text" name="bahan" id="Bahan_pembuatan" required value="<?= $musik['Bahan_pembuatan']; ?>"><br><br></td>
        </tr>
        <tr>
          <td align="center" colspan="3"><button type=" submit" name="ubah">Ubah Data!</button></td>
        </tr>
        <tr>
          <td align="center" colspan="3"><button type="submit">
              <a href="index.php" style="text-decoration: none; color:black">Kembali</a>
            </button></td>
        </tr>
      </table>
    </form>
  </div>
</body>

</html>